<?php

namespace Webkul\Marketplace\Http\Controllers\Shop;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\Facades\Mail;
use Illuminate\View\View;
use Webkul\Marketplace\Mail\AdminReportSellerNotification;
use Webkul\Marketplace\Mail\ContactSellerNotification;
use Webkul\Marketplace\Mail\ReportSellerNotification;
use Webkul\Marketplace\Repositories\FlagReasonRepository;
use Webkul\Marketplace\Repositories\OrderRepository;
use Webkul\Marketplace\Repositories\ProductRepository;
use Webkul\Marketplace\Repositories\SellerFlagRepository;
use Webkul\Marketplace\Repositories\SellerRepository;
use Webkul\Shop\Http\Resources\ProductResource;

class SellerController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(
        protected SellerRepository $sellerRepository,
        protected FlagReasonRepository $flagReasonRepository,
        protected OrderRepository $orderRepository,
        protected SellerFlagRepository $sellerFlagRepository,
        protected ProductRepository $productRepository
    ) {}

    /**
     * Display the specified resource.
     */
    public function show(string $url): View|RedirectResponse
    {
        $seller = $this->sellerRepository->withCount('flags')->findByUrlOrFail($url);

        marketplace_visitor()->setSeller($seller)->visit();

        if (! $seller->is_approved) {
            return back()->withWarning(trans('marketplace::app.shop.sellers.profile.not-approved'));
        }

        return view('marketplace::shop.sellers.profile')
            ->with([
                'seller'      => $seller,
                'flagReasons' => $this->flagReasonRepository->sellerType()->get(),
            ]);
    }

    /**
     * Send query email to seller
     */
    public function contact(Request $request): JsonResponse
    {
        $data = $request->validate([
            'name'     => ['required'],
            'email'    => ['required', 'email'],
            'subject'  => ['required'],
            'query'    => ['required'],
            'shop_url' => ['required'],
        ]);

        $seller = $this->sellerRepository->findByUrlOrFail($data['shop_url']);

        try {
            Mail::queue(new ContactSellerNotification($seller, $data));
        } catch (\Exception $e) {
        }

        return new JsonResponse([
            'message' => trans('marketplace::app.shop.sellers.profile.contact-form.create-success'),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function flag(Request $request): JsonResponse
    {
        $data = $request->validate([
            'reason'   => ['required'],
            'shop_url' => ['required'],
        ]);

        if (! auth()->guard('customer')->check()) {
            return new JsonResponse([
                'type'    => 'warning',
                'message' => trans('marketplace::app.shop.sellers.profile.report-form.guest-alert'),
            ]);
        }

        $customer = auth()->guard('customer')->user();

        $seller = $this->sellerRepository->findByUrlOrFail($data['shop_url']);

        $alreadyReported = $this->sellerFlagRepository->findOneWhere([
            'marketplace_seller_id' => $seller->id,
            'customer_id'           => $customer->id,
        ]);

        if ($alreadyReported) {
            return new JsonResponse([
                'type'    => 'warning',
                'message' => trans('marketplace::app.shop.sellers.profile.report-form.already-reported'),
            ]);
        }

        if (! $this->orderRepository->isCustomerOrderedFromSeller($customer, $seller)) {
            return new JsonResponse([
                'type'    => 'warning',
                'message' => trans('marketplace::app.shop.sellers.profile.report-form.not-allowed'),
            ]);
        }

        Event::dispatch('shop.marketplace.seller_flag.create.before');

        $data = array_merge($data, [
            'name'                  => $customer->name,
            'email'                 => $customer->email,
            'customer_id'           => $customer->id,
            'marketplace_seller_id' => $seller->id,
        ]);

        $sellerFlag = $this->sellerFlagRepository->create($data);

        Event::dispatch('shop.marketplace.seller_flag.create.after', $sellerFlag);

        try {
            Mail::queue(new ReportSellerNotification($seller, $data));

            Mail::to(core()->getAdminEmailDetails()['email'])
                ->send(new AdminReportSellerNotification($seller, $data));
        } catch (\Exception $e) {
        }

        return new JsonResponse([
            'type'    => 'success',
            'message' => trans('marketplace::app.shop.sellers.profile.report-form.create-success'),
        ]);
    }

    /**
     * Method to populate the seller product page which will be populated.
     */
    public function products(Request $request, string $url): JsonResource
    {
        $seller = $this->sellerRepository->findByUrlOrFail($url);

        $searchEngine = 'database';

        if (
            core()->getConfigData('catalog.products.search.engine') == 'elastic'
            && core()->getConfigData('catalog.products.search.storefront_mode') == 'elastic'
        ) {
            $searchEngine = 'elastic';
        }

        $products = $this->productRepository
            ->setSearchEngine($searchEngine)
            ->getAll(array_merge($request->query(), [
                'channel_id'           => core()->getCurrentChannel()->id,
                'status'               => 1,
                'visible_individually' => 1,
                'seller_id'            => $seller->id,
            ]));

        return ProductResource::collection($products);
    }
}

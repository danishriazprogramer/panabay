<?php

namespace Webkul\Marketplace\Http\Controllers\Seller\Products;

use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Webkul\Marketplace\Http\Controllers\Seller\Controller;
use Webkul\Marketplace\Http\Requests\ProductFromRequest;
use Webkul\Marketplace\Repositories\ProductDownloadableLinkRepository;
use Webkul\Marketplace\Repositories\ProductDownloadableSampleRepository;
use Webkul\Marketplace\Repositories\ProductRepository;
use Webkul\Marketplace\Repositories\SellerRepository;
use Webkul\Product\Repositories\ProductRepository as BaseProductRepository;

class AssignProductController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(
        protected BaseProductRepository $baseProductRepository,
        protected ProductDownloadableLinkRepository $productDownloadableLinkRepository,
        protected ProductDownloadableSampleRepository $productDownloadableSampleRepository,
        protected ProductRepository $productRepository,
        protected SellerRepository $sellerRepository
    ) {}

    /**
     * Show the form for creating a new resource.
     */
    public function create(int $id): View|RedirectResponse
    {
        if (! (bool) core()->getConfigData('marketplace.settings.product.seller_can_assign')) {
            return back()->withError(trans('marketplace::app.seller.products.assign.not-allowed'));
        }

        if ($this->productRepository->getMarketplaceProductByProduct($id, seller()->user())) {
            return back()->withError(trans('marketplace::app.seller.products.assign.already-selling'));
        }

        $baseProduct = $this->baseProductRepository->findOrFail($id);

        if (! $this->sellerRepository->getAllowedProducts()->has($baseProduct->type)) {
            return back()->withError(trans('marketplace::app.seller.products.assign.product-not-allowed', [
                'type' => trans(config('product_types')[$baseProduct->type]['name']),
            ]));
        }

        return view('marketplace::seller.products.assign.create')
            ->with('baseProduct', $baseProduct);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductFromRequest $request, int $id): RedirectResponse
    {
        $this->productRepository->createAssign(array_merge($request->all(), [
            'product_id'            => $id,
            'marketplace_seller_id' => seller()->id(),
        ]));

        return to_route('seller.products.index')
            ->withSuccess(trans('marketplace::app.seller.products.assign.create-success'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function edit(int $id): View
    {
        $product = $this->productRepository->findOrFail($id);

        return view('marketplace::seller.products.assign.edit')
            ->with('product', $product);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProductFromRequest $request, int $id): RedirectResponse
    {
        $this->productRepository->updateAssign($request->all(), $id);

        return to_route('seller.products.index')
            ->withSuccess(trans('marketplace::app.seller.products.assign.update-success'));
    }

    /**
     * Uploads downloadable file
     */
    public function uploadLink(Request $request, int $id): JsonResponse
    {
        return new JsonResponse(
            $this->productDownloadableLinkRepository->upload($request->all(), $id)
        );
    }

    /**
     * Uploads downloadable sample file
     */
    public function uploadSample(Request $request, int $id): JsonResponse
    {
        return new JsonResponse(
            $this->productDownloadableSampleRepository->upload($request->all(), $id)
        );
    }
}

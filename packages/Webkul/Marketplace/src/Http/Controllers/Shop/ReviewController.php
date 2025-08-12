<?php

namespace Webkul\Marketplace\Http\Controllers\Shop;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Event;
use Webkul\Marketplace\Enums\Review;
use Webkul\Marketplace\Repositories\ReviewRepository;
use Webkul\Marketplace\Repositories\SellerRepository;

class ReviewController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(
        protected ReviewRepository $reviewRepository,
        protected SellerRepository $sellerRepository
    ) {}

    /**
     * Display the specified resource.
     *
     * @return mixed
     */
    public function index(string $url)
    {
        $seller = $this->sellerRepository->findByUrlOrFail($url);

        $reviews = $this->reviewRepository
            ->with('customer')
            ->where('marketplace_seller_id', $seller->id)
            ->paginate(5);

        return view('marketplace::shop.sellers.reviews')
            ->with([
                'seller'  => $seller,
                'reviews' => $reviews,
            ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): JsonResponse
    {
        $request->validate([
            'rating'   => ['required'],
            'title'    => ['required'],
            'comment'  => ['required'],
            'shop_url' => ['required'],
        ]);

        if (! auth()->guard('customer')->check()) {
            return new JsonResponse([
                'type'    => 'warning',
                'message' => trans('marketplace::app.shop.sellers.profile.reviews.guest-alert'),
            ]);
        }

        $seller = $this->sellerRepository->findByUrlOrFail($request->input('shop_url'));

        Event::dispatch('marketplace.customer.review.create.before', $seller);

        $isAlreadyReviewed = $this->reviewRepository->findOneWhere([
            'marketplace_seller_id' => $seller->id,
            'customer_id'           => auth()->guard('customer')->user()->id,
        ]);

        if ($isAlreadyReviewed) {
            return new JsonResponse([
                'type'    => 'warning',
                'message' => trans('marketplace::app.shop.sellers.profile.reviews.already-reviewed'),
            ]);
        }

        $review = $this->reviewRepository->create(array_merge($request->only([
            'rating',
            'title',
            'comment',
        ]), [
            'status'                => Review::STATUS_PENDING->value,
            'marketplace_seller_id' => $seller->id,
            'customer_id'           => auth()->guard('customer')->user()->id,
        ]));

        Event::dispatch('marketplace.customer.review.create.after', $review);

        return new JsonResponse([
            'type'    => 'success',
            'message' => trans('marketplace::app.shop.sellers.profile.reviews.create-success'),
        ]);
    }
}

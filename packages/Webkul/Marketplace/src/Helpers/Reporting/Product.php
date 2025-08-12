<?php

namespace Webkul\Marketplace\Helpers\Reporting;

use Illuminate\Support\Facades\DB;
use Webkul\Admin\Helpers\Reporting\AbstractReporting;
use Webkul\Customer\Repositories\WishlistRepository;
use Webkul\Marketing\Repositories\SearchTermRepository;
use Webkul\Marketplace\Repositories\OrderItemRepository;
use Webkul\Marketplace\Repositories\ProductRepository;
use Webkul\Marketplace\Repositories\ProductReviewRepository;

class Product extends AbstractReporting
{
    /**
     * Create a helper instance.
     *
     * @return void
     */
    public function __construct(
        protected ProductRepository $productRepository,
        protected ProductReviewRepository $productReviewRepository,
        protected OrderItemRepository $orderItemRepository,
        protected WishlistRepository $wishlistRepository,
        protected SearchTermRepository $searchTermRepository
    ) {
        parent::__construct();
    }

    /**
     * Retrieves total sold quantities and their progress.
     *
     * @return array
     */
    public function getTotalSoldQuantitiesProgress($seller)
    {
        return [
            'previous' => $previous = $this->getTotalSoldQuantities($seller, $this->lastStartDate, $this->lastEndDate),
            'current'  => $current = $this->getTotalSoldQuantities($seller, $this->startDate, $this->endDate),
            'progress' => $this->getPercentageChange($previous, $current),
        ];
    }

    /**
     * Returns previous sold quantities over time
     *
     * @param  object  $seller
     * @param  string  $period
     * @param  bool  $includeEmpty
     */
    public function getPreviousTotalSoldQuantitiesOverTime($seller, $period = 'auto', $includeEmpty = true): array
    {
        return $this->getTotalSoldQuantitiesOverTime($seller, $this->lastStartDate, $this->lastEndDate, $period);
    }

    /**
     * Returns current sold quantities over time
     *
     * @param  object  $seller
     * @param  string  $period
     * @param  bool  $includeEmpty
     */
    public function getCurrentTotalSoldQuantitiesOverTime($seller, $period = 'auto', $includeEmpty = true): array
    {
        return $this->getTotalSoldQuantitiesOverTime($seller, $this->startDate, $this->endDate, $period);
    }

    /**
     * Returns sold quantities over time
     *
     * @param  object  $seller
     * @param  \Carbon\Carbon  $startDate
     * @param  \Carbon\Carbon  $endDate
     * @param  string  $period
     */
    public function getTotalSoldQuantitiesOverTime($seller, $startDate, $endDate, $period = 'auto'): array
    {
        $config = $this->getTimeInterval($startDate, $endDate, $period);

        $groupColumn = str_replace('created_at', DB::getTablePrefix().'order_items.created_at', $config['group_column']);

        $results = $this->orderItemRepository
            ->resetModel()
            ->leftJoin('marketplace_orders', 'marketplace_order_items.marketplace_order_id', '=', 'marketplace_orders.id')
            ->leftJoin('orders', 'marketplace_orders.order_id', '=', 'orders.id')
            ->leftJoin('order_items', 'marketplace_order_items.order_item_id', '=', 'order_items.id')
            ->select(
                DB::raw("$groupColumn AS date"),
                DB::raw('COUNT(*) AS total')
            )
            ->whereIn('channel_id', $this->channelIds)
            ->where('marketplace_seller_id', $seller->id)
            ->whereBetween('order_items.created_at', [$startDate, $endDate])
            ->groupBy('date')
            ->get();

        $stats = [];

        foreach ($config['intervals'] as $interval) {
            $total = $results->where('date', $interval['filter'])->first();

            $stats[] = [
                'label' => $interval['start'],
                'total' => $total?->total ?? 0,
            ];
        }

        return $stats;
    }

    /**
     * Retrieves total sold quantities.
     *
     * @param  \Webkul\Marketplace\Contracts\Seller  $seller
     * @param  \Carbon\Carbon  $startDate
     * @param  \Carbon\Carbon  $endDate
     */
    public function getTotalSoldQuantities($seller, $startDate, $endDate): int
    {
        $tablePrefix = DB::getTablePrefix();

        return $this->orderItemRepository
            ->resetModel()
            ->selectRaw('SUM('.$tablePrefix.'order_items.qty_invoiced - '.$tablePrefix.'order_items.qty_refunded) as total_quantity')
            ->leftJoin('marketplace_orders', 'marketplace_order_items.marketplace_order_id', '=', 'marketplace_orders.id')
            ->leftJoin('orders', 'marketplace_orders.order_id', '=', 'orders.id')
            ->leftJoin('order_items', 'marketplace_order_items.order_item_id', '=', 'order_items.id')
            ->where('marketplace_orders.marketplace_seller_id', $seller->id)
            ->whereIn('orders.channel_id', $this->channelIds)
            ->whereBetween('order_items.created_at', [$startDate, $endDate])
            ->value('total_quantity') ?? 0;
    }

    /**
     * Retrieves total products added to wishlist and their progress.
     *
     * @param  \Webkul\Marketplace\Contracts\Seller  $seller
     * @return array
     */
    public function getTotalProductsAddedToWishlistProgress($seller)
    {
        return [
            'previous' => $previous = $this->getTotalProductsAddedToWishlist($seller, $this->lastStartDate, $this->lastEndDate),
            'current'  => $current = $this->getTotalProductsAddedToWishlist($seller, $this->startDate, $this->endDate),
            'progress' => $this->getPercentageChange($previous, $current),
        ];
    }

    /**
     * Retrieves total reviews and their progress.
     *
     * @param  \Webkul\Marketplace\Contracts\Seller  $seller
     */
    public function getTotalReviewsProgress($seller): array
    {
        return [
            'previous' => $previous = $this->getTotalReviews($seller, $this->lastStartDate, $this->lastEndDate),
            'current'  => $current = $this->getTotalReviews($seller, $this->startDate, $this->endDate),
            'progress' => $this->getPercentageChange($previous, $current),
        ];
    }

    /**
     * Retrieves total reviews by date
     *
     * @param  \Webkul\Marketplace\Contracts\Seller  $seller
     * @param  \Carbon\Carbon  $startDate
     * @param  \Carbon\Carbon  $endDate
     */
    public function getTotalReviews($seller, $startDate, $endDate): int
    {
        return $this->productReviewRepository
            ->resetModel()
            ->leftJoin('product_reviews', 'product_reviews.id', '=', 'marketplace_product_reviews.product_review_id')
            ->leftJoin('product_channels', 'product_reviews.product_id', '=', 'product_channels.product_id')
            ->where('status', 'approved')
            ->where('marketplace_seller_id', $seller->id)
            ->whereIn('channel_id', $this->channelIds)
            ->whereBetween('created_at', [$startDate, $endDate])
            ->count();
    }

    /**
     * Returns previous products added to wishlist over time
     *
     * @param  \Webkul\Marketplace\Contracts\Seller  $seller
     * @param  string  $period
     * @param  bool  $includeEmpty
     */
    public function getPreviousTotalProductsAddedToWishlistOverTime($seller, $period = 'auto', $includeEmpty = true): array
    {
        return $this->getTotalProductsAddedToWishlistOverTime($seller, $this->lastStartDate, $this->lastEndDate, $period);
    }

    /**
     * Returns current products added to wishlist over time
     *
     * @param  \Webkul\Marketplace\Contracts\Seller  $seller
     * @param  string  $period
     * @param  bool  $includeEmpty
     */
    public function getCurrentTotalProductsAddedToWishlistOverTime($seller, $period = 'auto', $includeEmpty = true): array
    {
        return $this->getTotalProductsAddedToWishlistOverTime($seller, $this->startDate, $this->endDate, $period);
    }

    /**
     * Retrieves total products added to wishlist.
     *
     * @param  \Webkul\Marketplace\Contracts\Seller  $seller
     * @param  \Carbon\Carbon  $startDate
     * @param  \Carbon\Carbon  $endDate
     */
    public function getTotalProductsAddedToWishlist($seller, $startDate, $endDate): int
    {
        return $this->wishlistRepository
            ->resetModel()
            ->leftJoin('marketplace_products', 'marketplace_products.product_id', '=', 'wishlist_items.product_id')
            ->where('is_owner', 1)
            ->where('marketplace_seller_id', $seller->id)
            ->whereIn('channel_id', $this->channelIds)
            ->whereBetween('wishlist_items.created_at', [$startDate, $endDate])
            ->selectRaw('COUNT(DISTINCT '.DB::getTablePrefix().'wishlist_items.product_id) as total_products')
            ->value('total_products');
    }

    /**
     * Returns products added to wishlist over time
     *
     * @param  \Webkul\Marketplace\Contracts\Seller  $seller
     * @param  \Carbon\Carbon  $startDate
     * @param  \Carbon\Carbon  $endDate
     * @param  string  $period
     */
    public function getTotalProductsAddedToWishlistOverTime($seller, $startDate, $endDate, $period = 'auto'): array
    {
        $config = $this->getTimeInterval($startDate, $endDate, $period);

        $tablePrefix = DB::getTablePrefix();

        $groupColumn = str_replace('(', '('.$tablePrefix.'wishlist_items.', $config['group_column']);

        $results = $this->wishlistRepository
            ->resetModel()
            ->select(
                DB::raw("$groupColumn AS date"),
                DB::raw('COUNT(DISTINCT '.$tablePrefix.'wishlist_items.product_id) AS total')
            )
            ->leftJoin('marketplace_products', 'marketplace_products.product_id', '=', 'wishlist_items.product_id')
            ->where('is_owner', 1)
            ->where('marketplace_seller_id', $seller->id)
            ->whereIn('channel_id', $this->channelIds)
            ->whereBetween('wishlist_items.created_at', [$startDate, $endDate])
            ->groupBy('date')
            ->get();

        $stats = [];

        foreach ($config['intervals'] as $interval) {
            $total = $results->where('date', $interval['filter'])->first();

            $stats[] = [
                'label' => $interval['start'],
                'total' => $total?->total ?? 0,
            ];
        }

        return $stats;
    }

    /**
     * Gets stock threshold.
     *
     * @param  \Webkul\Marketplace\Contracts\Seller  $seller
     * @param  int  $limit
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function getStockThresholdProducts($seller, $limit = 5)
    {
        $products = $this->productRepository->resetModel()
            ->select(
                'marketplace_products.*',
                DB::raw('SUM('.DB::getTablePrefix().'product_inventories.qty) as total_quantity')
            )
            ->join('product_flat', 'product_flat.product_id', '=', 'marketplace_products.product_id')
            ->leftJoin('product_inventories', function ($join) use ($seller) {
                $join->on('product_inventories.product_id', '=', 'marketplace_products.product_id')
                    ->where('product_inventories.vendor_id', '=', $seller->id);
            })
            ->where('marketplace_products.marketplace_seller_id', $seller->id)
            ->where('product_flat.locale', app()->getLocale())
            ->whereIn('product_flat.type', ['simple', 'virtual'])
            ->groupBy('marketplace_products.id', 'product_flat.product_id')
            ->limit($limit)
            ->with([
                'images',
                'product.images',
            ])
            ->get();

        return $products->map(function ($product) {
            $baseProduct = $product->product;

            return [
                'id'             => $baseProduct->id,
                'name'           => $baseProduct->name,
                'sku'            => $baseProduct->sku,
                'product_number' => $baseProduct->product_number,
                'price'          => $product->is_owner ? $baseProduct->price : $product->price,
                'total_quantity' => $product->total_quantity,
                'images'         => $product->is_owner ? $baseProduct->images : $product->images,
            ];
        });
    }

    /**
     * Gets top-selling products by revenue.
     *
     * @param  \Webkul\Marketplace\Contracts\Seller  $seller
     * @param  int  $limit
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function getTopSellingProductsByRevenue($seller, $limit = 5)
    {
        $items = $this->orderItemRepository->getModel()
            ->with([
                'item' => [
                    'product' => [
                        'images',
                    ],
                ],
            ])
            ->join('order_items', 'order_items.id', 'marketplace_order_items.order_item_id')
            ->leftJoin('marketplace_orders', 'marketplace_order_items.marketplace_order_id', 'marketplace_orders.id')
            ->addSelect('*', DB::raw('SUM(base_total_invoiced - base_amount_refunded) as revenue'))
            ->whereNull('order_items.parent_id')
            ->where('marketplace_orders.marketplace_seller_id', $seller->id)
            ->whereBetween('order_items.created_at', [$this->startDate, $this->endDate])
            ->having(DB::raw('SUM(base_total_invoiced - base_amount_refunded)'), '>', 0)
            ->groupBy('order_items.product_id')
            ->orderBy('revenue', 'DESC')
            ->limit($limit)
            ->get();

        return $items->map(function ($item) {
            return [
                'id'                => $item->product_id,
                'name'              => $item->name,
                'sku'               => $item->sku,
                'product_number'    => $item->product_number,
                'price'             => $item->price,
                'formatted_price'   => core()->formatBasePrice($item->price),
                'revenue'           => $item->revenue,
                'formatted_revenue' => core()->formatBasePrice($item->revenue),
                'images'            => $item->product?->images,
            ];
        });
    }

    /**
     * Gets top-selling products by quantity.
     *
     * @param  \Webkul\Marketplace\Contracts\Seller  $seller
     * @param  int  $limit
     */
    public function getTopSellingProductsByQuantity($seller, $limit = null)
    {
        $tablePrefix = DB::getTablePrefix();

        $items = $this->orderItemRepository
            ->resetModel()
            ->with([
                'item.product',
                'item.product.attribute_family',
                'item.product.attribute_values',
                'item.product.images',
            ])
            ->leftJoin('marketplace_orders', 'marketplace_order_items.marketplace_order_id', '=', 'marketplace_orders.id')
            ->leftJoin('orders', 'marketplace_orders.order_id', '=', 'orders.id')
            ->leftJoin('order_items', 'marketplace_order_items.order_item_id', '=', 'order_items.id')
            ->addSelect('*', DB::raw('SUM('.$tablePrefix.'order_items.qty_invoiced - '.$tablePrefix.'order_items.qty_refunded) as total_qty_ordered'))
            ->whereNull('order_items.parent_id')
            ->whereIn('channel_id', $this->channelIds)
            ->where('marketplace_orders.marketplace_seller_id', $seller->id)
            ->whereBetween('order_items.created_at', [$this->startDate, $this->endDate])
            ->having(DB::raw('SUM('.$tablePrefix.'order_items.qty_invoiced - '.$tablePrefix.'order_items.qty_refunded)'), '>', 0)
            ->groupBy('order_items.product_id')
            ->orderBy('marketplace_orders.total_qty_ordered', 'DESC')
            ->limit($limit)
            ->get();

        $items = $items->map(function ($item) {
            return [
                'id'                => $item->product_id,
                'name'              => $item->name,
                'price'             => $item->price,
                'formatted_price'   => core()->formatBasePrice($item->price),
                'total_qty_ordered' => $item->total_qty_ordered,
                'images'            => $item->product?->images,
            ];
        });

        return $items;
    }

    /**
     * Gets products with most orders.
     *
     * @param  int  $limit
     */
    public function getProductsWithMostReviews($seller, $limit = null)
    {
        $products = $this->productReviewRepository
            ->resetModel()
            ->leftJoin('product_reviews', 'product_reviews.id', '=', 'marketplace_product_reviews.product_review_id')
            ->leftJoin('product_flat', 'product_reviews.product_id', '=', 'product_flat.product_id')
            ->leftJoin('product_channels as pc', 'product_reviews.product_id', '=', 'pc.product_id')
            ->addSelect(
                'product_reviews.product_id',
                'product_flat.name as product_name',
                DB::raw('COUNT('.DB::getTablePrefix().'product_reviews.id) as reviews')
            )
            ->whereIn('pc.channel_id', $this->channelIds)
            ->where('marketplace_seller_id', $seller->id)
            ->whereBetween('product_reviews.created_at', [$this->startDate, $this->endDate])
            ->where('product_flat.locale', core()->getCurrentLocale()->code)
            ->where('product_reviews.status', 'approved')
            ->groupBy('product_reviews.product_id')
            ->orderByDesc('reviews')
            ->limit($limit)
            ->get();

        return $products;
    }

    /**
     * Get top-selling categories by revenue.
     *
     * @param  \Webkul\Marketplace\Contracts\Seller  $seller
     * @param  int  $limit
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function getTopSellingCategoriesByRevenue($seller, $limit = 5)
    {
        $locale = core()->getCurrentLocale();

        $channel = core()->getRequestedChannel();

        $tablePrefix = DB::getTablePrefix();

        return $this->orderItemRepository->getModel()
            ->join('order_items', 'order_items.id', '=', 'marketplace_order_items.order_item_id')
            ->leftJoin('marketplace_orders', 'marketplace_order_items.marketplace_order_id', '=', 'marketplace_orders.id')
            ->leftJoin('product_categories', 'product_categories.product_id', '=', 'order_items.product_id')
            ->leftJoin('categories', 'categories.id', '=', 'product_categories.category_id')
            ->leftJoin('category_translations', function ($join) use ($locale) {
                $join->on('category_translations.category_id', '=', 'product_categories.category_id')
                    ->where('category_translations.locale', '=', $locale->code);
            })
            ->leftJoin('category_translations as parent_category', function ($join) use ($locale, $channel) {
                $join->on('parent_category.category_id', '=', 'categories.parent_id')
                    ->where('parent_category.id', '!=', $channel->root_category_id)
                    ->where('parent_category.locale', '=', $locale->code);
            })
            ->select(
                'category_translations.name as translation_name',
                DB::raw('IFNULL(CONCAT('.$tablePrefix.'parent_category.name, " > ", '.$tablePrefix.'category_translations.name), '.$tablePrefix.'category_translations.name) as hierarchy'),
                DB::raw('SUM('.$tablePrefix.'order_items.base_total_invoiced - '.$tablePrefix.'order_items.base_discount_refunded) as revenue')
            )
            ->where('product_categories.category_id', '!=', $channel->root_category_id)
            ->whereNull('order_items.parent_id')
            ->where('marketplace_orders.marketplace_seller_id', $seller->id)
            ->whereBetween('order_items.created_at', [$this->startDate, $this->endDate])
            ->groupBy('product_categories.category_id', 'category_translations.name', 'parent_category.name')
            ->orderBy('revenue', 'DESC')
            ->limit($limit)
            ->get();
    }
}

<?php

namespace Webkul\Marketplace\DataGrids\Seller;

use Illuminate\Database\Query\Builder;
use Illuminate\Support\Facades\DB;
use Webkul\DataGrid\DataGrid;
use Webkul\Marketplace\Enums\Product;

class ProductDataGrid extends DataGrid
{
    /**
     * Prepare query builder.
     */
    public function prepareQueryBuilder(): Builder
    {
        $tablePrefix = DB::getTablePrefix();

        $queryBuilder = DB::table('product_flat')
            ->join('marketplace_products', 'product_flat.product_id', '=', 'marketplace_products.product_id')
            ->leftJoin('marketplace_sellers', 'marketplace_products.marketplace_seller_id', '=', 'marketplace_sellers.id')
            ->leftJoin('product_images', 'product_flat.product_id', '=', 'product_images.product_id')
            ->leftJoin('marketplace_product_images', 'marketplace_products.id', '=', 'marketplace_product_images.marketplace_product_id')
            ->leftJoin('product_categories as pc', 'product_flat.product_id', '=', 'pc.product_id')
            ->leftJoin('category_translations as ct', function ($leftJoin) {
                $leftJoin->on('pc.category_id', '=', 'ct.category_id')
                    ->where('ct.locale', app()->getLocale());
            })
            ->leftJoinSub(
                DB::table('product_inventories')
                    ->select('product_id', 'vendor_id', DB::raw('SUM(qty) as total_qty'))
                    ->groupBy('product_id', 'vendor_id'),
                'inventory',
                function ($join) {
                    $join->on('inventory.product_id', '=', 'marketplace_products.product_id')
                        ->on('inventory.vendor_id', '=', 'marketplace_sellers.id');
                }
            )
            ->select(
                'marketplace_products.id',
                'marketplace_products.is_owner',
                'marketplace_products.is_approved',
                'product_flat.product_id',
                'product_flat.type',
                'product_flat.status',
                'product_flat.sku',
                'product_flat.name',
                'product_flat.product_number',
                'ct.name as category_name',

                DB::raw('(CASE WHEN '.$tablePrefix.'marketplace_products.is_owner = 1 THEN '.$tablePrefix.'product_images.path ELSE '.$tablePrefix.'marketplace_product_images.path END) AS base_image'),

                DB::raw('(CASE WHEN '.$tablePrefix.'marketplace_products.is_owner = 1 THEN COUNT(DISTINCT '.$tablePrefix.'product_images.id) ELSE COUNT(DISTINCT '.$tablePrefix.'marketplace_product_images.id) END) AS images_count'),

                DB::raw('(CASE WHEN '.$tablePrefix.'marketplace_products.is_owner = 1 THEN '.$tablePrefix.'product_flat.price ELSE '.$tablePrefix.'marketplace_products.price END) AS price'),

                DB::raw('COALESCE('.$tablePrefix.'inventory.total_qty, 0) as quantity')
            )
            ->groupBy('marketplace_products.id')
            ->where('product_flat.locale', app()->getLocale())
            ->where('marketplace_products.marketplace_seller_id', seller()->id())
            ->distinct();

        $this->addFilter('id', 'marketplace_products.id');
        $this->addFilter('is_approved', 'marketplace_products.is_approved');
        $this->addFilter('type', 'product_flat.type');
        $this->addFilter('name', 'product_flat.name');
        $this->addFilter('status', 'product_flat.status');
        $this->addFilter('price', DB::raw('(CASE WHEN marketplace_products.is_owner = 1 THEN product_flat.price ELSE marketplace_products.price END)'));

        return $queryBuilder;
    }

    /**
     * Prepare columns.
     */
    public function prepareColumns(): void
    {
        $this->addColumn([
            'index'      => 'name',
            'label'      => trans('marketplace::app.seller.products.index.datagrid.name'),
            'type'       => 'string',
            'filterable' => true,
            'searchable' => true,
            'sortable'   => true,
        ]);

        $this->addColumn([
            'index'      => 'sku',
            'label'      => trans('marketplace::app.seller.products.index.datagrid.sku'),
            'type'       => 'string',
            'filterable' => true,
            'searchable' => true,
            'sortable'   => true,
        ]);

        $this->addColumn([
            'index'      => 'product_number',
            'label'      => trans('marketplace::app.seller.products.index.datagrid.product-number'),
            'type'       => 'string',
            'filterable' => true,
            'searchable' => true,
            'sortable'   => true,
        ]);

        $this->addColumn([
            'index'      => 'base_image',
            'label'      => trans('marketplace::app.seller.products.index.datagrid.image'),
            'type'       => 'string',
            'filterable' => false,
            'searchable' => false,
            'sortable'   => false,
        ]);

        $this->addColumn([
            'index'      => 'price',
            'label'      => trans('marketplace::app.seller.products.index.datagrid.price'),
            'type'       => 'string',
            'filterable' => true,
            'sortable'   => true,
            'searchable' => false,
            'closure'    => function ($row) {
                return core()->formatBasePrice($row->price);
            },
        ]);

        $this->addColumn([
            'index'           => 'quantity',
            'label'           => trans('marketplace::app.seller.products.index.datagrid.stock'),
            'type'            => 'integer',
            'filterable'      => false,
            'filterable_type' => 'number',
            'sortable'        => true,
            'searchable'      => false,
        ]);

        $this->addColumn([
            'index'           => 'id',
            'label'           => trans('marketplace::app.seller.products.index.datagrid.id'),
            'type'            => 'integer',
            'filterable'      => true,
            'filterable_type' => 'number',
            'searchable'      => false,
            'sortable'        => true,
        ]);

        $this->addColumn([
            'index'              => 'status',
            'label'              => trans('marketplace::app.seller.products.index.datagrid.status'),
            'type'               => 'integer',
            'filterable'         => true,
            'filterable_type'    => 'dropdown',
            'filterable_options' => [
                [
                    'label' => trans('marketplace::app.seller.products.index.datagrid.active'),
                    'value' => Product::STATUS_ACTIVE->value(),
                ],
                [
                    'label' => trans('marketplace::app.seller.products.index.datagrid.disable'),
                    'value' => Product::STATUS_INACTIVE->value(),
                ],
            ],
            'searchable' => true,
            'sortable'   => true,
        ]);

        $this->addColumn([
            'index'              => 'is_approved',
            'label'              => trans('marketplace::app.seller.products.index.datagrid.is-approved'),
            'type'               => 'integer',
            'filterable'         => true,
            'filterable_type'    => 'dropdown',
            'filterable_options' => [
                [
                    'label' => trans('marketplace::app.seller.products.index.datagrid.approved'),
                    'value' => Product::APPROVED->value(),
                ],
                [
                    'label' => trans('marketplace::app.seller.products.index.datagrid.disapproved'),
                    'value' => Product::DISAPPROVED->value(),
                ],
            ],
            'searchable' => true,
            'sortable'   => true,
        ]);

        $this->addColumn([
            'index'              => 'type',
            'label'              => trans('marketplace::app.seller.products.index.datagrid.type'),
            'type'               => 'string',
            'filterable'         => true,
            'filterable_type'    => 'dropdown',
            'filterable_options' => collect(config('product_types'))
                ->map(fn ($type) => ['label' => trans($type['name']), 'value' => $type['key']])
                ->values()
                ->toArray(),
            'searchable' => true,
            'sortable'   => true,
        ]);

        $this->addColumn([
            'index'      => 'category_name',
            'label'      => trans('marketplace::app.seller.products.index.datagrid.category'),
            'type'       => 'string',
            'filterable' => false,
            'searchable' => false,
            'sortable'   => false,
        ]);
    }

    /**
     * Prepare actions.
     */
    public function prepareActions(): void
    {
        if (seller()->hasPermission('products.delete')) {
            $this->addAction([
                'method' => 'DELETE',
                'icon'   => 'mp-delete-icon',
                'title'  => trans('marketplace::app.seller.products.index.datagrid.delete'),
                'url'    => function ($row) {
                    return route('seller.products.delete', $row->id);
                },
            ]);
        }

        if (seller()->hasPermission('products.edit')) {
            $this->addAction([
                'method' => 'GET',
                'icon'   => 'icon-arrow-right',
                'title'  => trans('marketplace::app.seller.products.index.datagrid.edit'),
                'url'    => function ($row) {
                    return route('seller.products.edit', $row->product_id);
                },
            ]);
        }
    }

    /**
     * Prepare mass actions.
     */
    public function prepareMassActions(): void
    {
        if (seller()->hasPermission('products.delete')) {
            $this->addMassAction([
                'title'  => trans('marketplace::app.seller.products.index.datagrid.delete'),
                'url'    => route('seller.products.mass_delete'),
                'method' => 'POST',
            ]);
        }
    }
}

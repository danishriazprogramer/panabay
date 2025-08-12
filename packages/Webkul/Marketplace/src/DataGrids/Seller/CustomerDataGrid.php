<?php

namespace Webkul\Marketplace\DataGrids\Seller;

use Illuminate\Database\Query\Builder;
use Illuminate\Support\Facades\DB;
use Webkul\DataGrid\DataGrid;
use Webkul\Marketplace\Enums\Status;

class CustomerDataGrid extends DataGrid
{
    /**
     * Primary column.
     *
     * @var string
     */
    protected $primaryColumn = 'customer_id';

    /**
     * Prepare query builder.
     */
    public function prepareQueryBuilder(): Builder
    {
        $tablePrefix = DB::getTablePrefix();

        $queryBuilder = DB::table('customers')
            ->leftJoin('orders', function ($join) {
                $join->on('customers.id', '=', 'orders.customer_id');
            })
            ->leftJoin('marketplace_orders', 'marketplace_orders.order_id', '=', 'orders.id')
            ->groupBy('customers.id')
            ->leftJoin('customer_groups', 'customers.customer_group_id', '=', 'customer_groups.id')
            ->select(
                'customers.id as customer_id',
                'customers.email',
                'customers.gender',
                'customers.status',
                'customer_groups.name as group',
            )
            ->addSelect(
                DB::raw('CONCAT('.$tablePrefix.'customers.first_name, " ", '.$tablePrefix.'customers.last_name) as full_name'),
                DB::raw('SUM(CASE WHEN '.$tablePrefix.'marketplace_orders.status NOT IN ("canceled", "closed") THEN '.$tablePrefix.'marketplace_orders.grand_total_invoiced ELSE 0 END) as revenue'),
                DB::raw('COUNT(DISTINCT '.$tablePrefix.'orders.id) as order_count')
            )
            ->where('marketplace_orders.marketplace_seller_id', seller()->id());

        $this->addFilter('email', 'customers.email');
        $this->addFilter('full_name', DB::raw('CONCAT('.$tablePrefix.'customers.first_name, " ", '.$tablePrefix.'customers.last_name)'));
        $this->addFilter('group', 'customer_groups.name');
        $this->addFilter('status', 'customers.status');

        return $queryBuilder;
    }

    /**
     * Prepare columns.
     */
    public function prepareColumns(): void
    {
        $this->addColumn([
            'index'      => 'full_name',
            'label'      => trans('marketplace::app.seller.customers.index.datagrid.customer'),
            'type'       => 'string',
            'filterable' => true,
            'searchable' => true,
            'sortable'   => true,
        ]);

        $this->addColumn([
            'index'      => 'email',
            'label'      => trans('marketplace::app.seller.customers.index.datagrid.email'),
            'type'       => 'string',
            'filterable' => true,
            'searchable' => true,
            'sortable'   => true,
        ]);

        $this->addColumn([
            'index'      => 'gender',
            'label'      => trans('marketplace::app.seller.customers.index.datagrid.gender'),
            'type'       => 'string',
            'filterable' => false,
            'searchable' => false,
            'sortable'   => true,
        ]);

        $this->addColumn([
            'index'      => 'revenue',
            'label'      => trans('marketplace::app.seller.customers.index.datagrid.revenue'),
            'type'       => 'integer',
            'filterable' => false,
            'searchable' => false,
            'sortable'   => false,
        ]);

        $this->addColumn([
            'index'      => 'order_count',
            'label'      => trans('marketplace::app.seller.customers.index.datagrid.order-count'),
            'type'       => 'integer',
            'filterable' => false,
            'searchable' => false,
            'sortable'   => true,
        ]);

        $this->addColumn([
            'index'              => 'status',
            'label'              => trans('marketplace::app.seller.customers.index.datagrid.status'),
            'type'               => 'integer',
            'filterable'         => true,
            'filterable_type'    => 'dropdown',
            'filterable_options' => [
                [
                    'label' => trans('marketplace::app.seller.customers.index.datagrid.active'),
                    'value' => Status::ACTIVE->value,
                ],
                [
                    'label' => trans('marketplace::app.seller.customers.index.datagrid.inactive'),
                    'value' => Status::DISABLE->value,
                ],
            ],
            'searchable' => true,
            'sortable'   => true,
            'closure'    => function ($row) {
                if ($row->status == Status::ACTIVE->value) {
                    return '<span class="label-active">'.trans('marketplace::app.seller.customers.index.datagrid.active').'</span>';
                }

                return '<span class="label-info">'.trans('marketplace::app.seller.customers.index.datagrid.inactive').'</span>';
            },
        ]);

        $this->addColumn([
            'index'      => 'group',
            'label'      => trans('marketplace::app.seller.customers.index.datagrid.group'),
            'type'       => 'string',
            'filterable' => true,
            'searchable' => false,
            'sortable'   => false,
        ]);
    }
}

<?php

namespace Webkul\Marketplace\Http\Controllers\Seller\Orders;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Webkul\Marketplace\DataGrids\Seller\OrderDataGrid;
use Webkul\Marketplace\Http\Controllers\Seller\Controller;
use Webkul\Marketplace\Repositories\OrderRepository;

class OrderController extends Controller
{
    /**
     * Create a new controller instance.
     */
    public function __construct(protected OrderRepository $orderRepository) {}

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            return datagrid(OrderDataGrid::class)->process();
        }

        return view('marketplace::seller.orders.index');
    }

    /**
     * Show the view for the specified resource.
     *
     * @return Response
     */
    public function view(int $id)
    {
        $sellerOrder = $this->orderRepository->with('order')
            ->findOneWhere([
                'order_id'              => $id,
                'marketplace_seller_id' => seller()->id(),
            ]);

        abort_if(! $sellerOrder, 404);

        return view('marketplace::seller.orders.view', compact('sellerOrder'));
    }

    /**
     * Cancel action for the specified resource.
     *
     * @return Response
     */
    public function cancel(int $id)
    {
        if (! core()->getConfigData('marketplace.settings.seller.can_cancel_order')) {
            return back()->withError(trans('marketplace::app.seller.orders.view.permission-error'));
        }

        if ($this->orderRepository->sellerCancelOrder($id, seller()->user())) {
            return back()->withSuccess(trans('marketplace::app.seller.orders.view.cancel-success-msg'));
        }

        return back()->withError(trans('marketplace::app.seller.orders.view.cancel-error-msg'));
    }
}

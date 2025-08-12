<?php

namespace Webkul\Marketplace\Http\Controllers\Seller\Orders;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Event;
use Webkul\Marketplace\Http\Controllers\Seller\Controller;
use Webkul\Marketplace\Repositories\OrderRepository;
use Webkul\Sales\Repositories\OrderItemRepository as BaseOrderItemRepository;
use Webkul\Sales\Repositories\ShipmentRepository;

class ShipmentController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(
        protected BaseOrderItemRepository $baseOrderItemRepository,
        protected OrderRepository $orderRepository,
        protected ShipmentRepository $shipmentRepository
    ) {}

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request, int $orderId)
    {
        $sellerOrder = $this->orderRepository->findOneWhere([
            'order_id'              => $orderId,
            'marketplace_seller_id' => seller()->id(),
        ]);

        if (! $sellerOrder->canShip()) {
            return back()->withError(trans('marketplace::app.seller.orders.shipments.permission-error'));
        }

        $request->validate([
            'shipment.source'    => ['required'],
            'shipment.items'     => ['required', 'array'],
            'shipment.items.*'   => ['required', 'array'],
            'shipment.items.*.*' => ['required', 'numeric', 'min:0'],
        ]);

        $data = array_merge($request->input(), [
            'vendor_id' => $sellerOrder->marketplace_seller_id,
        ]);

        if (! $this->isInventoryValidate($data)) {
            return back()->withError(trans('marketplace::app.seller.orders.shipments.qty-error'));
        }

        Event::dispatch('marketplace.seller.account.orders.shipment.before', [$orderId, $sellerOrder]);

        $shipment = $this->shipmentRepository->create(array_merge($data, [
            'order_id' => $orderId,
        ]));

        Event::dispatch('marketplace.seller.account.orders.shipment.after', $shipment);

        return back()->withSuccess(trans('marketplace::app.seller.orders.shipments.shipment-success'));
    }

    /**
     * Checks if requested quantity available or not
     *
     * @param  array  $data
     * @return bool
     */
    public function isInventoryValidate(&$data)
    {
        if (! isset($data['shipment']['items'])) {
            return;
        }

        $valid = false;

        $inventorySourceId = $data['shipment']['source'];

        foreach ($data['shipment']['items'] as $itemId => $inventorySource) {
            $qty = $inventorySource[$inventorySourceId];

            if ((int) $qty) {
                $orderItem = $this->baseOrderItemRepository->find($itemId);

                if ($orderItem->qty_to_ship < $qty) {
                    return false;
                }

                if ($orderItem->getTypeInstance()->isComposite()) {
                    foreach ($orderItem->children as $child) {
                        if (! $child->qty_ordered) {
                            continue;
                        }

                        $finalQty = ($child->qty_ordered / $orderItem->qty_ordered) * $qty;

                        $availableQty = $child->product->inventories()
                            ->where('inventory_source_id', $inventorySourceId)
                            ->where('vendor_id', $data['vendor_id'])
                            ->sum('qty');

                        if ($child->qty_to_ship < $finalQty
                            || $availableQty < $finalQty
                        ) {
                            return false;
                        }
                    }
                } else {
                    $availableQty = $orderItem->product->inventories()
                        ->where('inventory_source_id', $inventorySourceId)
                        ->where('vendor_id', $data['vendor_id'])
                        ->sum('qty');

                    if ($orderItem->qty_to_ship < $qty
                        || $availableQty < $qty
                    ) {
                        return false;
                    }
                }

                $valid = true;
            } else {
                unset($data['shipment']['items'][$itemId]);
            }
        }

        return $valid;
    }
}

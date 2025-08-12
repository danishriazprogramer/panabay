@component('admin::emails.layout')
    @php
        $order = $sellerOrder->order;
    @endphp
    
    <div style="margin-bottom: 34px;">
        <span style="font-size: 22px;font-weight: 600;color: #121A26">
            @lang('marketplace::app.emails.seller.orders.canceled.title')
        </span> <br>

        <p style="font-size: 16px;color: #5E5E5E;line-height: 24px;">
            @lang('marketplace::app.emails.dear', ['customer_name' => $order->customer_full_name]),👋
        </p>

        <p style="font-size: 16px;color: #5E5E5E;line-height: 24px;">
            {!! __('marketplace::app.emails.seller.orders.canceled.greeting', [
                'order_id' => '<a href="' . route('shop.customers.account.orders.view', $order->id) . '" style="color: #2969FF;">#' . $order->increment_id . '</a>',
                'created_at' => core()->formatDate($order->created_at, 'Y-m-d H:i:s')
                ])
            !!}
        </p>
    </div>

    <div style="font-size: 20px;font-weight: 600;color: #121A26">
        @lang('marketplace::app.emails.seller.orders.canceled.summary')
    </div>

    <div style="display: flex;flex-direction: row;margin-top: 20px;justify-content: space-between;margin-bottom: 40px;">
        @if ($order->shipping_address)
            <div style="line-height: 25px;">
                <div style="font-size: 16px;font-weight: 600;color: #121A26;">
                    @lang('marketplace::app.emails.seller.orders.shipping-address')
                </div>

                <div style="font-size: 16px;font-weight: 400;color: #384860;margin-bottom: 40px;">
                    {{ $order->shipping_address->company_name ?? '' }}<br/>

                    {{ $order->shipping_address->name }}<br/>

                    {{ $order->shipping_address->address }}<br/>

                    {{ $order->shipping_address->postcode . " " . $order->shipping_address->city }}<br/>

                    {{ $order->shipping_address->state }}<br/>

                    ---<br/>

                    @lang('marketplace::app.emails.seller.orders.contact') : {{ $order->billing_address->phone }}
                </div>

                <div style="font-size: 16px;font-weight: 600;color: #121A26;">
                    @lang('marketplace::app.emails.seller.orders.shipping')
                </div>

                <div style="font-size: 16px;font-weight: 400;color: #384860;">
                    {{ $order->shipping_title }}
                </div>
            </div>
        @endif

        @if ($order->billing_address)
            <div style="line-height: 25px;">
                <div style="font-size: 16px;font-weight: 600;color: #121A26;">
                    @lang('marketplace::app.emails.seller.orders.billing-address')
                </div>

                <div style="font-size: 16px;font-weight: 400;color: #384860;margin-bottom: 40px;">
                    {{ $order->billing_address->company_name ?? '' }}<br/>

                    {{ $order->billing_address->name }}<br/>

                    {{ $order->billing_address->address }}<br/>

                    {{ $order->billing_address->postcode . " " . $order->billing_address->city }}<br/>

                    {{ $order->billing_address->state }}<br/>

                    ---<br/>

                    @lang('marketplace::app.emails.seller.orders.contact') : {{ $order->billing_address->phone }}
                </div>

                <div style="font-size: 16px;font-weight: 600;color: #121A26;">
                    @lang('marketplace::app.emails.seller.orders.payment')
                </div>

                <div style="font-size: 16px;font-weight: 400;color: #384860;">
                    {{ core()->getConfigData('sales.payment_methods.' . $order->payment->method . '.title') }}
                </div>

                @php $additionalDetails = \Webkul\Payment\Payment::getAdditionalDetails($order->payment->method); @endphp

                @if (! empty($additionalDetails))
                    <div style="font-size: 16px; color: #384860;">
                        <div>{{ $additionalDetails['title'] }}</div>
                        <div>{{ $additionalDetails['value'] }}</div>
                    </div>
                @endif
            </div>
        @endif
    </div>

    <div style="padding-bottom: 40px;border-bottom: 1px solid #CBD5E1;">
        <table style="overflow-x: auto; border-collapse: collapse;
        border-spacing: 0;width: 100%">
            <thead>
                <tr style="color: #121A26;border-top: 1px solid #CBD5E1;border-bottom: 1px solid #CBD5E1;">
                    @foreach (['sku', 'name', 'price', 'qty'] as $item)
                        <th style="text-align: left;padding: 15px">
                            @lang('marketplace::app.emails.seller.orders.' . $item)
                        </th>
                    @endforeach
                </tr>
            </thead>

            <tbody style="font-size: 16px;font-weight: 400;color: #384860;">
                @foreach ($sellerOrder->items as $orderItem)
                    @php
                        $item = $orderItem->item;
                    @endphp

                    <tr style="vertical-align: text-top;">
                        <td style="text-align: left;padding: 15px">
                            {{ $item->getTypeInstance()->getOrderedItem($item)->sku }}
                        </td>

                        <td style="text-align: left;padding: 15px">
                            {{ $item->name }}

                            @if (isset($orderItem->item->additional['attributes']))
                                <div>

                                    @foreach ($orderItem->item->additional['attributes'] as $attribute)
                                        <b>{{ $attribute['attribute_name'] }} : </b>{{ $attribute['option_label'] }}</br>
                                    @endforeach

                                </div>
                            @endif
                        </td>

                        <td style="text-align: left;padding: 15px">{{ core()->formatBasePrice($orderItem->item->base_price) }}
                        </td>

                        <td style="text-align: left;padding: 15px">
                            {{ $item->qty_canceled }}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div style="display: grid;justify-content: end;font-size: 16px;color: #384860;line-height: 30px;padding-top: 20px;padding-bottom: 20px;">
        <div style="display: grid;gap: 100px;grid-template-columns: repeat(2, minmax(0, 1fr));">
            <span>
                @lang('marketplace::app.emails.seller.orders.subtotal')
            </span>

            <span style="text-align: right;">
                {{ core()->formatBasePrice($sellerOrder->order->base_sub_total) }}
            </span>
        </div>

        @if ($sellerOrder->order->shipping_address)
            <div style="display: grid;gap: 100px;grid-template-columns: repeat(2, minmax(0, 1fr));">
                <span>
                    @lang('marketplace::app.emails.seller.orders.shipping-handling')
                </span>

                <span style="text-align: right;">
                    {{ core()->formatBasePrice($sellerOrder->order->base_shipping_amount) }}
                </span>
            </div>
        @endif

        @foreach (\Webkul\Tax\Facades\Tax::getTaxRatesWithAmount($sellerOrder->order, false) as $taxRate => $taxAmount )
            <div style="display: grid;gap: 100px;grid-template-columns: repeat(2, minmax(0, 1fr));">
                <span>
                    @lang('marketplace::app.emails.seller.orders.tax') {{ $taxRate }} %
                </span>

                <span style="text-align: right;">
                    {{ core()->formatBasePrice($taxAmount) }}
                </span>
            </div>
        @endforeach

        @if ($sellerOrder->order->discount_amount > 0)
            <div style="display: grid;gap: 100px;grid-template-columns: repeat(2, minmax(0, 1fr));">
                <span>
                    @lang('marketplace::app.emails.seller.orders.discount')
                </span>

                <span style="text-align: right;">
                    {{ core()->formatBasePrice($sellerOrder->order->base_discount_amount) }}
                </span>
            </div>
        @endif

        <div style="display: grid;gap: 100px;grid-template-columns: repeat(2, minmax(0, 1fr));font-weight: bold">
            <span>
                @lang('marketplace::app.emails.seller.orders.grand-total')
            </span>

            <span style="text-align: right;">
                {{ core()->formatBasePrice($sellerOrder->order->base_grand_total) }}
            </span>
        </div>
    </div>
@endcomponent

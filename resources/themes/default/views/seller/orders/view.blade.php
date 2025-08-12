<x-marketplace::seller.layouts>
    <!-- Page Title -->
    <x-slot:title>
        @lang('marketplace::app.seller.orders.view.title', ['order_id' => $sellerOrder->order_id])
    </x-slot>

    <!-- Breadcrumbs -->
    @section('breadcrumbs')
        <x-marketplace::seller.breadcrumbs name="seller_order_view"/>
    @endSection

    {!! view_render_event('bagisto.seller.orders.view.before', ['order' => $sellerOrder]) !!}

    <div class="flex items-center justify-between gap-4 max-xl:flex-wrap">
        <p class="text-2xl font-medium">
            @lang('marketplace::app.seller.orders.view.title', ['order_id' => $sellerOrder->order_id])
        </p>
        
        <div class="flex items-center gap-2.5">
            {!! view_render_event('bagisto.seller.orders.view.actions.before', ['order' => $sellerOrder]) !!}
            
            <!-- Cancel Button -->
            @if (
                core()->getConfigData('marketplace.settings.seller.can_cancel_order')
                && seller()->hasPermission('orders.cancel')
                && $sellerOrder->canCancel()
            )
                <div>
                    <form
                        ref="cancelOrderForm"
                        action="{{route('seller.orders.cancel', $sellerOrder->order_id)}}"
                    >
                        @csrf
                    </form>

                    <a
                        class="secondary-button px-5 py-2.5"
                        href="javascript:void(0);"
                        @click="$emitter.emit('open-confirm-modal', {
                            message: '@lang('marketplace::app.seller.orders.view.cancel-confirm-msg')',
                            agree: () => {
                                this.$refs['cancelOrderForm'].submit()
                            }
                        })"
                    >
                        @lang('marketplace::app.seller.orders.view.cancel-btn')
                    </a>
                </div>
            @endif

            <!-- Invoice Button -->
            @if (
                core()->getConfigData('marketplace.settings.seller.can_create_invoice')
                && seller()->hasPermission('orders.invoice')
                && $sellerOrder->canInvoice()
            )
                @include('marketplace::seller.orders.view.invoices.create')
            @endif

            <!-- Shipment Button -->
            @if (
                core()->getConfigData('marketplace.settings.seller.can_create_shipment')
                && seller()->hasPermission('orders.shipment')
                && $sellerOrder->canShip()
            )
                @include('marketplace::seller.orders.view.shipments.create')
            @endif

            {!! view_render_event('bagisto.seller.orders.view.actions.after', ['order' => $sellerOrder]) !!}
        </div>
    </div>

    <div class="mt-4 flex items-center gap-2.5 max-xl:flex-wrap">
        <p class="label-{{ $sellerOrder->status }} text-xs">
            @lang("marketplace::app.seller.orders.view.$sellerOrder->status")  
        </p>

        <span class="text-xs font-medium">
            @lang('marketplace::app.seller.orders.view.place-on', ['date' => core()->formatDate($sellerOrder->created_at, 'd M Y')]),
        </span>

        <span class="text-xs font-medium">
            @lang('marketplace::app.seller.orders.view.by-customer', ['name' => $sellerOrder->order->customer_first_name." ".$sellerOrder->order->customer_last_name])
        </span>
    </div>

    {!! view_render_event('bagisto.seller.orders.view.before', ['order' => $sellerOrder]) !!}
    <!-- Order view -->
    <div>
        <div class="max-sm:hidden">
            <!-- Order view tabs -->
            <x-shop::tabs class="mt-5 [&>*]:bg-[#FFFFFF]">
                <x-shop::tabs.item
                    class="!p-0"
                    :title="trans('marketplace::app.seller.orders.view.info')"
                    :is-selected="true"
                >
                    @include('marketplace::seller.orders.view.details')
                </x-shop::tabs.item>

                @if ($sellerOrder->invoices->count())
                    <x-shop::tabs.item 
                        class="mt-5 !p-0"
                        :title="trans('marketplace::app.seller.orders.view.invoices.title')"
                    >
                        @include('marketplace::seller.orders.view.invoices')
                    </x-shop::tabs.item>
                @endif

                @if ($sellerOrder->shipments->count())
                    <x-shop::tabs.item
                        class="mt-5 !p-0"
                        :title="trans('marketplace::app.seller.orders.view.shipments.title')"
                    >
                        @include('marketplace::seller.orders.view.shipments')
                    </x-shop::tabs.item>
                @endif

                @if ($sellerOrder->refunds->count())
                    <x-shop::tabs.item
                        class="mt-5 !p-0"
                        :title="trans('marketplace::app.seller.orders.view.refunds.title')"
                    >
                        @include('marketplace::seller.orders.view.refunds')
                    </x-shop::tabs.item>
                @endif
            </x-shop::tabs>
        </div>

        <div class="md:hidden">
            <!-- Order view accordion -->
            <x-shop::accordion :is-active="true">
                <x-slot:header class="!px-0">
                    <h2 class="text-2xl font-medium">
                        @lang('marketplace::app.seller.orders.view.info')
                    </h2>
                </x-slot:header>
        
                <x-slot:content class="!p-0">
                    @include('marketplace::seller.orders.view.details')
                </x-slot:content>
            </x-shop::accordion>

            @if ($sellerOrder->invoices->count())
                <x-shop::accordion :is-active="false">
                    <x-slot:header class="!px-0">
                        <h2 class="text-2xl font-medium">
                            @lang('marketplace::app.seller.orders.view.invoices.title')
                        </h2>
                    </x-slot:header>
            
                    <x-slot:content class="!p-0">
                        @include('marketplace::seller.orders.view.invoices')
                    </x-slot:content>
                </x-shop::accordion>
            @endif

            @if ($sellerOrder->shipments->count())
                <x-shop::accordion :is-active="false">
                    <x-slot:header class="!px-0">
                        <h2 class="text-2xl font-medium">
                            @lang('marketplace::app.seller.orders.view.shipments.title')
                        </h2>
                    </x-slot:header>
            
                    <x-slot:content class="!p-0">
                        @include('marketplace::seller.orders.view.shipments')
                    </x-slot:content>
                </x-shop::accordion>
            @endif

            @if ($sellerOrder->refunds->count())
                <x-shop::accordion :is-active="false">
                    <x-slot:header class="!px-0">
                        <h2 class="text-2xl font-medium">
                            @lang('marketplace::app.seller.orders.view.refunds.title')
                        </h2>
                    </x-slot:header>
            
                    <x-slot:content class="!p-0">
                        @include('marketplace::seller.orders.view.refunds')
                    </x-slot:content>
                </x-shop::accordion>
            @endif
        </div>

        <div class="mt-10 flex flex-wrap justify-between gap-x-16 gap-y-7 border-t pt-6">
            <!-- Biiling Address -->
            @if ($sellerOrder->order->billing_address)
                <div class="grid max-w-[200px] gap-4 max-868:w-full max-868:max-w-full max-md:max-w-[200px] max-sm:max-w-full">
                    <p class="text-base text-[#6E6E6E]">
                        @lang('shop::app.customers.account.orders.view.billing-address')
                    </p>

                    <div class="grid gap-2.5">
                        <p class="text-sm">
                            @include ('admin::sales.address', ['address' => $sellerOrder->order->billing_address])
                        </p>
                    </div>
                </div>
            @endif

            <!-- Shipping Address -->
            @if ($sellerOrder->order->shipping_address)
                <div class="grid max-w-[200px] gap-4 max-868:w-full max-868:max-w-full max-md:max-w-[200px] max-sm:max-w-full">
                    <p class="text-base text-[#6E6E6E]">
                        @lang('shop::app.customers.account.orders.view.shipping-address')
                    </p>

                    <div class="grid gap-2.5">
                        <p class="text-sm">
                            @include ('admin::sales.address', ['address' => $sellerOrder->order->shipping_address])
                        </p>
                    </div>
                </div>

                <!-- Shipping Method -->
                <div class="grid max-w-[200px] place-content-baseline gap-4 max-868:w-full max-868:max-w-full max-md:max-w-[200px] max-sm:max-w-full">
                    <p class="text-base text-[#6E6E6E]">
                        @lang('shop::app.customers.account.orders.view.shipping-method')
                    </p>

                    <p class="text-sm">
                        {{ $sellerOrder->order->shipping_title }}
                    </p>
                </div>

            @endif

            <!-- Billing Method -->
            <div class="grid max-w-[200px] place-content-baseline gap-4 max-868:w-full max-868:max-w-full max-md:max-w-[200px] max-sm:max-w-full">
                <p class="text-base text-[#6E6E6E]">
                    @lang('shop::app.customers.account.orders.view.payment-method')
                </p>

                <p class="text-sm">
                    {{ core()->getConfigData('sales.payment_methods.'.$sellerOrder->order->payment->method.'.title') }}
                </p>
            </div>
        </div>
    </div>

    {!! view_render_event('bagisto.seller.orders.view.after', ['order' => $sellerOrder]) !!}
</x-marketplace::seller.layouts>

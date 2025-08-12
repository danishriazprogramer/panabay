<x-marketplace::seller.layouts>
    <!-- Page Title -->
    <x-slot:title>
        @lang('marketplace::app.seller.orders.index.title')
    </x-slot>

    <!-- Breadcrumbs -->
    @section('breadcrumbs')
        <x-marketplace::seller.breadcrumbs name="seller_orders" />
    @endSection

    <div class="flex items-center justify-between">
        <div class="">
            <h2 class="text-2xl font-medium">
                @lang('marketplace::app.seller.orders.index.title')
            </h2>
        </div>
    </div>

    {!! view_render_event('bagisto.seller.orders.list.before') !!}
    
    <!-- Datagrid -->
    <x-shop::datagrid
        :src="route('seller.orders.index')"
        :isMultiRow="true"
    >
        <!-- Datagrid Header -->
        <template #header="{
            isLoading,
            available,
            applied,
            selectAll,
            sort,
            performAction
        }">
            <template v-if="! isLoading">
                <div class="row grid grid-cols-[0.5fr_0.6fr_0.5fr_0.5fr_0.3fr_0.1fr] grid-rows-1 items-center border-b px-4 py-2.5">
                    <div
                        class="flex select-none items-center gap-2.5"
                        v-for="(columnGroup, index) in [['increment_id', 'created_at', 'order_status'], ['customer_name', 'customer_email', 'location'], ['total_item_count', 'payment_method', 'shipping_method'], ['base_sub_total', 'discount_amount', 'commission'], ['seller_total', 'seller_payout_status']]"
                    >
                        <p class="text-sm font-medium text-[#000000]">
                            <span class="[&>*]:after:content-['_/_']">
                                <template v-for="column in columnGroup">
                                    <span
                                        class="after:content-['/'] last:after:content-['']"
                                        :class="{
                                            'text-sm font-medium text-[#000000]': applied.sort.column == column,
                                            'cursor-pointer hover:text-gray-800': available.columns.find(columnTemp => columnTemp.index === column)?.sortable,
                                        }"
                                        @click="
                                            available.columns.find(columnTemp => columnTemp.index === column)?.sortable ? sort(available.columns.find(columnTemp => columnTemp.index === column)): {}
                                        "
                                    >
                                        @{{ available.columns.find(columnTemp => columnTemp.index === column)?.label }}
                                    </span>
                                </template>
                            </span>

                            <i
                                class="align-text-bottom text-base text-gray-800 ltr:ml-1 rtl:mr-1"
                                :class="[applied.sort.order === 'asc' ? 'icon-arrow-down': 'icon-arrow-up']"
                                v-if="columnGroup.includes(applied.sort.column)"
                            ></i>
                        </p>
                    </div>
                </div>
            </template>

            <!-- Datagrid Head Shimmer -->
            <template v-else>
                <x-shop::shimmer.datagrid.table.head :isMultiRow="true" />
            </template>
        </template>

        <!-- Datagrid Body -->
        <template #body="{
            isLoading,
            available,
            applied,
            sort,
            performAction
        }">
            <template v-if="! isLoading">
                <div
                    class="row grid grid-cols-[0.5fr_0.6fr_0.5fr_0.5fr_0.3fr_0.1fr] grid-rows-1 items-center border-b px-4 py-2.5"
                    v-for="record in available.records"
                >
                    <!-- Order Id, Created, Status Section -->
                    <div class="grid gap-y-1.5">
                        <p class="text-sm font-semibold">
                            @{{ "@lang('marketplace::app.seller.orders.index.datagrid.order-id')".replace(':id', record.increment_id) }}
                        </p>

                        <p
                            class="text-sm"
                            v-text="record.created_at"
                        >
                        </p>

                        <p
                            class="text-sm"
                            v-html="record.order_status"
                        >
                        </p>
                    </div>

                    <!-- Customer Name, Email, Location Section -->
                    <div class="grid gap-y-1.5">
                        <p
                            class="text-sm font-semibold"
                            v-text="record.customer_name"
                        >
                        </p>

                        <p
                            class="text-sm"
                            v-text="record.customer_email"
                        >
                        </p>

                        <p
                            class="text-sm"
                            v-text="record.location"
                        >
                        </p>
                    </div>

                    <!-- Items, Payment, Shipping -->
                    <div class="grid gap-y-1.5">
                        <p
                            class="text-sm font-semibold"
                            v-text="record.total_item_count"
                        >
                        </p>

                        <p
                            class="text-sm"
                            v-text="record.payment_method"
                        >
                        </p>

                        <p
                            class="text-sm"
                            v-text="record.shipping_method"
                        >
                        </p>
                    </div>

                    <!-- Base Total Amount, Discount, Commission -->
                    <div class="grid gap-y-1.5">
                        <p class="text-sm font-semibold">
                            @{{ record.base_sub_total }}
                        </p>

                        <p class="text-sm">
                            @{{ record.discount_amount }}
                        </p>

                        <p class="text-sm">
                            @{{ record.commission }}
                        </p>
                    </div>

                    <!-- Seller Total Amount, Status -->
                    <div class="grid gap-y-1.5">
                        <p class="text-sm font-semibold">
                            @{{ record.seller_total }}
                        </p>

                        @if (seller()->hasPermission('orders.payment_request'))
                            <p
                                class="text-sm"
                                v-html="record.seller_payout_status"
                            >
                            </p>
                        @endif
                    </div>

                    <!-- Actions -->
                    <div
                        v-if="record.actions.length"
                        class="flex items-center"
                    >
                        <a
                            v-for="action in record.actions"
                            @click="performAction(action)"
                        >
                            <span
                                class="cursor-pointer rounded-md p-1.5 text-2xl transition-all hover:bg-gray-200 max-sm:place-self-center"
                                :class="action.icon"
                                :title="action.title"
                            ></span>
                        </a>
                    </div>
                </div>
            </template>

            <!-- Datagrid Body Shimmer -->
            <template v-else>
                <x-shop::shimmer.datagrid.table.body :isMultiRow="true" />
            </template>
        </template>
    </x-shop::datagrid>

    {!! view_render_event('bagisto.seller.orders.list.after') !!}
</x-marketplace::seller.layouts>

{!! view_render_event('bagisto.seller.product.edit.booking.default.before', ['product' => $product]) !!}

<!-- Vue Component -->
<v-default-booking></v-default-booking>

{!! view_render_event('bagisto.seller.product.edit.booking.default.after', ['product' => $product]) !!}

@pushOnce('scripts')
    <script
        type="text/x-template"
        id="v-default-booking-template"
    >
        <!-- Type -->
        <x-marketplace::seller.form.control-group class="w-full">
            <x-marketplace::seller.form.control-group.label class="required">
                @lang('marketplace::app.seller.products.edit.types.booking.default.description')
            </x-marketplace::seller.form.control-group.label>

            <x-marketplace::seller.form.control-group.control
                type="select"
                name="booking[booking_type]"
                rules="required"
                v-model="default_booking.booking_type"
                :label="trans('marketplace::app.seller.products.edit.types.booking.default.description')"
                @slotType="slotType"
            >
                @foreach (['one', 'many'] as $item)
                    <option value="{{ $item }}">
                        @lang('marketplace::app.seller.products.edit.types.booking.default.' . $item)
                    </option>
                @endforeach
            </x-marketplace::seller.form.control-group.control>

            <x-marketplace::seller.form.control-group.error control-name="booking[booking_type]" />
        </x-marketplace::seller.form.control-group>

        <template v-if="default_booking.booking_type == 'many'">
            <!-- Slot Duration -->
            <x-marketplace::seller.form.control-group class="w-full">
                <x-marketplace::seller.form.control-group.label class="required">
                    @lang('marketplace::app.seller.products.edit.types.booking.default.slot-duration')
                </x-marketplace::seller.form.control-group.label>

                <x-marketplace::seller.form.control-group.control
                    type="text"
                    name="booking[duration]"
                    rules="required|min_value:1"
                    v-model="default_booking.duration"
                    :label="trans('marketplace::app.seller.products.edit.types.booking.default.slot-duration')"
                />

                <x-marketplace::seller.form.control-group.error control-name="booking[duration]" />
            </x-marketplace::seller.form.control-group>

            <!-- Break Time -->
            <x-marketplace::seller.form.control-group class="w-full">
                <x-marketplace::seller.form.control-group.label class="required">
                    @lang('marketplace::app.seller.products.edit.types.booking.default.break-duration')
                </x-marketplace::seller.form.control-group.label>

                <x-marketplace::seller.form.control-group.control
                    type="text"
                    name="booking[break_time]"
                    rules="required|min_value:1"
                    v-model="default_booking.break_time"
                    :label="trans('marketplace::app.seller.products.edit.types.booking.default.break-duration')"
                />

                <x-marketplace::seller.form.control-group.error control-name="booking[break_time]" />
            </x-marketplace::seller.form.control-group>
        </template>

        <!-- Slots Component -->
        <div class="flex items-center justify-between gap-5 py-2">
            <div class="flex-1 flex flex-col gap-2">
                <p class="text-base font-semibold text-gray-800">
                    @lang('marketplace::app.seller.products.edit.types.booking.default.slot-title')
                </p>

                <p class="text-xs font-medium text-gray-500">
                    @lang('marketplace::app.seller.products.edit.types.booking.default.description-info')
                </p>
            </div>

            <!-- Add Slot Button -->
            <div
                class="flex items-center gap-x-1"
                v-if="default_booking.booking_type != 'many'"
            >
                <div
                    class="secondary-button"
                    @click="$refs.drawerForm.toggle()"
                >
                    @lang('marketplace::app.seller.products.edit.types.booking.default.slot-add')
                </div>
            </div>
        </div>

        <!-- Table Information -->
        <div class="overflow-x-auto py-2.5">
            <template v-if="default_booking.booking_type == 'one'">
                <template v-if="slots.one?.length">
                    <div class="flex flex-wrap gap-x-2.5">
                        <div
                            class="flex min-h-[38px] flex-wrap items-center gap-1"
                            v-for="(slot, index) in slots.one"
                        >
                            <!-- Hidden Inputs -->
                            <input
                                type="hidden"
                                :name="'booking[slots][' + index + '][id]'"
                                :value="slot.id"
                            />

                            <input
                                type="hidden"
                                :name="'booking[slots][' + index + '][from_day]'"
                                :value="slot.from_day"
                            />

                            <input
                                type="hidden"
                                :name="'booking[slots][' + index + '][from]'"
                                :value="slot.from"
                            />

                            <input
                                type="hidden"
                                :name="'booking[slots][' + index + '][to_day]'"
                                :value="slot.to_day"
                            />

                            <input
                                type="hidden"
                                :name="'booking[slots][' + index + '][to]'"
                                :value="slot.to"
                            />

                            <!-- Panel details -->
                            <p class="flex items-center rounded bg-gray-600 px-2 py-1 font-semibold text-white">
                                @{{ convertIndexToDay(slot.from_day) }} @{{ slot.from }} - @{{ convertIndexToDay(slot.to_day) }} @{{ slot.to }}

                                <span
                                    class="icon-cancel cursor-pointer text-lg text-white ltr:ml-1.5 rtl:mr-1.5"
                                    @click="removeIndex(index)"
                                >
                                </span>
                            </p>
                        </div>
                    </div>
                </template>

                <template v-else>
                    <!-- For Empty Illustration -->
                    <v-empty-info ::type="bookingType"></v-empty-info>
                </template>
            </template>

             <!-- For Not Same Slot All Days -->
             <template v-else>
                <div
                    class="grid grid-cols-[0.5fr_2fr] items-center gap-2.5 border-b border-slate-300 py-2 last:border-b-0"
                    v-for="(day, dayIndex) in week_days"
                >
                    <div class="flex gap-2">
                        <p
                            class="font-medium"
                            v-text="day"
                        >
                        </p>

                        <template v-for="(slot, slotIndex) in slots['many'][dayIndex]">
                            <p
                                :class="parseInt(slot.status) ? 'label-active' : 'label-canceled'"
                                v-text="parseInt(slot.status) 
                                    ? '@lang('marketplace::app.seller.products.edit.types.booking.default.open')'
                                    : '@lang('marketplace::app.seller.products.edit.types.booking.default.close')'"
                            >
                            </p>
                        </template>
                    </div>

                    <div class="flex grid-cols-2 items-center justify-between">
                        <div class="flex min-h-[38px] flex-wrap items-center gap-1">
                            <template v-if="slots['many'][dayIndex]?.length">
                                <template v-for="(slot, slotIndex) in slots['many'][dayIndex]">
                                    <!-- Hidden Inputs -->
                                    <input
                                        type="hidden"
                                        :name="'booking[slots][' + dayIndex + '][' + slotIndex + '][id]'"
                                        :value="slot.id"
                                    />

                                    <input
                                        type="hidden"
                                        :name="'booking[slots][' + dayIndex + '][' + slotIndex + '][from]'"
                                        :value="slot.from"
                                    />

                                    <input
                                        type="hidden"
                                        :name="'booking[slots][' + dayIndex + '][' + slotIndex + '][to]'"
                                        :value="slot.to"
                                    />

                                    <input
                                        type="hidden"
                                        :name="'booking[slots][' + dayIndex + '][' + slotIndex + '][status]'"
                                        :value="slot.status"
                                    />

                                    <p class="flex items-center rounded bg-gray-600 px-2 py-1 font-semibold text-white">
                                        @{{ slot.from }} - @{{ slot.to }}
        
                                        <span
                                            class="icon-cancel cursor-pointer text-lg text-white ltr:ml-1.5 rtl:mr-1.5"
                                            @click="removeIndex(dayIndex,slotIndex)"
                                        >
                                        </span>
                                    </p>
                                </template>
                            </template>

                            <template v-else>
                                <p class="text-gray-500">
                                    @lang('marketplace::app.seller.products.edit.types.booking.default.unavailable')
                                </p>
                            </template>
                        </div>

                        <p
                            class="cursor-pointer place-content-start text-right text-blue-600 transition-all hover:underline"
                            v-if="! slots['many'][dayIndex]?.length"
                            @click="currentIndex=dayIndex;toggle()"
                        >
                            @lang('marketplace::app.seller.products.edit.types.booking.default.add')
                        </p>

                        <p
                            class="cursor-pointer place-content-start text-right text-red-600 transition-all hover:underline"
                            v-else
                            @click="currentIndex=dayIndex;toggle(dayIndex)"
                        >
                            @lang('marketplace::app.seller.products.edit.types.booking.default.edit')
                        </p>    
                    </div>
                </div>
            </template>
        </div>

        <!-- Drawer Component -->
        <x-marketplace::seller.form
            v-slot="{ meta, errors, handleSubmit }"
            as="div"
            ref="modelForm"
        >
            <form
                @submit.prevent="handleSubmit($event, store)"
                enctype="multipart/form-data"
            >
                <x-marketplace::seller.drawer ref="drawerForm">
                    <x-slot:header>
                        <div class="flex items-center justify-between">
                            <p
                                class="text-lg font-bold text-gray-800"
                                v-text="slots['many'][currentIndex]?.length 
                                    ? '@lang('marketplace::app.seller.products.edit.types.booking.default.modal.slot.edit-title')'
                                    : '@lang('marketplace::app.seller.products.edit.types.booking.default.modal.slot.add-title')'"
                            >
                            </p>

                            <div class="ltr:mr-11 rtl:ml-11">
                                <button
                                    type="submit"
                                    class="primary-button"
                                >
                                    @lang('marketplace::app.seller.products.edit.types.booking.default.modal.slot.save')
                                </button>
                            </div>
                        </div>
                    </x-slot:header>

                    <x-slot:content>
                       <!-- Booking Type One -->
                        <template v-if="default_booking.booking_type == 'one'">
                            <div class="mb-2.5 grid grid-cols-2 gap-4 border-b">
                                <!-- From Day -->
                                <x-marketplace::seller.form.control-group class="w-full">
                                    <x-marketplace::seller.form.control-group.label class="required">
                                        @lang('marketplace::app.seller.products.edit.types.booking.default.modal.slot.from-day')
                                    </x-marketplace::seller.form.control-group.label>

                                    <x-marketplace::seller.form.control-group.control
                                        type="hidden"
                                        name="booking_type"
                                        value="one"
                                    />

                                    <!-- Hidden Id Input -->
                                    <x-marketplace::seller.form.control-group.control
                                        type="hidden"
                                        name="id"
                                    />

                                    <x-marketplace::seller.form.control-group.control
                                        type="select"
                                        name="from_day"
                                        rules="required"
                                        :label="trans('marketplace::app.seller.products.edit.types.booking.default.modal.slot.from-day')"
                                    >
                                        <option
                                            value=""
                                            selected
                                        >
                                            @lang('marketplace::app.seller.products.edit.types.booking.default.modal.slot.select')
                                        </option>

                                        <option
                                            v-for="(day, index) in week_days"
                                            :value="index"
                                            v-text="'@lang('marketplace::app.seller.products.edit.types.booking.default.modal.slot.week')'.replace(':day', day)"
                                        >
                                        </option>
                                    </x-marketplace::seller.form.control-group.control>
                    
                                    <x-marketplace::seller.form.control-group.error control-name="from_day" />
                                </x-marketplace::seller.form.control-group>
                    
                                <!-- From -->
                                <x-marketplace::seller.form.control-group class="w-full">
                                    <x-marketplace::seller.form.control-group.label class="required">
                                        @lang('marketplace::app.seller.products.edit.types.booking.default.modal.slot.from-time')
                                    </x-marketplace::seller.form.control-group.label>
                    
                                    <x-marketplace::seller.form.control-group.control
                                        type="time"
                                        name="from"
                                        rules="required"
                                        :label="trans('marketplace::app.seller.products.edit.types.booking.default.modal.slot.from-time')"
                                        :placeholder="trans('marketplace::app.seller.products.edit.types.booking.default.modal.slot.from-time')"
                                    />
                    
                                    <x-marketplace::seller.form.control-group.error control-name="from" />
                                </x-marketplace::seller.form.control-group>
                            </div>

                            <div class="grid grid-cols-2 gap-4">
                                <!-- TO Day -->
                                <x-marketplace::seller.form.control-group class="w-full">
                                    <x-marketplace::seller.form.control-group.label class="required">
                                        @lang('marketplace::app.seller.products.edit.types.booking.default.modal.slot.to-day')
                                    </x-marketplace::seller.form.control-group.label>
                    
                                    <x-marketplace::seller.form.control-group.control
                                        type="select"
                                        name="to_day"
                                        rules="required"
                                        :label="trans('marketplace::app.seller.products.edit.types.booking.default.modal.slot.to-day')"
                                    >
                                        <option
                                            value=""
                                            selected
                                        >
                                            @lang('marketplace::app.seller.products.edit.types.booking.default.modal.slot.select')
                                        </option>

                                        <option
                                            v-for="(day, index) in week_days"
                                            :value="index"
                                            v-text="'@lang('marketplace::app.seller.products.edit.types.booking.default.modal.slot.week')'.replace(':day', day)"
                                        >
                                        </option>
                                    </x-marketplace::seller.form.control-group.control>
                    
                                    <x-marketplace::seller.form.control-group.error control-name="to_day" />
                                </x-marketplace::seller.form.control-group>
                    
                                <!-- To Time -->
                                <x-marketplace::seller.form.control-group class="w-full">
                                    <x-marketplace::seller.form.control-group.label class="required">
                                        @lang('marketplace::app.seller.products.edit.types.booking.default.modal.slot.to-time')
                                    </x-marketplace::seller.form.control-group.label>
                    
                                    <x-marketplace::seller.form.control-group.control
                                        type="time"
                                        name="to"
                                        rules="required"
                                        :label="trans('marketplace::app.seller.products.edit.types.booking.default.modal.slot.to-time')"
                                        :placeholder="trans('marketplace::app.seller.products.edit.types.booking.default.modal.slot.to-time')"
                                    />
                    
                                    <x-marketplace::seller.form.control-group.error control-name="to" />
                                </x-marketplace::seller.form.control-group>
                            </div>
                        </template>

                        <!-- Booking Type Many -->
                        <template v-if="default_booking.booking_type == 'many'">
                            <div class="grid grid-cols-3 gap-2.5 pb-3">
                                <!-- Hidden ID Field -->
                                <x-marketplace::seller.form.control-group.control
                                    type="hidden"
                                    name="id"
                                />

                                <!-- Slots From -->
                                <x-marketplace::seller.form.control-group class="w-full">
                                    <x-marketplace::seller.form.control-group.label class="hidden">
                                        @lang('marketplace::app.seller.products.edit.types.booking.default.modal.slot.from')
                                    </x-marketplace::seller.form.control-group.label>

                                    <x-marketplace::seller.form.control-group.control
                                        type="time"
                                        name="from"
                                        ::rules="selectedStatus[currentIndex] ? 'required' : ''"
                                        :label="trans('marketplace::app.seller.products.edit.types.booking.default.modal.slot.from')"
                                        :placeholder="trans('marketplace::app.seller.products.edit.types.booking.default.modal.slot.from')"
                                    />

                                    <x-marketplace::seller.form.control-group.error control-name="from" />
                                </x-marketplace::seller.form.control-group>

                                <!-- Slots To -->
                                <x-marketplace::seller.form.control-group class="w-full">
                                    <x-marketplace::seller.form.control-group.label class="hidden">
                                        @lang('marketplace::app.seller.products.edit.types.booking.default.modal.slot.to')
                                    </x-marketplace::seller.form.control-group.label>

                                    <x-marketplace::seller.form.control-group.control
                                        type="time"
                                        name="to"
                                        ::rules="selectedStatus[currentIndex] ? 'required' : ''"
                                        :label="trans('marketplace::app.seller.products.edit.types.booking.default.modal.slot.to')"
                                        :placeholder="trans('marketplace::app.seller.products.edit.types.booking.default.modal.slot.to')"
                                    />

                                    <x-marketplace::seller.form.control-group.error control-name="to" />
                                </x-marketplace::seller.form.control-group>

                                <!-- Status -->
                                <x-marketplace::seller.form.control-group class="w-full">
                                    <x-marketplace::seller.form.control-group.label class="hidden">
                                        @lang('marketplace::app.seller.products.edit.types.booking.default.modal.slot.status')
                                    </x-marketplace::seller.form.control-group.label>

                                    <x-marketplace::seller.form.control-group.control
                                        type="select"
                                        name="status"
                                        v-model="selectedStatus[currentIndex]"
                                        ::value="selectedStatus[currentIndex]"
                                        :label="trans('marketplace::app.seller.products.edit.types.booking.default.modal.slot.status')"
                                    >
                                        <option value="1">
                                            @lang('marketplace::app.seller.products.edit.types.booking.default.modal.slot.open')
                                        </option>

                                        <option value="0">
                                            @lang('marketplace::app.seller.products.edit.types.booking.default.modal.slot.close')
                                        </option>
                                    </x-marketplace::seller.form.control-group.control>

                                    <x-marketplace::seller.form.control-group.error control-name="status" />
                                </x-marketplace::seller.form.control-group>
                            </div>
                        </template>
                    </x-slot:content>
                </x-marketplace::seller.drawer>
            </form>
        </x-marketplace::seller.form>
    </script>

    <script type="module">
        app.component('v-default-booking', {
            template: '#v-default-booking-template',

            data() {
                return {
                    default_booking: @json($bookingProduct && $bookingProduct?->default_slot) ? @json($bookingProduct?->default_slot) : {
                        booking_type: 'one',

                        duration: 45,

                        break_time: 15,

                        slots: []
                    },

                    optionRowCount: 0,

                    currentIndex: '',

                    slots: {
                        one: [],

                        many: [[], [], [], [], [], [], [], []],
                    },

                    week_days: [
                        "@lang('marketplace::app.seller.products.edit.types.booking.default.modal.slot.sunday')",
                        "@lang('marketplace::app.seller.products.edit.types.booking.default.modal.slot.monday')",
                        "@lang('marketplace::app.seller.products.edit.types.booking.default.modal.slot.tuesday')",
                        "@lang('marketplace::app.seller.products.edit.types.booking.default.modal.slot.wednesday')",
                        "@lang('marketplace::app.seller.products.edit.types.booking.default.modal.slot.thursday')",
                        "@lang('marketplace::app.seller.products.edit.types.booking.default.modal.slot.friday')",
                        "@lang('marketplace::app.seller.products.edit.types.booking.default.modal.slot.saturday')",
                    ],

                    selectedStatus : [],
                }
            },

            created() {
                if (this.default_booking.slots) {
                    const lastIndex = Object.keys(this.default_booking.slots).pop();
                    this.optionRowCount = lastIndex ? this.default_booking.id : 0;
                }

                if (this.default_booking.booking_type === 'one') {
                    this.slots['one'] = this.default_booking.slots ?? this.slots['one'];
                } else {
                    this.slots['many'] = this.slots['many'].map((_, index) => {
                        return this.default_booking.slots[index] ?? [];
                    });
                }
            },

            methods: {
                store(params) {
                    if (params.booking_type === 'one') {
                        if (! params.id) {
                            params.id = this.optionRowCount++;
                        }

                        const isOverlapping = this.slots.one.some(item => {
                            return (
                                item.from_day === params.from_day &&
                                item.to_day === params.to_day &&
                                (
                                    (params.from >= item.from && params.from <= item.to) ||
                                    (params.to >= item.from && params.to <= item.to) ||
                                    (params.from <= item.from && params.to >= item.to)
                                )
                            );
                        });

                        if (! isOverlapping) {
                            this.slots.one.push(params);
                        }
                    } else {
                        params.id = this.currentIndex;

                        if (params.from && params.to) {
                            const currentSlot = this.slots['many'][this.currentIndex];

                            if (! currentSlot.length) {
                                currentSlot.push(params);
                            } else {
                                currentSlot.splice(0, 1, params);
                            }

                            this.selectedStatus[this.currentIndex] = params.status;
                        }
                    }

                    this.$refs.drawerForm.toggle();
                },

                convertIndexToDay(day) {
                    return this.week_days[day]?.slice(0, 3);
                },

                removeIndex(dayIndex, timeIndex) {
                    this.$emitter.emit('open-confirm-modal', {
                        agree: () => {
                            if (this.default_booking.booking_type == 'one') {
                                this.slots.one.splice(dayIndex, 1);
                            } else {
                                this.slots.many[dayIndex].splice(timeIndex, 1);

                                this.selectedStatus[dayIndex] = '';
                            }
                        },
                    });
                },

                toggle(element) {
                    if (element != undefined) {
                        this.$refs.modelForm.setValues(this.slots['many'][element][0]);

                        this.selectedStatus[this.currentIndex] = this.slots['many'][element][0].status;
                    } else {
                        this.selectedStatus[this.currentIndex] = 0;
                    }

                    this.$refs.drawerForm.toggle();
                },

                slotType() {
                    if (this.default_booking.booking_type == 'one') {
                        this.slots['one'] = [];
                    } else {
                        this.slots['many'] = [[], [], [], [], [], [], []];
                    }

                    this.optionRowCount = 0;
                }
            }
        });
    </script>
@endpushOnce
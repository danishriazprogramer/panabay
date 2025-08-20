<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['isMultiRow' => false]));

foreach ($attributes->all() as $__key => $__value) {
    if (in_array($__key, $__propNames)) {
        $$__key = $$__key ?? $__value;
    } else {
        $__newAttributes[$__key] = $__value;
    }
}

$attributes = new \Illuminate\View\ComponentAttributeBag($__newAttributes);

unset($__propNames);
unset($__newAttributes);

foreach (array_filter((['isMultiRow' => false]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>

<v-datagrid <?php echo e($attributes); ?>>
    <?php echo e($slot); ?>

</v-datagrid>

<?php if (! $__env->hasRenderedOnce('d700dbf6-aea8-44f3-8bf3-5013383e0295')): $__env->markAsRenderedOnce('d700dbf6-aea8-44f3-8bf3-5013383e0295');
$__env->startPush('scripts'); ?>
    <script
        type="text/x-template"
        id="v-datagrid-template"
    >
        <div>
            <!-- Toolbar -->
            <?php if (isset($component)) { $__componentOriginal4899078397993742d3ae2278f06b9847 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal4899078397993742d3ae2278f06b9847 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'shop::components.datagrid.toolbar','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('shop::datagrid.toolbar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal4899078397993742d3ae2278f06b9847)): ?>
<?php $attributes = $__attributesOriginal4899078397993742d3ae2278f06b9847; ?>
<?php unset($__attributesOriginal4899078397993742d3ae2278f06b9847); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal4899078397993742d3ae2278f06b9847)): ?>
<?php $component = $__componentOriginal4899078397993742d3ae2278f06b9847; ?>
<?php unset($__componentOriginal4899078397993742d3ae2278f06b9847); ?>
<?php endif; ?>

            <!-- Table -->
            <div class="mt-8 flex max-md:mt-0">
                <?php if (isset($component)) { $__componentOriginal14c4b44f5f80bc7e25642ef4d893a265 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal14c4b44f5f80bc7e25642ef4d893a265 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'shop::components.datagrid.table','data' => ['isMultiRow' => $isMultiRow]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('shop::datagrid.table'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['isMultiRow' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($isMultiRow)]); ?>
                    <template #header="{
                        isLoading,
                        available,
                        applied,
                        selectAll,
                        sort,
                        performAction
                    }">
                        <slot
                            name="header"
                            :is-loading="isLoading"
                            :available="available"
                            :applied="applied"
                            :select-all="selectAll"
                            :sort="sort"
                            :perform-action="performAction"
                        >
                        </slot>
                    </template>

                    <template #body="{
                        isLoading,
                        available,
                        applied,
                        selectAll,
                        sort,
                        performAction
                    }">
                        <slot
                            name="body"
                            :is-loading="isLoading"
                            :available="available"
                            :applied="applied"
                            :select-all="selectAll"
                            :sort="sort"
                            :perform-action="performAction"
                        >
                        </slot>
                    </template>
                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal14c4b44f5f80bc7e25642ef4d893a265)): ?>
<?php $attributes = $__attributesOriginal14c4b44f5f80bc7e25642ef4d893a265; ?>
<?php unset($__attributesOriginal14c4b44f5f80bc7e25642ef4d893a265); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal14c4b44f5f80bc7e25642ef4d893a265)): ?>
<?php $component = $__componentOriginal14c4b44f5f80bc7e25642ef4d893a265; ?>
<?php unset($__componentOriginal14c4b44f5f80bc7e25642ef4d893a265); ?>
<?php endif; ?>
            </div>
        </div>
    </script>

    <script type="module">
        app.component('v-datagrid', {
            template: '#v-datagrid-template',

            props: ['src'],

            data() {
                return {
                    isLoading: false,

                    available: {
                        id: null,

                        columns: [],

                        actions: [],

                        massActions: [],

                        records: [],

                        meta: {},
                    },

                    applied: {
                        massActions: {
                            meta: {
                                mode: 'none',

                                action: null,
                            },

                            indices: [],

                            value: null,
                        },

                        pagination: {
                            page: 1,

                            perPage: 10,
                        },

                        sort: {
                            column: null,

                            order: null,
                        },

                        filters: {
                            columns: [
                                {
                                    index: 'all',
                                    value: [],
                                },
                            ],
                        },
                    },
                };
            },

            watch: {
                'available.records': function (newRecords, oldRecords) {
                    this.setCurrentSelectionMode();

                    this.updateDatagrids();

                    this.updateExportComponent();
                },

                'applied.massActions.indices': function (newIndices, oldIndices) {
                    this.setCurrentSelectionMode();
                },
            },

            mounted() {
                this.boot();
            },

            methods: {
                /**
                 * Initialization: This function checks for any previously saved filters in local storage and applies them as needed.
                 *
                 * @returns {void}
                 */
                boot() {
                    let datagrids = this.getDatagrids();

                    const urlParams = new URLSearchParams(window.location.search);

                    if (urlParams.has('search')) {
                        let searchAppliedColumn = this.applied.filters.columns.find(column => column.index === 'all');

                        searchAppliedColumn.value = [urlParams.get('search')];
                    }

                    if (datagrids?.length) {
                        const currentDatagrid = datagrids.find(({ src }) => src === this.src);

                        if (currentDatagrid) {
                            this.applied.pagination = currentDatagrid.applied.pagination;

                            this.applied.sort = currentDatagrid.applied.sort;

                            this.applied.filters = currentDatagrid.applied.filters;

                            if (urlParams.has('search')) {
                                let searchAppliedColumn = this.applied.filters.columns.find(column => column.index === 'all');

                                searchAppliedColumn.value = [urlParams.get('search')];
                            }

                            this.get();

                            return;
                        }
                    }

                    this.get();
                },

                /**
                 * Get. This will prepare params from the `applied` props and fetch the data from the backend.
                 *
                 * @returns {void}
                 */
                get(extraParams = {}) {
                    let params = {
                        pagination: {
                            page: this.applied.pagination.page,
                            per_page: this.applied.pagination.perPage,
                        },

                        sort: {},

                        filters: {},
                    };

                    if (
                        this.applied.sort.column &&
                        this.applied.sort.order
                    ) {
                        params.sort = this.applied.sort;
                    }

                    this.applied.filters.columns.forEach(column => {
                        params.filters[column.index] = column.value;
                    });

                    this.isLoading = true;

                    this.$axios
                        .get(this.src, {
                            params: { ...params, ...extraParams }
                        })
                        .then((response) => {
                            /**
                             * Precisely taking all the keys to the data prop to avoid adding any extra keys from the response.
                             */
                            const {
                                id,
                                columns,
                                actions,
                                mass_actions,
                                records,
                                meta
                            } = response.data;

                            this.available.id = id;

                            this.available.columns = columns;

                            this.available.actions = actions;

                            this.available.massActions = mass_actions;

                            this.available.records = records;

                            this.available.meta = meta;

                            this.isLoading = false;
                        });
                },

                /**
                 * Change Page. When the child component has handled all the cases, it will send the
                 * valid new page; otherwise, it will block. Here, we are certain that we have
                 * a new page, so the parent will simply call the AJAX based on the new page.
                 *
                 * @param {integer} newPage
                 * @returns {void}
                 */
                changePage(newPage) {
                    this.applied.pagination.page = newPage;

                    this.get();
                },

                /**
                 * Change per page option.
                 *
                 * @param {integer} option
                 * @returns {void}
                 */
                changePerPageOption(option) {
                    this.applied.pagination.perPage = option;

                    /**
                     * When the total records are less than the number of data per page, we need to reset the page.
                     */
                    if (this.available.meta.last_page >= this.applied.pagination.page) {
                        this.applied.pagination.page = 1;
                    }

                    this.get();
                },

                /**
                 * Sort results.
                 *
                 * @param {object} column
                 * @returns {void}
                 */
                sort(column) {
                    if (column.sortable) {
                        this.applied.sort = {
                            column: column.index,
                            order: this.applied.sort.order === 'asc' ? 'desc' : 'asc',
                        };

                        /**
                         * When the sorting changes, we need to reset the page.
                         */
                        this.applied.pagination.page = 1;

                        this.get();
                    }
                },

                /**
                 * Search results.
                 *
                 * @param {object} filters
                 * @returns {void}
                 */
                search(filters) {
                    this.applied.filters.columns = [
                        ...(this.applied.filters.columns.filter((column) => column.index !== 'all')),
                        ...filters.columns,
                    ];

                    /**
                     * We need to reset the page on filtering.
                     */
                    this.applied.pagination.page = 1;

                    this.get();
                },

                /**
                 * Filter results.
                 *
                 * @param {object} filters
                 * @returns {void}
                 */
                 filter(filters) {
                    this.applied.filters.columns = [
                        ...(this.applied.filters.columns.filter((column) => column.index === 'all')),
                        ...filters.columns,
                    ];

                    /**
                     * We need to reset the page on filtering.
                     */
                    this.applied.pagination.page = 1;

                    this.get();
                },

                /**
                 * This will analyze the current selection mode based on the mass action indices.
                 *
                 * @returns {void}
                 */
                setCurrentSelectionMode() {
                    this.applied.massActions.meta.mode = 'none';

                    if (! this.available.records.length) {
                        return;
                    }

                    let selectionCount = 0;

                    this.available.records.forEach(record => {
                        const id = record[this.available.meta.primary_column];

                        if (this.applied.massActions.indices.includes(id)) {
                            this.applied.massActions.meta.mode = 'partial';

                            ++selectionCount;
                        }
                    });

                    if (this.available.records.length === selectionCount) {
                        this.applied.massActions.meta.mode = 'all';
                    }
                },

                /**
                 * This will select all records and update the mass action indices.
                 *
                 * @returns {void}
                 */
                selectAll() {
                    if (['all', 'partial'].includes(this.applied.massActions.meta.mode)) {
                        this.available.records.forEach(record => {
                            const id = record[this.available.meta.primary_column];

                            this.applied.massActions.indices = this.applied.massActions.indices.filter(selectedId => selectedId !== id);
                        });

                        this.applied.massActions.meta.mode = 'none';
                    } else {
                        this.available.records.forEach(record => {
                            const id = record[this.available.meta.primary_column];

                            let found = this.applied.massActions.indices.find(selectedId => selectedId === id);

                            if (! found) {
                                this.applied.massActions.indices = [
                                    ...this.applied.massActions.indices,
                                    id,
                                ];
                            }
                        });

                        this.applied.massActions.meta.mode = 'all';
                    }
                },

                /**
                 * Updates the export component properties whenever new results appear in the datagrid.
                 *
                 * @returns {void}
                 */
                 updateExportComponent() {
                    /**
                     * This event should be fired whenever new results appear. This allows the export feature to
                     * listen to it and update its properties accordingly.
                     */
                     this.$emitter.emit('change-datagrid', {
                        available: this.available,
                        applied: this.applied
                    });
                },

                //=======================================================================================
                // Support for previous applied values in datagrids. All code is based on local storage.
                //=======================================================================================

                /**
                 * Updates the datagrids stored in local storage with the latest data.
                 *
                 * @returns {void}
                 */
                updateDatagrids() {
                    let datagrids = this.getDatagrids();

                    if (datagrids?.length) {
                        const currentDatagrid = datagrids.find(({ src }) => src === this.src);

                        if (currentDatagrid) {
                            datagrids = datagrids.map(datagrid => {
                                if (datagrid.src === this.src) {
                                    return {
                                        ...datagrid,
                                        requestCount: ++datagrid.requestCount,
                                        available: this.available,
                                        applied: this.applied,
                                    };
                                }

                                return datagrid;
                            });
                        } else {
                            datagrids.push(this.getDatagridInitialProperties());
                        }
                    } else {
                        datagrids = [this.getDatagridInitialProperties()];
                    }

                    this.setDatagrids(datagrids);
                },

                /**
                 * Returns the initial properties for a datagrid.
                 *
                 * @returns {object} Initial properties for a datagrid.
                 */
                getDatagridInitialProperties() {
                    return {
                        src: this.src,
                        requestCount: 0,
                        available: this.available,
                        applied: this.applied,
                    };
                },

                /**
                 * Returns the storage key for datagrids in local storage.
                 *
                 * @returns {string} Storage key for datagrids.
                 */
                getDatagridsStorageKey() {
                    return 'datagrids';
                },

                /**
                 * Retrieves the datagrids stored in local storage.
                 *
                 * @returns {Array} Datagrids stored in local storage.
                 */
                getDatagrids() {
                    let datagrids = localStorage.getItem(
                        this.getDatagridsStorageKey()
                    );

                    return JSON.parse(datagrids) ?? [];
                },

                /**
                 * Sets the datagrids in local storage.
                 *
                 * @param {Array} datagrids - Datagrids to be stored in local storage.
                 * @returns {void}
                 */
                setDatagrids(datagrids) {
                    localStorage.setItem(
                        this.getDatagridsStorageKey(),
                        JSON.stringify(datagrids)
                    );
                },
            },
        });
    </script>
<?php $__env->stopPush(); endif; ?>
<?php /**PATH /var/www/html/resources/themes/default/views/components/datagrid/index.blade.php ENDPATH**/ ?>
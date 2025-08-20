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

<?php if(! $isMultiRow): ?>
    <div class="row grid grid-cols-6 items-center gap-2.5 border-b border-zinc-200 bg-gray-50 px-6 py-4">
        <!-- Mass Actions -->
        <div class="shimmer h-[21px] w-6"></div>

        <div class="shimmer h-[21px] w-[100px]"></div>

        <div class="shimmer h-[21px] w-[100px]"></div>

        <div class="shimmer h-[21px] w-[100px]"></div>

        <div class="shimmer h-[21px] w-[100px]"></div>

        <div class="shimmer h-[21px] w-[100px] place-self-end"></div>
    </div>
<?php else: ?>
    <div class="row tems-center grid grid-cols-[2fr_1fr_1fr] items-center gap-2.5 border-b border-zinc-200 px-6 py-4">
        <!-- Mass Actions -->
        <div class="flex items-center gap-2.5">
            <div class="shimmer h-6 w-6"></div>

            <div class="shimmer h-[21px] w-[200px]"></div>
        </div>

        <div class="shimmer h-[21px] w-[200px]"></div>

        <div class="shimmer h-[21px] w-[200px]"></div>
    </div>
<?php endif; ?><?php /**PATH /var/www/html/packages/Webkul/Shop/src/Providers/../Resources/views/components/shimmer/datagrid/table/head.blade.php ENDPATH**/ ?>
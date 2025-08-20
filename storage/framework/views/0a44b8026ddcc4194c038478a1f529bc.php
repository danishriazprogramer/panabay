<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['position' => 'left']));

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

foreach (array_filter((['position' => 'left']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>

<v-tabs
    position="<?php echo e($position); ?>"
    <?php echo e($attributes); ?>

>
    <?php if (isset($component)) { $__componentOriginalf6d4b4d805c560b3b1f20c4f8324408b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf6d4b4d805c560b3b1f20c4f8324408b = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'shop::components.shimmer.tabs.index','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('shop::shimmer.tabs'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalf6d4b4d805c560b3b1f20c4f8324408b)): ?>
<?php $attributes = $__attributesOriginalf6d4b4d805c560b3b1f20c4f8324408b; ?>
<?php unset($__attributesOriginalf6d4b4d805c560b3b1f20c4f8324408b); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf6d4b4d805c560b3b1f20c4f8324408b)): ?>
<?php $component = $__componentOriginalf6d4b4d805c560b3b1f20c4f8324408b; ?>
<?php unset($__componentOriginalf6d4b4d805c560b3b1f20c4f8324408b); ?>
<?php endif; ?>
</v-tabs>

<?php if (! $__env->hasRenderedOnce('1201a2da-0b33-43e8-97c0-945216435b9d')): $__env->markAsRenderedOnce('1201a2da-0b33-43e8-97c0-945216435b9d');
$__env->startPush('scripts'); ?>
    <script
        type="text/x-template"
        id="v-tabs-template"
    >
        <div>
            <div
                class="flex flex-row justify-center gap-8 bg-zinc-100 max-sm:gap-1.5"
                :style="positionStyles"
            >
                <div
                    role="button"
                    tabindex="0"
                    v-for="tab in tabs"
                    class="cursor-pointer px-8 py-5 text-xl font-medium text-zinc-600 max-md:px-4 max-md:py-3 max-md:text-sm max-sm:px-2.5 max-sm:py-2.5"
                    :class="{'border-b-2 border-navyBlue text-navyBlue transition': tab.isActive }"
                    :id="tab.$attrs.id + '-button'"
                    @click="change(tab)"
                >
                    {{ tab.title }}
                </div>
            </div>

            <div>
                <?php echo e($slot); ?>

            </div>
        </div>
    </script>

    <script type="module">
        app.component('v-tabs', {
            template: '#v-tabs-template',

            props: ['position'],

            data() {
                return {
                    tabs: []
                }
            },

            computed: {
                positionStyles() {
                    return [
                        `justify-content: ${this.position}`
                    ];
                },
            },

            methods: {
                change(selectedTab) {
                    this.tabs.forEach(tab => {
                        tab.isActive = (tab.title == selectedTab.title);
                    });
                },
            },
        });
    </script>
<?php $__env->stopPush(); endif; ?>
<?php /**PATH /var/www/html/resources/themes/default/views/components/tabs/index.blade.php ENDPATH**/ ?>
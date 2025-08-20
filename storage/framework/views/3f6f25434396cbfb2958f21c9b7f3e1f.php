<v-flash-group ref='flashes'></v-flash-group>

<?php if (! $__env->hasRenderedOnce('55cfe05a-3d39-4509-b497-7ed0b5ffe0be')): $__env->markAsRenderedOnce('55cfe05a-3d39-4509-b497-7ed0b5ffe0be');
$__env->startPush('scripts'); ?>
    <script
        type="text/x-template"
        id="v-flash-group-template"
    >
        <transition-group
            tag='div'
            name="flash-group"
            enter-from-class="ltr:translate-x-full rtl:-translate-x-full"
            enter-active-class="transform transition duration-200 ease-in-out"
            enter-to-class="ltr:translate-x-0 rtl:-translate-x-0"
            leave-from-class="ltr:translate-x-0 rtl:-translate-x-0"
            leave-active-class="transform transition duration-200 ease-in-out"
            leave-to-class="ltr:translate-x-full rtl:-translate-x-full"
            class='fixed top-5 z-[10003] grid justify-items-end gap-2.5 ltr:right-5 rtl:left-5'
        >
            <?php if (isset($component)) { $__componentOriginal61c07debb335a63a383982eca0b85db9 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal61c07debb335a63a383982eca0b85db9 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'admin::components.flash-group.item','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('admin::flash-group.item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal61c07debb335a63a383982eca0b85db9)): ?>
<?php $attributes = $__attributesOriginal61c07debb335a63a383982eca0b85db9; ?>
<?php unset($__attributesOriginal61c07debb335a63a383982eca0b85db9); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal61c07debb335a63a383982eca0b85db9)): ?>
<?php $component = $__componentOriginal61c07debb335a63a383982eca0b85db9; ?>
<?php unset($__componentOriginal61c07debb335a63a383982eca0b85db9); ?>
<?php endif; ?>
        </transition-group>
    </script>

    <script type="module">
        app.component('v-flash-group', {
            template: '#v-flash-group-template',

            data() {
                return {
                    uid: 0,

                    flashes: []
                }
            },

            created() {
                <?php $__currentLoopData = ['success', 'warning', 'error', 'info']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if(session()->has($key)): ?>
                        this.flashes.push({'type': '<?php echo e($key); ?>', 'message': "<?php echo e(session($key)); ?>", 'uid':  this.uid++});
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                this.registerGlobalEvents();
            },

            methods: {
                add(flash) {
                    flash.uid = this.uid++;

                    this.flashes.push(flash);
                },

                remove(flash) {
                    let index = this.flashes.indexOf(flash);

                    this.flashes.splice(index, 1);
                },

                registerGlobalEvents() {
                    this.$emitter.on('add-flash', this.add);
                },
            }
        });
    </script>
<?php $__env->stopPush(); endif; ?><?php /**PATH /var/www/html/resources/admin-themes/default/views/components/flash-group/index.blade.php ENDPATH**/ ?>
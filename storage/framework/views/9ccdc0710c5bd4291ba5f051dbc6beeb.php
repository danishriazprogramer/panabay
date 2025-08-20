<?php
    $customer = auth()->guard('customer')->user();
?>

<div class="panel-side journal-scroll grid max-h-[1320px] min-w-[342px] max-w-[380px] grid-cols-[1fr] gap-8 overflow-y-auto overflow-x-hidden max-xl:min-w-[270px] max-md:max-w-full max-md:gap-5">

    <!-- Account Navigation Menus -->
    <?php $__currentLoopData = menu()->getItems('customer'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $menuItem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div>
            <!-- Account Navigation Toggler -->
            <div class="select-none pb-5 max-md:pb-1.5">
                <p class="text-xl font-medium max-md:text-lg">
                    <?php echo e($menuItem->getName()); ?>

                </p>
            </div>

            <!-- Account Navigation Content -->
            <?php if($menuItem->haveChildren()): ?>
                <div class="grid rounded-md">
                    <?php $__currentLoopData = $menuItem->getChildren(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subMenuItem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <a href="<?php echo e($subMenuItem->getUrl()); ?>">
                            <div class="flex justify-between px-6 py-5 hover:bg-zinc-100 cursor-pointer max-md:p-4 max-md:border-0 max-md:py-3 max-md:px-0 <?php echo e($subMenuItem->isActive() ? 'bg-zinc-100' : ''); ?>">
                                <p class="flex items-center gap-x-4 text-lg font-medium max-sm:text-base">
                                    <span class="<?php echo e($subMenuItem->getIcon()); ?> text-2xl"></span>

                                    <?php echo e($subMenuItem->getName()); ?>

                                </p>

                                <!-- <span class="icon-arrow-right rtl:icon-arrow-left text-2xl"></span> -->
                            </div>
                        </a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            <?php endif; ?>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div><?php /**PATH /var/www/html/resources/themes/default/views/components/layouts/account/navigation.blade.php ENDPATH**/ ?>
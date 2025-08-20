<?php
    $errors = \Webkul\Checkout\Facades\Cart::getErrors();
?>

<?php if(
    ! empty($errors)
    && $errors['error_code'] === 'MARKETPLACE_MINIMUM_ORDER_AMOUNT'
): ?>
    <?php $__currentLoopData = $errors['errors']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="mt-5 w-full gap-12 rounded-lg bg-[#FFF3CD] px-5 py-3 text-[#383D41] max-sm:px-3 max-sm:py-2 max-sm:text-sm">
            <?php echo e($error['message']); ?>: <?php echo e($error['amount']); ?>

        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endif; ?>
<?php /**PATH /var/www/html/resources/themes/default/views/shop/checkout/cart/error.blade.php ENDPATH**/ ?>
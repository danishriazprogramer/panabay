<!-- Section 3 -->
            <section class="deals-grid-container">
                <div class="row ">

                    <div class="row g-3 p-4">
                        <div class="col-lg-8">
                            <?php $swimCarouselFilters = [ 'category_slug' => 'womens-swimwear', 'limit' => 8, ]; ?>
                            <?php if (isset($component)) { $__componentOriginal3fc006c8017955b95803def2dfc87cec = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal3fc006c8017955b95803def2dfc87cec = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'shop::components.products.carousel-new','data' => ['title' => 'Hot, new swim for her','src' => route('shop.api.products.index', $swimCarouselFilters),'navigationLink' => route('shop.search.index', $swimCarouselFilters)]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('shop::products.carousel-new'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Hot, new swim for her','src' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('shop.api.products.index', $swimCarouselFilters)),'navigation-link' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('shop.search.index', $swimCarouselFilters))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal3fc006c8017955b95803def2dfc87cec)): ?>
<?php $attributes = $__attributesOriginal3fc006c8017955b95803def2dfc87cec; ?>
<?php unset($__attributesOriginal3fc006c8017955b95803def2dfc87cec); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal3fc006c8017955b95803def2dfc87cec)): ?>
<?php $component = $__componentOriginal3fc006c8017955b95803def2dfc87cec; ?>
<?php unset($__componentOriginal3fc006c8017955b95803def2dfc87cec); ?>
<?php endif; ?>
                        </div>
                        <div class="col-lg-4">
                            <div class="wmip-promo-card h-100 position-relative" style="background-image: url(https://i5.walmartimages.com/dfw/4ff9c6c9-3e0e/k2-_78c10ff0-ce60-467e-948a-a7d50c2a5903.v1.jpg?odnHeight=447&odnWidth=794); background-size: cover; min-height: 300px;">
                                <div class="position-absolute top-0 start-0 p-4 ">
                                    <p class="fw-bold fs-5 mb-0 text-navyBlue">No Boundaries & more</p>
                                    <h3 class="fw-bold display-6 text-navyBlue">Swim for her</h3>
                                    <!-- <a href="#" class="btn wmip-shop-now-btn mt-2">Shop now</a> -->

                                </div>
                                <div class="position-absolute bottom-0 start-0 p-1 ">
                                    <p class="mb-0 fw-bold text-navyBlue p-4">From $10</p>
                                    <!-- <p class="mb-0 fw-bold display-4 lh-1">$10</p> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section><?php /**PATH /var/www/html/storage/framework/views/9aa553bd06640d4a710079ccfdf62778.blade.php ENDPATH**/ ?>
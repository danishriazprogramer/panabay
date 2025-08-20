<!-- Section 1 -->
            <div class="deals-grid-container">
                <div class="deals-grid">

                    <!-- Card 1: Left Top (School supplies) -->
                    <div class="deal-card card-style-standard">
                        <div class="card-content">
                            <h4>School supplies up to 50% off</h4>
                            <a href="#" class="link-btn">Shop Deals</a>

                        </div>
                        <img src="" data-src="storage/theme/5/KxtvSrHy4hUXTLkIYGqqCwfuDU8JpPL6OxZ1IwIL.webp" class="lazy card-image" alt="Supplies Deals">
                    </div>
                    <!-- Card 2: Left Bottom (Cooking & dining) -->
                    <div class="deal-card card-style-standard">
                        <div class="card-content">
                            <h4>Cooking & dining up to 40% off</h4>
                            <a href="#" class="link-btn">Shop Deals</a>

                        </div>
                        <img src="" data-src="storage/theme/5/DxtYUITaP2Z0XTpw1f4fBxjP0dIY4FbpkrP4Wcmx.webp" class="lazy card-image" alt="Cooking Deals">
                    </div>
                    <!-- Card 3: Center HERO (Walmart DEALS) -->
                    <div class="deal-card card-style-hero">
                        <?php
                        $heroCarouselOptions = [
                        'images' => [

                        [
                        'image' => 'https://images.unsplash.com/photo-1441986300917-64674bd600d8?auto=format&fit=crop&w=1740',
                        'link' => '#',
                        'title' => 'Discover Our Newest Arrivals',
                        ],
                        [
                        'image' => 'https://images.unsplash.com/photo-1441986300917-64674bd600d8?auto=format&fit=crop&w=1740',
                        'link' => '#',
                        'title' => "Don't Miss Our Winter Collection",
                        ],
                        ]
                        ];
                        ?>
                        <?php if (isset($component)) { $__componentOriginalf822cda9ef0d23eb334a82ea5494f8ce = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf822cda9ef0d23eb334a82ea5494f8ce = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'shop::components.carousel.index','data' => ['options' => $heroCarouselOptions]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('shop::carousel'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['options' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($heroCarouselOptions)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalf822cda9ef0d23eb334a82ea5494f8ce)): ?>
<?php $attributes = $__attributesOriginalf822cda9ef0d23eb334a82ea5494f8ce; ?>
<?php unset($__attributesOriginalf822cda9ef0d23eb334a82ea5494f8ce); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf822cda9ef0d23eb334a82ea5494f8ce)): ?>
<?php $component = $__componentOriginalf822cda9ef0d23eb334a82ea5494f8ce; ?>
<?php unset($__componentOriginalf822cda9ef0d23eb334a82ea5494f8ce); ?>
<?php endif; ?>
                    </div>
                    <!-- Card 4: Right Top (TVs) -->
                    <div class="deal-card card-style-standard">
                        <div class="card-content">
                            <h4>Up to 25% off TVs & Electronics</h4>
                            <a href="#" class="link-btn">Shop Deals</a>

                        </div>
                        <img src="" data-src="storage/theme/5/BqE8D63lnARWTwiHzFSutgiu9blPJw0VVXICpFx2.webp" class="lazy card-image" alt="TV Deals">
                    </div>
                    <!-- Card 5: Right Bottom (Apple) -->
                    <div class="deal-card card-style-standard">
                        <div class="card-content">
                            <h4>Smart savings on top brands</h4>
                            <a href="#" class="link-btn">Shop Deals</a>

                        </div>
                        <img src="" data-src="storage/theme/5/HQpfSnN2zVR4vvo2N3bGzfgqSOqMx8YmKRDHHbTd.webp" class="lazy card-image" alt="Brand Deals">
                    </div>
                </div>
            </div>
            <!-- Section 2 --><?php /**PATH /var/www/html/storage/framework/views/3f1f8540518c3215941d8bc25cf9780d.blade.php ENDPATH**/ ?>
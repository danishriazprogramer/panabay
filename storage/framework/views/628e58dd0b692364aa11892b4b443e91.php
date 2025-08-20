<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
'hasHeader' => true,
'hasFeature' => true,
'hasFooter' => true,
]));

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

foreach (array_filter(([
'hasHeader' => true,
'hasFeature' => true,
'hasFooter' => true,
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>

<!DOCTYPE html>

<html
    lang="<?php echo e(app()->getLocale()); ?>"
    dir="<?php echo e(core()->getCurrentLocale()->direction); ?>">

<head>

    <?php echo view_render_event('bagisto.shop.layout.head.before'); ?>


    <title><?php echo e($title ?? ''); ?></title>

    <meta charset="UTF-8">

    <meta
        http-equiv="X-UA-Compatible"
        content="IE=edge">
    <meta
        http-equiv="content-language"
        content="<?php echo e(app()->getLocale()); ?>">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1">
    <meta
        name="base-url"
        content="<?php echo e(url()->to('/')); ?>">
    <meta
        name="currency"
        content="<?php echo e(core()->getCurrentCurrency()->toJson()); ?>">

    <?php echo $__env->yieldPushContent('meta'); ?>

    <link
        rel="icon"
        sizes="16x16"
        href="<?php echo e(core()->getCurrentChannel()->favicon_url ?? bagisto_asset('images/favicon.ico')); ?>" />

    <?php echo themes()->setBagistoVite(['src/Resources/assets/css/app.css', 'src/Resources/assets/js/app.js'])->toHtml(); ?>

    <link
        rel="preload"
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap"
        as="style">
    <link
        rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap">

    <link
        rel="preload"
        href="https://fonts.googleapis.com/css2?family=DM+Serif+Display&display=swap"
        as="style">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />



    <link
        rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=DM+Serif+Display&display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <?php echo $__env->yieldPushContent('styles'); ?>

    <style>
        {
            ! ! core()->getConfigData('general.content.custom_scripts.custom_css') ! !
        }
    </style>

    <?php if(core()->getConfigData('general.content.speculation_rules.enabled')): ?>
    <script type="speculationrules">
        <?php echo json_encode(core()->getSpeculationRules(), JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE, 512) ?>
            </script>
    <?php endif; ?>

    <?php echo view_render_event('bagisto.shop.layout.head.after'); ?>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

</head>

<body>
    <?php echo view_render_event('bagisto.shop.layout.body.before'); ?>


    <a
        href="#main"
        class="skip-to-main-content-link">
        Skip to main content
    </a>

    <div id="app">
        <!-- Flash Message Blade Component -->
        <?php if (isset($component)) { $__componentOriginal32b426cadde54f0d7b8de12fc0e5c6a0 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal32b426cadde54f0d7b8de12fc0e5c6a0 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'shop::components.flash-group.index','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('shop::flash-group'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal32b426cadde54f0d7b8de12fc0e5c6a0)): ?>
<?php $attributes = $__attributesOriginal32b426cadde54f0d7b8de12fc0e5c6a0; ?>
<?php unset($__attributesOriginal32b426cadde54f0d7b8de12fc0e5c6a0); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal32b426cadde54f0d7b8de12fc0e5c6a0)): ?>
<?php $component = $__componentOriginal32b426cadde54f0d7b8de12fc0e5c6a0; ?>
<?php unset($__componentOriginal32b426cadde54f0d7b8de12fc0e5c6a0); ?>
<?php endif; ?>

        <!-- Confirm Modal Blade Component -->
        <?php if (isset($component)) { $__componentOriginal5692e00db184034e913f6f80572595d8 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal5692e00db184034e913f6f80572595d8 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'shop::components.modal.confirm','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('shop::modal.confirm'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal5692e00db184034e913f6f80572595d8)): ?>
<?php $attributes = $__attributesOriginal5692e00db184034e913f6f80572595d8; ?>
<?php unset($__attributesOriginal5692e00db184034e913f6f80572595d8); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal5692e00db184034e913f6f80572595d8)): ?>
<?php $component = $__componentOriginal5692e00db184034e913f6f80572595d8; ?>
<?php unset($__componentOriginal5692e00db184034e913f6f80572595d8); ?>
<?php endif; ?>

        <!-- Page Header Blade Component -->
        <?php if($hasHeader): ?>
        <?php if (isset($component)) { $__componentOriginal8840dbae58ccad6ecf4eb407b99d7661 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal8840dbae58ccad6ecf4eb407b99d7661 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'shop::components.layouts.header.index','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('shop::layouts.header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal8840dbae58ccad6ecf4eb407b99d7661)): ?>
<?php $attributes = $__attributesOriginal8840dbae58ccad6ecf4eb407b99d7661; ?>
<?php unset($__attributesOriginal8840dbae58ccad6ecf4eb407b99d7661); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8840dbae58ccad6ecf4eb407b99d7661)): ?>
<?php $component = $__componentOriginal8840dbae58ccad6ecf4eb407b99d7661; ?>
<?php unset($__componentOriginal8840dbae58ccad6ecf4eb407b99d7661); ?>
<?php endif; ?>
        <?php endif; ?>

        <?php if(
        core()->getConfigData('general.gdpr.settings.enabled')
        && core()->getConfigData('general.gdpr.cookie.enabled')
        ): ?>
        <?php if (isset($component)) { $__componentOriginalee22104ea56ac769eac5950f83fdb6cf = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalee22104ea56ac769eac5950f83fdb6cf = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'shop::components.layouts.cookie.index','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('shop::layouts.cookie'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalee22104ea56ac769eac5950f83fdb6cf)): ?>
<?php $attributes = $__attributesOriginalee22104ea56ac769eac5950f83fdb6cf; ?>
<?php unset($__attributesOriginalee22104ea56ac769eac5950f83fdb6cf); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalee22104ea56ac769eac5950f83fdb6cf)): ?>
<?php $component = $__componentOriginalee22104ea56ac769eac5950f83fdb6cf; ?>
<?php unset($__componentOriginalee22104ea56ac769eac5950f83fdb6cf); ?>
<?php endif; ?>
        <?php endif; ?>

        <?php echo view_render_event('bagisto.shop.layout.content.before'); ?>


        <!-- Page Content Blade Component -->
        <main id="main" class="bg-white">
            <?php echo e($slot); ?>

        </main>

        <?php echo view_render_event('bagisto.shop.layout.content.after'); ?>



        <!-- Page Services Blade Component -->
        <?php if($hasFeature): ?>
        <?php if (isset($component)) { $__componentOriginalc7f3325cf24ae738796526b5a914125a = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc7f3325cf24ae738796526b5a914125a = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'shop::components.layouts.services','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('shop::layouts.services'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc7f3325cf24ae738796526b5a914125a)): ?>
<?php $attributes = $__attributesOriginalc7f3325cf24ae738796526b5a914125a; ?>
<?php unset($__attributesOriginalc7f3325cf24ae738796526b5a914125a); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc7f3325cf24ae738796526b5a914125a)): ?>
<?php $component = $__componentOriginalc7f3325cf24ae738796526b5a914125a; ?>
<?php unset($__componentOriginalc7f3325cf24ae738796526b5a914125a); ?>
<?php endif; ?>
        <?php endif; ?>

        <!-- Page Footer Blade Component -->
        <?php if($hasFooter): ?>
        <?php if (isset($component)) { $__componentOriginal52eadd6893b05c6c47a48f4bafc8ff6b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal52eadd6893b05c6c47a48f4bafc8ff6b = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'shop::components.layouts.footer.index','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('shop::layouts.footer'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal52eadd6893b05c6c47a48f4bafc8ff6b)): ?>
<?php $attributes = $__attributesOriginal52eadd6893b05c6c47a48f4bafc8ff6b; ?>
<?php unset($__attributesOriginal52eadd6893b05c6c47a48f4bafc8ff6b); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal52eadd6893b05c6c47a48f4bafc8ff6b)): ?>
<?php $component = $__componentOriginal52eadd6893b05c6c47a48f4bafc8ff6b; ?>
<?php unset($__componentOriginal52eadd6893b05c6c47a48f4bafc8ff6b); ?>
<?php endif; ?>
        <?php endif; ?>
    </div>

    <?php echo view_render_event('bagisto.shop.layout.body.after'); ?>


    <?php echo $__env->yieldPushContent('scripts'); ?>

    <?php echo view_render_event('bagisto.shop.layout.vue-app-mount.before'); ?>

    <script>
        /**
         * Load event, the purpose of using the event is to mount the application
         * after all of our `Vue` components which is present in blade file have
         * been registered in the app. No matter what `app.mount()` should be
         * called in the last.
         */
        window.addEventListener("load", function(event) {
            app.mount("#app");
        });
    </script>

    <?php echo view_render_event('bagisto.shop.layout.vue-app-mount.after'); ?>


    <script type="text/javascript">
        {
            !!core() - > getConfigData('general.content.custom_scripts.custom_javascript') !!
        }
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {


            const apiUrl = 'https://ipwhois.app/json/';



            fetch(apiUrl)
                .then(response => response.json())
                .then(data => {
                    // Check if the API call was successful
                    if (data && data.success) {
                        // Find the elements by their IDs
                        const flagElement = document.getElementById('user-flag');
                        const countryCodeElement = document.getElementById('user-country-code');
                        const currencyElement = document.getElementById('user-currency');
                        console.log(data);
                        // 1. Update the Flag Image
                        if (flagElement) {
                            flagElement.src = data.country_flag; // Use the direct image URL from the API
                            flagElement.alt = "Flag of " + data.country; // Set alt text for accessibility
                        }

                        // 2. Update the Country Code Text
                        if (countryCodeElement) {
                            countryCodeElement.textContent = data.country_code;
                        }

                        // 3. Update the Currency using our map
                        if (currencyElement) {

                            currencyElement.textContent = data.currency_code;
                        }

                    } else {
                        console.error('Failed to retrieve location data from ipwhois.io');
                    }
                })
                .catch(error => {
                    console.error('Error fetching user location:', error);
                });
        });
    </script>

            <script>
                // --- SLIDER JAVASCRIPT ---
                document.addEventListener('DOMContentLoaded', () => {
                    // Select all the necessary elements from the DOM
                    const wrapper = document.querySelector('.slider-wrapper');
                    const slides = document.querySelectorAll('.slide');
                    const prevBtn = document.getElementById('prev-btn');
                    const nextBtn = document.getElementById('next-btn');
                    const dotsContainer = document.querySelector('.slider-dots');

                    // Check if slider elements exist before running the script
                    if (!wrapper || !slides.length) {
                        return;
                    }

                    let currentIndex = 0;
                    const totalSlides = slides.length;

                    // --- Create Navigation Dots ---
                    for (let i = 0; i < totalSlides; i++) {
                        const dot = document.createElement('span');
                        dot.classList.add('dot');
                        dot.dataset.index = i; // Store index to know which slide to go to
                        dotsContainer.appendChild(dot);
                    }
                    const dots = document.querySelectorAll('.dot');


                    // --- Core Function to Move Slider to a Specific Slide ---
                    function goToSlide(index) {
                        // Loop the slider: if it goes past the end, go to start, and vice-versa
                        if (index < 0) {
                            index = totalSlides - 1;
                        } else if (index >= totalSlides) {
                            index = 0;
                        }

                        // Move the wrapper using CSS transform
                        wrapper.style.transform = `translateX(-${index * 100}%)`;
                        currentIndex = index;

                        // Update which dot is shown as "active"
                        updateDots();
                    }

                    // --- Function to Highlight the Active Dot ---
                    function updateDots() {
                        dots.forEach(dot => {
                            dot.classList.remove('active');
                        });
                        dots[currentIndex].classList.add('active');
                    }


                    // --- Event Listeners for Buttons and Dots ---
                    nextBtn.addEventListener('click', () => {
                        goToSlide(currentIndex + 1);
                    });

                    prevBtn.addEventListener('click', () => {
                        goToSlide(currentIndex - 1);
                    });

                    dots.forEach(dot => {
                        dot.addEventListener('click', (e) => {
                            // Get the index from the dot's data attribute and go to that slide
                            const index = parseInt(e.target.dataset.index);
                            goToSlide(index);
                        });
                    });


                    // --- Autoplay Functionality (Optional) ---
                    let autoplayInterval = setInterval(() => {
                        goToSlide(currentIndex + 1);
                    }, 5000); // Change slide every 5 seconds (5000ms)

                    // Pause autoplay on hover for better user experience
                    const sliderContainer = document.querySelector('.slider-container');
                    sliderContainer.addEventListener('mouseenter', () => clearInterval(autoplayInterval));
                    sliderContainer.addEventListener('mouseleave', () => {
                        // Resume autoplay when the mouse leaves
                        autoplayInterval = setInterval(() => {
                            goToSlide(currentIndex + 1);
                        }, 5000);
                    });


                    // --- Initialize the slider ---
                    goToSlide(0); // Start at the first slide
                });
            </script>
</body>

</html><?php /**PATH /var/www/html/resources/themes/default/views/components/layouts/index.blade.php ENDPATH**/ ?>
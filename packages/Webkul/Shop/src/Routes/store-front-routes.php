<?php

use Illuminate\Support\Facades\Route;
use Webkul\Shop\Http\Controllers\BookingProductController;
use Webkul\Shop\Http\Controllers\CompareController;
use Webkul\Shop\Http\Controllers\HomeController;
use Webkul\Shop\Http\Controllers\PageController;
use Webkul\Shop\Http\Controllers\ProductController;
use Webkul\Shop\Http\Controllers\ProductsCategoriesProxyController;
use Webkul\Shop\Http\Controllers\SearchController;
use Webkul\Shop\Http\Controllers\SubscriptionController;
use App\Http\Controllers\Shop\Payment\KoraPayController;
use Illuminate\Support\Facades\Http;

/**
 * CMS pages.
 */
Route::get('page/{slug}', [PageController::class, 'view'])
    ->name('shop.cms.page')
    ->middleware('cache.response');

/**
 * Fallback route.
 */
Route::fallback(ProductsCategoriesProxyController::class.'@index')
    ->name('shop.product_or_category.index')
    ->middleware('cache.response');

/**
 * Store front home.
 */
Route::get('/', [HomeController::class, 'index'])
    ->name('shop.home.index')
    ->middleware('cache.response');

Route::get('contact-us', [HomeController::class, 'contactUs'])
    ->name('shop.home.contact_us')
    ->middleware('cache.response');

Route::post('contact-us/send-mail', [HomeController::class, 'sendContactUsMail'])
    ->name('shop.home.contact_us.send_mail')
    ->middleware('cache.response');

/**
 * Store front search.
 */
Route::get('search', [SearchController::class, 'index'])
    ->name('shop.search.index')
    ->middleware('cache.response');

Route::post('search/upload', [SearchController::class, 'upload'])->name('shop.search.upload');

/**
 * Subscription routes.
 */
Route::controller(SubscriptionController::class)->group(function () {
    Route::post('subscription', 'store')->name('shop.subscription.store');

    Route::get('subscription/{token}', 'destroy')->name('shop.subscription.destroy');
});

/**
 * Compare products
 */
Route::get('compare', [CompareController::class, 'index'])
    ->name('shop.compare.index')
    ->middleware('cache.response');

/**
 * Downloadable products
 */
Route::controller(ProductController::class)->group(function () {
    Route::get('downloadable/download-sample/{type}/{id}', 'downloadSample')->name('shop.downloadable.download_sample');

    Route::get('product/{id}/{attribute_id}', 'download')->name('shop.product.file.download');
});

/**
 * Booking products
 */
Route::get('booking-slots/{id}', [BookingProductController::class, 'index'])
    ->name('shop.booking-product.slots.index');


// Add after existing routes
// routes/shop.php
Route::get('/korapay/redirect', [KoraPayController::class, 'redirect'])->name('korapay.redirect');
Route::post('/korapay/pay-with-card', [KoraPayController::class, 'redirectCard'])->name('korapay.card.redirect');
Route::get('/korapay/callback', [KoraPayController::class, 'callback'])->name('korapay.callback');
// In routes/web.php

// This route will be called by the AJAX in our new view file

// Webhook route (typically in routes/web.php)
Route::post('/korapay/webhook', [KoraPayController::class, 'webhook'])->name('korapay.webhook');
// routes/shop.php
Route::get('/korapay/status/{reference}', [KoraPayController::class, 'paymentStatus'])->name('korapay.status');

// routes/web.php
Route::get('/test-korapay', function() {
    $secretKey = core()->getConfigData('sales.payment_methods.korapay.secret_key');

    $response = Http::withHeaders([
        'Authorization' => 'Bearer ' . $secretKey,
    ])->get('https://api.korapay.com/merchant/api/v1/transactions');
    dd($response);

});
<?php

use App\Http\Controllers\v1\DeliveryMethodsController;
use App\Http\Controllers\v1\PaymentTypeController;
use App\Http\Controllers\v1\ProductReviewController;
use App\Http\Controllers\v1\CategoryController;
use App\Http\Controllers\v1\CategoryProductController;
use App\Http\Controllers\v1\FavoriteController;
use App\Http\Controllers\v1\OrderController;
use App\Http\Controllers\v1\ProductController;
use App\Http\Controllers\v1\ReviewController;
use App\Http\Controllers\v1\SettingController;
use App\Http\Controllers\v1\StatusController;
use App\Http\Controllers\v1\StatusOrderController;
use App\Http\Controllers\v1\UserAddressController;
use App\Http\Controllers\v1\UserCardController;
use App\Http\Controllers\v1\UserSettingController;
use Illuminate\Support\Facades\Route;


Route::get('products/{product}/related', [ProductController::class, 'related']);


Route::middleware(['auth:sanctum'])->group(function () {
    Route::apiResources(array(
        'categories' => CategoryController::class,
        'categories.products' => CategoryProductController::class,
        'products' => ProductController::class,
        'products.reviews' => ProductReviewController::class,
        'favorites' => FavoriteController::class,
        'order' => OrderController::class,
        'statuses.order' => StatusOrderController::class,
        'delivery-methods' => DeliveryMethodsController::class,
        'payments-types' => PaymentTypeController::class,
        'status' => StatusController::class,
        'reviews' => ReviewController::class,
        'setting' => SettingController::class,
        'user-cards' => UserCardController::class,
        'user-settings' => UserSettingController::class,
        'user-addresses' => UserAddressController::class,
    ));

});





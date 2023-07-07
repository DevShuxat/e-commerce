<?php

use App\Http\Controllers\AuthController;
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
use Illuminate\Support\Facades\Response;







Route::prefix('v1')->group(function () {
    Route::post('login', [AuthController::class, 'login']);
    Route::post('logout',[AuthController::class,"destroy"])->middleware("auth:sanctum")->name("logout");
    Route::post('register', [AuthController::class, 'register']);
    Route::get('user', [AuthController::class, 'user']);


    Route::get('products/{product}/related', [ProductController::class, 'related']);



    Route::middleware(['auth:sanctum'])->group(function () {
        Route::apiResources(array(
            'categories' => CategoryController::class,
            'products' => ProductController::class,
            'favorites' => FavoriteController::class,
            'categories.products' => CategoryProductController::class,
            'order' => OrderController::class,
            'statuses.order' => StatusOrderController::class,
            'delivery-methods' => DeliveryMethodsController::class,
            'payments-types' => PaymentTypeController::class,
            'user-addresses'  => UserAddressController::class,
            'user-cards'=> UserCardController::class,
            'status' => StatusController::class,
            'reviews' => ReviewController::class,
            'products.reviews' => ProductReviewController::class,
            'setting' => SettingController::class,
            'user-settings' => UserSettingController::class,
        ));

    });
});





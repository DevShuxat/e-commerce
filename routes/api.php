<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DeliveryMethodsController;
use App\Http\Controllers\PaymentTypeController;
use App\Http\Controllers\UserAddressController;
use App\Http\Controllers\UserCardController;
use App\Http\Controllers\v1\CategoryController;
use App\Http\Controllers\v1\CategoryProductController;
use App\Http\Controllers\v1\FavoriteController;
use App\Http\Controllers\v1\OrderController;
use App\Http\Controllers\v1\ProductController;
use Illuminate\Support\Facades\Route;







Route::prefix('v1')->group(function () {
    Route::post('login', [AuthController::class, 'login']);
    Route::post('logout',[AuthController::class,"destroy"])->middleware("auth:sanctum")->name("logout");
    Route::post('register', [AuthController::class, 'register']);
    Route::get('user', [AuthController::class, 'user']);

    Route::middleware(['auth:sanctum'])->group(function () {
        Route::apiResources(array(
            'categories' => CategoryController::class,
            'products' => ProductController::class,
            'favorites' => FavoriteController::class,
            'categories.products' => CategoryProductController::class,
            'order' => OrderController::class,
            'delivery-methods' => DeliveryMethodsController::class,
            'payments-types' => PaymentTypeController::class,
            'user-addresses'  => UserAddressController::class,
            'user-cards'=> UserCardController::class,
        ));

    });
});





<?php

use App\Http\Controllers\v1\Auth\AuthController;
use App\Http\Controllers\v1\CategoryController;
use App\Http\Controllers\v1\CategoryProductController;
use App\Http\Controllers\v1\FavoriteController;
use App\Http\Controllers\v1\ProductController;
use Illuminate\Support\Facades\Route;







Route::prefix('v1')->group(function () {
    Route::post('login', [AuthController::class, 'login']);
    Route::post('logout',[AuthController::class,"destroy"])->middleware("auth:sanctum")->name("logout");
    Route::post('register', [AuthController::class, 'register']);
    Route::get('user', [AuthController::class, 'user']);

    Route::middleware(['auth:sanctum'])->group(function () {
        Route::apiResources([
            'categories' => CategoryController::class,
            'products' => ProductController::class,
            'favorites' => FavoriteController::class,
            'categories.products' => CategoryProductController::class,
        ]);

    });
});





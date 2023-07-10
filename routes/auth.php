<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::prefix('v1')->group(function () {
    Route::post('login', [AuthController::class, 'login']);
    Route::post('logout', [AuthController::class, "destroy"])->middleware("auth:sanctum")->name("logout");
    Route::post('register', [AuthController::class, 'register']);
    Route::get('user', [AuthController::class, 'user']);

});

<?php

use App\Http\Controllers\v1\StatsController;
use Illuminate\Support\Facades\Route;




Route::prefix('stats')->group(function () {

    Route::get('orders-count', [StatsController::class, 'ordersCount']);
    Route::get('orders-sum', [StatsController::class, 'ordersSum']);
    Route::get('delivery-method-ration', [StatsController::class, 'deliveryMethodsRatio']);
    Route::get('daily-orders', [StatsController::class, 'ordersDaily']);

});

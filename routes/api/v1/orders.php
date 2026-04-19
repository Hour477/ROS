<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V1\OrderController;

Route::prefix('orders')->group(function () {
    Route::post('/', [OrderController::class, 'store'])->name('api.orders.store');
});

<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;

Route::get('orders', [OrderController::class, 'index']);
Route::get('order/{id}', [OrderController::class, 'show']);
Route::get('orders/completed', [OrderController::class, 'getFulfilledOrders']);
Route::post('order', [OrderController::class, 'store']);
Route::put('order/{id}', [OrderController::class, 'update']);
Route::delete('order/{id}', [OrderController::class, 'destroy']);


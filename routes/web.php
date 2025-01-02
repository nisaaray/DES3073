<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\BurgerController;
use App\Http\Controllers\OrderController;

Route::get('/', [BurgerController::class, 'index']);
Route::post('/order', [OrderController::class, 'store']);

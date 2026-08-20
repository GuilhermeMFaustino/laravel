<?php

use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/users', [UserController::class, 'index'])->middleware('CheckToken');
Route::get('/users/{user}', [UserController::class, 'show']);



Route::get('/checkout', CheckoutController::class);


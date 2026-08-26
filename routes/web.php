<?php

use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('/', function(){
 return view('welcome');
});

Route::get('/users', [UserController::class, 'index']);

/*Route::get('/profile', function(){
 return view('user.profile');
});*/

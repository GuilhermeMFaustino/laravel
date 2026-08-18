<?php


use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    return View('welcome');
});

Route::get('users', function(){
    dd('x');
})->middleware('userAgent');







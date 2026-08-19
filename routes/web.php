<?php


use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    return View('welcome');
});

/*Route::middleware(['userAgent', 'CheckToken'])->group(function () {
    Route::get('users', function () {

        dd('users');
    });

    Route::get('posts', function () {

        dd('posts');
    });
});*/

Route::get('admin', function(){
    dd('admin');
})->middleware('CheckToken');







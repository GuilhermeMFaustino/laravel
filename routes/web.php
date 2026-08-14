<?php

use Illuminate\Support\Facades\Route;



Route::prefix('users')->name('admin')->group(function () {

    Route::get('', function () {
        return View('welcome');
    });
    Route::get('{id}', function ($id) {
        return 'hello' .$id;
    });
    Route::put('{id}', function () {
        return View('welcome');
    });

});



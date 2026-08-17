<?php

use Illuminate\Support\Facades\Route;



Route::middleware('signed')->group(function () {

    Route::get('', function () {
        return View('welcome');
    })->name('users');

    Route::get('{id}', function ($id) {
        return 'hello' .$id;
    })->name('user');


});



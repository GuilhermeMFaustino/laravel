<?php

use Illuminate\Support\Facades\Route;

Route::domain('{guilherme}./')->group(function(){
    Route::get('', function(){
        return 'Hello Word';
    });
});

Route::fallback(function(){
    return 'hello Word';
});





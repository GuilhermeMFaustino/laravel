<?php

use Illuminate\Support\Facades\Route;


/*Route::get('users', function() {
    return 'hello word';
});*/

Route::match(['get', 'post'], 'users', function() {
    return 'hello word';
});
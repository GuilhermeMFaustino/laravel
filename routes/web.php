<?php

use Illuminate\Support\Facades\Route;


/*Route::get('users', function() {
    return 'hello word';
});*/

Route::redirect('rota-a', 'rota-b');

Route::get('rota-b', function(){
    return 'Rota B';
});
Route::match(['get', 'post'], 'users', function() {
    return 'hello word';
})->name('users');
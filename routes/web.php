<?php

use Illuminate\Support\Facades\Route;


/*Route::get('users', function() {
    return 'hello word';
});*/

// Route::redirect('rota-a', 'rota-b', 301);

Route::view('/welcome', 'welcome');

Route::get('/', function(){
    return View('welcome');
});



Route::get('rota-b', function(){
    return 'Rota B';
});
Route::match(['get', 'post'], 'users', function() {
    return 'hello word';
})->name('users');
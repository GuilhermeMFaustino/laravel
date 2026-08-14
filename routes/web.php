<?php

use Illuminate\Support\Facades\Route;


Route::get('/users/{id}', function($id) {
    return 'hello word' . $id;
})->where('id', '[0-9]+');

Route::get('/', function(){
    return View('welcome');
});

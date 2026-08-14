<?php

use Illuminate\Support\Facades\Route;


Route::get('/users/{id}', function($id) {
    return 'hello word' . $id;
});
Route::get('/', function(){
    return View('welcome');
});

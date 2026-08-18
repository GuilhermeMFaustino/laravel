<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/user/{user}', function (User $user) {

    dd($user);
});





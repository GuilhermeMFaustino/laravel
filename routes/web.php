<?php


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('user', function(Request $request) {

    // dd($request);

    //dd($request->path());

    //dd($request->url());
    dd($request->fullUrl());
    // dd($request->fullUrlWithQuery());
    // dd($request->fullUrlIs());
    // dd($request->is('users'));
    // dd($request->routeIs('users'));
    // dd($request->method());
    // dd($request->isMethod('get'));

});

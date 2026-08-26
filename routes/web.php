<?php


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('user/{user}', function(Request $request){

    /*if($request->has(['token', 'curso'])){
    dd('token e curso existem');
    }*/


    $request->whenHas('token', function($input){
        dd('faca alguma coisa', $input);
    });
});

/*Route::get('user', function(Request $request) {

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

});*/

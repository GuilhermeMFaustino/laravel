<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        dd('index');
    }

    public function show(Request $request, $id)
    {
        dd($request);
        dd('show', $id);
    }

}

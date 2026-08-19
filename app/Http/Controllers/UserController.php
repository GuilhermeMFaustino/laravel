<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function __construct()
    {
      
    }
    public function index()
    {
        dd('index');
    }

    public function show(Request $request, User $user)
    {
        // dd($request);
        // dd('show', $id);
        return $user;
        dd($user);
    }

}

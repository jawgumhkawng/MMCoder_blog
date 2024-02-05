<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showlogin()
    {
        return view('admin.auth.login');
    }

    public function login(Request $request)
    {
        return $request->all();
    }
}

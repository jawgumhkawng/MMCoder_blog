<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;

class AuthController extends Controller
{
    public function showlogin()
    {
        return view('admin.auth.login');
    }

    public function login(Request $request)
    {
        $cre = request()->only('email', 'password');
        $checkAuth = Auth::guard('admin')->attempt($cre);

        if (!$checkAuth) {
            return redirect()->back()->with('Admin Only Can Access');
        }
        return redirect('/admin')->with('success', 'Welcome' . auth()->guard('admin')->name);
    }

    public function logout()
    {
        auth()->guard('admin')->logout();
        return redirect('/');
    }
}
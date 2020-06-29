<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginFormRequest;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function showLogin()
    {
        return view('login');
    }

    public function login(LoginFormRequest $request)
    {
        $credentials = $request->only(['email', 'password']);

        if (Auth::attempt($credentials)) {
            return redirect('/');
        } else {
            return redirect('login')->with('error', 'Invalid credentials');
        }
    }

    public function showLogout()
    {
        return view('logout');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}

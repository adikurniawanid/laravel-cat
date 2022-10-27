<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth/login', [
            "title" => "Login"
        ]);
    }

    // public function indexAdmin()
    // {
    //     return view('auth/login-admin', [
    //         "title" => "Login Admin"
    //     ]);
    // }


    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            if (Auth::user()->roleId === 1) {
                return redirect()->intended('/user');
            } else if (Auth::user()->roleId === 0) {
                return redirect()->intended('/admin');
            }
        }

        return back()->with('loginError', 'Username atau password yang dimasukkan salah!');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/auth/login');
    }
}

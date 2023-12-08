<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index() 
    {
        return view('login', [
            "title" => "Login Page",
            "search" => "Cari di IndoTreasure",
        ]);
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
                            'username' => 'required',
                            'password' => 'required'
                        ]);

        if(Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/');
        }

        $sellerCredentials = [
            'slug' => $credentials['username'],
            'password' => $credentials['password'],
        ];

        if (Auth::guard('seller')->attempt($sellerCredentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/my-dashboard');
        }

        return back()->with('loginError', 'Login failed!');
    }

    public function logout(Request $request)
    {
        if (Auth::guard('seller')->check()) {
            Auth::guard('seller')->logout();
        } else {
            Auth::logout();
        }

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}

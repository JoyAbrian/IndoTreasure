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

        return back()->with('loginError', 'Login failed!');
    }
}
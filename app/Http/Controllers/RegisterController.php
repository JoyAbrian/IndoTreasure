<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index() {
        return view('register', [
            "title" => "Register Page",
            "search" => "Cari di IndoTreasure",
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'username' => ['required', 'min:3', 'max:64', 'unique:users'],
            'birthDate' => 'required|date',
            'email' => 'required|email|unique:users',
            'primary_phone_number' => 'required|numeric',
            'password' => 'required|min:8|max:255',
        ]);

        User::create($validatedData);

        return redirect('/login')->with('success', 'Register successfully! Please login');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Products;
use App\Models\Seller;
use App\Models\User;
use Illuminate\Http\Request;

class AdminDashboard extends Controller
{
    // Super Admin
    public function superAdmin_dashboard() {
        return view('admin-dashboard.ruukaze-super.index', [
            'king' => User::where('role', 'super-admin')->first()
        ]);
    }

    public function superAdmin_editProfile() {
        return view('admin-dashboard.ruukaze-super.tools.editProfile', [
            'king' => User::where('role', 'super-admin')->first()
        ]);
    }

    public function superAdmin_createAdmin() {
        return view('admin-dashboard.ruukaze-super.tools.createAdmin', [
            'king' => User::where('role', 'super-admin')->first()
        ]);
    }

    public function createAdmin(Request $request) {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'username' => ['required', 'min:3', 'max:64', 'unique:users'],
            'birthDate' => 'required|date',
            'email' => 'required|email|unique:users',
            'primary_phone_number' => 'required|numeric',
        ]);

        User::create([
            'name' => $validatedData['name'],
            'username' => $validatedData['username'],
            'birthDate' => $validatedData['birthDate'],
            'email' => $validatedData['email'],
            'primary_phone_number' => $validatedData['primary_phone_number'],
            'role' => 'admin',
            'password' => bcrypt(fake()->password())
        ]);

        return redirect('/ZFED5u3QN9x7ykwzqA4s8W/admin')->with('success', 'Admin Created');
    }

    public function superAdmin_user() {
        return view('admin-dashboard.ruukaze-super.user', [
            'users' => User::all()->where('role', 'user')
        ]);
    }

    public function superAdmin_admin() {
        return view('admin-dashboard.ruukaze-super.admin', [
            'users' => User::all()->where('role', 'admin')
        ]);
    }

    public function superAdmin_toko() {
        return view('admin-dashboard.ruukaze-super.toko', [
            'sellers' => Seller::all()
        ]);
    }

    public function superAdmin_produk() {
        return view('admin-dashboard.ruukaze-super.produk', [
            'products' => Products::inRandomOrder()->get()
        ]);
    }

    public function superAdmin_kategori() {
        return view('admin-dashboard.ruukaze-super.kategori', [
            'categories' => Category::orderBy('created_at', 'desc')->get()
        ]);
    }

    public function superAdmin_pesanan() {
        return view('admin-dashboard.ruukaze-super.pesanan');
    }


    // Admin Biasa
    public function admin_dashboard() {
        return view('admin-dashboard.basic.index');
    }

    public function admin_user() {
        return view('admin-dashboard.basic.user', [
            'users' => User::all()->where('role', 'user')
        ]);
    }

    public function admin_toko() {
        return view('admin-dashboard.basic.toko', [
            'sellers' => Seller::all()
        ]);
    }

    public function admin_produk() {
        return view('admin-dashboard.basic.produk', [
            'products' => Products::all()
        ]);
    }

    public function admin_kategori() {
        return view('admin-dashboard.basic.kategori', [
            'categories' => Category::orderBy('created_at', 'desc')->get()
        ]);
    }

    public function admin_pesanan() {
        return view('admin-dashboard.basic.pesanan');
    }
}

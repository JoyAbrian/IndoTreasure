<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminDashboard extends Controller
{
    // Super Admin
    public function superAdmin_dashboard() {
        return view('admin-dashboard.ruukaze-super.index');
    }

    public function superAdmin_user() {
        return view('admin-dashboard.ruukaze-super.user');
    }

    public function superAdmin_admin() {
        return view('admin-dashboard.ruukaze-super.admin');
    }

    public function superAdmin_toko() {
        return view('admin-dashboard.ruukaze-super.toko');
    }

    public function superAdmin_produk() {
        return view('admin-dashboard.ruukaze-super.produk');
    }

    public function superAdmin_kategori() {
        return view('admin-dashboard.ruukaze-super.kategori');
    }

    public function superAdmin_pesanan() {
        return view('admin-dashboard.ruukaze-super.pesanan');
    }


    // Admin Biasa
    public function admin_dashboard() {
        return view('admin-dashboard.basic.index');
    }

    public function admin_user() {
        return view('admin-dashboard.basic.user');
    }

    public function admin_toko() {
        return view('admin-dashboard.basic.toko');
    }

    public function admin_produk() {
        return view('admin-dashboard.basic.produk');
    }

    public function admin_kategori() {
        return view('admin-dashboard.basic.kategori');
    }

    public function admin_pesanan() {
        return view('admin-dashboard.basic.pesanan');
    }
}

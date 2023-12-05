<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SellerDashboard extends Controller
{
    public function show_toko() {
        return view('seller.index');
    }

    public function show_produk() {
        return view('seller.produk');
    }

    public function show_pesanan() {
        return view('seller.pesanan');
    }
}

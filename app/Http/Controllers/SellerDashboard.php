<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class SellerDashboard extends Controller
{
    public function show_toko() {
        return view('seller.index');
    }

    public function show_produk() {
        return view('seller.produk', [
            'products' => Products::all()->where('seller_id', auth()->guard('seller')->user()->id)
        ]);
    }

    public function single_product(Products $product) {
        return view('seller.singleproduk', [
            'products' => $product
        ]);
    }

    public function show_pesanan() {
        return view('seller.pesanan');
    }

    public function destroy(Products $product)
    {
        Products::destroy($product->id);
        return redirect('/my-dashboard/produk')->with('success', 'Product has been deleted!');
    }
}

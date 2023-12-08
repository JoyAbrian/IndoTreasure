<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Products;
use App\Models\Wishlist;
use Illuminate\Http\Request;
use App\Http\Requests\StoreProductsRequest;
use App\Http\Requests\UpdateProductsRequest;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('products', [
            "title" => "Cari Toko",
            "search" => "Cari Produk",
            "products" => Products::inRandomOrder()->paginate(12),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Products $products)
    {
        return view('product', [
            "title" => $products->productName,
            "search" => "Cari produk lain",
            "products" => $products,
            "other" => Products::where('category_id', $products->category_id)
                                ->orWhere('seller_id', $products->seller_id)
                                ->where('id', '!=', $products->id)
                                ->inRandomOrder()
                                ->limit(3)
                                ->get()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function wish(Request $request)
    {
        Wishlist::create([
            'user_id' => auth()->user()->id,
            'product_id' => $request->input('product_id')
        ]);

        return back();
    }

    public function show_wish()
    {
        return view('wishlist', [
            "title" => "Wishlist",
            "search" => "Cari produk lain",
            "wishlist" => Wishlist::all()->where('user_id', auth()->user()->id)
        ]);
    }

    public function show_cart()
    {
        return view('cart', [
            "title" => "Cart",
            "search" => "Cari produk lain",
            "carts" => Cart::all()->where('user_id', auth()->user()->id)
        ]);
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductsRequest $request, Products $products)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Products $products)
    {
        //
    }
}

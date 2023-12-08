<?php

namespace App\Http\Controllers;

use App\Models\Seller;
use App\Http\Requests\StoreSellerRequest;
use App\Http\Requests\UpdateSellerRequest;

class SellerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('sellers', [
            "title" => "Toko",
            "search" => "Cari berdasarkan penjual",
            "sellers" => Seller::paginate(9),
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
    public function store(StoreSellerRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Seller $seller)
    {
        return view('seller', [
            'title' => 'Kategori ' . $seller->name,
            'search' => 'Cari berdasarkan kategori',
            'seller' => $seller,
            'products' => $seller->product()->paginate(12)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Seller $seller)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSellerRequest $request, Seller $seller)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Seller $seller)
    {
        //
    }
}

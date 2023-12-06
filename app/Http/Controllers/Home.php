<?php

namespace App\Http\Controllers;

use App\Models\Seller;
use App\Models\Category;
use App\Models\Products;
use Illuminate\Http\Request;

class Home extends Controller
{
    public function show_home() {
        return view('index', [
            "title" => "Top 1 E-Commerce In Indonesia",
            "search" => "Cari di IndoTreasure",
            "categories" => Category::orderBy('created_at', 'desc')->get(),
            "sellers" => Seller::inRandomOrder()->get(),
            "products" => Products::inRandomOrder()->get()
        ]);
    }
}

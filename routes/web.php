<?php

use App\Models\TopUp;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index', [
        "title" => "Top 1 E-Commerce In Indonesia",
        "search" => "Cari di IndoTreasure"
    ]);
});

Route::get('/top-up', function () {
    return view('top-up.index', [
        "title" => "Top Up",
        "search" => "Cari produk digital"
    ]);
});

Route::get('/top-up/paket-data', function () {
    return view('top-up.paketData', [
        "title" => "Beli Paket Data",
        "search" => "Cari produk digital",
        "topup" => TopUp::all()->where('top_up_category_id', 1)
    ]);
}); 

Route::get('/top-up/pulsa', function () {
    return view('top-up.pulsa', [
        "title" => "Beli Pulsa",
        "search" => "Cari produk digital",
        "topup" => TopUp::all()->where('top_up_category_id', 2)
    ]);
}); 

Route::get('/top-up/telepon', function () {
    return view('top-up.telepon', [
        "title" => "Beli Paket Telepon",
        "search" => "Cari produk digital",
        "topup" => TopUp::all()->where('top_up_category_id', 3)
    ]);
}); 

Route::get('/top-up/roaming', function () {
    return view('top-up.roaming', [
        "title" => "Beli Paket Roaming",
        "search" => "Cari produk digital",
        "topup" => TopUp::all()->where('top_up_category_id', 4)
    ]);
}); 
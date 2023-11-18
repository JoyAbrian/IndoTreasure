<?php

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
    return view('topup', [
        "title" => "Top Up",
        "search" => "Cari produk digital"
    ]);
});

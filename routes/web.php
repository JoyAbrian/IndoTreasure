<?php

use App\Http\Controllers\AdminDashboard;
use App\Http\Controllers\SellerController;
use App\Models\TopUp;
use App\Models\Seller;
use App\Models\Category;
use App\Models\Products;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\SellerDashboard;

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

// Guest / Buyer Section
Route::get('/', function () {
    return view('index', [
        "title" => "Top 1 E-Commerce In Indonesia",
        "search" => "Cari di IndoTreasure",
        "categories" => Category::orderBy('created_at', 'desc')->get(),
        "sellers" => Seller::inRandomOrder()->get(),
        "products" => Products::inRandomOrder()->get()
    ]);
});

// Route::get('/top-up', function () {
//     return view('top-up.index', [
//         "title" => "Top Up",
//         "search" => "Cari produk digital"
//     ]);
// });

// Route::get('/food', function () {
//     return view('foods');
// });

// Route::get('/category', [CategoryController::class, 'index']);
// Route::get('/category/{category:slug}', [CategoryController::class, 'show']);

// Route::get('/seller', [SellerController::class, 'index']);
// Route::get('/seller/{seller:slug}', [SellerController::class, 'show']);

// Route::get('/products', [ProductsController::class, 'index']);
// Route::get('/{products:slug}', [ProductsController::class, 'show']);


// Route::get('/top-up/paket-data', function () {
//     return view('top-up.paketData', [
//         "title" => "Beli Paket Data",
//         "search" => "Cari produk digital",
//         "topup" => TopUp::all()->where('top_up_category_id', 1)
//     ]);
// }); 

// Route::get('/top-up/pulsa', function () {
//     return view('top-up.pulsa', [
//         "title" => "Beli Pulsa",
//         "search" => "Cari produk digital",
//         "topup" => TopUp::all()->where('top_up_category_id', 2)
//     ]);
// }); 

// Route::get('/top-up/telepon', function () {
//     return view('top-up.telepon', [
//         "title" => "Beli Paket Telepon",
//         "search" => "Cari produk digital",
//         "topup" => TopUp::all()->where('top_up_category_id', 3)
//     ]);
// }); 

// Route::get('/top-up/roaming', function () {
//     return view('top-up.roaming', [
//         "title" => "Beli Paket Roaming",
//         "search" => "Cari produk digital",
//         "topup" => TopUp::all()->where('top_up_category_id', 4)
//     ]);
// }); 

// Route::get('/top-up/mobile-legends', function () {
//     return view('top-up.mobilelegends', [
//         "title" => "Top-Up Mobile Legends",
//         "search" => "Cari produk digital",
//         "topup" => TopUp::all()->where('top_up_category_id', 5)
//     ]);
// }); 

// Route::get('/top-up/free-fire', function () {
//     return view('top-up.freefire', [
//         "title" => "Top-Up Free Fire",
//         "search" => "Cari produk digital",
//         "topup" => TopUp::all()->where('top_up_category_id', 6)
//     ]);
// }); 

// Route::get('/top-up/pubg', function () {
//     return view('top-up.pubg', [
//         "title" => "Top-Up PUBG",
//         "search" => "Cari produk digital",
//         "topup" => TopUp::all()->where('top_up_category_id', 7)
//     ]);
// }); 

// Route::get('/top-up/point-blank', function () {
//     return view('top-up.pointblank', [
//         "title" => "Top-Up Point Blank",
//         "search" => "Cari produk digital",
//         "topup" => TopUp::all()->where('top_up_category_id', 8)
//     ]);
// }); 

// Route::get('/top-up/minecraft', function () {
//     return view('top-up.minecraft', [
//         "title" => "Top-Up Minecraft",
//         "search" => "Cari produk digital",
//         "topup" => TopUp::all()->where('top_up_category_id', 9)
//     ]);
// }); 

// Route::get('/top-up/efootball', function () {
//     return view('top-up.efootball', [
//         "title" => "Top-Up eFootball 2024",
//         "search" => "Cari produk digital",
//         "topup" => TopUp::all()->where('top_up_category_id', 10)
//     ]);
// }); 

// Route::get('/top-up/steam', function () {
//     return view('top-up.steam', [
//         "title" => "Beli Steam Wallet",
//         "search" => "Cari produk digital",
//         "topup" => TopUp::all()->where('top_up_category_id', 11)
//     ]);
// }); 

// Route::get('/top-up/playstation', function () {
//     return view('top-up.playstation', [
//         "title" => "Beli PlayStation Gift",
//         "search" => "Cari produk digital",
//         "topup" => TopUp::all()->where('top_up_category_id', 12)
//     ]);
// }); 

// Route::get('/top-up/dana', function () {
//     return view('top-up.dana', [
//         "title" => "Top Up Dana",
//         "search" => "Cari produk digital",
//         "topup" => TopUp::all()->where('top_up_category_id', 13)
//     ]);
// }); 

// Route::get('/top-up/gopay', function () {
//     return view('top-up.gopay', [
//         "title" => "Top Up GoPay",
//         "search" => "Cari produk digital",
//         "topup" => TopUp::all()->where('top_up_category_id', 14)
//     ]);
// }); 

// Route::get('/top-up/ovo', function () {
//     return view('top-up.ovo', [
//         "title" => "Top Up OVO",
//         "search" => "Cari produk digital",
//         "topup" => TopUp::all()->where('top_up_category_id', 15)
//     ]);
// }); 

// Route::get('/top-up/shopee', function () {
//     return view('top-up.shopee', [
//         "title" => "Top Up ShopeePay",
//         "search" => "Cari produk digital",
//         "topup" => TopUp::all()->where('top_up_category_id', 16)
//     ]);
// }); 

// Route::get('/top-up/netflix', function () {
//     return view('top-up.netflix', [
//         "title" => "Subscription Netflix",
//         "search" => "Cari produk digital",
//         "topup" => TopUp::all()->where('top_up_category_id', 17)
//     ]);
// }); 

// Route::get('/top-up/disney', function () {
//     return view('top-up.disney', [
//         "title" => "Subscription Disney+ Hotstar",
//         "search" => "Cari produk digital",
//         "topup" => TopUp::all()->where('top_up_category_id', 18)
//     ]);
// }); 

// Route::get('/top-up/spotify', function () {
//     return view('top-up.spotify', [
//         "title" => "Subscription Spotify",
//         "search" => "Cari produk digital",
//         "topup" => TopUp::all()->where('top_up_category_id', 19)
//     ]);
// }); 

// Route::get('/login', function () {
//     return view('login', [
//         "title" => "Login Page",
//         "search" => "Cari di IndoTreasure",
//     ]);
// }); 

// Route::get('/register', function () {
//     return view('register', [
//         "title" => "Register Page",
//         "search" => "Cari di IndoTreasure",
//     ]);
// }); 

// Seller Section
Route::get('/my-dashboard', [SellerDashboard::class, 'show_toko']);
Route::get('/my-dashboard/produk', [SellerDashboard::class, 'show_produk']);
Route::get('/my-dashboard/pesanan', [SellerDashboard::class, 'show_pesanan']);

// Admin Section
Route::get('/admin-dashboard', [AdminDashboard::class, 'admin_dashboard']);
Route::get('/admin-dashboard/user', [AdminDashboard::class, 'admin_user']);
Route::get('/admin-dashboard/toko', [AdminDashboard::class, 'admin_toko']);
Route::get('/admin-dashboard/produk', [AdminDashboard::class, 'admin_produk']);
Route::get('/admin-dashboard/kategori', [AdminDashboard::class, 'admin_kategori']);
Route::get('/admin-dashboard/pesanan', [AdminDashboard::class, 'admin_pesanan']);

Route::get('/ZFED5u3QN9x7ykwzqA4s8W', [AdminDashboard::class, 'superAdmin_dashboard']);
Route::get('/ZFED5u3QN9x7ykwzqA4s8W/user', [AdminDashboard::class, 'superAdmin_user']);
Route::get('/ZFED5u3QN9x7ykwzqA4s8W/user', [AdminDashboard::class, 'superAdmin_admin']);
Route::get('/ZFED5u3QN9x7ykwzqA4s8W/toko', [AdminDashboard::class, 'superAdmin_toko']);
Route::get('/ZFED5u3QN9x7ykwzqA4s8W/produk', [AdminDashboard::class, 'superAdmin_produk']);
Route::get('/ZFED5u3QN9x7ykwzqA4s8W/kategori', [AdminDashboard::class, 'superAdmin_kategori']);
Route::get('/ZFED5u3QN9x7ykwzqA4s8W/pesanan', [AdminDashboard::class, 'superAdmin_pesanan']);

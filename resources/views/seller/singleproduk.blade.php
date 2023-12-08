@extends('seller.layouts.main')

@section('container')

<section class="produk">
    <style>
        .produk .card {
            width: 444px;
        }

        .produk     body {
            background: #eee;
        }
    </style>
    <div class="d-flex justify-content-center container mt-5">
        <div class="card p-3 bg-white"><i class="fa fa-apple"></i>
            <div class="about-product text-center mt-2"><img src="/{{ $products->image }}" width="300" alt="PP">
                <div>
                    <h4>{{ $products->productName }}</h4>
                    <h6 class="mt-0 text-black-50">{{ $products->seller->name }}</h6>
                </div>
            </div>
            <div class="stats mt-2">
                <div class="d-flex justify-content-between p-price"><span>Rating</span><span>{{ $products->rating }}</span>
                </div>
                <div class="d-flex justify-content-between p-price"><span>Price</span><span>{{ $products->price }}</span></div>
                <div class="d-flex justify-content-between p-price"><span></span><span></span>
                </div>
            </div>
            <div class="d-flex justify-content-between total font-weight-bold mt-4">
                <span>Stok</span><span>{{ $products->quantity }}</span>
            </div>
        </div>
    </div>
</section>

@endsection
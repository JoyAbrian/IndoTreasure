@extends('layouts.main')

@section('container')

<div class="container">
    <h2>Produk</h2>
    <div class="row row-cols-1 row-cols-md-3 g-4">
        @foreach($products as $product)
        <a href="{{ $product->slug }}">
            <div class="col">
                <div class="card">
                    <img src="{{ asset('img/for-seeder/categories/{{ $product->image }}') }}" class="card-img-top" alt="{{ $product->productName }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $product->productName }}</h5>
                    </div>
                </div>
            </div>
        </a>
        @endforeach
    </div>
</div>

@endsection
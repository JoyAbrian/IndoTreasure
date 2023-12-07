@extends('layouts.main')

@section('container')

<div id="carouselExampleIndicators" class="carousel slide">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
            aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
            aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
            aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner rounded">
        <a href="/">
            <div class="carousel-item active">
                <img src="img/promo1.jpg" class="d-block w-90 rounded" alt="promo1">
            </div>
        </a>
        <a href="/top-up">
            <div class="carousel-item">
                <img src="img/promo2.jpg" class="d-block w-90 rounded" alt="promo2">
            </div>
        </a>
        <a href="/food">
            <div class="carousel-item">
                <img src="img/promo3.jpg" class="d-block w-90 rounded" alt="promo3">
            </div>
        </a>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
        data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<div class="container">
    <h2>Categories</h2>
    <div class="row row-cols-1 row-cols-md-3 g-4">
        @foreach($categories as $category)
            <a href="/categories/{{ $category->slug }}">
                <div class="col">
                    <div class="card">
                        <img src="img/for-seeder/categories/{{ $category->images }}" class="card-img-top"
                            alt="CATEGORY">
                        <div class="card-body">
                            <h5 class="card-title">{{ $category->name }}</h5>
                        </div>
                    </div>
                </div>
            </a>
        @endforeach
    </div>
</div>

<div class="container">
    <div class="container">
        <div
            class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">List Toko</h1>
        </div>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            @foreach($sellers as $seller)
                <div class="col">
                    <div class="card h-100">
                        <img src="/{{ $seller->images }}" class="card-img-top img-fluid"
                            style="height: 400px; object-fit: cover" alt="SHOP">
                        <div class="card-body">
                            <h5 class="card-title">{{ $seller->name }}</h5>
                            <p class="card-text">{{ $seller->address }}</p>
                            <div class="d-flex justify-content-end">
                                <a href="" class="badge bg-info"><i class="bi bi-eye"></i> View Store</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>

<div class="container">
    <h2>Product</h2>
    <div class="row row-cols-1 row-cols-md-3 g-4">
        @foreach($products as $product)
            <a href="/{{ $product->slug }}">
                <div class="col">
                    <div class="card">
                        <img src="/{{ $product->image }}" class="card-img-top"
                            alt="PRODUCT">
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

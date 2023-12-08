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

<section class="kategori" style="background-color: #eee">
    <div class="container mt-100">
        <style>
            .kategori .mt-100 {
                margin-top: 100px;
            }

            .kategori .card {
                border-radius: 7px !important;
                border-color: #e1e7ec;
            }

            .kategori .mb-30 {
                margin-bottom: 30px !important;
            }

            .kategori .card-img-tiles {
                display: block;
                border-bottom: 1px solid #e1e7ec;
            }

            .kategori a {
                color: #0da9ef;
                text-decoration: none !important;
            }

            .kategori .card-img-tiles>.inner {
                display: table;
                width: 100%;
            }

            .kategori .card-img-tiles .main-img,
            .kategori .card-img-tiles .thumblist {
                display: table-cell;
                width: 65%;
                padding: 15px;
                vertical-align: middle;
            }

            .kategori .card-img-tiles .main-img>img:last-child,
            .kategori .card-img-tiles .thumblist>img:last-child {
                margin-bottom: 0;
            }

            .kategori .card-img-tiles .main-img>img,
            .kategori .card-img-tiles .thumblist>img {
                display: block;
                width: 100%;
                margin-bottom: 6px;
            }

            .kategori .thumblist {
                width: 35%;
                border-left: 1px solid #e1e7ec !important;
                display: table-cell;
                width: 65%;
                padding: 15px;
                vertical-align: middle;
            }

            .kategori .card-img-tiles .thumblist>img {
                display: block;
                width: 100%;
                margin-bottom: 6px;
            }

            .kategori .btn-group-sm>.btn,
            .kategori .btn-sm {
                padding: .45rem .5rem !important;
                font-size: .875rem;
                line-height: 1.5;
                border-radius: .2rem;
            }

        </style>

        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <a href="/category" style="text-decoration: none; color:#000"><h1 class="h2">Categories</h1></a>
        </div>
        <div class="row">
            @foreach($categories as $category)
                <div class="col-md-4 col-sm-6">
                    <div class="card mb-30"><a class="card-img-tiles" data-abc="true">
                            <div class="inner">
                                <div class="main-img"><img src="/{{ $category->images }}" style="height: 300px"
                                        alt="CATEGORY"></div>
                            </div>
                        </a>
                        <div class="card-body text-center">
                            <h4 class="card-title">{{ $category->name }}</h4>
                            <a class="btn btn-outline-primary btn-sm" href="/category/{{ $category->slug }}" data-abc="true">View Details</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<section class="seller">
    <style>
        .seller {
            color: black;
            overflow-x: hidden;
            background-color: white;
            background-repeat: no-repeat;
        }

        .seller .line {
            height: 1px;
            background-color: #EEEEEE;
            width: 100%;
            margin: 35px 0px;
        }

        .seller .card {
            width: 100%; /* Adjusted card width to fill the entire row */
            margin-bottom: 20px; /* Added margin between cards */
        }

        .seller .user-img {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            cursor: pointer;
        }

        .seller .fa-star.active {
            color: #E91E63;
        }

        .seller .btn-pink {
            background-color: #E91E63;
            color: #fff;
            height: 70px;
            padding: 20px 30px;
            margin-top: 15px;
        }

        .seller .btn-pink:hover {
            background-color: #D81B60;
        }

        .seller .image-bg {
            width: 100px;
        }

        .seller .fit-image {
            object-fit: cover;
            width: 100%;
        }

        .seller .prod-pic {
            width: 100px;
            height: 100px;
            cursor: pointer;
        }

        .seller .prod-bg {
            width: 31.33%;
            height: 110px;
            background-color: #E0E0E0;
            margin-bottom: 10px;
        }

        .seller .fat-img {
            width: 94px;
            height: 100px;
        }

        .seller .more {
            width: 31.33%;
            height: 110px;
            color: #fff;
            background-color: #000;
            cursor: pointer;
        }
    </style>
    <div class="container mt-100">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <a href="/seller" style="text-decoration: none; color:#000"><h1 class="h2">Featured Sellers</h1></a>
        </div>
        <div class="container-fluid py-5 mx-auto">
            <div class="row">
                @foreach ($sellers as $seller)
                <div class="col-md-4">
                    <div class="card py-4 px-4">
                        <div class="row justify-content-start px-3">
                            <div class="image-bg mr-3">
                                <img class="user-img fit-image" src="/{{ $seller->images }}">
                            </div>
                            <div class="text-left">
                                <h2>{{ $seller->name }}</h2>
                                <h6>{{ $seller->product->count() }} PRODUCTS - {{ $seller->category->name }}</h6>
                            </div>
                            <a href="/seller/{{ $seller->slug }}" class="btn btn-pink ml-auto">VIEW STORE</a>
                        </div>
                        <div class="line"></div>
                        <div class="row d-flex justify-content-between px-3">
                            <div class="prod-bg text-center py-1">
                                @php
                                $product = $seller->product->first();
                                @endphp
                            
                                @if($product)
                                    <img class="prod-pic" src="/{{ $product->image }}" alt="TIDAK TERSEDIA">
                                @else
                                    <img class="prod-pic" src="/img/default-toko.png" alt="TIDAK TERSEDIA">
                                @endif                
                            </div>
                            <div class="prod-bg text-center py-1">
                                @php
                                $product = $seller->product->skip(1)->first();
                                @endphp
                            
                                @if($product)
                                    <img class="prod-pic" src="/{{ $product->image }}" alt="TIDAK TERSEDIA">
                                @else
                                    <img class="prod-pic" src="/img/default-toko.png" alt="TIDAK TERSEDIA">
                                @endif                
                            </div>
                            <div class="more text-center pt-3">
                                <h1 class="mb-0 dk-none dk-sm-block"><strong>+{{ $seller->product->count() - 1 }}</strong></h1>
                                <h5>ITEMS</h5>
                            </div>
                        </div>
                            </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

<section class="mt-5" style="background-color: #eee;">
    <div class="container py-5">
        <div
            class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <a href="/products" style="text-decoration: none; color:#000"><h1 class="h2">Featured Products</h1></a>
        </div>
        <div class="row">
            @foreach($products as $product)
                <div class="col-md-12 col-lg-4 mb-5 mb-lg-0">
                    <div class="card h-100">
                        <a href="/products/{{ $product->slug }}">
                            <img src="/{{ $product->image }}" class="card-img-top img-fluid" style="height: 400px"
                                alt="Laptop" />
                        </a>
                        <div class="card-body d-flex flex-column">
                            <div class="d-flex justify-content-between">
                                <p class="small text-muted"><a href="/category/{{ $product->category->slug }}"
                                        class="text-muted">{{ $product->category->name }}</a></p>
                                <p class="small text-danger"><s>Rp.
                                        {{ number_format($product->price + 50000, 0, ',', '.') }}</s>
                                </p>
                            </div>

                            <div class="d-flex justify-content-between mb-3">
                                <h5 class="mb-0 text-nowrap text-truncate" style="max-width: 40%;">
                                    {{ substr($product->productName, 0, 23) . '...' }}
                                </h5>
                                <h5 class="text-dark mb-0 d-inline-block overflow-hidden text-nowrap text-truncate"
                                    style="max-width: 80%;">Rp.
                                    {{ number_format($product->price, 0, ',', '.') }}
                                </h5>
                            </div>

                            <div class="d-flex justify-content-between mb-2">
                                <p class="text-muted mb-0">Available: <span
                                        class="fw-bold">{{ $product->quantity }}</span></p>
                            </div>
                            <div class="ms-auto">
                                <form action="/wish" method="POST">
                                    @csrf
                                    <input type="hidden" name="product_id" value="{{ $product->id }}">
                                    <button type="submit" style="color: red"><i class="bi bi-heartbreak"></i></button>
                                </form>
                                <form action="/addCart">
                                    <button type="submit" style="color: black"><i class="bi bi-cart"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

@endsection

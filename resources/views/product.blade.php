@extends('layouts.main')

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
            <div class="ms-auto">
                <form action="/wish" method="POST">
                    @csrf
                    <input type="hidden" name="product_id" value="{{ $products->id }}">
                    <button type="submit" style="color: red"><i class="bi bi-heartbreak"></i> Add To Wishlist</button>
                </form>
                <form action="/addCart">
                    <button type="submit" style="color: black"><i class="bi bi-cart"></i> Add To Cart</button>
                </form>
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
            @foreach($other as $oth)
                <div class="col-md-12 col-lg-4 mb-5 mb-lg-0">
                    <div class="card h-100">
                        <a href="/products/{{ $oth->slug }}">
                            <img src="/{{ $oth->image }}" class="card-img-top img-fluid" style="height: 400px"
                                alt="Laptop" />
                        </a>
                        <div class="card-body d-flex flex-column">
                            <div class="d-flex justify-content-between">
                                <p class="small text-muted"><a href="/category/{{ $oth->category->slug }}"
                                        class="text-muted">{{ $oth->category->name }}</a></p>
                                <p class="small text-danger"><s>Rp.
                                        {{ number_format($oth->price + 50000, 0, ',', '.') }}</s>
                                </p>
                            </div>

                            <div class="d-flex justify-content-between mb-3">
                                <h5 class="mb-0 text-nowrap text-truncate" style="max-width: 40%;">
                                    {{ substr($oth->productName, 0, 23) . '...' }}
                                </h5>
                                <h5 class="text-dark mb-0 d-inline-block overflow-hidden text-nowrap text-truncate"
                                    style="max-width: 80%;">Rp.
                                    {{ number_format($oth->price, 0, ',', '.') }}
                                </h5>
                            </div>

                            <div class="d-flex justify-content-between mb-2">
                                <p class="text-muted mb-0">Available: <span
                                        class="fw-bold">{{ $oth->quantity }}</span></p>
                            </div>
                            <div class="ms-auto">
                                <form action="/wish" method="POST">
                                    @csrf
                                    <input type="hidden" name="product_id" value="{{ $oth->id }}">
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

@extends('layouts.main')

@section('container')

<div class="container-xl px-4 mt-4">
    <div class="row">
        <div class="col-xl-4">
            <div class="card mb-4 mb-xl-0">
                <div class="card-header">Profile Picture</div>
                <div class="card-body text-center">
                    <img class="img-account-profile rounded-circle mb-2" src="/{{ $seller->images }}" alt="PP">
                </div>
            </div>
        </div>
        <div class="col-xl-8">
            <div class="card mb-4">
                <div class="card-header">Detail Toko</div>
                <div class="card-body">
                    <div class="mb-3">
                        <label class="small mb-1" for="inputFullname">Full Name</label>
                        <input class="form-control" id="inputFullname" type="text" placeholder="Enter your Full Name"
                            value="{{ $seller->name }}" disabled>
                    </div>
                    <div class="mb-3">
                        <label class="small mb-1" for="inputUsername">Username</label>
                        <input class="form-control" id="inputUsername" type="text" placeholder="Enter your username"
                            value="{{ $seller->slug }}" disabled>
                    </div>
                    <div class="mb-3">
                        <label class="small mb-1" for="inputEmailAddress">Email address</label>
                        <input class="form-control" id="inputEmailAddress" type="email"
                            placeholder="Enter your email address" value="{{ $seller->email }}" disabled>
                    </div>
                    <div class="mb-3">
                        <label class="small mb-1" for="inputPhone">Phone number</label>
                        <input class="form-control" id="inputPhone" type="tel" placeholder="Enter your phone number"
                            value="{{ $seller->phone_number }}" disabled>
                    </div>
                    <div class="row gx-3 mb-3">
                        <div class="col-md-6">
                            <label class="small mb-1" for="inputBirthday">Category</label>
                            <input class="form-control" id="inputBirthday" type="text" name="birthday"
                                placeholder="Enter your birthday" value="{{ $seller->category->name }}" disabled>
                        </div>
                        <div class="col-md-6">
                            <label class="small mb-1" for="inputLocation">Location</label>
                            <input class="form-control" id="inputLocation" type="enum" placeholder="Enter your location"
                                value="{{ $seller->address }}" disabled>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

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

@extends('layouts.main')

@section('container')

<section>
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
                        <img src="/{{ $product->image }}" class="card-img-top img-fluid" style="height: 400px" alt="PP" />
                    </a>
                    <div class="card-body d-flex flex-column">
                        <div class="d-flex justify-content-between">
                            <p class="small text-muted"><a href="/category/{{ $product->category->slug }}" class="text-muted">{{ $product->category->name }}</a></p>
                            <p class="small text-danger"><s>Rp. {{ number_format($product->price + 50000, 0, ',', '.') }}</s></p>
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
                            <a href="/wishlist/{{ $product->id }}" style="color: red"><i
                                    class="bi bi-heartbreak"></i></a>
                            <a href="/cart/{{ $product->id }}" style="color: black"><i class="bi bi-cart"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            {{ $products->links() }}
        </div>
    </div>
</section>

@endsection
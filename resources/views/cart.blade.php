@extends('layouts.main')

@section('container')

<section class="h-100 h-custom" style="background-color: #eee;">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col">
                <div class="card">
                    <div class="card-body p-4">

                        <form action="/cart" method="POST">
                            <div class="row">

                                <div class="col-lg-7">
                                    <h5 class="mb-3"><a href="/" class="text-body">
                                            <i class="bi bi-arrow-left-short"></i> Continue shopping</a></h5>
                                    <hr>
                                    @foreach($carts as $cart)
                                        <div class="card mb-3">
                                            <div class="card-body">
                                                <div class="d-flex justify-content-between">
                                                    <div class="d-flex flex-row align-items-center">
                                                        <div>
                                                            <img src="{{ $cart->product->image }}"
                                                                class="img-fluid rounded-3" alt="Shopping item"
                                                                style="width: 65px;">
                                                        </div>
                                                        <div class="ms-3">
                                                            <h6>{{ $cart->product->productName }}</h6>
                                                            <p class="small mb-0">
                                                                {{ $cart->product->seller->name }}</p>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex flex-row align-items-center">
                                                        <div style="width: 50px;">
                                                            <h5 class="fw-normal mb-0">1</h5>
                                                        </div>
                                                        <div style="width: 80px;">
                                                            <h5 class="mb-0">{{ $cart->product->price }}</h5>
                                                        </div>
                                                        <a href="#!" style="color: #cecece;"><i
                                                                class="fas fa-trash-alt"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                <div class="col-lg-5">

                                    <div class="card bg-primary text-white rounded-3">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between align-items-center mb-4">
                                                <h5 class="mb-0">Card details</h5>
                                                <img src="{{ auth()->user()->photo }}"
                                                    class="img-fluid rounded-3" style="width: 45px;" alt="Avatar">
                                            </div>

                                            <form class="mt-4">
                                                <div class="form-outline form-white mb-4">
                                                    <input type="text" id="typeName"
                                                        class="form-control form-control-lg" siez="17"
                                                        placeholder="Cardholder's Name" />
                                                    <label class="form-label" for="typeName">Cardholder's Name</label>
                                                </div>

                                                <div class="form-outline form-white mb-4">
                                                    <input type="text" id="typeText"
                                                        class="form-control form-control-lg" siez="17"
                                                        placeholder="1234 5678 9012 3457" minlength="19"
                                                        maxlength="19" />
                                                    <label class="form-label" for="typeText">Card Number</label>
                                                </div>

                                                <div class="row mb-4">
                                                    <div class="col-md-6">
                                                        <div class="form-outline form-white">
                                                            <input type="text" id="typeExp"
                                                                class="form-control form-control-lg"
                                                                placeholder="MM/YYYY" size="7" id="exp" minlength="7"
                                                                maxlength="7" />
                                                            <label class="form-label" for="typeExp">Expiration</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-outline form-white">
                                                            <input type="password" id="typeText"
                                                                class="form-control form-control-lg"
                                                                placeholder="&#9679;&#9679;&#9679;" size="1"
                                                                minlength="3" maxlength="3" />
                                                            <label class="form-label" for="typeText">Cvv</label>
                                                        </div>
                                                    </div>
                                                </div>

                                            </form>

                                            <hr class="my-4">

                                            <div class="d-flex justify-content-between">
                                                <p class="mb-2">Subtotal</p>
                                                <p class="mb-2">Rp.
                                                    {{ number_format($carts->sum('product.price'), 0, ',', '.') }}
                                                </p>
                                            </div>

                                            <div class="d-flex justify-content-between">
                                                <p class="mb-2">Shipping</p>
                                                <p class="mb-2">Rp. 30.000</p>
                                            </div>

                                            <div class="d-flex justify-content-between mb-4">
                                                <p class="mb-2">Total(Incl. taxes)</p>
                                                <p class="mb-2">Rp.
                                                    {{ number_format($carts->sum('product.price') + 40000, 0, ',', '.') }}
                                                </p>
                                            </div>

                                            <button type="submit" class="btn btn-info btn-block btn-lg">
                                                <div class="d-flex justify-content-between">
                                                    <span>Checkout <i
                                                            class="fas fa-long-arrow-alt-right ms-2"></i></span>
                                                </div>
                                            </button>
                        </form>
                    </div>
                </div>

            </div>

        </div>

    </div>
    </div>
    </div>
    </div>
    </div>
</section>

@endsection

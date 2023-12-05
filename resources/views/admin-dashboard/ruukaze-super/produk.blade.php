@extends('admin-dashboard.ruukaze-super.layouts.main')

@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <div class="card mb-3" style="max-width: 540px;">
        @foreach ($products as $product)
        <div class="row g-0 mb-5">
            <div class="col-md-4">
                <img src="img/for-seeder/product/{{ $product->image }}" class="img-fluid rounded-start" alt="{{ $product->productName }}">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">{{ $product->productName }}</h5>
                    <p class="card-text">{{ $product->seller->name }}</p>
                    <p class="card-text"><small class="text-body-secondary">Rp. {{ $product->price }}</small></p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection
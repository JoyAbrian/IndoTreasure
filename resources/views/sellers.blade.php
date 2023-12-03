@extends('layouts.main')

@section('container')

<div class="container">
    <h2>Seller</h2>
    <div class="row row-cols-1 row-cols-md-3 g-4">
        @foreach($sellers as $seller)
        <a href="/seller/{{ $seller->slug }}">
            <div class="col">
                <div class="card">
                    <img src="img/for-seeder/seller/{{ $seller->images }}" class="card-img-top" alt="{{ $seller->name }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $seller->name }}</h5>
                    </div>
                </div>
            </div>
        </a>
        @endforeach
    </div>
</div>

@endsection
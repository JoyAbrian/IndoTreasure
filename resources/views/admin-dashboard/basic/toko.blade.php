@extends('admin-dashboard.basic.layouts.main')

@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <div class="card mb-3" style="max-width: 540px;">
        @foreach ($sellers as $toko)            
        <div class="row g-0">
            <div class="col-md-4">
                <img src="img/for-seeder/seller/{{ $toko->images }}" class="img-fluid rounded-start" alt="{{ $toko->name }}">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">{{ $toko->name }}</h5>
                    <p class="card-text">{{ $toko->bio }}</p>
                    <p class="card-text"><small class="text-body-secondary">{{ $toko->address }}</small></p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection

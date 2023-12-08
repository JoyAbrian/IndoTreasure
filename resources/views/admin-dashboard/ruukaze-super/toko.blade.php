@extends('admin-dashboard.ruukaze-super.layouts.main')

@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">List Toko</h1>
</div>

@if(session()->has('success'))
    <div class="alert alert-success col-lg-8" role="alert">
        {{ session('success') }}
    </div>
@endif

<div class="row row-cols-1 row-cols-md-3 g-4">
    @foreach ($sellers as $seller)
    <div class="col">
        <a href="/seller/{{ $seller->slug }}">
            <div class="card h-100">
                <img src="/{{ $seller->images }}" class="card-img-top" style="height: 400px; object-fit: cover" alt="{{ $seller->name }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $seller->name }}</h5>
                    <p class="card-text">{{ $seller->address }}</p>
                    <div class="d-flex justify-content-end">
                        <a href="" class="badge bg-info"><i class="bi bi-eye"></i> View</a>
                        <form action="" method="post" class="d-inline ml-2">
                            <button class="badge bg-danger border-0" onclick="return confirm('Are you sure?')">
                                <i class="bi bi-ban"></i> Ban</button>
                        </form>
                    </div>
                </div>
            </div>
        </a>
    </div>
    @endforeach
</div>

@endsection
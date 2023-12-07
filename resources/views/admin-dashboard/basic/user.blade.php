@extends('admin-dashboard.basic.layouts.main')

@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">List User</h1>
</div>

@if(session()->has('success'))
    <div class="alert alert-success col-lg-8" role="alert">
        {{ session('success') }}
    </div>
@endif

<div class="row row-cols-1 row-cols-md-3 g-4">
    @foreach ($users as $user)
    <div class="col">
        <div class="card h-100">
            <div class="card-body d-flex align-items-center">
                <img src="/img/pp-default.png" width="100" class="img-thumbnail rounded-circle" alt="PP">
                <div class="ml-3">
                    <h5 class="card-title">{{ $user->name }}</h5>
                    <p class="card-text">{{ $user->primary_phone_number }}</p>
                    <div class="d-flex align-items-center mt-2">
                        <a href="" class="badge bg-info"><i class="bi bi-eye"></i> View</a>
                        <form action="" method="post" class="d-inline ml-2">
                            <button class="badge bg-danger border-0" onclick="return confirm('Are you sure?')">
                                <i class="bi bi-ban"></i> Ban</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>

@endsection
@extends('admin-dashboard.basic.layouts.main')

@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">List Kategori</h1>
</div>

@if(session()->has('success'))
    <div class="alert alert-success col-lg-8" role="alert">
        {{ session('success') }}
    </div>
@endif

<div class="table-responsive small col-lg-12">
    <a href="" class="btn btn-primary mb-3"><i class="bi bi-plus"></i> Create new category</a>
    <table class="table table-striped table-sm">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Kategori</th>
                <th scope="col">Jumlah Kategori (Toko)</th>
                <th scope="col">Jumlah Kategori (Produk)</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($categories as $category)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>
                        <center>
                            <div class="card mb-3" style="max-width: 540px;">
                                <div class="row g-0">
                                    <div class="col-md-4">
                                        <img src="/img/noImage.png" class="img-fluid rounded-start w-10" alt="{{ $category->name }}">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h5 class="card-title">{{ $category->name }}</h5>
                                            <p class="card-text">{{ $category->description }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </center>
                    </td>
                    <td>{{ $category->seller->count() }}</td>
                    <td>{{ $category->product->count() }}</td>
                    <td>
                        <a href="" class="badge bg-info"><i
                                class="bi bi-eye"></i> View</a><br>
                        <a href="" class="badge bg-warning"><i
                                class="bi bi-pen-fill"></i></i> Edit</a><br>
                        <form action="" method="post" class="d-inline">
                            <button class="badge bg-danger border-0" onclick="return confirm('Are you sure?')">
                                <i class="bi bi-trash"></i> Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
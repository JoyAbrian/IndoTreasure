@extends('admin-dashboard.basic.layouts.main')

@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">List Produk</h1>
</div>

@if(session()->has('success'))
    <div class="alert alert-success col-lg-8" role="alert">
        {{ session('success') }}
    </div>
@endif

<div class="table-responsive small col-lg-12">
    <table class="table table-striped table-sm">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Produk</th>
                <th scope="col">Kategori</th>
                <th scope="col">Jumlah Terjual</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $produk)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>
                        <div class="card mb-3" style="max-width: 540px;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="/img/noImage.png" class="img-fluid rounded-start w-10" alt="IMAGES">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $produk->productName }}</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                    <td>{{ $produk->category->name }}</td>
                    <td>{{ $produk->payment->count() }}</td>
                    <td>
                        <a href="" class="badge bg-info"><i
                                class="bi bi-eye"></i> View</a><br>
                        <form action="" method="post" class="d-inline">
                            @method('delete')
                            @csrf
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

@extends('layouts.main')

@section('container')

<div class="container">
    <h2>Categories</h2>
    <div class="row row-cols-1 row-cols-md-3 g-4">
        @foreach($categories as $category)
        <a href="/categories/{{ $category->slug }}">
            <div class="col">
                <div class="card">
                    <img src="img/for-seeder/categories/{{ $category->images }}" class="card-img-top" alt="{{ $category->name }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $category->name }}</h5>
                    </div>
                </div>
            </div>
        </a>
        @endforeach
    </div>
</div>

@endsection
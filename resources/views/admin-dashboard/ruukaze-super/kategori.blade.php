@extends('admin-dashboard.ruukaze-super.layouts.main')

@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <div class="card mb-3" style="max-width: 540px;">
    @foreach($categories as $category)
        <div class="row g-0">
            <div class="col-md-4">
                <img src="img/for-seeder/categories/{{ $category->images }}" class="img-fluid rounded-start" alt="{{ $category->name }}">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">{{ $category->name }}</h5>
                    <p class="card-text">{{ $category->description }}</p>
                </div>
            </div>
        </div>
    @endforeach
    </div>
</div>

@endsection
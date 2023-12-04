@extends('layouts.main')

@section('container')

<div class="container">
    <h2>{{ $products->productName }}</h2>
    <img src="img/for-seeder/product/{{ $products->image }}" alt="{{ $products->name }}">
    <h2>{{ $products->price }}</h2>
    <h2>{{ $products->description }}</h2>
    <h2>{{ $products->notes }}</h2>
    <h2>{{ $products->quantity }}</h2>
    <h2>{{ $products->rating }}</h2>
</div>

@endsection
@extends('layouts.main')

@section('container')

<section class="seller">
    <style>
        .seller {
            color: black;
            overflow-x: hidden;
            background-color: white;
            background-repeat: no-repeat;
        }

        .seller .line {
            height: 1px;
            background-color: #EEEEEE;
            width: 100%;
            margin: 35px 0px;
        }

        .seller .card {
            width: 100%; /* Adjusted card width to fill the entire row */
            margin-bottom: 20px; /* Added margin between cards */
        }

        .seller .user-img {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            cursor: pointer;
        }

        .seller .fa-star.active {
            color: #E91E63;
        }

        .seller .btn-pink {
            background-color: #E91E63;
            color: #fff;
            height: 70px;
            padding: 20px 30px;
            margin-top: 15px;
        }

        .seller .btn-pink:hover {
            background-color: #D81B60;
        }

        .seller .image-bg {
            width: 100px;
        }

        .seller .fit-image {
            object-fit: cover;
            width: 100%;
        }

        .seller .prod-pic {
            width: 100px;
            height: 100px;
            cursor: pointer;
        }

        .seller .prod-bg {
            width: 31.33%;
            height: 110px;
            background-color: #E0E0E0;
            margin-bottom: 10px;
        }

        .seller .fat-img {
            width: 94px;
            height: 100px;
        }

        .seller .more {
            width: 31.33%;
            height: 110px;
            color: #fff;
            background-color: #000;
            cursor: pointer;
        }
    </style>
    <div class="container mt-100">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">List Sellers</h1>
        </div>
        <div class="container-fluid py-5 mx-auto">
            <div class="row">
                @foreach ($sellers as $seller)
                <div class="col-md-4">
                    <div class="card py-4 px-4">
                        <div class="row justify-content-start px-3">
                            <div class="image-bg mr-3">
                                <img class="user-img fit-image" src="/{{ $seller->images }}">
                            </div>
                            <div class="text-left">
                                <h2>{{ $seller->name }}</h2>
                                <h6>{{ $seller->product->count() }} PRODUCTS - {{ $seller->category->name }}</h6>
                            </div>
                            <div class="btn btn-pink ml-auto">VIEW STORE</div>
                        </div>
                        <div class="line"></div>
                        <div class="row d-flex justify-content-between px-3">
                            <div class="prod-bg text-center py-1">
                                @php
                                $product = $seller->product->first();
                                @endphp
                            
                                @if($product)
                                    <img class="prod-pic" src="/{{ $product->image }}" alt="TIDAK TERSEDIA">
                                @else
                                    <img class="prod-pic" src="/img/default-toko.png" alt="TIDAK TERSEDIA">
                                @endif                
                            </div>
                            <div class="prod-bg text-center py-1">
                                @php
                                $product = $seller->product->skip(1)->first();
                                @endphp
                            
                                @if($product)
                                    <img class="prod-pic" src="/{{ $product->image }}" alt="TIDAK TERSEDIA">
                                @else
                                    <img class="prod-pic" src="/img/default-toko.png" alt="TIDAK TERSEDIA">
                                @endif                
                            </div>
                            <div class="more text-center pt-3">
                                <h1 class="mb-0 dk-none dk-sm-block"><strong>+{{ $seller->product->count() - 1 }}</strong></h1>
                                <h5>ITEMS</h5>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                {{ $sellers->links() }}
            </div>
        </div>
    </div>
</section>

@endsection
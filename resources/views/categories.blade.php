@extends('layouts.main')

@section('container')

<section class="kategori">
    <div class="container mt-50">
        <style>
            .kategori .mt-100 {
                margin-top: 100px;
            }

            .kategori .card {
                border-radius: 7px !important;
                border-color: #e1e7ec;
            }

            .kategori .mb-30 {
                margin-bottom: 30px !important;
            }

            .kategori .card-img-tiles {
                display: block;
                border-bottom: 1px solid #e1e7ec;
            }

            .kategori a {
                color: #0da9ef;
                text-decoration: none !important;
            }

            .kategori .card-img-tiles>.inner {
                display: table;
                width: 100%;
            }

            .kategori .card-img-tiles .main-img,
            .kategori .card-img-tiles .thumblist {
                display: table-cell;
                width: 65%;
                padding: 15px;
                vertical-align: middle;
            }

            .kategori .card-img-tiles .main-img>img:last-child,
            .kategori .card-img-tiles .thumblist>img:last-child {
                margin-bottom: 0;
            }

            .kategori .card-img-tiles .main-img>img,
            .kategori .card-img-tiles .thumblist>img {
                display: block;
                width: 100%;
                margin-bottom: 6px;
            }

            .kategori .thumblist {
                width: 35%;
                border-left: 1px solid #e1e7ec !important;
                display: table-cell;
                width: 65%;
                padding: 15px;
                vertical-align: middle;
            }

            .kategori .card-img-tiles .thumblist>img {
                display: block;
                width: 100%;
                margin-bottom: 6px;
            }

            .kategori .btn-group-sm>.btn,
            .kategori .btn-sm {
                padding: .45rem .5rem !important;
                font-size: .875rem;
                line-height: 1.5;
                border-radius: .2rem;
            }

        </style>

        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <a href="/category" style="text-decoration: none; color:#000"><h1 class="h2">Categories</h1></a>
        </div>
        <div class="row">
            @foreach($categories as $category)
                <div class="col-md-4 col-sm-6">
                    <div class="card mb-30"><a class="card-img-tiles" href="#" data-abc="true">
                            <div class="inner">
                                <div class="main-img"><img src="/{{ $category->images }}" style="height: 300px"
                                        alt="CATEGORY"></div>
                            </div>
                        </a>
                        <div class="card-body text-center">
                            <h4 class="card-title">{{ $category->name }}</h4>
                            <a class="btn btn-outline-primary btn-sm" href="/category/{{ $category->slug }}" data-abc="true">View Details</a>
                        </div>
                    </div>
                </div>
            @endforeach
            {{ $categories->links() }}
        </div>
    </div>
</section>

@endsection
@extends('layouts.main')

@section('container')

<div id="carouselExampleIndicators" class="carousel slide">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
            aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
            aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
            aria-label="Slide 3"></button>
    </div>
    <center>
        <div class="carousel-inner rounded">
            <a href="/">
                <div class="carousel-item active">
                    <img src="img/promo1.jpg" class="d-block w-80" alt="promo1">
                </div>
            </a>
            <a href="/top-up">
                <div class="carousel-item">
                    <img src="img/promo2.jpg" class="d-block w-80" alt="promo2">
                </div>
            </a>
            <a href="/promo">
                <div class="carousel-item">
                    <img src="img/promo3.jpg" class="d-block w-80" alt="promo3">
                </div>
            </a>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </center>
</div>

@endsection
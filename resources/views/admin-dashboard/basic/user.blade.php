@extends('admin-dashboard.basic.layouts.main')

@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <div class="card mb-3" style="max-width: 540px;">
        @foreach ($users as $user)            
        <div class="row g-0">
            <div class="col-md-4">
                <img src="{{ $user->photo }}" class="img-fluid rounded-start" alt="{{ $user->username }}">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">{{ $user->name }}</h5>
                    <p class="card-text">{{ $user->username }}</p>
                    <p class="card-text"><small class="text-body-secondary">{{ $user->primary_phone_number }}</small></p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection
@extends('seller.layouts.main')

@section('container')

<div class="container-xl px-4 mt-4">
    <div class="row">
        <div class="col-xl-4">
            <div class="card mb-4 mb-xl-0">
                <div class="card-header">Profile Picture</div>
                <div class="card-body text-center">
                    <img class="img-account-profile rounded-circle mb-2" src="/{{ auth()->guard('seller')->user()->images }}" alt="PP">
                </div>
            </div>
        </div>
        <div class="col-xl-8">
            <div class="card mb-4">
                <div class="card-header">Detail Toko</div>
                <div class="card-body">
                    <div class="mb-3">
                        <label class="small mb-1" for="inputFullname">Full Name</label>
                        <input class="form-control" id="inputFullname" type="text" placeholder="Enter your Full Name"
                            value="{{ auth()->guard('seller')->user()->name }}" disabled>
                    </div>
                    <div class="mb-3">
                        <label class="small mb-1" for="inputUsername">Username</label>
                        <input class="form-control" id="inputUsername" type="text" placeholder="Enter your username"
                            value="{{ auth()->guard('seller')->user()->slug }}" disabled>
                    </div>
                    <div class="mb-3">
                        <label class="small mb-1" for="inputEmailAddress">Email address</label>
                        <input class="form-control" id="inputEmailAddress" type="email"
                            placeholder="Enter your email address" value="{{ auth()->guard('seller')->user()->email }}" disabled>
                    </div>
                    <div class="mb-3">
                        <label class="small mb-1" for="inputPhone">Phone number</label>
                        <input class="form-control" id="inputPhone" type="tel" placeholder="Enter your phone number"
                            value="{{ auth()->guard('seller')->user()->phone_number }}" disabled>
                    </div>
                    <div class="row gx-3 mb-3">
                        <div class="col-md-6">
                            <label class="small mb-1" for="inputBirthday">Category</label>
                            <input class="form-control" id="inputBirthday" type="text" name="birthday"
                                placeholder="Enter your birthday" value="{{ auth()->guard('seller')->user()->category->name }}" disabled>
                        </div>
                        <div class="col-md-6">
                            <label class="small mb-1" for="inputLocation">Location</label>
                            <input class="form-control" id="inputLocation" type="enum" placeholder="Enter your location"
                                value="{{ auth()->guard('seller')->user()->address }}" disabled>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
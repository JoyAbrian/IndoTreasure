@extends('admin-dashboard.ruukaze-super.layouts.main')

@section('container')

<div class="container-xl px-4 mt-4">
    <div class="row">
        <div class="col-xl-4">
            <div class="card mb-4 mb-xl-0">
                <div class="card-header">Profile Picture</div>
                <form method="POST">
                @csrf
                <div class="card-body text-center">
                    <img class="img-account-profile rounded-circle mb-2"
                        src="http://bootdey.com/img/Content/avatar/avatar1.png" alt="PP">
                    <div class="small font-italic text-muted mb-4">Format: JPG, PNG; Max size: 5 MB</div>
                    <button class="btn btn-primary" type="button"><i class="bi bi-cloud-upload"></i> Upload new image</button>
                </div>
            </div>
        </div>
        <div class="col-xl-8">
            <div class="card mb-4">
                <div class="card-header">Buat Admin</div>
                <div class="card-body">
                        <div class="mb-3">
                            <label class="small mb-1" for="name">Full Name</label>
                            <input class="form-control" id="name" type="text" placeholder="Enter your Full Name" name="name" value="{{ old('name') }}" required>
                            @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror        
                        </div>
                        <div class="mb-3">
                            <label class="small mb-1" for="username">Username</label>
                            <input class="form-control" id="username" type="text" placeholder="Enter your username" name="username" value="{{ old('username') }}" required>
                            @error('username')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror        
                        </div>
                        <div class="mb-3">
                            <label class="small mb-1" for="email">Email address</label>
                            <input class="form-control" id="email" type="email" placeholder="Enter your email address" name="email" value="{{ old('email') }}" required>
                            @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="small mb-1" for="primary_phone_number">Phone number</label>
                            <input class="form-control" id="primary_phone_number" type="tel" placeholder="Enter your phone number" name="primary_phone_number" value="{{ old('primary_phone_number') }}" required>
                            @error('primary_phone_number')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="row gx-3 mb-3">
                            <div class="col-md-6">
                                <label class="small mb-1" for="birthDate">Birthday</label>
                                <input class="form-control" id="birthDate" type="date" name="birthDate" placeholder="Enter your birthday" value="{{ old('birthDate') }}" required>
                                @error('birthDate')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label class="small mb-1" for="gender">Gender</label>
                                <input class="form-control" id="gender" type="enum" placeholder="Enter your location" name="gender" value="{{ old('gender') }}" required>
                                @error('gender')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <a href="/ZFED5u3QN9x7ykwzqA4s8W/admin" class="btn btn-warning" type="button"><i class="bi bi-arrow-left-short"></i> Go Back</a>
                        <button class="btn btn-primary" type="submit"><i class="bi bi-save"></i> Save changes</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
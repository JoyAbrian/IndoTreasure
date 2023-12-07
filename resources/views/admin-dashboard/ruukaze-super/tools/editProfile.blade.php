@extends('admin-dashboard.ruukaze-super.layouts.main')

@section('container')

<div class="container-xl px-4 mt-4">
    <div class="row">
        <div class="col-xl-4">
            <div class="card mb-4 mb-xl-0">
                <div class="card-header">Profile Picture</div>
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
                <div class="card-header">Edit Akun</div>
                <div class="card-body">
                    <form>
                        <div class="mb-3">
                            <label class="small mb-1" for="inputFullname">Full Name</label>
                            <input class="form-control" id="inputFullname" type="text"
                                placeholder="Enter your Full Name" value="{{ $king->name }}">
                        </div>
                        <div class="mb-3">
                            <label class="small mb-1" for="inputUsername">Username</label>
                            <input class="form-control" id="inputUsername" type="text" placeholder="Enter your username" value="{{ $king->username }}">
                        </div>
                        <div class="mb-3">
                            <label class="small mb-1" for="inputEmailAddress">Email address</label>
                            <input class="form-control" id="inputEmailAddress" type="email"
                                placeholder="Enter your email address" value="{{ $king->email }}">
                        </div>
                        <div class="mb-3">
                            <label class="small mb-1" for="inputPhone">Phone number</label>
                            <input class="form-control" id="inputPhone" type="tel" placeholder="Enter your phone number"
                                value="{{ $king->primary_phone_number }}">
                        </div>
                        <div class="row gx-3 mb-3">
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputBirthday">Birthday</label>
                                <input class="form-control" id="inputBirthday" type="date" name="birthday"
                                    placeholder="Enter your birthday" value="{{ $king->birthDate }}">
                            </div>
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputLocation">Gender</label>
                                <input class="form-control" id="inputLocation" type="enum"
                                    placeholder="Enter your location" value="{{ $king->gender }}">
                            </div>
                        </div>
                        <a href="/ZFED5u3QN9x7ykwzqA4s8W" class="btn btn-warning" type="button"><i class="bi bi-arrow-left-short"></i> Go Back</a>
                        <button class="btn btn-primary" type="button"><i class="bi bi-save"></i> Save changes</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
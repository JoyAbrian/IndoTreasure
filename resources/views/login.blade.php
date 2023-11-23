@extends('layouts.main')

@section('container')

<h1>Login Page</h1>
<div class="input-group mb-3">
    <span class="input-group-text" id="addon-wrapping">@</span>
    <input type="text" class="form-control" placeholder="Username" id="username" name="username" required>
</div>
<div class="input-group mb-3">
    <span class="input-group-text" id="addon-wrapping">Password</span>
    <input type="password" class="form-control" placeholder="Password" id="password" name="password" required>
</div>

<button type="button" class="btn btn-primary">Login</button>

@endsection
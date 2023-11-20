@extends('layouts.main')

@section('container')

<h3>{{ $title }}</h3>
<div class="col-lg-6">
    <div class="input-group mb-3">
        <span class="input-group-text">Nomor Telepon</span>
        <input type="tel" class="form-control" id="no-telp" name="no-telp" size="10" required>
    </div>
    <h4>Nominal</h4>
    <div class="container">
        @php $count = 0 @endphp
        @foreach ($topup as $item)
            @if($count % 4 == 0)
                <div class="row">
            @endif
            <div class="col-3">
                <h5>{{ $item->name }}</h5>
                <h6>Rp.{{ $item->price }}</h6>
            </div>
            @php $count++ @endphp
            @if($count % 4 == 0)
                </div>
            @endif
        @endforeach
        @if($count % 4 != 0)
            </div>
        @endif
        </div>
    </div>
</div>

@endsection
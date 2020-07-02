@extends('layouts.app')

@section('content')
<div class="container">
    <h3>Tell us about you😃</h3>

    @if (Session::has('message'))
        <div class="alert alert-success">
            {{ Session::get('message') }}
        </div>
    @endif

    <form action="{{ route('user-detail.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="fullname">Fullname</label>
            <input type="text" name="fullname" placeholder="Your Fullname" class="form-control @error('fullname') is-invalid @enderror" value="{{ old('fullname') }}">

            @error('fullname')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" placeholder="Your Email Address" class="form-control  @error('email') is-invalid @enderror" value="{{ old('email') }}">

            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-group">
            <label for="phone">Phone Number</label>
            <input type="phone" name="phone" placeholder="Your Phone Number" class="form-control" value="{{ old('phone') }}">
        </div>

        <div class="form-group">
            <label for="address">Address</label>
            <input type="address" name="address" placeholder="Your Address" class="form-control" value="{{ old('address') }}">
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>

    </form>
</div>
@endsection

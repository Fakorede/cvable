@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Welcome to CV Able</h1>
    <h5>Cvable is an online resume builder created just for you! Please <a href="{{ route('login') }}">login</a>  or <a href="{{ route('register') }}">register</a>  to get started.</h5>
    
</div>
@endsection

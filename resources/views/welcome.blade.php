@extends('layouts.app')

@section('styles')
    <link href="{{ asset('css/views_styles/welcome.css') }}" rel="stylesheet">
@endsection

@section('content')
    <div class="container">
        <div class="card mx-auto">
            <div class="card-body text-center">
                <h5 class="card-title">Buy By Just A Click</h5>
                <p class="card-text">Here you can buy what ever you want to buy , all what you have to do is to sign up here</p>
                <a href="{{route('login')}}" class="btn btn-outline-dark">Stated</a>
            </div>
        </div>
    </div>
@endsection

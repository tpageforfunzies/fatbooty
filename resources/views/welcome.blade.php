@extends('layout.master')

@section('content')
    <style>
    .container {
        width: 100%;
        position: relative;
        height: 100vh;
        background: black;
        text-align: center;
    }
    .container img {
        display: block;
        padding-top: 20vh;
        margin: 0 auto;
        height: 400px;
    }
    .container h2 {
        color: #1DB04C;
        font-family: 'Ubuntu Mono', monospace;
        text-transform: uppercase;
        font-size: 250%;
        letter-spacing: 1.5px;
    }
    </style>
    <div class="container">
        <img src="{{asset('images/skull.jpg')}}">
        <h2>Hack City</h2>
    </div>

@endsection
@extends('layout.master')

@section('title')
    hackcity
@endsection

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
        font-family: 'Ubuntu Mono', monospace;
        letter-spacing: 1.5px;
    }

    .glitch {
    font-size: 60px;
    line-height: 1;
    font-weight: 700;
    position: absolute;
    font-family: 'Ubuntu Mono', monospace;
    top: 65%;
    left: 50%;
    transform: translate(-50%, -50%);
    margin: 0;
    text-decoration: none;
    color: #fff;
    }
    .glitch:before, .glitch:after {
    display: block;
    content: "{{ $data }}";
    position: absolute;
    top: 0;
    left: 0;
    height: 100%;
    width: 100%;
    opacity: 0.8;
    }
    .glitch:after {
    color: #28B755;
    z-index: -2;
    animation: glitch 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94) reverse both infinite;
    }
    .glitch:before {
    color: #FEED0B;
    z-index: -1;
    animation: glitch 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94) both infinite;
    }

    @keyframes glitch {
        0% {
            -webkit-transform: translate(0);
            transform: translate(0);
        }
        20% {
            -webkit-transform: translate(-5px, 5px);
            transform: translate(-5px, 5px);
        }
        40% {
            -webkit-transform: translate(-5px, -5px);
            transform: translate(-5px, -5px);
        }
        60% {
            -webkit-transform: translate(5px, 5px);
            transform: translate(5px, 5px);
        }
        80% {
            -webkit-transform: translate(5px, -5px);
            transform: translate(5px, -5px);
        }
        to {
            -webkit-transform: translate(0);
            transform: translate(0);
        }
    }
    </style>
    <div class="container">
        <img src="{{asset('images/skull.jpg')}}">
        <h2 class="glitch">{{ $data }}</h2>
    </div>

@endsection
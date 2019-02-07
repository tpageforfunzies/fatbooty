@extends('layout.master')

@section('title')
  hack city - jhoot branch
@endsection

@section('description')
  hack city - jhoot branch
@endsection

@section('header')
  <header class="banner">
    <div class="gridxl">
      <div class="uk-grid-collapse uk-text-center" uk-grid>
        <div class="logo uk-width-1-1 uk-width-1-2@s uk-width-1-5@m">
          <a href="/jhoot" class="brand">
            <h1 class="uk-heading-primary">Dir Site</h1>
          </a>
        </div>
        <div class="nav uk-width-1-1 uk-width-1-2@s uk-width-3-5@m">
          <ul class="">
            <li><a href="#">Link One</a></li>
            <li><a href="#">Link Two</a></li>
            <li><a href="#">Link Three</a></li>
            <li><a href="#">Link Four</a></li>
            <li><a href="#">Link Five</a></li>
          </ul>
        </div>
        <div class="cta uk-width-1-1 uk-width-1-2@s uk-width-1-5@m">
          <a href="/jhoot" class="brand">
            <span class="uk-text-lead">Call Now</span>
          </a>
        </div>
      </div>
    </div>
  </header>    
@endsection

@section('content')
  <section class="fold uk-section-large">
    <div class="gridl content">
      <div class="uk-text-left" uk-grid>
        <div class="uk-width-1-1 uk-width-1-2@m">
          <h3 class="color-white nm">This is the tagline for the site</h3>
          <h1 class="color-white nm">Directory Site</h1>
          <div class="cta">
            <a href="#">
              <span>Find X Now</span>
            </a>
          </div>
        </div>
        <div class="image uk-text-center uk-text-right@m uk-width-1-1 uk-width-1-2@m">
          <img src="{{ asset('images/AI.png') }}">
        </div>
      </div>
    </div>

    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none">
      <polygon fill="white" points="0,100 100,0 100,100"/>
    </svg>
  </section>
  <section class="belowfold uk-section-large">

  </section>
@endsection
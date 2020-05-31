@extends('layouts.app')

@section('title', 'Welcome - FullStop.')

@section('content')

<nav class="navbar navbar-expand-lg navbar-light bg-light justify-content-between">
  <a class="navbar-brand" href="#">FullStop.</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
        </li>
    @if (Route::has('register'))
        <li class="nav-item">
            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
        </li>
    @endif
    </ul>
  </div>
</nav>

<main>

    <div class="jumbotron jumbotron-fluid">
        <h1 class="display-4">FullStop.</h1>
        <p class="lead">Every cycle is unique. How you track it should be, too. </p>
    </div>

    <div class="row justify-content-center" style="height:50vh;">
        <div class="col-md-6">
            <img class="welcome-img float-right" src="/images/welcome/calendar-temp.jpeg">
        </div>
        <div class="col-md-6">
            <div class="card welcome-card">
                <div class="card-body">
                    <h5 class="card-title">Track what you want</h5>
                    <p class="card-text">Has closed eyes but still sees you human clearly uses close to one life a night no one naps that long so i revive by standing on chestawaken!</p>
                    <!-- <button type="submit" class="btn btn-success btn-block shadow border-0 py-2 text-uppercase w-50 m-auto">
                    <a href="{{ route('register') }}">{{ __('Register') }}</a>
                    </button> -->
                </div>
            </div>
        </div>
    </div>

    <div class="row justify-content-center" style="height:50vh;">
        <div class="col-md-6">
            <div class="card welcome-card">
                <div class="card-body">
                    <h5 class="card-title">Data you care about</h5>
                    <p class="card-text">Has closed eyes but still sees you human clearly uses close to one life a night no one naps that long so i revive by standing on chestawaken!</p>
                    <!-- <button type="submit" class="btn btn-success btn-block shadow border-0 py-2 text-uppercase w-50 m-auto">
                    <a href="{{ route('register') }}">{{ __('Register') }}</a>
                    </button> -->
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <img class="welcome-img" src="/images/welcome/dashboard-temp.jpeg">
        </div>
    </div>

</main>
    
@endsection


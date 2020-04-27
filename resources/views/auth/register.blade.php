@extends('layouts.app')

@section('content')


<div class="container h-100">
    <div class="row h-100 justify-content-center align-items-center">
        <form method="POST" action="{{ route('register') }}" class="col-md-9">
            @csrf
            
            <div class="AppForm shadow-lg">
                <div class="row">
                    <div class="col-md-6 d-flex justify-content-center align-items-center">
                    
                        <div class="AppFormLeft" style="width:85%;">
                        <h2 class="text-center">{{ __('Register') }}</h2>

                        <div class="form-group position-relative mb-4">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror border-top-0 border-right-0 border-left-0 rounded-0 shadow-none" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Name">

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="form-group position-relative mb-4">
                                <input id="email" type="email" class="@error('email') is-invalid @enderror form-control border-top-0 border-right-0 border-left-0 rounded-0 shadow-none" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="form-group position-relative mb-4">
                                <input id="password" type="password" class="@error('password') is-invalid @enderror form-control border-top-0 border-right-0 border-left-0 rounded-0 shadow-none" placeholder="Password" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="form-group position-relative mb-4">

                                <input id="password-confirm" type="password" class="form-control border-top-0 border-right-0 border-left-0 rounded-0 shadow-none" name="password_confirmation" placeholder="Confirm Password" required autocomplete="new-password">
                            
                        </div>

                            <button type="submit" class="btn btn-success btn-block shadow border-0 py-2 text-uppercase w-50 m-auto">
                                {{ __('Login') }}
                            </button>

                            <p class="text-center mt-4">
                                    Already have an account?
                                    <a class="btn btn-link p-0" href="{{ route('login') }}">
                                        Sign in
                                    </a>

                                </p>

                        </div>

                    </div>
                    <div class="col-md-6 p-0">
                        <div class="AppFormRight position-relative d-flex justify-content-center flex-column align-items-center text-center p-5 text-white">
                            <h2 class="position-relative px-4 pb-3 mb-4">FullStop.</h2>
                            <p>Lorem ipsuing elit. Molomos totam est voluptatum i omos totam est voluptatum i ure sit consectetur ill</p>
                        </div>
                    </div>
                </div>
            </div>

        </form>
    </div>
</div>
@endsection

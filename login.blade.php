@extends('layouts.app')

@section('content')


<div class="container">

    <form class="form-signin" method="post" action="{{ route('login') }}">
        @csrf
        <h2 class="form-signin-heading">sign in now</h2>
        <div class="login-wrap">
            <div class="form-group row">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Email" required autocomplete="email" autofocus>
                
                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
                
            </div>
            <div class="form-group row">
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" name="password" required autocomplete="current-password">
                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="form-group row">
                <div class="col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                        <label class="form-check-label" for="remember">
                            {{ __('Remember Me') }}
                        </label>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-lg btn-login btn-block">
                {{ __('Login') }}
            </button>

            <div class="registration">
                @if (Route::has('password.request'))
                <a class="btn btn-link" href="{{ route('password.request') }}">
                    {{ __('Forgot Your Password?') }}
                </a>
                @endif
                <a class="btn btn-link" href="{{ route('register') }}">
                    {{ __('New Here ? Register ') }}
                </a>
            </div>

        </div>
    </form>

</div>

@endsection
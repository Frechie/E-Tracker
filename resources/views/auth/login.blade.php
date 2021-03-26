@extends('inc.admin.auth-layout')
@section('content')
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <img class="img-fluid" src="{{asset('assets/admin/img/icon/seaicologo.png') }}" alt="SeaicoTech-Logo">
            <h1 class="h3 mb-3 text-white text-bold"><strong>Login</strong></h1>

            <div class="form-floating">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="E-Mail Address" required>
                <label for="email" class="text-dark">E-mail Address:</label>
                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="form-floating">
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password" required>
                <label for="password" class="text-dark"> Password: </label>
                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="mb-3 form-check form-switch">
                <input class="form-check-input" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }} type="checkbox">
                <label class="form-check-label text-white text-bold" for="remember"> {{ __('Remember Me') }}</label>
            </div>

            <button type="submit" class="w-100 btn btn-lg btn-primary">{{ __('Login') }}</button>

            <div>
                @if (Route::has('password.request'))
                <a class="btn btn-link" href="{{ route('password.request') }}">{{ __('Forgot Your Password?') }} </a>
                @endif
            </div>
        </form>
    @endsection

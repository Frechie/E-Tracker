@extends('inc.admin.auth-layout')
@section('content')


<img class="img-fluid" src="{{asset('assets/admin/img/icon/seaicologo.png') }}" alt="SeaicoTech-Logo">
<h1 class="h3 mb-3 fw-normal text-warning"><strong>Rest Password</strong></h1>

@if (session('status'))
<div class="alert alert-success" role="alert">
    {{ session('status') }}
</div>
@endif

<form method="POST" action="{{ route('password.email') }}">
    @csrf

    <div class="form-floating">
        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="E-Mail Address" required>
        <label for="email" class="text-dark">E-mail Address:</label>
        @error('email')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
    <hr>
    <button type="submit" class="btn btn-primary w-100">
        {{ __('Send Password Reset Link') }}

</form>
@endsection
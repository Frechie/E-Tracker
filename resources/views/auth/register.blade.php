<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Seaico Technology Issue Tracker App</title>
    <link rel="stylesheet" href="{{ ('assets/vendors/mdi/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ ('assets/vendors/css/vendor.bundle.base.css') }}">
    <link rel="stylesheet" href="{{ ('assets/css/style.css') }}">
    <link rel="shortcut icon" href="{{ ('assets/images/favicon.png') }}" />
</head>

<body>
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="content-wrapper d-flex align-items-center auth">
                <div class="row flex-grow">
                    <div class="col-lg-4 mx-auto">
                        <div class="auth-form-light text-left p-5">
                            <div class="brand-logo">
                                <img src="{{ ('assets/images/logo.svg') }}">
                            </div>
                            <h4>New here?</h4>
                            <h6 class="font-weight-light">Signing up is easy. It only takes a few steps</h6>
                            <form method="POST" class="pt-3" action="{{ route('register') }}">
                                @csrf
                                <div class="form-group">
                                    <input id="name" type="text" placeholder="UserName"
                                        class="form-control form-control-lg @error('name') is-invalid @enderror"
                                        name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input id="email" type="email" placeholder="Email"
                                        class="form-control form-control-lg @error('email') is-invalid @enderror"
                                        name="email" value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input id="password" type="password" placeholder="Password"
                                        class="form-control form-control-lg @error('password') is-invalid @enderror"
                                        name="password" required autocomplete="new-password">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <div class="form-group">
                                        <input id="password-confirm" type="password" placeholder="Confirm Password"
                                            class="form-control form-control-lg" name="password_confirmation" required
                                            autocomplete="new-password">
                                    </div>
                                </div>
                                <div class="mt-3">
                                    <button type="submit" class="btn btn-block btn-gradient-primary btn-lg font-weight-medium auth-form-btn"
                                        >
                                        {{ __('Register') }}
                                    </button>
                                </div>
                                <div class="text-center mt-4 font-weight-light">
                                    @if (Route::has('login'))
                                    Already have an account?
                                    <a href="{{ route('login') }} " class="text-primary">Login</a>
                                    @endif
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ ('assets/vendors/js/vendor.bundle.base.js') }}"></script>
    <script src="{{ ('assets/js/off-canvas.js') }}"></script>
    <script src="{{ ('assets/js/hoverable-collapse.js') }}"></script>
    <script src="{{ ('assets/js/misc.js') }}"></script>
</body>

</html>
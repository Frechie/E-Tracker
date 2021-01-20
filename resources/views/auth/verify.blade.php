<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Seaico Technology Issue Tracker App</title>
    <link rel="stylesheet" href="{{ asset('assets/vendors/mdi/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/css/vendor.bundle.base.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}" />
</head>
<body>
    <div class="container-scroller">
        <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row bg-dark">
            <div class="text-center navbar-brand-wrapper bg-dark  d-flex align-items-center justify-content-center">
                <a class="navbar-brand brand-logo" href="index.html">
                    <img src="{{ asset('assets/images/logo.svg') }}" alt="logo" />
                </a>
                <a class="navbar-brand brand-logo-mini" href="index.html">
                    <img src="{{ asset('assets/images/logo-mini.svg') }}" alt="logo" />
                </a>
            </div>
            <div class="navbar-menu-wrapper d-flex align-items-stretch">
                <ul class="navbar-nav navbar-nav-right">
                    <li class="nav-item nav-profile dropdown">
                        <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                            <div class="nav-profile-img">
                                <img src="{{ asset('assets/images/faces/face1.jpg') }}" alt="image">
                                <span class="availability-status online"></span>
                            </div>
                            <div class="nav-profile-text">
                                <p class="mb-1 text-white">{{ Auth::user()->name }}</p>
                            </div>
                        </a>
                        <div class="dropdown-menu navbar-dropdown" aria-labelledby="profileDropdown">
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <i class="mdi mdi-logout mr-2 text-primary"></i>{{ __('Logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                    <li class="nav-item d-none d-lg-block full-screen-link">
                        <a class="nav-link">
                            <i class="mdi mdi-fullscreen text-white" id="fullscreen-button"></i>
                        </a>
                    </li>

                </ul>
                <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
                    <span class="mdi mdi-menu"></span>
                </button>
            </div>
        </nav>
        <!--Contents -->

        <div class="container-fluid page-body-wrapper">
            <div class="container">

                <div class="card">
                    <div class="card-body bg-light">
                        <article>
                            <h5 class="card-title">
                                {{ __('Verify Your Email Address') }}
                            </h5>
                            <div class="card-body">
                                @if (session('resent'))
                                <div class="alert alert-success" role="alert">
                                    {{ __('A fresh verification link has been sent to your email address.') }}
                                </div>
                                @endif
                                <p>
                                    {{ __('Before proceeding, please check your email for a verification link.') }}
                                    {{ __('If you did not receive the email') }}, <br>
                                </p>
                                <p>
                                <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                                    @csrf
                                    <button type="submit" class="btn btn-gradient-dark btn-fw waves-effect waves-light">
                                        {{ __('Request Another Link') }}
                                    </button>.
                                </form>
                                </p>
                            </div>
                        </article>
                    </div>
                </div>
            </div>

        </div>

    </div>
    <!--End of Contents -->
    </div>
    <footer class="footer bg-dark">
        <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-center text-white text-sm-left d-block d-sm-inline-block">
                Copyright © 2021
                <a class="text-white" href="https://www.seaicotechnologies.com/" target="_blank">Seaico Technologies Limited</a>
                All rights reserved.
            </span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center text-white">
                Designed &amp; Developed by SeaicoTech Ltd
            </span>
        </div>
    </footer>
    <script src="{{ asset('assets/vendors/js/vendor.bundle.base.js') }}"></script>
    <script src="{{ asset('assets/js/off-canvas.js') }}"></script>
</body>

</html>
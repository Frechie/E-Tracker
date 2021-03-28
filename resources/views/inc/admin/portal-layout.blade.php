<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="NIgeria Number 1 Technology Soluytion">
    <meta name="author" content="Seaico Technologies Limited, Offcial Calypso Technology Partners in West Africa">
    <meta name="keywords" content="FInancial Technology Firm, Technology Consultant">
    <meta name="keywords" content="Issue Resolution Tracker">
    <meta name="keywords" content="Simplified Solution meet for every organization...">
    <title>Seaico Issue Tracker App</title>
    <link href="{{asset('assets/admin/img/icon/seaicologo.ico') }}" rel="icon">
    <link href="{{ asset('assets/icofont/icofont.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/admin/plugins/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/css/adminlte.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/admin.css') }}">

</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white fixed-top bg-purple text-white">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link text-white" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
            </ul>

            <ul class="navbar-nav ">
                <div class="">
                    <span class="">
                        <i class="icofont icofont-ui-user"></i> {{ Auth::user()->name  }}
                    </span>
                </div>
                <div class="" style="margin-left: 5px;">
                    <span class="">
                        <i class="icofont icofont-email"></i> {{ Auth::user()->email }}
                    </span>
                </div>
            </ul>

        </nav>

        <aside class="main-sidebar sidebar-dark-purple elevation-4">
            <!-- Brand Logo -->
            <a href="https://seaicotechnologies.com/" class="brand-link text-center text-bold" target="_blank">
                <div class="icon">
                    <i class="nav-icon icofont-home text-white"></i>
                    SEAICO TECHNOLOGIES
                </div>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
                        <li class="nav-item">
                            <a href="{{ route('dashboard') }}" class="nav-link">
                                <div class="icon">
                                    <i class="nav-icon icofont-dashboard text-white"></i>
                                    <p> Dashboard </p>
                                </div>

                            </a>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="" class="nav-link">
                                <div class="icon">
                                    <i class="nav-icon icofont-bag-alt text-white"></i>
                                    <p>Asset Classes</p>

                                </div>
                                <i class="fas fa-angle-left right"></i>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ url('/categories') }}" class="nav-link">
                                        <i class="nav-icon icofont-hard-disk text-white"></i>
                                        <p>Categories</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ url('/categories/create') }}" class="nav-link">
                                        <i class="nav-icon icofont-plus-circle text-white"></i>
                                        <p>New Category</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="" class="nav-link">
                                        <i class="nav-icon icofont-database"></i>
                                        <p>Sub-Categories</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="" class="nav-link">
                                        <i class="nav-icon icofont-plus-square"></i>
                                        <p>New Sub-Category</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a href="" class="nav-link">
                                <i class="nav-icon icofont-chart-histogram"></i>
                                <p>Reports </p>
                            </a>
                        </li>

                        <li class="nav-item has-treeview">
                            <a href="" class="nav-link">
                                <div class="icon">
                                    <i class="nav-icon icofont-learn text-white"></i>
                                    <p>Issues</p>

                                </div>
                                <i class="fas fa-angle-left right"></i>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ url('/issues') }}" class="nav-link">
                                        <i class="nav-icon icofont-database text-white"></i>
                                        <p>All Issues</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ url('/issues/create') }}" class="nav-link">
                                        <i class="nav-icon icofont-plus-circle text-white"></i>
                                        <p>New Issues</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="" class="nav-link">
                                        <i class="nav-icon icofont-refresh"></i>
                                        <p>In-Progress </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="" class="nav-link">
                                        <i class="nav-icon icofont-question-circle"></i>
                                        <p>Pending HD </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="" class="nav-link">
                                        <i class="nav-icon icofont-ui-check"></i>
                                        <p>Completed Issues</p>
                                    </a>
                                </li>
                            </ul>
                        </li>


                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <div class="icon">
                                    <i class="nav-icon icofont-ui-user-group text-white"></i>
                                    <p>
                                        Manage Users
                                    </p>
                                </div>
                                <i class="fas fa-angle-left right"></i>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="" class="nav-link">
                                        <div class="icon">
                                            <i class="nav-icon icofont-user"></i>
                                            <p>Users</p>
                                        </div>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="" class="nav-link">
                                        <i class="nav-icon icofont-folder-open text-white"></i>
                                        <p>Roles</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="" class="nav-link">
                                        <i class="nav-icon icofont-lock text-white"></i>
                                        <p>Permissions</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a class=" nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <div class="icon">
                                    <i class="icofont-sign-out text-danger"></i>
                                    <p>Logout</p>
                                </div>
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <div class="content-wrapper">

            @yield('content')

        </div>
        </section>
    </div>
    <footer id="footer" class="main-footer">
        <div class="container">
            <div class="copyright">
                Copyright &copy; {{date('Y') }} <strong class="text-white"><span><a class="text-white" href="{{url('/')}}">Freitech Solutions</a></span></strong>. All Rights Reserved <br>
                <small>The information contained herein may not be published, broadcast, rewritten, or or redistributed
                    without the prior written authority of <strong><span><a class="text-white" href="{{url('/')}}">Freitech Solutions.</a></span></strong></small>
            </div>
        </div>
    </footer>
    </div>
    <script src="{{ asset('assets/admin/plugins/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/admin/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <script src="{{ asset('assets/admin/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/admin/js/adminlte.js') }}"></script>
</body>

</html>
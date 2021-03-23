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
    <link rel="stylesheet" href="{{ asset('assets/css/auth.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">
</head>

<body class="text-center">

    <main class="form-signin">
    @yield('content')
    </main>
    <footer>
        <script src="{{ asset('assets/admin/js/bootstrap/bootstrap.js') }}"></script>
    </footer>
</body>

</html>
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'QBAdminUI') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="{{ asset('admin/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/css/vendor/bootstrap-4.3.1/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/css/main.css') }}">
    <meta name="theme-color" content="#fafafa">
</head>
<body class="position-relative">
<!--[if IE]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade
    your browser</a> to improve your experience and security.</p>
<![endif]-->
@yield('content')


<script src="{{ asset('admin/js/vendor/bootstrap-4.3.1/modernizr-3.7.1.min.js') }}"></script>
<script src="{{ asset('admin/js/vendor/jquery-3.3.1/jquery-3.3.1.min.js') }}"></script>
<!-- Bootstrap -->
<script src="{{ asset('admin/js/vendor/popper-js/popper1.14.7.js') }}"></script>
<script src="{{ asset('admin/js/vendor/bootstrap-4.3.1/bootstrap.min.js') }}"></script>
<!-- eChart -->
<script src="{{ asset('admin/js/vendor/eChart/echarts.min.js') }}"></script>
<script src="{{ asset('admin/js/vendor/eChart/echarts.option.min.js') }}"></script>
<!-- eChart script -->
<script src="{{ asset('admin/js/plugins/echart_drw.js') }}"></script>
<script src="{{ asset('admin/js/plugins.js') }}"></script>
<script src="{{ asset('admin/js/main.js') }}"></script>
</body>
</html>

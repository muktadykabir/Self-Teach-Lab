<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>
        @yield('title')
    </title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Bootstrap core CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap-reset.css') }}" rel="stylesheet">
    {{-- <link href="{{ asset('css/datepicker/daterangepicker.css') }}" rel="stylesheet"> --}}
    <!--external css-->
    <link href="{{ asset('assets/font-awesome/css/font-awesome.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css') }}" rel="stylesheet"
        type="text/css" media="screen" />
    {{-- carousel --}}
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.css') }}" type="text/css">
    {{-- select 2 --}}
    <link rel="stylesheet" href="{{ asset('assets/select2/css/select2.min.css') }}" type="text/css">
    <!--right slidebar-->
    <link href="{{ asset('css/slidebars.css') }}" rel="stylesheet">
    <!--dynamic table-->
    <link href="{{ asset('assets/advanced-datatable/media/css/demo_page.css') }}" rel="stylesheet" />
    <link href="{{ asset('assetxs/advanced-datatable/media/css/demo_table.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('assets/data-tables/DT_bootstrap.css') }}" />

    <!-- daterange picker css -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
    <link rel="stylesheet" href="{{ asset('assets/daterangepicker-master/daterangepicker.css') }}" />
    <!-- Custom styles for this template -->
    {{-- style css --}}
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    {{-- responsive css --}}
    <link href="{{ asset('css/style-responsive.css') }}" rel="stylesheet" />


</head>

<body>
<div id="app">
    @include('layouts.header')
    @auth
        @include('layouts.side-bar')
    @endauth
    <main class="py-4">
        @yield('content')
    </main>
</div>
    @include('layouts.script')
</body>
</html>

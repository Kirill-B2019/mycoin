<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon and Touch Icons -->
    <link href="{{asset('../images/favicon.png')}}" rel="shortcut icon" type="image/png">
    <link href="{{asset('../images/apple-touch-icon.png')}}" rel="apple-touch-icon">
    <link href="{{asset('../images/apple-touch-icon-72x72.png')}}" rel="apple-touch-icon" sizes="72x72">
    <link href="{{asset('../images/apple-touch-icon-114x114.png')}}" rel="apple-touch-icon" sizes="114x114">
    <link href="{{asset('../images/apple-touch-icon-144x144.png')}}" rel="apple-touch-icon" sizes="144x144">

    <!-- csrf -->
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <title>@yield('title','APP_NAME') - MyCOIN CRYPTO FOUND Plarform</title>

    <!-- Simple bar CSS -->
    <link rel="stylesheet" href="{{asset('admin/css/simplebar.css')}}">
    <!-- Fonts CSS -->
    <link href="https://fonts.googleapis.com/css2?family=Overpass:ital,wght@0,100;0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- Icons CSS -->
    <link rel="stylesheet" href="{{asset('admin/css/feather.css')}}">
    <!-- Date Range Picker CSS -->
    <link rel="stylesheet" href="{{asset('admin/css/daterangepicker.css')}}">
    <!-- App CSS -->

    <link rel="stylesheet" href="{{asset('admin/css/app-dark.css')}}" id="darkTheme">


</head>
<body class="dark ">
@yield('content')
<script src="{{asset('admin/js/jquery.min.js')}}"></script>
<script src="{{asset('admin/js/popper.min.js')}}"></script>
<script src="{{asset('admin/js/moment.min.js')}}"></script>
<script src="{{asset('admin/js/bootstrap.min.js')}}"></script>
<script src="{{asset('admin/js/simplebar.min.js')}}"></script>
<script src='{{asset('admin/js/daterangepicker.js')}}'></script>
<script src='{{asset('admin/js/jquery.stickOnScroll.js')}}'></script>
<script src="{{asset('admin/js/tinycolor-min.js')}}"></script>
<script src="{{asset('admin/js/config.js')}}"></script>
<script src="{{asset('admin/js/apps.js')}}"></script>


</body>
</html>



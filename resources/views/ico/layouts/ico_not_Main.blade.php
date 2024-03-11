<!DOCTYPE html>
<html lang="ru" class="js">

<head>
    <meta charset="utf-8">
    <meta name="author" content="KB">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">

    <!-- csrf -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Favicon and Touch Icons -->
    <link href="{{asset('images/favicon.png')}}" rel="shortcut icon" type="image/png">
    <link href="{{asset('images/apple-touch-icon.png')}}" rel="apple-touch-icon">
    <link href="{{asset('images/apple-touch-icon-72x72.png')}}" rel="apple-touch-icon" sizes="72x72">
    <link href="{{asset('images/apple-touch-icon-114x114.png')}}" rel="apple-touch-icon" sizes="114x114">
    <link href="{{asset('images/apple-touch-icon-144x144.png')}}" rel="apple-touch-icon" sizes="144x144">
    <!-- Site Title  -->
    <title>MCP - Coin | MyCoinToken Platform SYStem (MCOIN) - ICO Platform MyCOIN In</title>
    <!-- Bundle and Base CSS -->
    <link rel="stylesheet" href="{{asset('ico/assets/css/vendor.bundle.css')}}">
    <link rel="stylesheet" href="{{asset('ico/assets/css/style-azalea.css')}}">
    <!-- Extra CSS -->
    <link rel="stylesheet" href="{{asset('ico/assets/css/my.css')}}">
</head>

<body class="nk-body body-wider bg-theme mode-onepage">
@yield('content')
<!-- Modals -->

<!-- preloader -->
<div class="preloader preloader-alt no-split"><span class="spinner spinner-alt"><img class="spinner-brand" src="{{asset('images/load.png')}}" alt=""></span></div>

<script src="{{asset('ico/assets/js/jquery.bundle.js?ver=210')}}"></script>

<script src="{{asset('ico/assets/js/scripts.js?ver=210')}}"></script>
<script src="{{asset('ico/assets/js/charts.js?ver=210')}}"></script>
<script src="{{asset('ico/assets/js/charts.js?ver=210')}}"></script>

<!-- JavaScript -->

<!-- All JavaScript files

================================================== -->


</body>
</html>

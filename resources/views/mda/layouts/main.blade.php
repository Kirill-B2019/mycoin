<!DOCTYPE html>
<html lang="ru">
<head>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-CC211MDY0E"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-CC211MDY0E');
    </script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Увеличьте свой капитал с помощью MY-COIN платформы и инвестиций в криптоактивы. Выберите новый токен и примите участие в pre-ICO.">
    <meta name="author" content="KirillB">

    <!-- csrf -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Page Title -->
    <title>@yield('title','APP_NAME')</title>

    <!-- Favicon and Touch Icons -->
    <link href="{{asset('images/favicon.png')}}" rel="shortcut icon" type="image/png">
    <link href="{{asset('images/apple-touch-icon.png')}}" rel="apple-touch-icon">
    <link href="{{asset('images/apple-touch-icon-72x72.png')}}" rel="apple-touch-icon" sizes="72x72">
    <link href="{{asset('images/apple-touch-icon-114x114.png')}}" rel="apple-touch-icon" sizes="114x114">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">
    <link type="text/css" href="{{asset('v1_01/vendor/%40fortawesome/fontawesome-free/css/all.min.css')}}" rel="stylesheet">
    <link type="text/css" href="{{asset('v1_01/css/neumorphism.css')}}" rel="stylesheet">
    <!--ГРАФИК ЦЕН MCP-->
    <script src="{{asset('https://cdn.jsdelivr.net/npm/chart.js')}}"></script>
</head>
<body>

<header class="header-global">
    @include('is.layouts.nav')
</header>
<main>

    @yield('content')

</main>

@include('is.layouts.footer')

<script src="{{asset('v1_01/vendor/jquery/dist/jquery.min.js')}}"></script>
<script src="{{asset('v1_01/vendor/popper.js/dist/umd/popper.min.js')}}"></script>
<script src="{{asset('v1_01/vendor/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<script src="{{asset('v1_01/vendor/headroom.js/dist/headroom.min.js')}}"></script>
<script src="{{asset('v1_01/vendor/onscreen/dist/on-screen.umd.min.js')}}"></script>
<script src="{{asset('v1_01/vendor/nouislider/distribute/nouislider.min.js')}}"></script>
<script src="{{asset('v1_01/vendor/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script>
<script src="{{asset('v1_01/vendor/waypoints/lib/jquery.waypoints.min.js')}}"></script>
<script src="{{asset('v1_01/vendor/jarallax/dist/jarallax.min.js')}}"></script>
<script src="{{asset('v1_01/vendor/jquery.counterup/jquery.counterup.min.js')}}"></script>
<script src="{{asset('v1_01/vendor/jquery-countdown/dist/jquery.countdown.min.js')}}"></script>
<script src="{{asset('v1_01/vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js')}}"></script>
<script src="{{asset('v1_01/vendor/prismjs/prism.js')}}"></script>
<script async="" defer="defer" src="{{asset('v1_01/buttons.js')}}"></script>
<script src="{{asset('v1_01/assets/js/neumorphism.js')}}"></script>

</body>
</html>

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
    <meta name="description" content="MyCOIN crypto marketplace">
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
    <link href="{{asset('images/apple-touch-icon-144x144.png')}}" rel="apple-touch-icon" sizes="144x144">

    <!-- Icon fonts -->
    <link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/flaticon.css')}}" rel="stylesheet">

    <!-- Bootstrap CSS File -->
    <link href="{{asset('main/lib/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link href="{{asset('main/lib/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('main/lib/animate/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('main/lib/ionicons/css/ionicons.min.css')}}" rel="stylesheet">
    <link href="{{asset('main/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('main/lib/magnific-popup/magnific-popup.css')}}" rel="stylesheet">
    <link href="{{asset('main/lib/ionicons/css/ionicons.min.css')}}" rel="stylesheet">

    <!-- Main Stylesheet File -->
    <link href="{{asset('main/css/style.css')}}" rel="stylesheet">

    <!-- =======================================================
      Theme Name: Reveal
      Theme URL: https://bootstrapmade.com/reveal-bootstrap-corporate-template/

    ======================================================= -->
</head>

<body id="body">






@yield('content')
<!--==========================
  Footer
============================-->
<footer id="footer">
    <div class="container">
        <div>
            <a href="{{ route('project.main') }}"><img src="{{asset('images/logo-2.png')}}" alt=""></a>

        </div>
        <div>&copy; Copyright <strong>KB</strong>. All Rights Reserved</div>

    </div>
</footer><!-- #footer -->

<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

<!-- JavaScript Libraries -->
<script src="lib/jquery/jquery.min.js"></script>
<script src="lib/jquery/jquery-migrate.min.js"></script>
<script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="lib/easing/easing.min.js"></script>
<script src="lib/superfish/hoverIntent.js"></script>
<script src="lib/superfish/superfish.min.js"></script>

<script src="lib/owlcarousel/owl.carousel.min.js"></script>
<script src="lib/magnific-popup/magnific-popup.min.js"></script>
<script src="lib/sticky/sticky.js"></script>



<!-- Template Main Javascript File -->
<script src="js/main.js"></script>

</body>
</html>


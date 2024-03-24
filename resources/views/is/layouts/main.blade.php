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
    <!-- Bootstrap CSS File -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link href="{{asset('is/css/style.css')}}" rel="stylesheet">
    <!-- Favicon and Touch Icons -->
    <link href="{{asset('images/favicon.png')}}" rel="shortcut icon" type="image/png">
    <link href="{{asset('images/apple-touch-icon.png')}}" rel="apple-touch-icon">
    <link href="{{asset('images/apple-touch-icon-72x72.png')}}" rel="apple-touch-icon" sizes="72x72">
    <link href="{{asset('images/apple-touch-icon-114x114.png')}}" rel="apple-touch-icon" sizes="114x114">
    <link href="{{asset('images/apple-touch-icon-144x144.png')}}" rel="apple-touch-icon" sizes="144x144">
     <!--ГРАФИК ЦЕН MCP-->
    <script src="{{asset('https://cdn.jsdelivr.net/npm/chart.js')}}"></script>
</head>

<body>
<header class="navbar">
    <div class="container">
        <div class="row vw-100">
            <div class="col-xl-3 col-lg-3 col-md-12">
                <a href="/"><img src="{{asset('images/logo-2.png')}}" alt="@yield('title','APP_NAME')" class="img img-responsive"></a>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-12 text-center">
               <h3 class="bg-orange-30"><span class="mcp"> MCP ISIK</span> - MYCOIN БЛОКЧЕЙН</h3>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-12 text-end">
                <a href="{{ route('login') }}" type="button" class="btn-outline-theme">{{__('ВХОД')}}</a>
                <a href="{{ route('register') }}" type="button" class="btn-outline-theme">{{__('регистрация')}}</a>
                <div class='mutted smaller text-end'>версия блокчейн 1.01</div>
            </div>

        </div>
    </div>
</header>

<main>
@yield('content')
</main>
<footer id="footer">
    <div class="container">
        <p class="text-center smaller">
        Достигните финансовой свободы с MY-COIN платформой и инвестируйте в проекты на платформе MCP. Новый токен MCP и предварительное размещение (pre-ICO) доступны.
        </p>
        <p class="text-center smaller">Copyright © <strong>KB</strong>  {{date('Y')}} - LEGAT CORE </p>
    </div>
</footer><!-- #footer -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
@php
    $from = json_encode($chart_date['from']);
    $to = json_encode($chart_date['to']);
@endphp
<script>
    // ============================================
    // As of Chart.js v2.5.0
    // http://www.chartjs.org/docs
    // ============================================

    var chart    = document.getElementById('chart').getContext('2d'),
        gradient = chart.createLinearGradient(0, 0, 0, 450);

    gradient.addColorStop(0, 'rgba(248,82,12,0.49)');
    gradient.addColorStop(0.5, 'rgba(248,82,12,0.2)');
    gradient.addColorStop(1, 'rgba(248,82,12,0.01)');

    var from = {!! $from !!};
    var to = {!! $to !!};

    var data = {
        labels: @json($data_cart['labels']),
        datasets: [{
            label: 'MCP/USDT с ' + from + ' по ' + to,
            backgroundColor: gradient,
            pointBackgroundColor: 'white',
            borderWidth: 1,
            borderColor: '#f8520c',
            data: @json($data_cart['data']),
        }]
    };


    var options = {
        responsive: true,
        maintainAspectRatio: true,
        animation: {
            easing: 'easeInOutQuad',
            duration: 520
        },
        scales: {
            xAxes: [{
                gridLines: {
                    color: 'rgba(200, 200, 200, 0.05)',
                    lineWidth: 0.5
                }
            }],
            yAxes: [{
                gridLines: {
                    color: 'rgba(200, 200, 200, 0.08)',
                    lineWidth: 0.5
                }
            }]
        },
        elements: {
            line: {
                tension: 0.5
            }
        },
        legend: {
            display: false
        },
        point: {
            backgroundColor: 'white'
        },
        tooltips: {
            titleFontFamily: 'Open Sans',
            backgroundColor: 'rgba(0,0,0,0.3)',
            titleFontColor: 'red',
            caretSize: 5,
            cornerRadius: 2,
            xPadding: 10,
            yPadding: 10
        }
    };


    var chartInstance = new Chart(chart, {
        type: 'line',
        data: data,
        options: options
    });
</script>

</body>
</html>


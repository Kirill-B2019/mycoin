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
    <nav id="navbar-main" aria-label="Primary navigation"
         class="navbar navbar-main navbar-expand-lg navbar-theme-primary headroom navbar-light navbar-transparent navbar-theme-primary">
        <div class="container position-relative">
            <a class="navbar-brand shadow-soft py-2 px-3 rounded border border-light mr-lg-4" href="index.html">
                <img class="navbar-brand-dark" src="{{asset('v1_01/img/logo1.png')}}" alt="{{(__('MCP ISIK - MYCOIN БЛОКЧЕЙН'))}}">
                <img class="navbar-brand-light" src="{{asset('v1_01/img/logo1.png')}}" alt="{{(__('MCP ISIK - MYCOIN БЛОКЧЕЙН'))}}">
            </a>
            <div class="navbar-collapse collapse" id="navbar_global">
                <div class="navbar-collapse-header">
                    <div class="row">
                        <div class="col-6 collapse-brand"><a href="index.html"
                                                             class="navbar-brand shadow-soft py-2 px-3 rounded border border-light"><img
                                    src="{{asset('v1_01/img/logo1.png')}}" alt="{{(__('MCP ISIK - MYCOIN БЛОКЧЕЙН'))}}"></a></div>
                        <div class="col-6 collapse-close"><a href="#navbar_global" class="fas fa-times"
                                                             data-toggle="collapse" data-target="#navbar_global"
                                                             aria-controls="navbar_global" aria-expanded="false"
                                                             title="close" aria-label="Toggle navigation"></a></div>
                    </div>
                </div>
                <ul class="navbar-nav navbar-nav-hover align-items-lg-center">
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link" data-toggle="dropdown">
                            ICO
                            <span class="fas fa-angle-down nav-link-arrow ml-2"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-lg">
                            <div class="col-auto px-0" data-dropdown-content="">
                                <div class="list-group list-group-flush">
                                    <a href="{{url(env('APP_DOMAIN_ICO'))}}" target="_blank" class="list-group-item list-group-item-action d-flex align-items-center p-0 py-3 px-lg-4">
                                        <div>
                                            <span class="text-dark d-block">
                                                <strong>
                                                    ICO Платформы
                                                </strong>
                                            </span>
                                            <span class="small">Размещение токенов платформы</span><br>
                                            <span class="badge-thin badge-success text-uppercase">
                                                    активно
                                            </span>
                                        </div>
                                    </a>
                                    <a href="#" target="_blank" class="list-group-item list-group-item-action d-flex align-items-center p-0 py-3 px-lg-4">
                                        <div>
                                            <span class="text-dark d-block">
                                                <strong>
                                                    ICO проектов
                                                </strong>
                                            </span>
                                            <span class="small">Размещение токенов проектов</span><br>
                                            <span class="badge-thin badge-dark-noactive text-uppercase">
                                                    разработка
                                            </span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>

                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link" data-toggle="dropdown">
                            Проекты
                            <span class="fas fa-angle-down nav-link-arrow ml-2"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-lg">
                            <div class="col-auto px-0" data-dropdown-content="">
                                <div class="list-group list-group-flush">
                                    <a href="{{url(env('APP_DOMAIN_PR'))}}" target="_blank" class="list-group-item list-group-item-action d-flex align-items-center p-0 py-3 px-lg-4">
                                        <div>
                                            <span class="text-dark d-block">
                                                <strong>
                                                    Projects
                                                </strong>
                                            </span>
                                            <span class="small">Монопроекты, мультипроекты</span><br>
                                            <span class="badge-thin badge-secondary text-uppercase">
                                                    тестирование
                                            </span>
                                        </div>
                                    </a>
                                    <a href="#" target="_blank" class="list-group-item list-group-item-action d-flex align-items-center p-0 py-3 px-lg-4">
                                        <div>
                                            <span class="text-dark d-block">
                                                <strong>
                                                    GlobalPR
                                                </strong>

                                            </span>
                                            <span class="small">Ресурсоемкие мегапроекты</span><br>
                                            <span class="badge-thin badge-dark-noactive text-uppercase">
                                                    разработка
                                            </span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>

                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link" data-toggle="dropdown">
                            Активы
                            <span class="fas fa-angle-down nav-link-arrow ml-2"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-lg">
                            <div class="col-auto px-0" data-dropdown-content="">
                                <div class="list-group list-group-flush">
                                    <a href="#" target="_blank" class="list-group-item list-group-item-action d-flex align-items-center p-0 py-3 px-lg-4">
                                        <div>
                                            <span class="text-dark d-block">
                                                <strong>
                                                    Цифровые активы
                                                </strong>
                                            </span>
                                            <span class="small">Коллективное владение цифровыми ценностями</span><br>
                                            <span class="badge-thin badge-dark-noactive text-uppercase">
                                                    разработка
                                            </span>
                                        </div>
                                    </a>
                                    <a href="#" target="_blank" class="list-group-item list-group-item-action d-flex align-items-center p-0 py-3 px-lg-4">
                                        <div>
                                            <span class="text-dark d-block">
                                                <strong>
                                                    Недвижимость
                                                </strong>

                                            </span>
                                            <span class="badge-thin badge-dark-noactive text-uppercase">
                                                    разработка
                                            </span>
                                        </div>
                                    </a>
                                    <a href="#" target="_blank" class="list-group-item list-group-item-action d-flex align-items-center p-0 py-3 px-lg-4">
                                        <div>
                                            <span class="text-dark d-block">
                                                <strong>
                                                    MCP Exchange
                                                </strong>
                                            </span>
                                            <span class="small">Оборот цифровых активов платформы</span><br>
                                            <span class="badge-thin badge-dark-noactive text-uppercase">
                                                    разработка
                                            </span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>

                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link" data-toggle="dropdown">
                            Блокчейн
                            <span class="fas fa-angle-down nav-link-arrow ml-2"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-lg">
                            <div class="col-auto px-0" data-dropdown-content="">
                                <div class="list-group list-group-flush">
                                    <a href="{{url(env('APP_DOMAIN_IS'))}}" target="_blank" class="list-group-item list-group-item-action d-flex align-items-center p-0 py-3 px-lg-4">
                                        <div>
                                            <span class="text-dark d-block">
                                                <strong>
                                                    MCP ISIK
                                                </strong>
                                            </span>
                                            <span class="small">Web-обозреватель</span><br>
                                            <span class="badge-thin badge-success text-uppercase">
                                                    активно
                                            </span>
                                        </div>
                                    </a>

                                </div>
                            </div>
                        </div>

                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link" data-toggle="dropdown">
                            База знаний
                            <span class="fas fa-angle-down nav-link-arrow ml-2"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-lg">
                            <div class="col-auto px-0" data-dropdown-content="">
                                <div class="list-group list-group-flush">
                                    <a href="#" target="_blank" class="list-group-item list-group-item-action d-flex align-items-center p-0 py-3 px-lg-4">
                                        <div>
                                            <span class="text-dark d-block">
                                                <strong>
                                                    Нормирование
                                                </strong>
                                            </span>
                                            <span class="small">Методологии, документация</span><br>
                                            <span class="badge-thin badge-dark-noactive text-uppercase">
                                                    разработка
                                            </span>
                                        </div>
                                    </a>
                                    <a href="#" target="_blank" class="list-group-item list-group-item-action d-flex align-items-center p-0 py-3 px-lg-4">
                                        <div>
                                            <span class="text-dark d-block">
                                                <strong>
                                                    F.A.Q.
                                                </strong>

                                            </span>
                                            <span class="small">Вопросы и ответы, терминология</span><br>
                                            <span class="badge-thin badge-dark-noactive text-uppercase">
                                                    разработка
                                            </span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>

                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link" data-toggle="dropdown">
                            Сервисы
                            <span class="fas fa-angle-down nav-link-arrow ml-2"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-lg">
                            <div class="col-auto px-0" data-dropdown-content="">
                                <div class="list-group list-group-flush">
                                    <a href="#" target="_blank" class="list-group-item list-group-item-action d-flex align-items-center p-0 py-3 px-lg-4">
                                        <div>
                                            <span class="text-dark d-block">
                                                <strong>
                                                    API
                                                </strong>
                                            </span>
                                            <span class="small">Программный интерфейс платформы</span><br>
                                            <span class="badge-thin badge-secondary text-uppercase">
                                                    тестирование
                                            </span>
                                        </div>
                                    </a>
                                    <a href="#" target="_blank" class="list-group-item list-group-item-action d-flex align-items-center p-0 py-3 px-lg-4">
                                        <div>
                                            <span class="text-dark d-block">
                                                <strong>
                                                    Mobile App
                                                </strong>

                                            </span>
                                            <span class="small">Мобильные приложения платформы</span><br>
                                            <span class="badge-thin badge-dark-noactive text-uppercase">
                                                    разработка
                                            </span>
                                        </div>
                                    </a>
                                    <a href="#" target="_blank" class="list-group-item list-group-item-action d-flex align-items-center p-0 py-3 px-lg-4">
                                        <div>
                                            <span class="text-dark d-block">
                                                <strong>
                                                    MC - Мой Кабинет
                                                </strong>

                                            </span>
                                            <span class="small">Личные мини-офисы на платформе</span><br>
                                            <span class="badge-thin badge-dark-noactive text-uppercase">
                                                    разработка
                                            </span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>

                    </li>
                </ul>
            </div>
            <div class="d-flex align-items-center">
                @auth()
                    <a href="{{url(env('APP_DOMAIN_CABINET'))}}"
                       class="btn btn-primary mr-3 text-secondary">
                        Ваш кабинет</a>
                @endauth
                @guest()


                <a href="{{route('login')}}"
                   class="btn btn-primary mr-3 text-secondary">
                    Вход</a>
                <a href="{{route('register')}}"
                   class="btn btn-primary">
                    <i class='fas fa-user-plus'></i> Регистрация</a>
                @endguest
                <button class="navbar-toggler ml-2" type="button" data-toggle="collapse" data-target="#navbar_global"
                        aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation"><span
                        class="navbar-toggler-icon"></span></button>
            </div>
        </div>
    </nav>
</header>
<main>
    <section class="section section bg-soft pb-2 overflow-hidden z-2">
        <div class="container z-2">
            <div class="row justify-content-center text-center pt-2">
                <div class="col-lg-8 col-xl-8">
                    <h1 class="display-2 mb-3">БЛОКЧЕЙН
                        MCP <strong>IS</strong><span class="text-muted h4 text-secondary">ee</span>
                        <strong>IK</strong><span class="text-muted h4 text-secondary">eep</span>
                    </h1>
                    <p class="lead px-md-1 mb-2"> MYCOIN  <strong>Web-обозреватель</strong> инвестициолнной платформы.</p>
                    <p><strong>ISIK</strong> (I see what I keep) - Я вижу, что Я храню </p><hr>
                </div>
            </div>
        </div>
    </section>
    @yield('content')

</main>

<footer class="d-flex pb-5 pt-6 pt-md-7 border-top border-light bg-primary">
    <div class="container">
        <div class="row">
            <div class="col-lg-4"><p><strong>MY-COIN платформа</strong>  - комплексная автономная замкнутая токинезированная система, обеспечивающая инвестиционный доход и реализацию проектов различных направлений и сложности.</p><hr>
                <p>Присоединяйтесь к MY-COIN и откройте для себя мир новых возможностей и успеха!</p>
                <ul class="d-flex list-unstyled mb-5 mb-lg-0">
                    <li class="mr-2"><a href="https://github.com" target="_blank"
                                        class="btn btn-icon-only btn-pill btn-primary" aria-label="github social link"
                                        data-toggle="tooltip" data-placement="top" title="Проекты MYCOIN с открытым исходным кодом">
                            <span aria-hidden="true" class="fab fa-github"></span></a>
                    </li>

                </ul>
            </div>
            <div class="col-6 col-lg-2 mb-5 mb-lg-0"><h5>Системы:</h5>
                <ul class="footer-links list-unstyled mt-2 text-muted">
                    <li class="mb-1 small">
                        <a class="p-2" target="_blank" href="#">Главная</a>
                    </li>
                    <li class="mb-1 small">
                        <a class="p-2" target="_blank" href="#">Блокчейн</a>
                    </li>
                    <li class="mb-1 small">
                        <a class="p-2" target="_blank" href="#">Start-up(-ы)</a>
                    </li>
                    <li>
                        <a class="p-2 small" target="_blank" href="#">Проекты</a>
                    </li>
                    <li>
                        <a class="p-2 small" target="_blank" href="#">ICO</a>
                    </li>
                </ul>
            </div>
            <div class="col-6 col-lg-2 mb-5 mb-lg-0"><h5>Дополнительно:</h5>
                <ul class="footer-links list-unstyled mt-2 text-muted">
                    <li class="mb-1 small">
                        <a class="p-2" href="#" target="_blank">FAQ <span class="badge badge-gray text-uppercase ml-2">v1.01</span></a>
                    </li>
                    <li class="mb-1 small">
                        <a class="p-2" target="_blank" href="#">Поддержка</a>
                    </li>
                    <li class="mb-1 small"><a class="p-2"  href="#" target="_blank">Версии<span class="badge badge-gray text-uppercase ml-2">v1.01</span></a>
                    </li>
                </ul>
            </div>
            <div class="col-12 col-lg-4 mb-5 mb-lg-0"><h5>Подписка</h5>
                <p class="text-gray font-small mt-2">Присоединяйтесь к нашей рассылке. Мы пишем редко, но только самое важное.</p>
                <form action="#">
                    <div class="form-row mb-2">
                        <div class="col-12"><label class="h6 font-weight-normal d-none" for="exampleInputEmail3">Ваш email
                                address</label> <input type="email" class="form-control mb-2"
                                                       placeholder="example@my-coin.one" name="email"
                                                       aria-label="Subscribe form" id="exampleInputEmail3" required="">
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary btn-block" data-loading-text="Sending"><span>Подписаться</span>
                            </button>
                        </div>
                    </div>
                </form>
                <p class="text-gray font-small m-0">
                    Мы никогда не передадим ваши данные. Ознакомьтесь с нашей  <a class="text-black" href="#">Политикой конфиденциальности</a>
                </p>
            </div>
        </div>
        <hr class="my-5">
        <div class="row">
            <div class="col"><a href="{{ Request::server ("SERVER_NAME") }}" class="d-flex justify-content-center"><img
                        src="{{asset('images/apple-touch-icon-72x72.png')}}" height="25" class="mb-3" alt="{{ Request::server ("SERVER_NAME") }}"></a>
                <div class="d-flex text-center justify-content-center align-items-center" role="contentinfo"><p
                        class="font-weight-normal font-small mb-0">Copyright © <strong>KB</strong>  <span class="current-year">{{date('Y')}} </span>- LEGAT CORE.
                        All rights reserved.</p></div>
            </div>
        </div>
    </div>
</footer>
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

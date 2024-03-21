@extends('ico.layouts.ico_not_Main')
@section('content')
    <div class="nk-wrap">
        <header class="nk-header page-header is-transparent is-sticky is-dark" id="header">
            <!-- Header @s -->
            <div class="header-main">
                <div class="header-container container container-xxl">
                    <div class="header-wrap">
                        <!-- Logo @s -->
                        <div class="header-logo logo animated" data-animate="fadeInDown" data-delay=".6">
                            <a href="./" class="logo-link">
                                <img class="logo-dark" src="{{asset('ico/images/logo-s2-white.png')}}" srcset="{{asset('ico/images/logo-s2-white.png')}}" alt="logo">
                                <img class="logo-light" src="{{asset('ico/images/logo-s2-white.png')}}" srcset="{{asset('ico/images/logo-s2-white.png')}}" alt="logo">
                            </a>
                        </div>
                        <!-- Menu Toogle @s -->
                        <div class="header-nav-toggle">
                            <a href="#" class="navbar-toggle" data-menu-toggle="header-menu">
                                <div class="toggle-line">
                                    <span></span>
                                </div>
                            </a>
                        </div>
                        <!-- Menu @s -->
                        <div class="header-navbar animated" data-animate="fadeInDown" data-delay=".6">
                            <nav class="header-menu" id="header-menu">
                                <ul class="menu">
                                    <li class="menu-item"><a class="menu-link nav-link" href="{{route('ico.main')}}">{{__('Начало')}}</a></li>

                                </ul>

                            </nav>
                        </div><!-- .header-navbar @e -->
                    </div>
                </div>
            </div><!-- .header-main @e -->


            <div class="banner banner-fs tc-light">
                <div class="nk-block nk-block-header nk-block-sm my-auto">
                    <div class="container pt-5">
                        <div class="banner-caption text-center">
                            <h1 class="title title-xl-s2 ttu animated" data-animate="fadeInUp" data-delay="0.7">Проведение платежа на сумму {{$amount}} <span class="bg-orange-30">USDT (ERC-20)</span> с зачислением на баланс {{$mcp_amount}} <span class="bg-orange-30">MCP</span> </h1>
                            <h1 class="title title-xs-2 ttu animated text-muted" data-animate="fadeInUp" data-delay="0.9">ICO— первоначальное размещение <span class="bg-orange-30">MCP</span> Utility Tokens (MCP Coin)</h1>
                            <div class="row justify-content-center pb-3">
                                <div class="col-sm-12 col-xl-12 col-xxl-12">
                                    <div class="row">
                                        <div class="col-sm-12 col-xl-11 col-xxl-6">
                                            <p class="lead animated" data-animate="fadeInUp" data-delay="0.8">
                                                {!!
QrCode::size(300)
   ->color(255,245,248)
   ->backgroundColor(255,90,0, 0.8)
   ->BTC('0x589Cf8dc7f33Ab1856cc0b89a9cB2ac3642e5e7E',$amount);
                   !!}

                                            </p>
                                            <p class="lead animated" data-animate="fadeInUp" data-delay="0.9">Для проведения платежа в сумме {{$amount}} USDT отсканируйте код из приложения Вашего кошелька</p>
                                        </div>


                                        <div class="col-sm-12 col-xl-11 col-xxl-6">
                                            <h3 class="lead animated" data-animate="fadeInUp" data-delay="0.8">
                                                USDT (ERC-20!) кошелек платформы <h3 class="title-bold ttu">0x589Cf8dc7f33Ab1856cc0b89a9cB2ac3642e5e7E</h3>

                                            </h3>
                                            <p class="lead animated" data-animate="fadeInUp" data-delay="0.9">После проведения платежа ваш баланс в системе будет зачислено
                                            <h3 class="title-bold ttu">{{$mcp_amount}} <span class="bg-orange-30">MCP</span></h3>
                                            </p>
                                            <p class="lead animated" data-animate="fadeInUp" data-delay="0.9">Ваш логин на платформе
                                            <h3 class="title-bold ttu"><span class="bg-orange-30">{{$user_name}}</span></h3>
                                            </p>
                                            <p class="lead animated" data-animate="fadeInUp" data-delay="0.9">Адрес для уведомления
                                            <h3 class="title-bold ttu"><span class="bg-orange-30">{{$email}}</span></h3>
                                            </p>
                                            <div class="row ">
                                                <div class="col nb">
                                                    <hr/>
                                                    <div class="row">
                                                        <div class="col-2 col-left">
                                                            NB!
                                                        </div>
                                                        <div class="col-10 col-right">
                                                            <p>На указанный Вами адрес автоматически регистрируется системный кошелек с начислением MCP на баланс. </p>
                                                            <p>Зачисленные на системный баланс MCP доступны для участия в инвестировании проектов</p>
                                                            <p>Вывод MPC на баланс Внешнего кошелька будет осуществлен при следующем обновлении системы.</p>

                                                        </div>
                                                    </div>


                                                </div>
                                            </div>

                                        </div>

                                    </div>

                                </div>
                            </div>
                            <div class="cpn-action">
                                <ul class="btn-grp mx-auto">
                                    <li class="animated" data-animate="fadeInUp" data-delay="1.1"><a href="#" data-bs-toggle="modal" data-bs-target="#payMCP-popup"  class="btn btn-primary btn-round">Я ОПЛАТИЛ(-а)</a></li>
                                </ul>



                            </div>
                        </div>
                    </div>
                </div>


                <!-- Place Particle Js -->
                <div id="particles-bg" class="particles-container is-fixed particles-bg op-20"></div>
            </div>
        </header>
        <main class="nk-pages tc-light">

            <!-- // -->

            <!-- // -->

            <!-- // -->

            <!-- // -->

            <!-- // -->


        </main>
        <!-- Footer -->
        <footer class="nk-footer-bar section section-s tc-light">
            <div class="container container-xxl">
                <div class="row gutter-vr-10px">
                    <div class="col-lg-6 order-lg-last text-lg-end">
                        <ul class="footer-nav">


                        </ul>
                    </div>
                    <div class="col-lg-6">
                        <div class="copyright-text copyright-text-s2">Copyright &copy; 2024 ICO. <img src="{{asset('images/kb.png')}}" alt="KB Generation" class="img" width='15'></div>
                    </div>
                </div>
            </div>
        </footer>
        <div class="nk-ovm nk-ovm-repeat nk-ovm-fixed shape-i">
            <div class="ovm-line"></div>
        </div>
    </div>

    <div class="modal" id="payMCP-popup">
        <div class="modal-dialog modal-xl modal-dialog-centered" style="width: 80%;">
            <div class="modal-content">
                <a href="#" class="modal-close" data-bs-dismiss="modal" aria-label="Close"><em class="ti ti-close"></em></a>
                <div class="ath-container m-0">
                    <div class="ath-body bg-theme tc-light">
                        <h5 class="ath-heading title">Ваш платеж принят</h5>
                        <div class="row ">
                            <div class="col text-center text-muted">
                                <a href="{{route('ico.main')}}" type="submit" class="btn btn-primary btn-block btn-md">Закрыть</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


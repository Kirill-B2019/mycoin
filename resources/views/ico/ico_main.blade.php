@extends('ico.layouts.ico')
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
                                <img class="logo-dark" src="{{asset('ico/images/logo-s2-white.png')}}" srcset="{{asset('ico/images/logo-s2-white.png')}}"  alt="logo">
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
                                    <li class="menu-item"><a class="menu-link nav-link" href="#header">{{__('Начало')}}</a></li>
                                    <li class="menu-item"><a class="menu-link nav-link" href="#about">О Системе</a></li>
                                    <li class="menu-item"><a class="menu-link nav-link" href="#platform">Преимущества</a></li>
                                  <!--      <li class="menu-item"><a class="menu-link nav-link" href="#mvp">MVP</a></li>
                                    <li class="menu-item"><a class="menu-link nav-link" href="#tokensale">Tokens</a></li>-->
                                    <li class="menu-item"><a class="menu-link nav-link" href="#roadmap">{{__('Дорожная карта')}}</a></li>
<!--                                    <li class="menu-item"><a class="menu-link nav-link" href="#contact">Contact</a></li>
                                    <li class="menu-item has-sub">
                                        <a class="menu-link nav-link menu-toggle" href="#">More</a>
                                        <ul class="menu-sub menu-drop">
                                            <li class="menu-item"><a class="menu-link nav-link" href="#docs">Docs</a></li>
                                            <li class="menu-item"><a class="menu-link nav-link" href="#team">Team</a></li>
                                            <li class="menu-item"><a class="menu-link nav-link" href="#faqs">Faqs</a></li>
                                        </ul>
                                    </li>-->
                                </ul>
<!--                                <ul class="menu-btns">
                                    <li><a href="#" data-bs-toggle="modal" data-bs-target="#login-popup" class="btn btn-md btn-round btn-thin btn-outline btn-primary btn-auto no-change"><span>Login</span></a></li>
                                </ul>-->
                            </nav>
                        </div><!-- .header-navbar @e -->
                    </div>
                </div>
            </div><!-- .header-main @e -->
            <div class="banner banner-fs tc-light">
                <div class="nk-block nk-block-header nk-block-sm my-auto">
                    <div class="container pt-5">
                        <div class="banner-caption text-center">
                            <h1 class="title title-xl-s2 ttu animated" data-animate="fadeInUp" data-delay="0.7">ICO— первоначальное размещение <span class="bg-orange-30">MCP</span> Utility Tokens (MCP Coin)</h1>
                            <h1 class="title title-xs-2 ttu animated text-muted" data-animate="fadeInUp" data-delay="0.9">Токенизированная криптоинвестиционная проектная платформа (система) с собственным BLOCKCHAIN</h1>
                            <div class="row justify-content-center pb-3">
                                <div class="col-sm-12 col-xl-12 col-xxl-12">
                                    <div class="row">
                                        <div class="col-sm-12 col-xl-11 col-xxl-6">
                                            <p class="lead animated" data-animate="fadeInUp" data-delay="0.8">Токенизированная криптоинвестиционная платформа с возможностью получить инвестиции для реализации инновационных проектов, а так же обеспечивающая устойчивый вариативный доход для инвесторов.</p>
                                            <p class="lead animated" data-animate="fadeInUp" data-delay="0.9">1 MCP = 0.01 gramm AU (10 karat)</p>
                                        </div>
                                        <div class="col justify-content-end token_info animated" data-animate="fadeInUp" data-delay="1">
                                            <p class="green">/*</p>
                                            <p class="green">/* @ {{$MCPtoken->desc}}</p>
                                            <p class="green">/*</p>
                                            <p>>_name=> <span>{{$MCPtoken->token_name}}</span> </p>
                                            <p>>_totalSupply=> <span>{{number_format((float)$MCPtoken->total/100000, 6, '.', ' ')}}</span><small> (_decimals=> <span>6</span>)</small></p>
                                            <p>>_protocol=> <span>{{$MCPtoken->protocol}}</span></p>
                                            <p>>_network=> <span>{{$MCPtoken->main_net}}</span></p>
                                            <p>>_endPoint=> <span>{{$MCPtoken->end_point}}</span></p>
                                            <p>>_createdAt=> <span>{{$MCPtoken->created_at->format('d-m-Y')}}</span></p>
                                            <p>>_nowPrice=> <span>1 MCP = {{$nowPrice}} USDT</span><small> ({{now()->format('H:i d-m-Y')}})</small></p>
                                        </div>
                                    </div>

                                </div>

                            </div>
                            <div class="cpn-action">
                                <ul class="btn-grp mx-auto">
                                    <li class="animated" data-animate="fadeInUp" data-delay="1.1"><a href="#" data-bs-toggle="modal" data-bs-target="#payMCP-popup"  class="btn btn-primary btn-round">ПРОДАЖА ТОКЕНОВ MCP</a></li>
                                </ul>



                            </div>
                        </div>
                    </div>
                </div>
                <div class="nk-block nk-block-status">
                    <div class="container container-xxl">
                        <div class="row gutter-vr-40px justify-content-between">
                            <div class="col-xxl-5 col-sm-12 col-xl-5 col-lg-5 col-md-6">
                                <div class="progress-wrap progress-wrap-point animated" data-animate="fadeInUp" data-delay="0.8">
                                    <ul class="progress-info progress-info-s2">
                                        <li>{{__('Размещено')}} - <span>79.200 Токенов</span> (9%)</li>
                                        <li class="text-end">{{__('Цель')}} - <span>880.000 Токенов</span></li>
                                    </ul>
                                    <div class="progress-bar progress-bar-xs">
                                        <div class="progress-percent progress-percent-s2" data-percent="9"></div>
                                        <div class="progress-point" data-point="6">Soft Cap</div>
                                        <div class="progress-point" data-point="50">Crowdsale</div>
                                        <div class="progress-point" data-point="90">Hard Cap</div>
                                    </div>

                                </div>
                            </div>
                            <div class="col-xxl-7 col-sm-12 col-xl-7 col-lg-7 col-md-6 text-center text-sm-start">
                                <div class="row justify-content-around gutter-vr-30px">
                                    <div class="col-xxl-3 col-sm-6 col-md-6 col-lg-6 col-xl-3">
                                        <div class="status-info animated" data-animate="fadeInUp" data-delay="0.9">
                                            <h6 class="title title-xxs tc-default status-title ttu">{{__('Этапная скидка')}}</h6>
                                            <h3 class="fz-3 fw-3 status-percent">60%</h3>
                                            <div class="fz-8">{{__('ДОСТУПНА СЕЙЧАС')}}</div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-3 col-sm-6 col-md-6 col-lg-6 col-xl-3">
                                        <div class="status-info animated" data-animate="fadeInUp" data-delay="0.9">
                                            <h6 class="title title-xxs tc-default status-title ttu">Цена сейчас: {{$nowPrice*0.4}}</h6>
                                            <h3 class="fz-3 fw-3 status-percent">{{$nowPrice*0.4}} USDT </h3>
                                            <div class="fz-8">1 MCP = 0,01 rgAU (10Karat)</div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-6 col-sm-12 col-md-12 col-lg-12 col-xl-6">
                                        <div class="status-countdown float-sm-end animated" data-animate="fadeInUp" data-delay="1">
                                            <h6 class="title title-xxs tc-default status-title ttu">Скидка закончится через:</h6>
                                            <div class="countdown justify-content-center justify-content-sm-start countdown-s3 countdown-s3-alt" data-date="2024/04/14" data-day-text="дни" data-hour-text="час" data-min-text="мин" data-sec-text="сек"></div>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Place Particle Js -->
                <div id="particles-bg" class="particles-container is-fixed particles-bg op-20"></div>
            </div>
        </header>
        <main class="nk-pages tc-light">
            <section class="section" id="about">
                <div class="container">
                    <div class="row justify-content-center text-center">
                        <div class="col-lg-6">
                            <div class="section-head section-head-s2">
                                <h2 class="title title-xl animated" data-animate="fadeInUp" data-delay="0.1" title="СУТЬ СИСТЕМЫ"><span class="bg-orange-30">О Системе</span></h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container container-xxl">
                    <div class="nk-block">
                        <div class="row justify-content-between align-items-center gutter-vr-40px">
                            <div class="col-lg-6 order-lg-last">
                                <div class="gfx py-4 animated" data-animate="fadeInUp" data-delay="0.2">
                                    <img src="{{asset('ico/images/azalea/gfx-e.png')}}" alt="gfx">
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <div class="nk-block-text">
                                    <h2 class="title animated" data-animate="fadeInUp" data-delay="0.3">Мы создаем полностью автономную криптоинвестиционную проектную площадку.</h2>
                                    <p class="animated" data-animate="fadeInUp" data-delay="0.4">Наша цель - разработать автономную инвестиционную платформу, гарантирующую исполнение контрактов и обеспечивающую развитие инновационных технологий, продуктов и услуг. </p>
                                    <p class="animated" data-animate="fadeInUp" data-delay="0.5">Исполнение проектов обеспечивают СМАРТ контракты. Все данные о контрактах и любых транзакциях храниться в цепочках БЛОКЧАЙНА платформы. Сохранность средств и целевое использование гарантируется собственными активами платформы – страхование от не достижения проектом поставленных результатов.</p>
                                    <ul class="btn-grp gutter-vr-20px pdt-m">
                                        <li class="animated" data-animate="fadeInUp" data-delay="0.6"><a href="{{asset('storage/WP0224v1.pdf')}}" class="menu-link btn btn-primary btn-round btn-lg"><span>White Paper платформы</span> <em class="icon ti ti-arrow-down"></em></a></li>
                                        <li class="animated" data-animate="fadeInUp" data-delay="0.7"><a href="#ecosystems" class="menu-link btn btn-underline">Наша платформа</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- // -->
            <section class="section" id="ecosystems">
                <div class="container">
                    <div class="row justify-content-center text-center">
                        <div class="col-lg-6">
                            <div class="section-head section-head-s2">
                                <h2 class="title title-xl animated" data-animate="fadeInUp" data-delay="0.1" title="{{__('Развитие')}}"><span class="bg-orange-30">СТРУКТУРА ПЛАТФОРМЫ</span></h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container container-xxl">
                    <div class="nk-block">
                        <div class="row text-center align-items-lg-start gutter-vr-40px">
                            <div class="col-lg-3 col-sm-6">
                                <div class="feature feature-s6 feature-s6-1 animated" data-animate="fadeInUp" data-delay="0.3">
                                    <div class="feature-text">
                                        <h5 class="title title-sm ttu">MCP BlockChain + Explorer</h5>
                                        <p>Реализованный на высокоуровневом языке (GO) собственный БЛОКЧЕЙН (MCP ISIK - I See I Keep) имеет распределенные ноды разных типов (простой – для подтверждения транзакций и голосования, полный для обработки всей цепи).</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <div class="feature feature-s6 feature-s6-2 animated" data-animate="fadeInUp" data-delay="0.4">
                                    <div class="feature-text">
                                        <h5 class="title title-sm ttu">Инвестиционная площадка</h5>
                                        <p>Размещение информации о проектах доступных для крипто инвестирования. Каждый проект имеет свой контракт и оценку с присвоением инвестиционного рейтинга автоматизированной экспертной системой площадки. Инвестиции в конкретный проект имеют алгоритмы страхования взносов. Доступны различные варианты получения доходов. В приоритете инновационные проекты в социально значимых, научных, экологических дисциплинах. </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <div class="feature feature-s6 feature-s6-3 animated" data-animate="fadeInUp" data-delay="0.5">
                                    <div class="feature-text">
                                        <h5 class="title title-sm ttu">Платформа обмена активов</h5>
                                        <p>Торговая платформа поддерживает оборот обязательств инвесторов различных проектов и активов проектов между участниками системы. Размещение обязательств по контрактам проектов для свободной конвертации и поддержки инвестирования проекта, обеспечения доходов инвесторов. </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <div class="feature feature-s6 feature-s6-4 animated" data-animate="fadeInUp" data-delay="0.6">
                                    <div class="feature-text">
                                        <h5 class="title title-sm ttu">платформа Поддержки преоктного ICO</h5>
                                        <p>Проектное ICO на разных стадиях, поддержка автономных проектных подсистем. Платформа запуска проектов.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="bg-image bg-contain bg-bottom-center bg-ecosystems animated d-none d-sm-block" data-animate="fadeInUp" data-delay="0.2">
                            <img src="{{asset('ico/images/globe-particle.png')}}" alt="globe">
                        </div>
                    </div>
                </div>
            </section>
            <!-- // -->
            <section class="section" id="platform">
                <div class="container">
                    <div class="row justify-content-center text-center">
                        <div class="col-lg-6">
                            <div class="section-head section-head-s2">
                                <h2 class="title title-xl animated" data-animate="fadeInUp" data-delay="0.1" title="Инвестиционная площадка">ПРЕИМУЩЕСТВА</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container container-xxl">
                    <div class="nk-block">
                        <div class="row justify-content-center">
                            <div class="col-xl-6 col-lg-8">
                                <ul class="nav tab-nav tab-nav-btn-bdr-s2 justify-content-center justify-content-sm-between pb-4 pb-sm-5 animated" data-animate="fadeInUp" data-delay="0.1">
                                    <li><a class="active" data-bs-toggle="tab" href="#tab-1-1">Для инвесторов</a></li>
                                    <li class="tab-nav-sap d-none d-sm-block"></li>
                                    <li><a data-bs-toggle="tab" href="#tab-1-2">Для авторов проектов</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="tab-1-1">
                                <div class="row align-items-center justify-content-between gutter-vr-40px">
                                    <div class="col-lg-6 order-lg-last">
                                        <div class="nk-block-img nk-block-ca animated" data-animate="fadeInUp" data-delay="0.2">
                                            <div class="nk-circle-animation nk-df-center fast"></div><!-- .circle-animation -->
                                            <img class="shadow rounded" src="{{asset('ico/images/app-screens/sc-medium-a.png')}}" alt="">
                                        </div>
                                    </div>
                                    <div class="col-lg-5">
                                        <div class="nk-block-text mgb-m30">
                                            <h2 class="title title-md animated" data-animate="fadeInUp" data-delay="0.2">Прямое участие в развитии платформы</h2>
                                            <p class="animated" data-animate="fadeInUp" data-delay="0.2">Стать совладельцем платформы через токен. Стимулирование инноваций - Ваши инвестиции в платформу способствуют росту инноваций, технологий и новых решений, что в свою очередь может принести пользу широкому обществу. </p>
                                            <div class="feature feature-inline feature-middle animated" data-animate="fadeInUp" data-delay="0.3">
                                                <div class="feature-icon feature-icon-md">
                                                    <em class="icon icon-md icon-grd ikon ikon-bulb"></em>
                                                </div>
                                                <div class="feature-text">
                                                    <p>Влияние на развитие бизнеса - Ваш вклад в стратегические решения и направление развития платформы.</p>
                                                </div>
                                            </div>
                                            <div class="feature feature-inline feature-middle animated" data-animate="fadeInUp" data-delay="0.4">
                                                <div class="feature-icon feature-icon-md">
                                                    <em class="icon icon-md icon-grd ikon ikon-paricle"></em>
                                                </div>
                                                <div class="feature-text">
                                                    <p>Ранний доступ к инновациям - Вы среди первых, кто получит доступ к новым и инновационным проектам, подсистемам и сервисам.</p>
                                                </div>
                                            </div>
                                            <div class="feature feature-inline feature-middle animated" data-animate="fadeInUp" data-delay="0.5">
                                                <div class="feature-icon feature-icon-md">
                                                    <em class="icon icon-md icon-grd ikon ikon-bulb-2"></em>
                                                </div>
                                                <div class="feature-text">
                                                    <p>Участие в системе стартапов - возможность взаимодействовать с другими профессионалами и инвесторами в сфере стартапов, что может привести к новым возможностям и контактам</p>
                                                </div>
                                            </div>
                                            <div class="feature feature-inline feature-middle animated" data-animate="fadeInUp" data-delay="0.6">
                                                <div class="feature-icon feature-icon-md">
                                                    <em class="icon icon-md icon-grd ikon ikon-document-2"></em>
                                                </div>
                                                <div class="feature-text">
                                                    <p>Диверсификация портфеля - Участие в различных проектах может помочь Вам диверсифицировать свой инвестиционный портфель, расширяя свои возможности для долгосрочного финансового роста. Выбор вариантов дохода, прозрачность и гарантии сохранности. </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tab-1-2">
                                <div class="row align-items-center justify-content-between gutter-vr-40px">
                                    <div class="col-lg-6 order-lg-last">
                                        <div class="nk-block-img nk-block-ca animated" data-animate="fadeInUp" data-delay="0.2">
                                            <div class="nk-circle-animation nk-df-center fast"></div><!-- .circle-animation -->
                                            <img class="shadow rounded" src="{{asset('ico/images/app-screens/sc-medium-a2.png')}}" alt="">
                                        </div>
                                    </div>
                                    <div class="col-lg-5">
                                        <div class="nk-block-text mgb-m30">
                                            <h2 class="title title-md animated" data-animate="fadeInUp" data-delay="0.2">Реализовать идеи и наработки</h2>
                                            <p class="animated" data-animate="fadeInUp" data-delay="0.2">Инструменты для удобной подачи заявки на инвестиции, проведения публичных презентаций проекта и взаимодействия с потенциальными инвесторами</p>
                                            <div class="feature feature-inline feature-middle animated" data-animate="fadeInUp" data-delay="0.3">
                                                <div class="feature-icon feature-icon-md">
                                                    <em class="icon icon-md icon-grd ikon ikon-bulb"></em>
                                                </div>
                                                <div class="feature-text">
                                                    <p>Доступ к большему числу потенциальных инвесторов: инвестиционная платформа предоставляет авторам проектов возможность привлекать инвесторов из различных регионов и стран, что расширяет их возможности для сбора средств.</p>
                                                </div>
                                            </div>
                                            <div class="feature feature-inline feature-middle animated" data-animate="fadeInUp" data-delay="0.4">
                                                <div class="feature-icon feature-icon-md">
                                                    <em class="icon icon-md icon-grd ikon ikon-paricle"></em>
                                                </div>
                                                <div class="feature-text">
                                                    <p>Повышение доверия инвесторов: присутствие проекта на инвестиционной платформе может повысить доверие потенциальных инвесторов благодаря прозрачности информации, а также возможности проведения дополнительных проверок и анализа проекта.</p>
                                                </div>
                                            </div>
                                            <div class="feature feature-inline feature-middle animated" data-animate="fadeInUp" data-delay="0.5">
                                                <div class="feature-icon feature-icon-md">
                                                    <em class="icon icon-md icon-grd ikon ikon-bulb-2"></em>
                                                </div>
                                                <div class="feature-text">
                                                    <p>Возможности для масштабирования проекта: наличие доступа к широкому кругу потенциальных инвесторов и партнеров может способствовать более быстрому развитию и расширению проекта.</p>
                                                </div>
                                            </div>
                                            <div class="feature feature-inline feature-middle animated" data-animate="fadeInUp" data-delay="0.6">
                                                <div class="feature-icon feature-icon-md">
                                                    <em class="icon icon-md icon-grd ikon ikon-document-2"></em>
                                                </div>
                                                <div class="feature-text">
                                                    <p>Меньшие издержки и риски: использование инвестиционной платформы может помочь снизить издержки на поиск и привлечение инвестиций, а также уменьшить некоторые риски благодаря возможности проведения дополнительной оценки проекта и его потенциала.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- .container -->
            </section>
            <!-- // -->
            <section class="section" id="mvp">
                <div class="container">
                    <div class="row justify-content-center text-center">
                        <div class="col-lg-6">
                            <div class="section-head section-head-s2">
                                <h2 class="title title-xl animated" data-animate="fadeInUp" data-delay="0.1" title="MVP Apps">Мобильное приложение</h2>
                                <p class="animated" data-animate="fadeInUp" data-delay="0.2">Ваш платформенный кошелек  и доступ к дополнительныи функциям.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container container-xxl">
                    <div class="nk-block">
                        <div class="row align-items-center justify-content-center justify-content-xl-between gutter-vr-30px">
                            <div class="col-xxl-6 col-xl-6 col-lg-8">
                                <div class="nk-block-img nk-block-plx animated" data-animate="fadeInUp" data-delay="0.3">
                                    <img class="shadow rounded" src="{{asset('ico/images/app-screens/sc-medium-b.png')}}" alt="">
                                    <img class="nk-block-img-plx plx-screen shadow rounded" src="{{asset('ico/images/app-screens/sc-small-d.jpg')}}" alt="">
                                    <img class="nk-block-img-plx plx-circle plx-circle-s1" src="{{asset('ico/images/gfx/circle-a.png')}}" alt="">
                                    <img class="nk-block-img-plx plx-polygon plx-polygon-s1" src="{{asset('icoimages/gfx/polygon-a.png')}}" alt="">
                                    <img class="nk-block-img-plx plx-triangle plx-triangle-s1" src="{{asset('ico/images/gfx/triangle-a.png')}}" alt="">
                                </div>
                            </div>
                            <div class="col-xxl-5 col-xl-6 col-lg-8">
                                <div class="nk-block-text">
                                    <div class="feature feature-inline animated" data-animate="fadeInUp" data-delay="0.4">
                                        <div class="feature-icon feature-icon-md">
                                            <em class="icon icon-xs icon-circle fas fa-check"></em>
                                        </div>
                                        <div class="feature-text">
                                            <p>Баланс платформы и токенов проекта.</p>
                                        </div>
                                    </div>
                                    <div class="feature feature-inline animated" data-animate="fadeInUp" data-delay="0.5">
                                        <div class="feature-icon feature-icon-md">
                                            <em class="icon icon-xs icon-circle fas fa-check"></em>
                                        </div>
                                        <div class="feature-text">
                                            <p>Транзакции между участниками платформы. Ваша приватная подпись.</p>
                                        </div>
                                    </div>
                                    <div class="feature feature-inline animated" data-animate="fadeInUp" data-delay="0.6">
                                        <div class="feature-icon feature-icon-md">
                                            <em class="icon icon-xs icon-circle fas fa-check"></em>
                                        </div>
                                        <div class="feature-text">
                                            <p>Участие в проектах.</p>
                                        </div>
                                    </div>
                                    <div class="feature feature-inline animated" data-animate="fadeInUp" data-delay="0.7">
                                        <div class="feature-icon feature-icon-md">
                                            <em class="icon icon-xs icon-circle fas fa-check"></em>
                                        </div>
                                        <div class="feature-text">
                                            <p>Статистика по портфелю и проектам детально.</p>
                                        </div>
                                    </div>
                                    <div class="feature feature-inline animated" data-animate="fadeInUp" data-delay="0.8">
                                        <div class="feature-icon feature-icon-md">
                                            <em class="icon icon-xs icon-circle fas fa-check"></em>
                                        </div>
                                        <div class="feature-text">
                                            <p>Новости, сообщения, персональные уведомления.</p>
                                        </div>
                                    </div>
                                    <div class="text-center text-sm-start animated" data-animate="fadeInUp" data-delay="0.9">
                                        Дополнительные функции: статьи и общение с экспертами, доступ в сообщество инвесторов, подсистема ИДЕЯ и многое другое.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- // -->
            <section class="section" id="tokensale">
                <div class="container">
                    <div class="row justify-content-center text-center">
                        <div class="col-lg-6">
                            <div class="section-head section-head-s2">
                                <h2 class="title title-xl animated" data-animate="fadeInUp" data-delay="0.1" title="Token Details"><span class="bg-orange-30">MCP Токен</span></h2>
                                <p class="animated" data-animate="fadeInUp" data-delay="0.2">Рспределение эмиссии контракта.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container container-xxl">
                    <div class="nk-block">
                        <div class="row align-items-center gutter-vr-50px">
                            <div class="col-xxl-4 col-lg-6 px-xl-5 order-xl-1">
                                <div class="animated" data-animate="fadeInUp" data-delay="0.3">
                                    <canvas class="chart-canvas" id="token-distribution"></canvas>
                                </div>
                            </div>
                            <div class="col-xxl-4 col-lg-6">
                                <ul class="chart-data-s2 row" data-canvas="token-distribution" data-canvas-type="pie" data-border-color="#0f1932">
                                    <li class="col-sm-8" data-color="#1f2e4d" data-color-hover="#f8520c" data-label="Токены, выделенные для публичной продажи" data-title="Токены, выделенные для публичной продажи" data-subtitle="(Заблокированы)" data-amount="45"></li>
                                    <li class="col-sm-8" data-color="#1f2e4d" data-color-hover="#f8520c" data-label="Токены, выделенные для частной продажи" data-title="Токены, выделенные для частной продажи" data-subtitle="(каждые 3 месяца 50% разблокируется)" data-amount="25"></li>
                                    <li class="col-sm-6" data-color="#1f2e4d" data-color-hover="#f8520c" data-label="Резервный фонд" data-title="Резервный фонд" data-subtitle="(Заблокированы 12 месяцев)" data-amount="8"></li>
                                    <li class="col-sm-6" data-color="#1f2e4d" data-color-hover="#f8520c" data-label="Команда" data-title="Команда" data-subtitle="(6 месяцев карантин)" data-amount="12"></li>
                                    <li class="col-sm-6" data-color="#1f2e4d" data-color-hover="#f8520c" data-label="Pre-ICO и обновления" data-title="Pre-ICO и обновления" data-subtitle="(Заблокированы 3 месяцев или до цели)" data-amount="6"></li>
                                    <li class="col-sm-6" data-color="#1f2e4d" data-color-hover="#f8520c" data-label="Аудиторы и партнеры" data-title="Аудиторы и партнеры" data-subtitle="(Заблокированы 6 месяцев )" data-amount="4"></li>
                                </ul>
                            </div>
                            <div class="col-xxl-4 col-xl-12 order-last">
                                <div class="token-info-s2">
                                    <div class="row gutter-vr-50px">
                                        <div class="col-6 col-xxl-6 col-lg-3">
                                            <div class="token-info-item color-1 animated" data-animate="fadeInUp" data-delay="0.7">
                                                <div class="token-info-title">Развернут</div>
                                                <h4 class="token-info-des">{{$MCPtoken->created_at->format('d-m-Y')}}</h4>
                                            </div>
                                        </div>
                                        <div class="col-6 col-xxl-6 col-lg-3">
                                            <div class="token-info-item color-1 animated" data-animate="fadeInUp" data-delay="0.7">
                                                <div class="token-info-title">Символ</div>
                                                <h4 class="token-info-des">MCP</h4>
                                            </div>
                                        </div>
                                        <div class="col-6 col-xxl-6 col-lg-3">
                                            <div class="token-info-item color-2 animated" data-animate="fadeInUp" data-delay="0.75">
                                                <div class="token-info-title">Цена без скидки</div>
                                                <h4 class="token-info-des">{{$nowPrice}} USDT</h4>
                                            </div>
                                        </div>
                                        <div class="col-6 col-xxl-6 col-lg-3">
                                            <div class="token-info-item color-2 animated" data-animate="fadeInUp" data-delay="0.75">
                                                <div class="token-info-title">Общий обьем</div>
                                                <h4 class="token-info-des"> более {{number_format((float)$MCPtoken->total/100000000000, 0, '.', ' ')}} M</h4>
                                            </div>
                                        </div>
                                        <div class="col-6 col-xxl-6 col-lg-3">
                                            <div class="token-info-item color-3 animated" data-animate="fadeInUp" data-delay="0.8">
                                                <div class="token-info-title">HARD Cap этапа</div>
                                                <h4 class="token-info-des"> 880.000 MCP</h4>
                                            </div>
                                        </div>
                                        <div class="col-6 col-xxl-6 col-lg-3">
                                            <div class="token-info-item color-3 animated" data-animate="fadeInUp" data-delay="0.8">
                                                <div class="token-info-title">Обьем PreICO</div>
                                                <h4 class="token-info-des">0,13 % эмиссии</h4>
                                            </div>
                                        </div>

                                        <div class="col-6 col-xxl-6 col-lg-3">
                                            <div class="token-info-item color-5 animated" data-animate="fadeInUp" data-delay="0.9">
                                                <div class="token-info-title">Скидка на этапе</div>
                                                <h4 class="token-info-des">40%</h4>
                                            </div>
                                        </div>
                                        <div class="col-6 col-xxl-6 col-lg-3">
                                            <div class="token-info-item color-5 animated" data-animate="fadeInUp" data-delay="0.9">
                                                <div class="token-info-title">Цена со скидкой</div>
                                                <h4 class="token-info-des">{{$nowPrice*0.4}} USDT</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- // -->
            <section class="section" id="roadmap">
                <div class="container">
                    <div class="row justify-content-center text-center">
                        <div class="col-lg-6">
                            <div class="section-head section-head-s2">
                                <h2 class="title title-xl animated" data-animate="fadeInUp" data-delay="0.1" title="Timeline">ЭТАПЫ</h2>
                                <p class="animated" data-animate="fadeInUp" data-delay="0.2">MCP глобальная платформа для всех без границ. Работает на блокчейне и смарт-контрактах</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container container-xxl">
                    <div class="nk-block">
                        <div class="roadmap-wrap roadmap-wrap-ovl-right text-center animated" data-animate="fadeInUp" data-delay="0.3">
                            <div class="roadmap-line-s2"></div>
                            <div class="roadmap-slider has-carousel carousel-nav-center" data-blank="true" data-items="5" data-items-tab-l="4" data-items-tab-p="3" data-items-mobile="2" data-margin="-1" data-navs="true">
                                <div class="roadmap roadmap-s2 roadmap-i1 roadmap-finished">
                                    <h6 class="roadmap-year-s2">2023</h6>
                                    <h5 class="title title-sm roadmap-date">Июнь - Сен</h5>
                                    <div class="roadmap-text">
                                        <p>Формулировка идеи, выбор модели для реализации, набросок структуры для прототипа.</p>
                                    </div>
                                </div>
                                <div class="roadmap roadmap-s2 roadmap-i2 roadmap-running">
                                    <h6 class="roadmap-year-s2">2024</h6>
                                    <h5 class="title title-sm roadmap-date">Март</h5>
                                    <div class="roadmap-text">
                                        <p>Запуск реализованной части прототипа. Запуск PRE - ICO</p>
                                    </div>
                                </div>
                                <div class="roadmap roadmap-s2 roadmap-i3">
                                    <h6 class="roadmap-year-s2">2024</h6>
                                    <h5 class="title title-sm roadmap-date">Апрель-Май</h5>
                                    <div class="roadmap-text">
                                        <p>Первое глобальное обновление. Запуск личных кабинетов. Распределение БЛОКЧЕЙН</p>
                                    </div>
                                </div>
                                <div class="roadmap roadmap-s2 roadmap-i4">
                                    <h6 class="roadmap-year-s2">2024</h6>
                                    <h5 class="title title-sm roadmap-date">лето</h5>
                                    <div class="roadmap-text">
                                        <p>Запуск приложений на IOS и Android. Запуск экспертной подсистемы. Запуск обозревателя IS.</p>
                                    </div>
                                </div>
                                <div class="roadmap roadmap-s2 roadmap-i5">
                                    <h6 class="roadmap-year-s2">2024</h6>
                                    <h5 class="title title-sm roadmap-date">декабрь</h5>
                                    <div class="roadmap-text">
                                        <p>Размещено более 10 проектов на общую сумму более 10 М USDT</p>
                                    </div>
                                </div>
                                <div class="roadmap roadmap-s2 roadmap-i6">
                                    <h6 class="roadmap-year-s2">2025</h6>
                                    <h5 class="title title-sm roadmap-date">середина</h5>
                                    <div class="roadmap-text">
                                        <p>Листинг MCP на основных площадках. Повышение доходности все системы.</p>
                                    </div>
                                </div>
                                <div class="roadmap roadmap-s2 roadmap-i7">
                                    <h6 class="roadmap-year-s2">2025</h6>
                                    <h5 class="title title-sm roadmap-date">конец</h5>
                                    <div class="roadmap-text">
                                        <p>Стоимость 1 MCP = 10 USDT</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
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
@endsection

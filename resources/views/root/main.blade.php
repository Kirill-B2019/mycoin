@extends('root.layouts.MainPage.MainPage')
@section('title') MyCOINin CRYPTO FOUND Plarform @endsection
@section('content')




    <!-- start of hero -->
    <section class="hero hero-style-three hero-slider-wrapper">
        <div class="hero-slider">
            <div class="slide">
                <img src="{{asset('images/slider/slide-founder.png')}}" alt>
                <div class="container">
                    <div class="col col-sm-8 slider-title">
                        <h1>Инвестируйте в <span>основателей</span>, строящих <span>будущее.</span></h1>
                        <p>Получайте акции и места в первом ряду для стартапов и малых предприятий, которые вам нравятся. <br>Все платежи в USDT (ERC-20).</p>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="btn theme-btn">Присоединиться к MyCOIN</a>
                        @endif

                    </div>
                </div>
            </div>
            <div class="slide">
                <img src="{{asset('images/slider/slide-founder2.png')}}" alt>
                <div class="container">
                    <div class="col col-sm-8 slider-title">
                        <h1>Создавайте <span>технологии</span> и <span>продукты</span>, о которых <span>будут</span> говорить</h1>
                        <p>Нет лучшего места, чтобы начать охоту за крутыми и умными инновациями, которые удивляют и восхищают. MyCOIN — это место, где запускаются новые продукты, воплащаются идеи, реализуются мечты.</p>
                        <a href="{{ route('root.all_projects') }}" class="btn theme-btn">Проекты MyCOIN</a>
                    </div>
                </div>
            </div>
            <!-- 3 слайд -->
            <!-- <div class="slide">
                    <img src="{{asset('images/slider/slide-1.jpg')}}" alt>
                    <div class="container">
                        <div class="col col-sm-8 slider-title">
                            <h1>The most elegant <span>creature</span> is in grave <span>danger.</span></h1>
                            <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere.</p>
                            <a href="#" class="btn theme-btn">Case study</a>
                        </div>
                    </div>
                </div>-->
        </div>
    </section>
    <!-- end of hero slider -->


    <!-- start urgent-donation -->
    <section class="urgent-donation" style="z-index: 1">
        <div class="container">
            <div class="row urgent-inner">
                <div class="col col-lg-12 col-lg-offset-0">
                    <div class="urgent-slider">
                        <div class="urgent-box">
                            <div class="img-holder">
                                <img src="{{asset($mainPage->preview_image)}}" alt="{{$mainPage->name}}" class="img img-responsive">
                            </div>

                            <div class="details">
                                <span>СРОЧНО</span>
                                <h2>{{$mainPage->name}}</h2>
                                <p><span>{{$mainPage->announce}}</span></p>
                                <p>{{$mainPage->preview_desc}}</p>
                                <p class="remaing-date small"> <i class="fa fa-clock-o"></i> начат: <span>
                                      {{$mainPage->start}} ( {{today()->diffInDays($mainPage->start)}} дней назад )
                                    </span></p>
                                <p class="remaing-date small"> <i class="fa fa-clock-o"></i> срок:
                                    <span>
                                        @if ($mainPage->stop == NULL)
                                            до цели
                                        @else
                                            {{$mainPage->stop}}
                                        @endif
                                    </span>
                                </p>
                                <div class="progress-wrapper">
                                    <div class="progress">
                                        <div class="progress-bar" data-percent="{{intval(($mainPage->collected/$mainPage->target)*100)}}"></div>
                                    </div>
                                </div>
                                <div class="goal-raised">
                                    <div class="goal">
                                        <span>Собрано</span>
                                        <h4>{{number_format($mainPage->collected, 0, '', ' ')}} USDT</h4>
                                    </div>
                                    <div class="raised">
                                        <span>Цель</span>
                                        <h4>{{number_format($mainPage->target, 0, '', ' ')}} USDT</h4>
                                    </div>
                                </div>
                                <form action="#" class="form">
                                    <div class="donate-amount">

                                        <a href="" class="btn theme-btn" data-toggle="modal" data-target="#MainPageDonate">Сделать вклад</a>
                                    </div>

                                    <div>
                                        <a href="{{route('root.single_project',$mainPage->id)}}" class="btn theme-btn">О проекте</a>

                                    </div>
                                </form>


                                <div class="all-tags-urgent">
                                    Категории:
                                    @foreach($ProjectCat as $key=>$data)
                                        <a href="#">{{$data->name}}, </a>
                                    @endforeach

                                </div>
                            </div>

                        </div>


                    </div> <!-- end urgent-slider -->
                </div> <!-- end col -->
            </div> <!-- end row -->
        </div> <!-- end container -->
    </section>
    <!-- end urgent-donation -->

    <!-- start latest-causes -->
    <section class="latest-causes section-padding">
        <div class="container">
            <div class="row section-title-s2">
                <div class="col col-xs-12">
                    <h2><span>Актуальные</span> проекты</h2>
                </div>
            </div> <!-- end section-title -->

            <div class="row content">
                @foreach($actual_causes as $causes)

                    <div class="col col-md-4 col-xs-6">
                        <div class="title">
                            <ul>
                                <li><h3>{{$causes->name}}</h3></li>
                                <li><i class="fa fa-check-circle-o" aria-hidden="true"></i> {{$causes->letter_index}}</li>
                            </ul>
                        </div>
                        <div class="img-progress">
                            <div class="img-holder">
                                <img src="{{asset(''.$causes->preview_image.'')}}" alt class="img img-responsive">
                            </div>
                            <div class="progress">
                                <div class="progress-bar" data-percent="{{intval(($causes->collected/$causes->target)*100)}}"></div>
                            </div>
                        </div>
                        <div class="donate-amount">
                            <ul>
                                <li>Собрано: <span>{{number_format($causes->collected, 0, '', ' ')}} USDT</span> из {{number_format($causes->target, 0, '', ' ')}} USDT</li>
                                <li><i class="fa fa-clock-o"></i> {{$causes->start}} ( {{today()->diffInDays($causes->start)}} дней назад )</li>
                            </ul>
                        </div>
                        <div class="text">
                            <p>{{$causes->announce}}</p>
                            <a href="{{route('root.single_project',$causes->id)}}" class="btn theme-btn">К проекту</a>
                        </div>
                    </div>
                @endforeach




            </div> <!-- end content -->
        </div> <!-- end container -->
    </section>
    <!-- end latest-causes -->

    <!-- start cta-4 -->

    <section class="cta-5 section-padding">
        <h2 class="hidden">CTA 5</h2>
        <div class="container">
            <div class="row section-title-s3">
                <div class="col col-md-8 col-md-offset-2">
                    <h2><span>Виды</span> взносов и доходов</h2>
                    <p>То, как вы получаете доход, зависит от инвестиционного контракта
                        <span>Узнайте больше на наших контрактах для инвесторов.</span></p>
                </div>
            </div> <!-- end section-title -->

            <?php
            $allIncomes_ch = array_chunk($allIncomes->toArray(), ceil(count($allIncomes->toArray()) / 2));
            foreach($allIncomes_ch as $items): ?>
            <div class="row content">
                    <?php foreach($items as $row): ?>
                <div class="col col-md-4">
                    <div class="wow fadeInLeftSlow" data-wow-delay="0.5s">

                        <h3>{{$row['name']}}</h3>
                        <p>{{$row['shot_desc']}}</p>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
            <br>
            <?php endforeach; ?>

        </div> <!-- end container -->
    </section>


    <!-- start events-nearby-s2 -->
    <section class="events-nearby-s2 section-padding parallax" data-bg-image="images/events-nearby-s2-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col col-md-4 left-col">
                    <img src="{{asset('images/auto_sys.png')}}" alt class="img img-responsive">
                    <h2>АВТОМАТИЧЕСКАЯ ОЦЕНКА ПРОЕКТОВ</h2>
                    <p>Aenean sed massa vel metus porttitor volutpat. Integer vehicula nisl at porttitor aliquet. Id dapibus tellus vel.</p>
                </div>

                <div class="col col-md-8 right-col">
                    <div class="content">
                        <div>
                            <ul class="nav nav-tabs">
                                <li class="active">
                                    <a href="#events" data-toggle="tab">ИНВЕСТИЦИОННАЯ ОЦЕНКА</a>
                                </li>

                            </ul>

                            <!-- Tab panes -->

                                    <h3>Our volunteers</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque odit labore a vero quis ratione expedita dolores blanditiis, magni officia illo dolor officiis porro placeat quibusdam quasi. Repudiandae optio, quod.</p>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque odit labore a vero quis ratione expedita dolores blanditiis, magni officia illo dolor officiis porro placeat quibusdam quasi. Repudiandae optio, quod.</p>

                        </div>
                    </div>
                </div>
            </div> <!-- end row -->
        </div> <!-- end container -->
    </section>
    <!-- end events-nearby-s2 -->

    <!-- end cta-4 -->
    <section class="cta-5 section-padding">
        <h2 class="hidden">CTA 5</h2>
        <div class="container">
            <div class="row section-title-s3">
                <div class="col col-md-8 col-md-offset-2">
                    <h2><span>Наша</span> миссия</h2>
                    <p>состоит в том, чтобы содействовать свободному и эффективному развитию социальных институтов, коллективному решению вопросов творческого развития, научного и иновационного, активно поддерживать новшества в цифровых сегментах, приумножать капитал общий и каждого.</p>
                </div>
            </div> <!-- end section-title -->

            <div class="row content">
                <div class="col col-md-4">
                    <div class="wow fadeInLeftSlow">


                        <h3>Взносы</h3>
                        <p>Dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
                    </div>
                </div>
                <div class="col col-md-4">
                    <div class="wow fadeInLeftSlow" data-wow-delay="0.5s">
                        <span class="icon"><i class="fi flaticon-medical"></i></span>
                        <h3>Rebuild</h3>
                        <p>Dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
                    </div>
                </div>
                <div class="col col-md-4">
                    <div class="wow fadeInLeftSlow" data-wow-delay="1s">
                        <span class="icon"><i class="fi flaticon-animal"></i></span>
                        <h3>Peace</h3>
                        <p>Dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
                    </div>
                </div>
            </div> <!-- end row -->
        </div> <!-- end container -->
    </section>

    <!-- start tags -->
    <div class="all-tags-urgent">
        @foreach($ProjectCat as $key=>$data)
            <a href="{{asset('cat/'.$data->slug)}}" class="btn">{{ $data->name }}</a>
        @endforeach
    </div>
    <!-- end tags -->

    <!-- start cta -->
    <section class="cta">
        <div class="container">
            <div class="row">
                <div class="col col-md-5 col-sm-5">
                    <img src="{{asset('images/cta-cartoon.png')}}" alt class="img img-responsive">
                </div>

                <div class="col col-md-6 col-md-offset-1 col-sm-7">
                    <div class="cta-details wow fadeInRightSlow">
                        <h2>Buy and Sell <span>campaign</span> items.</h2>
                        <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam volupta tem quia voluptas sit aspernatur aut odit.</p>
                        <a href="#" class="btn theme-btn">Explore shop</a>
                    </div>
                </div>
            </div> <!-- end row -->
        </div> <!-- end container -->
    </section>
    <!-- end cta -->


    <!-- start about-details -->
    <section class="about-us-st section-padding">
        <div class="container">
            <h2><span>About</span> us</h2>
            <div class="row">
                <div class="col col-md-6">
                    <div class="left-col">
                        <div class="company">
                            <h3>We are <span>Charity++</span></h3>
                            <span>Making the world a better place</span>
                        </div>
                        <p>Perspiciatis unde omnis iste natus error sit voluptatem accusan tium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et.</p>

                        <div class="panel-group" id="accordion">
                            <div class="panel panel-default current">
                                <div class="panel-heading" id="headingOne">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true">Voluptatem sequi nesciunt <i class="fa fa-angle-down"></i></a>
                                </div>
                                <div id="collapseOne" class="panel-collapse collapse in">
                                    <div class="panel-body">
                                        <div class="img-holder">
                                            <img src="{{asset('images/about/thumb/img-1.jpg')}}" alt>
                                        </div>
                                        <div class="details">
                                            <p>Accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolo res.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading" id="headingTwo">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">Similique sunt in culpa <i class="fa fa-angle-down"></i></a>
                                </div>
                                <div id="collapseTwo" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <div class="img-holder">
                                            <img src="{{asset('images/about/thumb/img-1.jpg')}}" alt>
                                        </div>
                                        <div class="details">
                                            <p>Accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolo res.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading" id="headingThree">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">Officia deserunt mollitia animi <i class="fa fa-angle-down"></i></a>
                                </div>
                                <div id="collapseThree" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <div class="img-holder">
                                            <img src="{{asset('images/about/thumb/img-1.jpg')}}" alt>
                                        </div>
                                        <div class="details">
                                            <p>Accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolo res.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- end left-col -->
                </div> <!-- end col -->

                <div class="col col-md-6">
                    <div class="right-col">
                        <div class="video">
                            <img src="{{asset('images/about/video-poster-2.jpg')}}" alt="" class="img img-responsive">
                            <a href="{{asset('https://www.youtube.com/embed/opj24KnzrWo?autoplay=1')}}" class="video-btn" data-type="iframe"><i class="fa fa-play"></i></a>
                        </div>
                    </div>
                </div>
            </div> <!-- end row -->
        </div> <!-- end container -->
    </section>
    <!-- end about-details -->


    <!-- start cta-2 -->

    @if (Route::has('register'))
        <section class="cta-2">
            <div class="container-fluid">
                <div class="row">
                    <div class="col col-md-5 col-sm-4 join-us"></div>

                    <div class="col col-md-7 col-sm-8 sing-up  wow fadeInRightSlow">
                        <h3><span><img src="{{asset('images/sing-up-icon.png')}}" alt></span> Присоединяйся к инвестиционным программам</h3>
                        <p>Iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                        <a href="{{ route('register') }}" class="btn theme-btn">Присоединиться к MyCOINin</a>
                        <span class="small">Цель каждого может быть индивидуальной и зависит от их интересов, целей и убеждений.</span>
                    </div>
                </div> <!-- end row -->
            </div> <!-- end container -->
        </section>

    @endif

    <!-- end cta-2 -->


    <!-- start events-nearby -->
    <section class="events-nearby section-padding">
        <div class="container">
            <div class="row section-title-s2">
                <div class="col col-md-8 col-md-offset-2">
                    <h2><span>Events</span> nearby</h2>
                    <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                </div>
            </div> <!-- end section-title -->

            <div class="row">
                <div class="col col-xs-12">
                    <div class="events-nearby-slider event-grid-wrapper">
                        <div class="event-grid">
                            <div class="event-box">
                                <div class="img-holder">
                                    <img src="{{asset('images/event/img-1.jpg')}}" alt="" class="img img-responsive">
                                </div>
                                <div class="event-details">
                                    <span class="date">27,dec</span>
                                    <h3><a href="#">Water pump setting</a></h3>
                                    <span class="location"><i class="fa fa-map-marker"></i> Ambriz, africa</span>
                                    <a href="#" class="btn">Join event</a>
                                </div>
                            </div>
                        </div>
                        <div class="event-grid">
                            <div class="event-box">
                                <div class="img-holder">
                                    <img src="{{asset('images/event/img-2.jpg')}}" alt="" class="img img-responsive">
                                </div>
                                <div class="event-details">
                                    <span class="date">27,oct</span>
                                    <h3><a href="#">Water pump setting</a></h3>
                                    <span class="location"><i class="fa fa-map-marker"></i> Ambriz, africa</span>
                                    <a href="#" class="btn">Join event</a>
                                </div>
                            </div>
                        </div>
                        <div class="event-grid">
                            <div class="event-box">
                                <div class="img-holder">
                                    <img src="{{asset('images/event/img-3.jpg')}}" alt="" class="img img-responsive">
                                </div>
                                <div class="event-details">
                                    <span class="date">27,oct</span>
                                    <h3><a href="#">Water pump setting</a></h3>
                                    <span class="location"><i class="fa fa-map-marker"></i> Ambriz, africa</span>
                                    <a href="#" class="btn">Join event</a>
                                </div>
                            </div>
                        </div>
                        <div class="event-grid">
                            <div class="event-box">
                                <div class="img-holder">
                                    <img src="{{asset('images/event/img-4.jpg')}}" alt="" class="img img-responsive">
                                </div>
                                <div class="event-details">
                                    <span class="date">27,oct</span>
                                    <h3><a href="#">Water pump setting</a></h3>
                                    <span class="location"><i class="fa fa-map-marker"></i> Ambriz, africa</span>
                                    <a href="#" class="btn">Join event</a>
                                </div>
                            </div>
                        </div>
                    </div> <!-- end events-nearby-slider -->
                </div> <!-- end col -->
            </div> <!-- end row -->
        </div> <!-- end container -->
    </section>
    <!-- end events-nearby -->


    <!-- start cta-3 -->
    <section class="cta-3">
        <div class="container">
            <div class="row">
                <div class="col col-md-7 col-md-offset-5 details-text">
                    <div class="wow fadeInRightSlow">
                        <h2>Your little <span>awareness</span> means a lot</h2>
                        <p>Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime pla ceat facere possimus.</p>
                        <a href="#" class="btn theme-btn">Sign up</a>
                    </div>
                </div>
            </div> <!-- end row -->
        </div> <!-- end container -->
    </section>
    <!-- end cta-3 -->


    <!-- start shop-main-content -->
    <section class="shop-main-content section-padding">
        <div class="container">
            <div class="row">
                <div class="col col-md-12">
                    <div class="shop-content latest-product-slider">
                        <div class="grid">
                            <div class="box">
                                <div class="img-holder">
                                    <img src="{{asset('images/shop/img-1.jpg')}}" alt class="img img-responsive">
                                </div>
                                <div class="details">
                                    <h3><a href="#">Skincare Product</a></h3>
                                    <a href="#" class="add-to-cart"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                    <div class="price">
                                        <span class="old-price">$45</span>
                                        <span class="current-price">$35</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="grid">
                            <div class="box">
                                <div class="img-holder">
                                    <img src="{{asset('images/shop/img-2.jpg')}}" alt class="img img-responsive">
                                </div>
                                <div class="details">
                                    <h3><a href="#">Skincare Product</a></h3>
                                    <a href="#" class="add-to-cart"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                    <div class="price">
                                        <span class="current-price">$35</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="grid">
                            <div class="box">
                                <div class="img-holder">
                                    <img src="{{asset('images/shop/img-3.jpg')}}" alt class="img img-responsive">
                                </div>
                                <div class="details">
                                    <h3><a href="#">Skincare Product</a></h3>
                                    <a href="#" class="add-to-cart"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                    <div class="price">
                                        <span class="current-price">$35</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="grid">
                            <div class="box">
                                <div class="img-holder">
                                    <img src="{{asset('images/shop/img-4.jpg')}}" alt class="img img-responsive">
                                </div>
                                <div class="details">
                                    <h3><a href="#">Skincare Product</a></h3>
                                    <a href="#" class="add-to-cart"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                    <div class="price">
                                        <span class="current-price">$35</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="grid">
                            <div class="box">
                                <div class="img-holder">
                                    <img src="{{asset('images/shop/img-5.jpg')}}" alt class="img img-responsive">
                                </div>
                                <div class="details">
                                    <h3><a href="#">Skincare Product</a></h3>
                                    <a href="#" class="add-to-cart"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                    <div class="price">
                                        <span class="current-price">$35</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="grid">
                            <div class="box">
                                <div class="img-holder">
                                    <img src="{{asset('images/shop/img-6.jpg')}}" alt class="img img-responsive">
                                </div>
                                <div class="details">
                                    <h3><a href="#">Skincare Product</a></h3>
                                    <a href="#" class="add-to-cart"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                    <div class="price">
                                        <span class="current-price">$35</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- end shop-content -->
                </div> <!-- end col -->
            </div> <!-- end row -->
        </div> <!-- end container -->
    </section>
    <!-- end shop-main-content -->



    <!-- start newsletter -->
    <section class="newsletter">
        <div class="container-fluid">
            <div class="row">
                <div class="col col-md-5 children-holder"></div>
                <div class="col col-md-7 subscribe">
                    <h3>Подписаться</h3>
                    <p>Для <span>получения</span> актуальной информации о новых <span>проектах</span></p>

                    <form action="#">
                        <div>
                            <input class="form-control" type="email" required placeholder="email адрес">
                            <button type="submit" class="btn theme-btn">Подписаться</button>
                        </div>
                    </form>
                    <div class="pluses">
                        <i class="fa fa-plus"></i>
                        <i class="fa fa-plus"></i>
                    </div>
                </div>
            </div> <!-- end row -->
        </div> <!-- end container-fluid -->
    </section>
    <!-- end newsletter -->

    <!-- MainPageDonate MODAL -->
    <div class="modal fade" id="MainPageDonate" tabindex="-1" role="dialog" aria-labelledby="MainPageDonatelLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <form action="#" method="post">
                        <div class="donate">
                            <div class="row">
                                <div class="col">
                                    <h2>{{$mainPage->name}}</h2>
                                    <p><span>{{$mainPage->announce}}</span></p>
                                    <div class="col text-center text-muted">
                                        <input type="hidden" id="hid_adm" name="ammount" value="150">
                                        Инвестировать <span id="InAmm" class="Amm"> {{$mainPage->minimum_payment}} </span> USDT
                                        <span class="nb_span">СЕТЬ ERC-20</span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="donate-amount">
                                        <div class="denomination selected">
                                            <input autocomplete="off" type="radio" name="amount" id="amount{{$mainPage->minimum_payment}}" value="{{$mainPage->minimum_payment}}" checked="">
                                            <label for="amount5">{{$mainPage->minimum_payment}} USDT</label>
                                        </div>
                                        <div class="denomination">
                                            <input autocomplete="off" type="radio" name="amount" id="amount{{$mainPage->minimum_payment*2}}" value="{{$mainPage->minimum_payment*2}}">
                                            <label for="amount10">{{$mainPage->minimum_payment*2}} USDT</label>
                                        </div>
                                        <div class="denomination">
                                            <input autocomplete="off" type="radio" name="amount" id="amount{{$mainPage->minimum_payment*3}}" value="{{$mainPage->minimum_payment*3}}">
                                            <label for="amount15">{{$mainPage->minimum_payment*3}} USDT</label>
                                        </div>
                                    </div>
                                    <label for="inp" class="inp">
                                        <input type="text" id="inp" placeholder="&nbsp;">
                                        <span class="label">Другая сумма</span>
                                        <span class="focus-bg"></span>
                                    </label>
                                </div>
                            </div>
                            <div class="row ">
                                <div class="col text-center text-muted">
                                    <a href="#" class="btn theme-btn" type="submit" >Инвестировать</a>
                                    <p class="text-small-desc">Минимальный взнос: {{$mainPage->minimum_payment}} USDT</p>
                                    <span id="paymentalert"></span>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
    <!-- END MainPageDonate MODAL -->
@endsection

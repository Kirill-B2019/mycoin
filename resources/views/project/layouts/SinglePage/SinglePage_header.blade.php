<!-- Start header -->
<header id="header" class="header-style-five">
    <nav class="navigation navbar navbar-default" id="MainPage-navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="open-btn">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{ route('project.main') }}"><img src="{{asset('images/logo.png')}}" alt
                                                                           class="img img-responsive"></a>
            </div>
            <div id="navbar" class="navbar-right navbar-collapse collapse">
                <button class="close-navbar"><i class="fa fa-close"></i></button>
                <ul class="nav navbar-nav">
                    <li><a href="{{ route('project.main') }}" style="color: {{ request()->is('/') ? '#fb5e1c' : '' }}">Главная</a>
                    </li>
                    <li><a href="{{ route('project.development') }}">Проекты</a></li>
                    <li><a href="{{ route('project.development') }}">Недвижимость</a></li>
                    <li class="sub-menu">
                        <a href="{{ route('project.contact') }}">Контакты</a>
                        <ul>
                            <li><a href="{{ route('project.about') }}"><b>О MyCOIN</b></a></li>
                            <li><a href="{{ route('project.faq') }}">F.A.Q.</a></li>
                        </ul>
                    </li>

                </ul>
                <ul class="nav navbar-right nav-link-in-out">
                    @if (Route::has('login'))
                        @auth

                            <li class="sub-menu">

                                <a href="{{ route('cabinet.main') }}"><b style="color: #a9b0be"><i class="fa fa-sign-out"
                                                                                                aria-hidden="true"></i>
                                        КАБИНЕТ</b></a>
                                <ul>
                                    @role('SuperAdmin')
                                    <li>
                                        <a href="{{ route('adp.home') }}">
                                            {{ __('Кабинет администратора') }}&nbsp;<i class="fe fe-log-out fe-14"></i>
                                        </a>

                                    </li>
                                    @endrole
                                    <li>
                                        <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            {{ __('Выход') }}&nbsp;<i class="fe fe-log-out fe-14"></i>
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                              class="d-none">
                                            @csrf
                                        </form>

                                    </li>
                                </ul>
                            </li>
                        @else
                            <li class="sub-menu">
                                <a href="{{ route('login') }}"><b style="color: #a9b0be"><i class="fa fa-sign-in"
                                                                                            aria-hidden="true"></i> ВХОД</b></a>
                                <ul>
                                    <li>
                                        <a href="{{ route('register') }}">РЕГИСТРАЦИЯ<i class="fe fe-log-out fe-14"></i></a>


                                    </li>
                                </ul>
                            </li>

                        @endauth
                    @endif

                </ul>
            </div><!-- end of nav-collapse -->
        </div><!-- end of container -->
    </nav>
</header>
<!-- end of header -->


<!-- start urgent-causes -->
@if($block = \App\Http\Controllers\Public\PublicBlockImportantController::index())

    <div class="urgent-causes-wrapper">
        <div class="container open-urgent-causes">
            <button id="toggle-causes" class="btn"><i class="fa fa-angle-double-down"></i></button>
        </div>

        <div class="urgent-causes">
            <div class="container">
                <div class="row">
                    <div class="col col-md-6">
                        <div class="topic">
                            <span class="bg-gre-nav-in">ВАЖНО</span>
                            <h2>{{$block->name}}</h2>
                            <h4>{{$block->desc}}</h4>
                            <a href="#{{$block->route_name}}" class="btn theme-btn"
                               style=" padding: 10px; text-decoration: none; color: #FFFFFF">{{$block->button_text}}</a>
                            @if($block->minimum_payment)
                            <p class="small text-muted">Минимальный взнос на депозит:
                                {{$block->minimum_payment}} USDT
                            </p>
                            @endif
                        </div>
                    </div>

                    <div class="col col-md-5 col-md-offset-1">
                        <div class="goal-raised">
                            @if($block->collected != NULL)
                                <p class="h5">Собрано:
                                    <strong>{{number_format($block->collected, 0, '', ' ')}} </strong>
                                    USDT
                                    <h7>({{sprintf("%d%%",($block->collected/$block->target)*100)}})</h7>
                                </p>

                            @endif
                            <p class="h5">Максимум: <strong>{{number_format($block->target, 0, '', ' ')}}</strong>
                                USDT</p>
                        </div>
                        <div class="progress">
                            <div class="progress-bar"
                                 data-percent="{{($block->collected/$block->target)*100}}"></div>
                        </div>
                        <div class="causes-clock">
                            @if ($block->start_data)
                                c: <strong>{{$block->start_data}}</strong>
                            @endif
                            @if ($block->stop_data)
                                    по: <strong>{{$block->stop_data}}</strong>
                                @else
                                    <strong>до цели</strong>
                                @endif

                        </div>
                        @if($block->other_desc)
                            <p class="small text-muted">
                                {{$block->other_desc}}
                            </p>
                        @endif
                    </div>
                </div> <!-- end row -->
            </div> <!-- end container -->
        </div>
    </div>
@endif
<!-- end urgent-causes -->

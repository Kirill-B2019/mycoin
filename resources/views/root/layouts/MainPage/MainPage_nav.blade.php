
<nav class="navigation navbar navbar-default " id="MainPage-navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="open-btn">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <button class="close-navbar"><i class="fa fa-close"></i></button>
            <ul class="nav navbar-nav">
                <li><a href="{{ route('root.main') }}" style="color: {{ request()->is('/') ? '#fb5e1c' : '' }}"><b>Главная</b></a></li>
                <li><a href="{{ route('root.development') }}"><b>Проекты</b></a></li>
                <li><a href="{{ route('root.development') }}">Недвижимость</a></li>
                <li class="sub-menu">
                    <a href="{{ route('root.contact') }}">Контакты</a>
                    <ul>
                        <li><a href="{{ route('root.about') }}"><b>О MyCOIN</b></a></li>
                        <li><a href="{{ route('root.faq') }}">F.A.Q.</a></li>
                    </ul>
                </li>

            </ul>
            <ul class="nav navbar-right nav-link-in-out">

                @if (Route::has('login'))
                    @auth

                        <li class="sub-menu">

                            <a href="{{ route('cabinet.main') }}"><b style="color: #a9b0be"><i class="fa fa-sign-out" aria-hidden="true"></i> КАБИНЕТ</b></a>
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
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>

                                </li>
                            </ul>
                        </li>
                    @else
                        <li class="sub-menu">
                            <a href="{{ route('login') }}"><b style="color: #a9b0be"><i class="fa fa-sign-in" aria-hidden="true"></i> ВХОД</b></a>
                            <ul>
                                <li>
                                    <a href="{{ route('register') }}" >РЕГИСТРАЦИЯ<i class="fe fe-log-out fe-14"></i></a>


                                </li>
                            </ul>
                        </li>

                    @endauth
                    @endif

            </ul>
        </div>
    </div><!-- end of container -->
</nav>





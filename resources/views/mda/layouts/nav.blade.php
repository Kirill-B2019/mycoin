
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


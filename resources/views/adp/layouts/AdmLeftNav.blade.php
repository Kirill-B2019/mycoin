<aside class="sidebar-left border-right bg-white shadow" id="leftSidebar" data-simplebar>
    <a href="#" class="btn collapseSidebar toggle-btn d-lg-none text-muted ml-2 mt-3" data-toggle="toggle">
        <i class="fe fe-x"><span class="sr-only"></span></i>
    </a>
    <nav class="vertnav navbar navbar-light">
        <!-- nav bar -->
        <div class="w-100 mb-4 d-flex">
            <a class="navbar-brand mx-auto mt-2 flex-fill text-center" href="{{ route('cabinet.main') }}">
                <img alt = "MY-COIN" src="{{asset('images/load.png')}}">
            </a>
        </div>

        <ul class="navbar-nav flex-fill w-100 mb-2">
            <li class="nav-item w-100">
                <a class="nav-link" href="{{ route('ico.main') }}">
                    <i class="fe fe-home fe-16"></i>
                    <span class="ml-3 item-text">{{__('На ICO')}}</span>
                </a>
            </li>
            <li class="nav-item w-100">
                <a class="nav-link" href="{{ route('cabinet.main') }}">
                    <i class="fe fe-home fe-16"></i>
                    <span class="ml-3 item-text">{{__('На MyCOINin (Кабинет)')}}</span>
                </a>
            </li>
            <li class="nav-item w-100">
                <a class="nav-link" href="{{ route('adp.home') }}">
                    <i class="fe fe-sidebar fe-16"></i>
                    <span class="ml-3 item-text">Главная панель</span>
                </a>
            </li>

        </ul>
        @anyperms('BLOCKCHAINManagement')
        <!-- меню админа slug администратора площадки-->
        <p class="text-muted nav-heading mt-4 mb-1">
            <span>Управление BLOCKCHAIN</span>
        </p>
        <ul class="navbar-nav flex-fill w-100 mb-2">
            <li class="nav-item dropdown">
                <a href="#BLOCKCHAIN" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                    <i class="fe fe-credit-card fe-16"></i>
                    <span class="ml-3 item-text">BLOCKCHAIN</span>
                </a>
                <ul class="collapse list-unstyled pl-4 w-100" id="BLOCKCHAIN">
                    <li class="nav-item">
                        <a class="nav-link pl-3" href="{{route('adp.chain_nodes')}}"><span class="ml-1 item-text">Ноды</span>
                        </a>
                    </li>
                </ul>
                <ul class="collapse list-unstyled pl-4 w-100" id="BLOCKCHAIN">
                    <li class="nav-item">
                        <a class="nav-link pl-3" href="#"><span class="ml-1 item-text">Контракты</span>
                        </a>
                    </li>
                </ul>
            </li>

        </ul>
        @endanyperms

        @anyperms('ViewingBalance','ManagingPaymentOrderStatuses')
        <!-- меню админа slug администратора площадки-->
        <p class="text-muted nav-heading mt-4 mb-1">
            <span>Управление Кошельком</span>
        </p>
        @endanyperms


        @perm('ViewingBalance')
        <ul class="navbar-nav flex-fill w-100 mb-2">
            <li class="nav-item dropdown">
                <a href="#WalletAdm" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                    <i class="fe fe-credit-card fe-16"></i>
                    <span class="ml-3 item-text">MyCOIN Wallet</span>
                </a>
                <ul class="collapse list-unstyled pl-4 w-100" id="WalletAdm">
                    <li class="nav-item">
                        <a class="nav-link pl-3" href="{{route('adp.wallet_balance')}}"><span class="ml-1 item-text">Баланс</span>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
        @endperm
        @perm('ManagingPaymentOrderStatuses')
        <ul class="navbar-nav flex-fill w-100 mb-2">
            <li class="nav-item dropdown">
                <a href="#WalletOptions" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                    <i class="fe fe-sliders fe-16"></i>
                    <span class="ml-3 item-text">Свойства Wallet</span>
                </a>
                <ul class="collapse list-unstyled pl-4 w-100" id="WalletOptions">
                    <li class="nav-item">
                        <a class="nav-link pl-3" href="{{route('adp.order_status')}}"><span class="ml-1 item-text">Статусы ордеров</span>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
        @endperm
           <!-- меню админа slug администратора площадки-->
                <p class="text-muted nav-heading mt-4 mb-1">
                    <span>Управление площадкой</span>
                </p>
        @perm('UserManagement')
                <ul class="navbar-nav flex-fill w-100 mb-2">
                    <li class="nav-item dropdown">
                        <a href="#UsersAdm" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                            <i class="fe fe-users fe-16"></i>
                            <span class="ml-3 item-text">Пользователи</span>
                        </a>
                        <ul class="collapse list-unstyled pl-4 w-100" id="UsersAdm">
                            <li class="nav-item">
                                <a class="nav-link pl-3" href="{{route('adp.users')}}"><span class="ml-1 item-text">Все пользователи</span>
                                </a>
                            </li>
                        </ul>

                        <ul class="collapse list-unstyled pl-4 w-100" id="UsersAdm">
                            <li class="nav-item">
                                <a class="nav-link pl-3" href="{{route('adp.roles')}}"><span class="ml-1 item-text">Роли</span>
                                </a>
                            </li>
                        </ul>
                        <ul class="collapse list-unstyled pl-4 w-100" id="UsersAdm">
                            <li class="nav-item">
                                <a class="nav-link pl-3" href="{{route('adp.permissions')}}"><span class="ml-1 item-text">Привелегии</span>
                                </a>
                            </li>
                        </ul>

                        <ul class="collapse list-unstyled pl-4 w-100" id="Users">
                            <li class="nav-item w-100">
                                <a class="nav-link" href="#">
                                    <span class="btn btn-sm btn-primary btn-block">Новый пользователь</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
        @endperm
                <ul class="navbar-nav flex-fill w-100 mb-2">
                    <li class="nav-item w-100">
                        <a class="nav-link" href="{{route('adp.incomes')}}">
                            <i class="fe fe-dollar-sign fe-16"></i>
                            <span class="ml-3 item-text">Виды дохода</span>
                        </a>
                    </li>
                </ul>
                <ul class="navbar-nav flex-fill w-100 mb-2">
                    <li class="nav-item dropdown">
                        <a href="#Projects" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                            <i class="fe fe-layers fe-16"></i>
                            <span class="ml-3 item-text">Проекты</span>
                        </a>

                        <ul class="collapse list-unstyled pl-4 w-100" id="Projects">
                            <li class="nav-item">
                                <a class="nav-link pl-3" href="{{route('adp.projects')}}"><span class="ml-1 item-text">Все проекты</span>
                                </a>
                            </li>
                        </ul>

                        <ul class="collapse list-unstyled pl-4 w-100" id="Projects">
                            <li class="nav-item w-100">
                                <a class="nav-link" href="{{route('adp.new-project')}}">
                                    <span class="btn btn-sm btn-primary btn-block">Новый проект</span>
                                </a>
                            </li>
                        </ul>


                    </li>
                </ul>
                <ul class="navbar-nav flex-fill w-100 mb-2">
                <li class="nav-item dropdown">
                    <a href="#Attractiveness" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                        <i class="fe fe-activity fe-16"></i>
                        <span class="ml-3 item-text">Инвест оценка</span>
                    </a>
                    <ul class="collapse list-unstyled pl-4 w-100" id="Attractiveness">
                        <li class="nav-item">
                            <a class="nav-link pl-3" href="{{route('adp.sector')}}"><span class="ml-1 item-text">Секторы</span>
                            </a>
                        </li>
                    </ul>
                    <ul class="collapse list-unstyled pl-4 w-100" id="Attractiveness">
                        <li class="nav-item">
                            <a class="nav-link pl-3" href="{{route('adp.attractiveness')}}"><span class="ml-1 item-text">Виды</span>
                            </a>
                        </li>
                    </ul>
                    <ul class="collapse list-unstyled pl-4 w-100" id="Attractiveness">
                        <li class="nav-item">
                            <a class="nav-link pl-3" href="{{route('adp.letterIndex')}}"><span class="ml-1 item-text">Буквенный индекс</span>
                            </a>
                        </li>
                    </ul>
                </li>


            </ul>
                <ul class="navbar-nav flex-fill w-100 mb-2">
                    <li class="nav-item dropdown">
                        <a href="#ProjectsOptions" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                            <i class="fe fe-sliders fe-16"></i>
                            <span class="ml-3 item-text">Свойства проектов</span>
                        </a>

                        <ul class="collapse list-unstyled pl-4 w-100" id="ProjectsOptions">
                            <li class="nav-item">
                                <a class="nav-link pl-3" href="{{route('adp.categories')}}"><span class="ml-1 item-text">Категории проектов</span>
                                </a>
                            </li>
                        </ul>

                        <ul class="collapse list-unstyled pl-4 w-100" id="ProjectsOptions">
                            <li class="nav-item">
                                <a class="nav-link pl-3" href="{{route('adp.attractiveness')}}"><span class="ml-1 item-text">Инвестпривлекательность</span>
                                </a>
                            </li>
                        </ul>
                    </li>


            </ul>
                <ul class="navbar-nav flex-fill w-100 mb-2">
                    <li class="nav-item w-100">
                        <a class="nav-link" href="{{route('adp.modals')}}">
                            <i class="fe fe-message-square fe-16"></i>
                            <span class="ml-3 item-text">Модальные окна</span>
                        </a>
                    </li>
                </ul>

        @perm('ManagementIMPORTANT')
        <!--  Управление блоком ВАЖНО  -->
        <p class="text-muted nav-heading mt-4 mb-1">
            <span>Блок ВАЖНО</span>
        </p>
        <ul class="navbar-nav flex-fill w-100 mb-2">
            <li class="nav-item w-100">
                <a class="nav-link" href="{{route('adp.blocks_important')}}">
                    <i class="fe fe-dollar-sign fe-16"></i>
                    <span class="ml-3 item-text">Блок ВАЖНО</span>
                </a>
            </li>
        </ul>
        @endperm
                <p class="text-muted nav-heading mt-4 mb-1">
                    <span>FAQ и HELP DESC</span>
                </p>
                <ul class="navbar-nav flex-fill w-100 mb-2">
                    <li class="nav-item dropdown">
                        <a href="#FAQ" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                            <i class="fe fe-compass fe-16"></i>
                            <span class="ml-3 item-text">FAQ</span>
                        </a>

                        <ul class="collapse list-unstyled pl-4 w-100" id="FAQ">
                            <li class="nav-item">
                                <a class="nav-link pl-3" href="{{route('adp.FAQCategories')}}"><span class="ml-1 item-text">Категории FAQ</span>
                                </a>
                            </li>
                        </ul>

                        <ul class="collapse list-unstyled pl-4 w-100" id="FAQ">
                            <li class="nav-item">
                                <a class="nav-link pl-3" href="{{route('adp.FAQArticles')}}"><span class="ml-1 item-text">Статьи FAQ</span>
                                </a>
                            </li>
                        </ul>
                    </li>


                </ul>

    </nav>
</aside>

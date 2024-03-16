<!-- start footer -->
<footer>
    <div class="container">
        <div class="row upper-footer">
            <div class="col col-md-5 col-xs-6">
                <div class="widget about-widget">
                    <div class="logo">
                        <img src="{{asset('images/logo.png')}}" alt class="img img-responsive">
                    </div>

                    <div class="details">
                        <p>Функционирование Platform «MyCoin in» не требует лицензирования, ибо на неё не ведётся операций с фиатной валютой. Проекты на Platform «MyCoin in» финансируются в криптовалюте (USDT, ETH, BTC и т.д.)..</p>
                        <p class="copyright">
                            2023 -2024  &copy; All rights reserved by <span><a href="">CRYPTO FOUND MyCOINin Platform</a></span>
                        </p>
                        <img src="{{asset('images/kb.png')}}" alt="KB Generation" class="img" width='15'>

                    </div>
                </div>
            </div>

            <div class="col col-md-2 col-xs-6">
                <div class="widget">
                    <h3>Площадка</h3>
                    <ul>
                        <li><a href="#">О нас</a></li>
                        <li><a href="#">Новости</a></li>
                        @if (Route::has('login'))
                            @auth
                                <li><a href="{{ route('cabinet.main') }}">Мой кабинет</a></li>
                            @else
                                @if (Route::has('register'))
                                    <li><a href="{{ route('register') }}">Регистрация</a></li>
                                @endif
                                <li><a href="{{ route('login') }}"><span>Вход</span></a></li>
                            @endauth
                        @endif
                        <li><a href="#"></a></li>
                        <li><a href="#">Популярные проекты</a></li>
                        <li><a href="#">Карьера</a></li>
                    </ul>
                </div>
            </div>

            <div class="col col-md-2 col-xs-6">
                <div class="widget">
                    <h3>Помощь</h3>
                    <ul>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#"></a></li>
                        <li> <a href="" data-toggle="modal" data-target="#PrivacyPolicy">Политика конфиденциальности</a></li>
                        <li>
                            {!!App\Http\Controllers\Public\PublicModalController::viewTextModal('PrivacyPolicy') !!}
                        </li>
                        <li><a href="#">Условия использования</a></li>
                        <li><a href="#">Поддержка</a></li>
                        <li> <a href="" data-toggle="modal" data-target="#Disclosures">Раскрытие информации</a></li>
                        <li>
                            {!!App\Http\Controllers\Public\PublicModalController::viewTextModal('Disclosures') !!}
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col col-md-3 col-xs-6">
                <div class="widget contact-widget">
                    <h3>Обратная связь</h3>
                    <div>
                        <form action="#" class="form">
                            <div>
                                <input type="text" class="form-control" placeholder="ваше имя" required>
                            </div>
                            <div>
                                <input type="email" class="form-control" placeholder="ваш email" required>
                            </div>
                            <div>
                                <textarea placeholder="сообщение"></textarea>
                            </div>
                            <div>
                                <button class="btn theme-btn" type="submit">Отправить</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div> <!-- end upper-footer -->
    </div> <!-- end container -->


</footer>
<!-- end footer -->
</div>
<!-- end of page-wrapper -->

<div class="cookie_notice">
    Этот сайт использует файлы cookies и сервисы сбора технических данных посетителей (данные об IP-адресе, местоположении и др.) для обеспечения работоспособности и улучшения качества обслуживания. Продолжая использовать наш сайт, вы автоматически соглашаетесь с использованием данных технологий.
    <div>
        <a class="cookie_btn" id="cookie_close" href="#close">Согласиться</a>
        <a class="cookie_btn" href="#" data-toggle="modal" data-target="#PrivacyPolicy">Политика конфиденциальности</a>
    </div>
</div>
<!-- All JavaScript files
================================================== -->
<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>

<!-- Plugins for this template -->
<script src="{{asset('js/jquery-plugin-collection.js')}}"></script>

<!-- Custom script for this template -->
<script src="{{asset('js/script.js')}}"></script>

<script src="{{asset('js/mc_donate_box.js')}}"></script>




</body>

</html>

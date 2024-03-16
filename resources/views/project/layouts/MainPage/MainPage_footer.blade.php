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
    Мы используем файлы cookie и технологические средства для анализа использования наших ресурсов, в целях улучшения и развития сервиса.
    Соглашаясь на использование файлов cookie, вы сохраняете контроль за своими данными и можете в любой момент изменить или отозвать своё согласие.
    Если вы откажетесь от использования cookie (за исключением тех, что необходимы для запуска сайта), это не повлияет на работу сайта, но вы не сможете воспользоваться всеми его возможностями в полной мере.
    <div>
        <a class="cookie_btn" id="cookie_close" href="#close">Согласиться</a>
        <a class="cookie_btn" href="#" data-toggle="modal" data-target="#PrivacyPolicy">Политика конфиденциальности</a>
    </div>
</div>
<!-- All JavaScript files
================================================== -->
<script>

    $(".denomination").click(function (event) {
        $(".denomination").removeClass("selected").prop("checked", false);
        $(".inp input").removeClass("selected").val("");
        $(this).addClass("selected");
        $(this).children(":first").prop("checked", true);

        $("#InAmm").text($(this).children(":first").val());
        $("#hid_adm").val($(this).children(":first").val());
        $(".inp input").val($(this).children(":first").val());

    });
    $(".inp input").on("keypress", function (event) {
        // allow only int values
        // TODO: remove leading 0
        var regex = new RegExp("^[0-9]+$");
        var key = String.fromCharCode(!event.charCode ? event.which : event.charCode);
        if (!regex.test(key)) {
            event.preventDefault();
            return false;
        }
        $(".denomination").removeClass("selected").prop("checked", false);
        $(this).addClass("selected");
        var $i = String($(this).val()).replace(/(.)(?=(\d{2})+$)/g,'$1 ');
        //$("#InAmm").text($(this).val() + key);
        $("#hid_adm").val($(this).val()+key);
        $("#InAmm").text($i + key);
    });

</script>
<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>

<!-- Plugins for this template -->
<script src="{{asset('js/jquery-plugin-collection.js')}}"></script>

<!-- Custom script for this template -->
<script src="{{asset('js/script.js')}}"></script>


<script src="{{asset('js/mc_donate_box.js')}}"></script>

</body>
</html>


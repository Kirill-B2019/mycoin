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

@extends('main.layouts.main')
@section('title') MyCOINin CRYPTO FOUND Platform @endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">

            </div>
        </div>
    </div>
    <div class="container px-4 py-5">
        <h3 class="pb-2 border-bottom">ТОКЕНИЗИРОВАННАЯ КРИПТОИНВЕСТИЦИОННАЯ ПЛАТФОРМА </h3>

        <div class="row row-cols-1 row-cols-md-2 align-items-md-center g-5 py-5">
            <div class="col d-flex flex-column align-items-start gap-2" style="vertical-align: top;">
                <h4 class="fw-bold text-body-emphasis pb-2 border-bottom-orange">MCP BLOCKCHAIN + EXPLORER</h4><span class="badge text-bg-success">АКТИВЕН</span>
                <p class="text-body-secondary">Реализованный на высокоуровневом языке (GO) собственный БЛОКЧЕЙН (MCP ISIK - I See I Keep) имеет распределенные ноды разных типов (простой – для подтверждения транзакций и голосования, полный - для обработки всей цепи).</p>
                <h4 class="fw-bold text-body-emphasis pb-2 border-bottom-orange">Стоимость 1 MCP / USDT c {{$chart_date['date_start']}} по {{$chart_date['date_end']}}</h4>
                <canvas id="chart"></canvas>
                <h4 class="fw-bold text-body-emphasis mt-3 pb-2 border-bottom-orange">Первичное размещение токенов платформы - скидка этапа 40% (до 14.04.2024)</h4>
                <p class="text-body-secondary">Курс сегодня: 1 MCP = <strong>{{$price_now}}</strong> USDT (без скидки)</p>
                <p class="text-body-secondary">Курс сегодня: 1 MCP = <strong>{{$price_now*0.4}}</strong> USDT (<strong> с учетом скидки 60%</strong>)</p>
                <a href="{{ route('ico.main') }}" type="button" class="btn-outline-theme">{{__('К ICO размещению')}}</a>
                <h4 class="fw-bold text-body-emphasis mt-3 pb-2 border-bottom-orange">Большое обновление - версия платформы 1.2 (апрель 2024)</h4>
                <ul style="list-style-type: none">
                    <li class="text-body-secondary">- Площадка небольших и средних START-up проектов (PR.MY-COIN)</li>
                    <li class="text-body-secondary">- Личные кабинеты для инвесторов (MC.MY-COIN)</li>
                    <li class="text-body-secondary">- Web обозреватель MCP BLOCKCHAIN платформы (IS.MY-COIN)</li>
                    <li class="text-body-secondary">- Приложение и мобильный кошелек платформы ANDROID (API.MY-COIN)</li>
                </ul>


            </div>

            <div class="col ">
                <div class="row row-cols-1 row-cols-sm-2 g-4 ">
                    <div class="col d-flex flex-column gap-2 active" onclick="window.open('https://ico.my-coin.one/','_blank')">
                        <div class="feature-icon-small d-inline-flex align-items-center justify-content-start">
                            <img src="{{asset('main/img/45-45active.png')}}" alt="">
                        </div>
                        <h4 class="fw-semibold mb-0 text-body-emphasis">ICO.MY-COIN</h4><span class="badge text-bg-success">АКТИВЕН</span>
                        <p class="text-body-secondary">Площадка первичного размещения токенов проектов и самой платформы</p>
                    </div>

                    <div class="col d-flex flex-column gap-2 not-active">
                        <div class="feature-icon-small d-inline-flex align-items-center justify-content-start">
                            <img src="{{asset('main/img/45-45test.png')}}" alt="">
                        </div>
                        <h4 class="fw-semibold mb-0 text-body-emphasis">IS.MY-COIN</h4><span class="badge text-bg-info">ТЕСТИРОВАНИЕ</span>
                        <p class="text-body-secondary">Web обозреватель <strong>MCP BLOCKCHAIN</strong> платформы и сети <strong>MCP:selfNET</strong> (ISee)</p>
                    </div>
                    <div class="col d-flex flex-column gap-2 not-active">
                        <div class="feature-icon-small d-inline-flex align-items-center justify-content-start">
                            <img src="{{asset('main/img/45-45update.png')}}" alt="">
                        </div>
                        <h4 class="fw-semibold mb-0 text-body-emphasis">PR.MY-COIN</h4><span class="badge text-bg-warning">ОБНОВЛЕНИЕ</span>
                        <p class="text-body-secondary">Площадка  небольших и средних START-up проектов для физических лиц и инвесторов (PRoject)</p>
                    </div>

                    <div class="col d-flex flex-column gap-2 not-active">
                        <div class="feature-icon-small d-inline-flex align-items-center justify-content-start">
                            <img src="{{asset('main/img/45-45gold.png')}}" alt="">
                        </div>
                        <h4 class="fw-semibold mb-0 text-body-emphasis">MDA.MY-COIN</h4><span class="badge text-bg-secondary">РАЗРАБОТКА</span>
                        <p class="text-body-secondary">Площадка коллективного владения цифровыми ценностями (MyDiginalActive)</p>
                    </div>

                    <div class="col d-flex flex-column gap-2 not-active">
                        <div class="feature-icon-small d-inline-flex align-items-center justify-content-start">
                            <img src="{{asset('main/img/45-45dev.png')}}" alt="">
                        </div>
                        <h4 class="fw-semibold mb-0 text-body-emphasis">GPR.MY-COIN</h4><span class="badge text-bg-secondary">РАЗРАБОТКА</span>
                        <p class="text-body-secondary">Площадка ресурсоемких средних и крупных проектов для инвестирования и участия (GlobalPRoject)</p>
                    </div>

                    <div class="col d-flex flex-column gap-2 not-active">
                        <div class="feature-icon-small d-inline-flex align-items-center justify-content-start">
                            <img src="{{asset('main/img/45-45dev.png')}}" alt="">
                        </div>
                        <h4 class="fw-semibold mb-0 text-body-emphasis">EX.MY-COIN</h4><span class="badge text-bg-secondary">РАЗРАБОТКА</span>
                        <p class="text-body-secondary">Площадка обмена, движения активов платформы (EXchange).</p>
                    </div>

                    <div class="col d-flex flex-column gap-2 not-active">
                        <div class="feature-icon-small d-inline-flex align-items-center justify-content-start">
                            <img src="{{asset('main/img/45-45test.png')}}" alt="">
                        </div>
                        <h4 class="fw-semibold mb-0 text-body-emphasis">MC.MY-COIN</h4><span class="badge text-bg-info">ТЕСТИРОВАНИЕ</span>
                        <p class="text-body-secondary">Личные кабинеты участников "Мой Кабинет" (MyCabinet) - централизованное управление и учет активов</p>
                    </div>

                    <div class="col d-flex flex-column gap-2 not-active">
                        <div class="feature-icon-small d-inline-flex align-items-center justify-content-start">
                            <img src="{{asset('main/img/45-45dev.png')}}" alt="">
                        </div>
                        <h4 class="fw-semibold mb-0 text-body-emphasis">IK.MY-COIN</h4><span class="badge text-bg-secondary">РАЗРАБОТКА</span>
                        <p class="text-body-secondary">База знаний платформы, FAQ по подсистемам, FAQ по проектам (IKnow)</p>
                    </div>

                    <div class="col d-flex flex-column gap-2 not-active">
                        <div class="feature-icon-small d-inline-flex align-items-center justify-content-start">
                            <img src="{{asset('main/img/45-45dev.png')}}" alt="">
                        </div>
                        <h4 class="fw-semibold mb-0 text-body-emphasis">DD.MY-COIN</h4><span class="badge text-bg-secondary">РАЗРАБОТКА</span>
                        <p class="text-body-secondary">Площадка оборота цифровых активов недвижимости (DigitalDevelopment)</p>
                    </div>

                    <div class="col d-flex flex-column gap-2 not-active">
                        <div class="feature-icon-small d-inline-flex align-items-center justify-content-start">
                            <img src="{{asset('main/img/45-45test.png')}}" alt="">
                        </div>
                        <h4 class="fw-semibold mb-0 text-body-emphasis">API.MY-COIN</h4><span class="badge text-bg-info">ТЕСТИРОВАНИЕ</span>
                        <p class="text-body-secondary">EndPoint API и мобильные приложения</p>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection

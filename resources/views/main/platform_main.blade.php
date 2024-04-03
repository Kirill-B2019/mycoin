@extends('v2.layouts.main')
@section('description')
    <meta name="" content="Увеличьте свой капитал с помощью MY-COIN платформы и инвестиций в криптоактивы. Выберите новый токен и примите участие в pre-ICO.">
@endsection
@section('title') MyCOINin инвестиционная проектная платформа@endsection
@section('content')

    <section class="section section bg-soft pb-2 overflow-hidden z-2">
        <div class="container z-2">
            <div class="row justify-content-center text-center pt-2">
                <div class="col-lg-12 col-xl-12">
                    <h1 class="display-2 mb-3">ТОКЕНИЗИРОВАННАЯ ИНВЕСТИЦИОННАЯ ПРОЕКТНАЯ ПЛАТФОРМА
                        <strong>M</strong><span class="text-muted h4 text-secondary">y</span>
                        <strong>C</strong><span class="text-muted h4 text-secondary">oin</span>
                        <strong>P</strong><span class="text-muted h4 text-secondary">latform</span>
                    </h1>
                    <p class="lead px-md-1 mb-2"> MYCOIN  <strong>utility</strong> токен платформы.</p>
                    <hr>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="px-2 ">
           <div class="row justify-content-center">

               <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 align-items-start" style="vertical-align: top;">
                    <div class="row">
                        <div class="col-12 col-lg-12">
                            <div class="card bg-primary shadow-inset border-light">
                                <div class="card-body p-3">
                                    <h3 class="h4 card-title mb-1">Стоимость 1 MCP / USDT</h3>
                                    <h4 class="h4 card-title mb-1"><span class="far fa-calendar-alt mr-2"></span>c {{$chart_date['date_start']}} по {{$chart_date['date_end']}}</h4>
                                    <canvas id="chart" class="pb-3"></canvas>
                                    <p class="card-text mt-2">Первичное размещение токенов платформы - скидка этапа <strong>60%</strong> <span class="text-muted small">(<span class="far fa-calendar-alt mr-2"></span> до 14.04.2024)</span></p>
                                    <p class="card-text mt-2">Курс сегодня: 1 MCP = <strong>{{$price_now}}</strong> USDT (без скидки)</p>
                                    <p class="card-text mt-2"><strong>Ваш</strong> курс сегодня: 1 MCP = <strong>{{$price_now*0.4}}</strong> USDT (<strong> с учетом скидки 60%</strong>)</p>
                                    <div class="d-flex align-items-end">
                                        <a href="{{url(env('APP_DOMAIN_ICO'))}}" class="btn btn-block btn-primary mt-4 mb-3 text-secondary">Купить MCP</a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="row pt-3">
                        <div class="col-12 col-lg-12">
                            <div class="card bg-primary shadow-inset border-light">
                                <div class="card-body p-3">
                                    <h3 class="h4 card-title mb-1">MCP BLOCKCHAIN + EXPLORER</h3>
                                    <span class="badge-thin badge-success text-uppercase">
                                                        активно
                                    </span>
                                    <p class="card-text mt-2">Реализованный на высокоуровневом языке (GO) собственный БЛОКЧЕЙН (MCP ISIK - I See I Keep) имеет распределенные ноды разных типов (простой – для подтверждения транзакций и голосования, полный - для обработки всей цепи).</p>
                                    <div class="d-flex align-items-center">
                                       <span class="small"><span class="fas fa-network-wired mr-2"></span><strong class="text-secondary">UPTime {{$up_time['day']}}</strong>
                                           <span class="clearfix"></span>
                                           ({{$up_time['past']}})</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row pt-3 pb-3">
                        <div class="col-12 col-lg-12">
                            <div class="card bg-primary shadow-inset border-light">
                                <div class="card-body p-3">
                                    <h3 class="h4 card-title mb-1">Большое обновление - версия платформы <span class="badge badge-gray text-uppercase ml-2">v1.2</span></h3>
                                    <h4 class="h4 card-title mb-1"><span class="far fa-calendar-alt mr-2"></span>апрель 2024</h4>
                                    <ul class="list-group list-group-sm mt-3">
                                        <li class="list-group-item d-flex">
                                            <span>Площадка небольших и средних START-up проектов</span>
                                            <span class="ml-auto"><strong>PR</strong>
                                                <span class="badge badge-gray text-uppercase ml-2">v1.01</span>
                                            </span>
                                        </li>
                                        <li class="list-group-item d-flex">
                                            <span>Личные кабинеты для инвесторов</span>
                                            <span class="ml-auto"><strong>MC</strong>
                                                <span class="badge badge-gray text-uppercase ml-2">v1.00</span>
                                            </span>
                                        </li>
                                        <li class="list-group-item d-flex">
                                            <span>Web обозреватель MCP BLOCKCHAIN платформы</span>
                                            <span class="ml-auto"><strong>MC</strong>
                                                <span class="badge badge-gray text-uppercase ml-2">v1.01</span>
                                            </span>
                                        </li>
                                        <li class="list-group-item d-flex">
                                            <span>Приложение и мобильный кошелек платформы ANDROID</span>
                                            <span class="ml-auto"><strong>MC</strong>
                                                <span class="badge badge-gray text-uppercase ml-2">v1.0</span>
                                            </span>
                                        </li>
                                    </ul>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
               <div class="col-xl-6 col-lg-6 col-md-4 col-sm-12 align-items-start">
                   <div class="row mb-2 small">
                       <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                           <div class="card bg-primary shadow-inset border-light p-3 h-100">
                               <!-- Content -->
                               <div class="card-body shadow-soft border border-light rounded p-4">
                                   <h4 class="mb-1">ICO.MY-COIN</h4>
                                   <span class="badge-thin badge-success text-uppercase">
                                                        активно
                                    </span>
                                   <div class="d-flex my-3">
                                       <img src="{{asset('main/img/45-45active.png')}}" alt="">
                                   </div>
                                   <p class="mb-4">Площадка первичного размещения токенов проектов платформы.</p>
                               </div>
                               <div class="card-footer">
                                   <a href="{{ url(env('APP_DOMAIN_ICO')) }}" target="_blank" type="button" class="btn btn-block btn-primary text-secondary rounded-bottom">Подробнее</a>
                               </div>
                               <!-- End Content -->
                           </div>
                       </div>
                       <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                           <div class="card bg-primary shadow-inset border-light p-3 h-100">
                               <!-- Content -->
                               <div class="card-body shadow-soft border border-light rounded p-4 ">
                                   <h4 class="mb-1">PR.MY-COIN</h4>
                                   <span class="badge-thin badge-warning text-uppercase">
                                                        ОБНОВЛЕНИЕ
                                    </span>
                                   <div class="d-flex my-3">
                                       <img src="{{asset('main/img/45-45update.png')}}" alt="">
                                   </div>
                                   <p class="mb-4">Площадка коллективного инвестирования монопроектов и мультипроектов (START-up (-ов)) для физических лиц и инвесторов (PRoject)</p>

                               </div>

                               <!-- End Content -->
                           </div>
                       </div>
                       <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                           <div class="card bg-primary shadow-inset border-light p-3 h-100">
                               <!-- Content -->
                               <div class="card-body shadow-soft border border-light rounded p-4 ">
                                   <h4 class="mb-1">MDA.MY-COIN</h4>
                                   <span class="badge-thin badge-dark-noactive text-uppercase">
                                                        РАЗРАБОТКА
                                    </span>
                                   <div class="d-flex my-3">
                                       <img src="{{asset('main/img/45-45gold.png')}}" alt="">
                                   </div>
                                   <p class="mb-4">Площадка коллективного владения цифровыми ценностями (MyDiginalActive)</p>

                               </div>

                               <!-- End Content -->
                           </div>
                       </div>
                   </div>
                   <div class="row mb-2">
                       <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                           <div class="card bg-primary shadow-inset border-light p-3 h-100">
                               <!-- Content -->
                               <div class="card-body shadow-soft border border-light rounded p-4">
                                   <h4 class="mb-1">IS.MY-COIN</h4>
                                   <span class="badge-thin badge-success text-uppercase">
                                                        активно
                                    </span>
                                   <div class="d-flex my-3">
                                       <img src="{{asset('main/img/45-45active.png')}}" alt="">
                                   </div>
                                   <p class="mb-4">Web обозреватель <strong>MCP BLOCKCHAIN</strong> платформы и сети <strong>MCP:selfNET</strong> (ISeeIKeep)</p>

                               </div>
                               <div class="card-footer">
                                   <a href="{{url(env('APP_DOMAIN_IS'))}}" target="_blank" type="button" class="btn btn-block btn-primary text-secondary rounded-bottom">Подробнее</a>
                               </div>

                               <!-- End Content -->
                           </div>
                       </div>
                       <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                           <div class="card bg-primary shadow-inset border-light p-3 h-100">
                               <!-- Content -->
                               <div class="card-body shadow-soft border border-light rounded p-4 ">
                                   <h4 class="mb-1">GPR.MY-COIN</h4>
                                   <span class="badge-thin badge-dark-noactive text-uppercase">
                                                        РАЗРАБОТКА
                                    </span>
                                   <div class="d-flex my-3">
                                       <img src="{{asset('main/img/45-45dev.png')}}" alt="">
                                   </div>
                                   <p class="mb-4">Площадка ресурсоемких средних и крупных проектов (мегапроекты) для инвестирования и участия (GlobalPRoject)</p>

                               </div>

                               <!-- End Content -->
                           </div>
                       </div>
                       <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                           <div class="card bg-primary shadow-inset border-light p-3 h-100">
                               <!-- Content -->
                               <div class="card-body shadow-soft border border-light rounded p-4 ">
                                   <h4 class="mb-1">EX.MY-COIN</h4>
                                   <span class="badge-thin badge-dark-noactive text-uppercase">
                                                        РАЗРАБОТКА
                                    </span>
                                   <div class="d-flex my-3">
                                       <img src="{{asset('main/img/45-45dev.png')}}" alt="">
                                   </div>
                                   <p class="mb-4">Площадка обмена, движения активов платформы (EXchange)</p>

                               </div>

                               <!-- End Content -->
                           </div>
                       </div>
                   </div>
                   <div class="row mb-2">
                       <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                           <div class="card bg-primary shadow-inset border-light p-3 h-100">
                               <!-- Content -->
                               <div class="card-body shadow-soft border border-light rounded p-4 ">
                                   <h4 class="mb-1">MC.MY-COIN</h4>
                                   <span class="badge-thin badge-warning text-uppercase">
                                                        ОБНОВЛЕНИЕ
                                    </span>
                                   <div class="d-flex my-3">
                                       <img src="{{asset('main/img/45-45update.png')}}" alt="">
                                   </div>
                                   <p class="mb-4">Личные кабинеты участников "Мой Кабинет" (MyCabinet) - централизованное управление и учет активов</p>

                               </div>

                               <!-- End Content -->
                           </div>
                       </div>
                       <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                           <div class="card bg-primary shadow-inset border-light p-3 h-100">
                               <!-- Content -->
                               <div class="card-body shadow-soft border border-light rounded p-4 ">
                                   <h4 class="mb-1">IK.MY-COIN</h4>
                                   <span class="badge-thin badge-dark-noactive text-uppercase">
                                                        РАЗРАБОТКА
                                    </span>
                                   <div class="d-flex my-3">
                                       <img src="{{asset('main/img/45-45dev.png')}}" alt="">
                                   </div>
                                   <p class="mb-4">База знаний платформы, FAQ по подсистемам, FAQ по проектам (IKnow)</p>

                               </div>

                               <!-- End Content -->
                           </div>
                       </div>
                       <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                           <div class="card bg-primary shadow-inset border-light p-3 h-100">
                               <!-- Content -->
                               <div class="card-body shadow-soft border border-light rounded p-4 ">
                                   <h4 class="mb-1">DD.MY-COIN</h4>
                                   <span class="badge-thin badge-dark-noactive text-uppercase">
                                                        РАЗРАБОТКА
                                    </span>
                                   <div class="d-flex my-3">
                                       <img src="{{asset('main/img/45-45dev.png')}}" alt="">
                                   </div>
                                   <p class="mb-4">Площадка оборота цифровых активов недвижимости (DigitalDevelopment)</p>

                               </div>

                               <!-- End Content -->
                           </div>
                       </div>
                   </div>
                   <div class="row mb-2">
                       <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                           <div class="card bg-primary shadow-inset border-light p-3 h-100">
                               <!-- Content -->
                               <div class="card-body shadow-soft border border-light rounded p-4 ">
                                   <h4 class="mb-1">API.MY-COIN</h4>
                                   <span class="badge-thin badge-dark-noactive text-uppercase">
                                                        РАЗРАБОТКА
                                    </span>
                                   <div class="d-flex my-3">
                                       <img src="{{asset('main/img/45-45dev.png')}}" alt="">
                                   </div>
                                   <p class="mb-4">EndPoint API и мобильные приложения</p>

                               </div>

                               <!-- End Content -->
                           </div>
                       </div>
                   </div>
               </div>

            </div>
        </div>
    </section>




    <script>
        // ============================================
        // As of Chart.js v2.5.0
        // http://www.chartjs.org/docs
        // ============================================

        var chart    = document.getElementById('chart').getContext('2d'),
            gradient = chart.createLinearGradient(0, 0, 0, 450);

        gradient.addColorStop(0, 'rgba(248,82,12,0.49)');
        gradient.addColorStop(0.5, 'rgba(248,82,12,0.2)');
        gradient.addColorStop(1, 'rgba(248,82,12,0.01)');


        var data  = {
            labels: @json($data_cart['labels']),
            datasets: [{
                label: 'Стоимость токена MCP USDT',
                backgroundColor: gradient,
                pointBackgroundColor: 'white',
                borderWidth: 2,
                borderColor: '#f8520c',
                data: @json($data_cart['data']),
            }]
        };


        var options = {
            responsive: true,
            maintainAspectRatio: true,
            animation: {
                easing: 'easeInOutQuad',
                duration: 520
            },
            scales: {
                xAxes: [{
                    gridLines: {
                        color: 'rgba(200, 200, 200, 0.05)',
                        lineWidth: 1
                    }
                }],
                yAxes: [{
                    gridLines: {
                        color: 'rgba(200, 200, 200, 0.08)',
                        lineWidth: 1
                    }
                }]
            },
            elements: {
                line: {
                    tension: 0.4
                }
            },
            legend: {
                display: false
            },
            point: {
                backgroundColor: 'white'
            },
            tooltips: {
                titleFontFamily: 'Open Sans',
                backgroundColor: 'rgba(0,0,0,0.3)',
                titleFontColor: 'red',
                caretSize: 5,
                cornerRadius: 2,
                xPadding: 10,
                yPadding: 10
            }
        };


        var chartInstance = new Chart(chart, {
            type: 'line',
            data: data,
            options: options
        });
    </script>
@endsection

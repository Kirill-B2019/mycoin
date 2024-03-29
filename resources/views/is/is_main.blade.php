@extends('v2.layouts.main')
@section('description')
    <meta name="" content="Увеличьте свой капитал с помощью MY-COIN платформы и инвестиций в криптоактивы. Выберите новый токен и примите участие в pre-ICO.">
@endsection
@section('title') MCP ISIK - БЛОКЧЕЙН MyCOINin CRYPTO FOUND Platform @endsection
@section('content')

    <section class="section section bg-soft pb-2 overflow-hidden z-2">
        <div class="container z-2">
            <div class="row justify-content-center text-center pt-2">
                <div class="col-lg-8 col-xl-8">
                    <h1 class="display-2 mb-3">БЛОКЧЕЙН
                        MCP <strong>IS</strong><span class="text-muted h4 text-secondary">ee</span>
                        <strong>IK</strong><span class="text-muted h4 text-secondary">eep</span>
                    </h1>
                    <p class="lead px-md-1 mb-2"> MYCOIN  <strong>Web-обозреватель</strong> инвестиционной платформы.</p>
                    <p><strong>ISIK</strong> (I see what I keep) - Я вижу, что Я храню </p><hr>
                </div>
            </div>
        </div>
    </section>


    <div class="px-4 is_main_container">

        <div class="row">
           <div class="col-xl-8 col-lg-8 col-md-6 col-sm-12 ">
               <div class="input-group mb-4">
                   <input class="form-control" id="exampleInputIcon2" placeholder="address / contract / hash" aria-label="Input group" type="text">
                   <div class="input-group-append">
                            <span class="input-group-text">
                                <a class="fas fa-search"></a>
                            </span>
                   </div>
               </div>
               <h5 class="mutted pt-1">Транзакции</h5>
               <table class="table table-hover table-striped">
                   <thead class="small">
                   <th>
                       {{__('Индекс')}}
                   </th>
                   <th>
                       {{__('Hash')}}
                   </th>
                   <th>
                       {{__('Адреса')}}
                   </th>
                   <th>
                       {{__('Контракт')}}
                   </th>
                   <th>
                       {{__('Обьем')}}
                   </th>
                   <th>
                       {{__('Дата/Время')}}
                   </th>
                   </thead>
                   <tbody>
            @foreach($blocks as $block)
                <tr class="small">
                    <td>
                        {{$block['index']}}
                    </td>
                    <td>
                        {{pregReplace($block['hash'],4,4)}}
                    </td>
                    <td>
                        <div>от: {{json_decode($block['data'],true)['sender']}}</div>
                        <div>в:{{json_decode($block['data'],true)['recipient']}}</div>
                    </td>
                    <td>
                        {{pregReplace(json_decode($block['data'],true)['contract'],4,4)}}
                    </td>
                    <td>
                        {{json_decode($block['data'],true)['amount']}} MCP
                    </td>
                    <td>
                        {{$block['created_at']}}
                    </td>

                </tr>
            @endforeach
                   </tbody>
               </table>
               {{$blocks->links()}}
           </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                <div class="row">
                    <div class="col-12 col-lg-12">
                        <div class="card bg-primary shadow-inset border-light">
                            <div class="card-body p-3">
                                <span class="h5 card-title mb-3">Курс MCP: <strong>{{$price_now}}</strong> USDT</span>
                                <span class="clearfix"></span>
                                <span class="card-text small"><span class="far fa-calendar-alt mr-2"></span>{{date('d M Y')}}</span>
                                <canvas id="chart" class="pb-3"></canvas>
                                <div class="d-flex align-items-end">
                                    <a href="{{url(env('APP_DOMAIN_ICO'))}}" class="btn btn-block btn-primary mt-4 mb-3 text-secondary">Купить MCP</a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row pt-3">
                    <div class="col-12 col-md-12">
                        <div class="card bg-primary shadow-inset border-light p-3">
                            <div class="card-body shadow-soft border border-light rounded p-3">
                                <h3 class="h5">Эмиссия</h3>
                                <ul class="list-group list-group-sm mt-3">
                                    <li class="list-group-item d-flex"> <span>Обьем</span> <span class="ml-auto"><strong>{{number_format((float)$emission['total']/100000, 6, '.', ' ')}}</strong> MCP</span> </li>
                                    <li class="list-group-item d-flex"> <span>Разрядов</span> <span class="ml-auto"><strong>6</strong></span> </li>
                                    <li class="list-group-item d-flex"> <span>Сеть</span> <span class="ml-auto"><strong>{{$emission['main_net']}}</strong></span> </li>
                                    <li class="list-group-item d-flex"> <span>Запущен</span> <span class="ml-auto"><strong>{{$emission['created_at']->format('H:i:s d M Y ')}}</strong></span> </li>

                                </ul>
                                <small>1 MCP = 0.01 gramm AU (10 karat)</small>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>

    </div>
    @php
        $from = json_encode($chart_date['from']);
        $to = json_encode($chart_date['to']);
    @endphp
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

        var from = {!! $from !!};
        var to = {!! $to !!};

        var data = {
            labels: @json($data_cart['labels']),
            datasets: [{
                label: 'MCP/USDT с ' + from + ' по ' + to,
                backgroundColor: gradient,
                pointBackgroundColor: 'white',
                borderWidth: 1,
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
                        lineWidth: 0.5
                    }
                }],
                yAxes: [{
                    gridLines: {
                        color: 'rgba(200, 200, 200, 0.08)',
                        lineWidth: 0.5
                    }
                }]
            },
            elements: {
                line: {
                    tension: 0.5
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

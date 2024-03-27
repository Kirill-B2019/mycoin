@extends('is.layouts.main')
@section('title') MCP ISIK - MyCOINin CRYPTO FOUND Platform @endsection
@section('content')

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
@endsection

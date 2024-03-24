@extends('is.layouts.main')
@section('title') MCP ISIK - MyCOINin CRYPTO FOUND Platform @endsection
@section('content')
    <div class="container pt-5">

        <h3 class="pb-2 border-bottom">БЛОКЧЕЙН (MCP ISIK)</h3>
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                <input type="search" name="" id="" class="form-control" placeholder="index / address / contract">
            </div>

        </div></div>

    <div class="container px-4 is_main_container">

        <div class="row">
           <div class="col-xl-8 col-lg-8 col-md-6 col-sm-12 ">
               <h5 class="mutted pt-1">Транзакции</h5>
               <table class="table table-hover smaller">
                   <thead>
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
                <tr>
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
            <div class="col-xl 4 col-lg-4 col-md-6 col-sm-12">
                <h5 class="mutted pt-1">Курс</h5>
                <div class="card small">
                    <div class="card-body">
                        <p class="card-text">Курс MCP: <strong>{{$price_now}}</strong> USDT</p>
                        <canvas id="chart"></canvas>
                    </div>
                </div>
                <h5 class="mutted pt-1">Эмиссия</h5>
                <div class="card small">
                    <div class="card-body">
                        <p class="card-text">Эмиссия: <strong>{{number_format((float)$emission['total']/100000, 6, '.', ' ')}}</strong> MCP</p>
                        <p class="card-text">Разрядов: <strong>6</strong> </p>
                        <p class="card-text">Сеть: <strong>{{$emission['main_net']}}</strong> </p>
                        <p class="card-text">Запущен: <strong>{{$emission['created_at']}}</strong> </p>
                    </div>
                </div>

            </div>
        </div>

    </div>
@endsection

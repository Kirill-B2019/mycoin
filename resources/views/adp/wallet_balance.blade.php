@extends('adp.layouts.Adm')
@section('title')
   Баланс площадки - управление на MyCOIN CRYPTO FOUND Plarform
@endsection
@section('content')
    <!-- SinglePage -->
    <main role="main" class="main-content">
        <div class="container-fluid">
            <div class="row justify">
                <div class="col-12">
                    <h2 class="h3 mb-4 page-title">Баланс</h2>

                    <div class="row mt-5">
                        <div class="col-3">
                            <!-- Prewiew проекта -->
                            <div class="row align-items-center">
                                <!-- Инициатор проекта -->
                                <div class="col">
                                    <div class="card mb-4 shadow text-center">
                                        <div class="card-body my-n3">
                                            <div class="row align-items-center">
                                                <div class="col">
                                                    Баланс
                                                    <ul class="ingredients">


                                                        <li>USDT ERC-20:<span class="value"><span
                                                                    class="h2 text-lg-right">{{number_format($USDT_ERC_balance_out/1000000, 2, ',', ' ')}}</span> USDT</span>
                                                        </li>

                                                    </ul>
                                                </div> <!-- .col -->
                                            </div> <!-- .row -->
                                        </div> <!-- .card-body -->
                                    </div> <!-- .card -->
                                </div> <!-- .col-md-->
                                <!-- инициатор -->

                            </div>

                        </div>
                        <div class="col">
                            <!-- Основное о проекте -->
                            <div class="row">
                                <div class="col">
                                    <table class="table table-borderless table-striped">
                                        <thead>
                                        <tr role="row">
                                            <th>ID</th>
                                            <th>Дата платежа</th>
                                            <th>Сумма</th>
                                            <th>Подтверждения</th>
                                            <th>Статус</th>
                                            <th></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($USDT_tx_lists as $USDT_tx_list)
                                            @if($USDT_tx_list->tokenSymbol == 'USDT')
                                        <tr>
                                            <th scope="col">{{$USDT_tx_list->nonce}}</th>
                                            <td>{{date('H:m:s - d m Y', $USDT_tx_list->timeStamp)}}</td>
                                            <td>{{$USDT_tx_list->value/1000000}}</td>
                                            <td>{{$USDT_tx_list->confirmations}}</td>
                                            <td><span class="dot dot-lg bg-warning mr-2"></span>Due</td>
                                            <td><div class="dropdown">
                                                <button class="btn btn-sm dropdown-toggle more-vertical" type="button"
                                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <span class="text-muted sr-only">Action</span>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="#">Edit</a>
                                                    <a class="dropdown-item" href="#">Remove</a>
                                                    <a class="dropdown-item" href="#">Assign</a>
                                                </div>
                                            </div></td>
                                        </tr>
                                            @endif
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>


                        </div>

                    </div>
                </div>
            </div>



        </div> <!-- .row -->
    </main>
    <!-- SinglePage -->
@endsection

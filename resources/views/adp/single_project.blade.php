@extends('adp.layouts.Adm')
@section('title')
    {{$singleProject->name}} - управление на MyCOIN CRYPTO FOUND Plarform
@endsection
@section('content')
    <!-- SinglePage -->
    <main role="main" class="main-content">
            <div class="container-fluid">
                <div class="row justify">
                    <div class="col-12">
                        <h2 class="h3 mb-4 page-title">{{$singleProject->name}}</h2>
                        <div class="row mt-5">
                            <div class="col-3">
                                <!-- Prewiew проекта -->
                                <div class="row align-items-baseline">
                                    <div class="col text-center mb-5">
                                        <div class="avatar avatar-xl">
                                            <img src="{{asset($singleProject->preview_image)}}" alt="..."
                                                 class="avatar-img">
                                        </div>
                                        <!-- финансы-->
                                        <div class="col mb-4 mt-5 ">

                                            <div class="row">
                                                <div class="col">
                                                    <ul class="ingredients">

                                                        <li>Цель:<span class="value"><span
                                                                    class="h2 text-lg-right">{{number_format($singleProject->target, 0, '', ' ')}}</span> USDT</span>
                                                        </li>
                                                        <li>Минимальный взнос:<span class="value"><span
                                                                    class="h2 ">{{number_format($singleProject->minimum_payment, 0, '', ' ')}} </span> USDT </span>
                                                        </li>
                                                        @if($singleProject->collected != NULL)
                                                            <li>Собрано:<span class="value"><span
                                                                        class="h2 ">{{number_format($singleProject->collected, 0, '', ' ')}} </span> USDT <span
                                                                        class="h3 ">({{sprintf("%d%%",($singleProject->collected/$singleProject->target)*100)}})</span></span>
                                                            </li>
                                                            <div class="progress-bar" role="progressbar"
                                                                 style="width: {{($singleProject->collected/$singleProject->target)*100}}%;"
                                                                 aria-valuenow="{{($singleProject->collected/$singleProject->target)*100}}"
                                                                 aria-valuemin="0"
                                                                 aria-valuemax="100">{{sprintf("%d%%",($singleProject->collected/$singleProject->target)*100)}}
                                                            </div>
                                                        @endif
                                                        <li>Комиссия площадки:<span class="value"><span
                                                                    class="h2 ">{{number_format($singleProject->commission, 0, '', ' ')}} </span> % </span>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <!-- .col -->
                                            </div> <!-- .row -->


                                        </div> <!-- .card -->

                                    </div>
                                </div>
                                <div class="row align-items-center">
                                    <!-- Инициатор проекта -->
                                    <div class="col">
                                        <div class="card mb-4 shadow text-center">
                                            <div class="card-body my-n3">
                                                <div class="row align-items-center">
                                                    <div class="col">
                                                        <a href="#">
                                                            <h3 class="h5 mt-4 mb-1">Инициатор проекта</h3>
                                                        </a>
                                                        <div class="avatar pb-3 avatar-lg center">
                                                            <img src="{{asset($initiator->item_Avatar)}}" alt="..."
                                                                 class="avatar-img rounded-circle">
                                                        </div>
                                                        <p class="badge badge-pill badge-primary p-2">{{$initiator->item_Role}}</p>
                                                        <p class="h5" align="justify">
                                                            {{$initiator->item_Name}}
                                                            @if($initiator->item_LastName != NULL)
                                                                {{$initiator->item_LastName}}
                                                            @endif
                                                        </p>
                                                        <p class="text-muted"
                                                           align="justify">{{$initiator->item_Desc}}</p>
                                                    </div> <!-- .col -->
                                                </div> <!-- .row -->
                                            </div> <!-- .card-body -->
                                            <div class="card-footer">
                                                <a href="" class="d-flex justify-content-between text-muted"><span>К команде проекта</span><i
                                                        class="fe fe-chevron-right"></i></a>
                                            </div> <!-- .card-footer -->
                                        </div> <!-- .card -->
                                    </div> <!-- .col-md-->
                                    <!-- инициатор -->

                                </div>

                            </div>
                            <div class="col">
                                <!-- Основное о проекте -->
                                <div class="row">
                                    <div class="col">
                                        <h4 class="mb-1">{{$singleProject->announce}}</h4>
                                        <p class="small mb-3"><span class="badge badge-dark">Создал: {{$singleProject->created_at}} | {{$creatorProject->name}} | {{$creatorProject->email}} </span>
                                        </p>
                                        <h5 class="mb-1" align="justify">{{$singleProject->preview_desc}}</h5>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <p class="text-muted" align="justify">{!! $singleProject->desc !!}</p>
                                    </div>
                                </div>

                            </div>
                            <div class="col-3">
                                <div class="row">
                                    <div class="col">
                                        <div class="row">
                                            <div class="col">
                                                <p class="badge badge-light p-3 font-weight-bold">
                                                    {{$singleProject->projectSector->name}}
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                @if($singleProject->main_page)
                                                    <p class="badge badge-pill badge-orange p-2">На главной в разделе
                                                        "СРОЧНО"</p>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                @if($singleProject->published)
                                                    <p class="badge badge-warning p-2">
                                                        Опубликован: {{$singleProject->published}}</p>
                                                @else
                                                    <p class="badge badge-danger p-2">Не публикован</p>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <!-- категории -->
                                    <div class="card mb-4 shadow">
                                        <div class="card-body my-n3">
                                            <div class="row align-items-center">
                                                <div class="col-3 text-center">
                                                          <span class="circle circle-lg bg-light">
                                                            <i class="fe fe-layers fe-24 text-primary"></i>
                                                          </span>
                                                </div> <!-- .col -->
                                                <div class="col">
                                                    <h3 class="h5 mt-4 mb-1">Категории</h3>
                                                    @foreach($categories as $key=>$data)
                                                        <p class="badge badge-pill badge-primary p-2">{{$data->name}}</p>
                                                    @endforeach
                                                </div> <!-- .col -->
                                            </div> <!-- .row -->
                                        </div> <!-- .card-body -->

                                    </div> <!-- .card -->
                                </div>
                                <div class="row">

                                    <!-- виды доходов -->
                                    <div class="card mb-4 shadow">
                                        <div class="card-body my-n3">
                                            <div class="row align-items-center">
                                                <div class="col-3 text-center mr-4">
                                                          <span class="circle circle-lg bg-light">
                                                            <i class="fe fe-trending-up fe-24 text-primary"></i>
                                                          </span>
                                                </div>
                                                <!-- .col -->
                                                <div class="col">
                                                    <h3 class="h5 mt-4 mb-1">Виды доходов</h3>
                                                    @foreach($incomes as $key=>$data)
                                                        <p class="badge badge-pill badge-warning text-dark p-2">{{$data->name}}</p>
                                                    @endforeach
                                                </div>
                                                <!-- .col -->
                                            </div> <!-- .row -->
                                        </div> <!-- .card-body -->

                                    </div> <!-- .card -->
                                </div>
                                <div class="row">
                                    <div class="col pb-3">
                                        @if($singleProject->priced_around != 0)
                                            <ul class="ingredients">
                                                <li>Рейтинг площадки:<span class="value"><span
                                                            class="h2 text-lg-right">{{$singleProject->letter_index}}</span></span>
                                                </li>
                                                <li>Оценка площадки:<span class="value"><span
                                                            class="h2 text-lg-right">{{number_format($singleProject->priced_around, 0, '', ' ')}}</span> USDT</span>
                                                </li>
                                            </ul>
                                        @else
                                            <a class="btn btn-primary"
                                               href="{{ route('Adm.assessment', ['id' => $singleProject->id]) }}">Расчет
                                                оценки</a>
                                        @endif
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <!-- детальные картинки -->
                                        <div class="avatar avatar-xl">
                                            <h3 class="h5 mb-1">Изображения проекта</h3>
                                            @foreach($deteailimages as $key=>$value)
                                                <img src="{{asset($value->url)}}" alt="..."
                                                     class="avatar-img rounded-4">
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <h3>Дополнительно:</h3>
                <div class="row my-4 align-items-baseline">
                    <div class="col">
                        <div class="card mb-4 shadow">
                            <div class="card-body my-n3">
                                <div class="row align-items-center">
                                    <div class="col-3 text-center">
                                      <span class="circle circle-lg bg-light">
                                        <i class="fe fe-shield fe-24 text-primary"></i>
                                      </span>
                                    </div> <!-- .col -->
                                    <div class="col">
                                        <a href="#">
                                            <h3 class="h5 mt-4 mb-1">Security</h3>
                                        </a>
                                        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                            Mauris blandit nisl ullamcorper, rutrum metus in, congue lectus.</p>
                                    </div> <!-- .col -->
                                </div> <!-- .row -->
                            </div> <!-- .card-body -->
                            <div class="card-footer">
                                <a href=""
                                   class="d-flex justify-content-between text-muted"><span>Security Settings</span><i
                                        class="fe fe-chevron-right"></i></a>
                            </div> <!-- .card-footer -->
                        </div> <!-- .card -->
                    </div> <!-- .col-md-->
                    <div class="col">
                        <div class="card mb-4 shadow">
                            <div class="card-body my-n3">
                                <div class="row align-items-center">
                                    <div class="col-3 text-center">
                                      <span class="circle circle-lg bg-light">
                                        <i class="fe fe-bell fe-24 text-primary"></i>
                                      </span>
                                    </div> <!-- .col -->
                                    <div class="col">
                                        <a href="#">
                                            <h3 class="h5 mt-4 mb-1">Notifications</h3>
                                        </a>
                                        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                            Mauris blandit nisl ullamcorper, rutrum metus in, congue lectus.</p>
                                    </div> <!-- .col -->
                                </div> <!-- .row -->
                            </div> <!-- .card-body -->
                            <div class="card-footer">
                                <a href=""
                                   class="d-flex justify-content-between text-muted"><span>Notification Settings</span><i
                                        class="fe fe-chevron-right"></i></a>
                            </div> <!-- .card-footer -->
                        </div> <!-- .card -->
                    </div> <!-- .col-md-->
                </div> <!-- .row-->
                <h6 class="mb-3">Платежи</h6>
                <table class="table table-borderless table-striped">
                    <thead>
                    <tr role="row">
                        <th>ID</th>
                        <th>Дата платежа</th>
                        <th>Сумма</th>
                        <th>Криптовалюта</th>
                        <th>Статус</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="col">1331</th>
                        <td>2020-12-26 01:32:21</td>
                        <td>$16.9</td>
                        <td>Paypal</td>
                        <td><span class="dot dot-lg bg-warning mr-2"></span>Due</td>
                        <td>
                            <div class="dropdown">
                                <button class="btn btn-sm dropdown-toggle more-vertical" type="button"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="text-muted sr-only">Action</span>
                                </button>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#">Edit</a>
                                    <a class="dropdown-item" href="#">Remove</a>
                                    <a class="dropdown-item" href="#">Assign</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th scope="col">1156</th>
                        <td>2020-04-21 00:38:38</td>
                        <td>$9.9</td>
                        <td>Paypal</td>
                        <td><span class="dot dot-lg bg-danger mr-2"></span>False</td>
                        <td>
                            <div class="dropdown">
                                <button class="btn btn-sm dropdown-toggle more-vertical" type="button"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="text-muted sr-only">Action</span>
                                </button>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#">Edit</a>
                                    <a class="dropdown-item" href="#">Remove</a>
                                    <a class="dropdown-item" href="#">Assign</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th scope="col">1038</th>
                        <td>2019-06-25 19:13:36</td>
                        <td>$9.9</td>
                        <td>Credit Card</td>
                        <td><span class="dot dot-lg bg-success mr-2"></span>Paid</td>
                        <td>
                            <div class="dropdown">
                                <button class="btn btn-sm dropdown-toggle more-vertical" type="button"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="text-muted sr-only">Action</span>
                                </button>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#">Edit</a>
                                    <a class="dropdown-item" href="#">Remove</a>
                                    <a class="dropdown-item" href="#">Assign</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th scope="col">1227</th>
                        <td>2021-01-22 13:28:00</td>
                        <td>$9.9</td>
                        <td>Paypal</td>
                        <td><span class="dot dot-lg bg-success mr-2"></span>Paid</td>
                        <td>
                            <div class="dropdown">
                                <button class="btn btn-sm dropdown-toggle more-vertical" type="button"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="text-muted sr-only">Action</span>
                                </button>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#">Edit</a>
                                    <a class="dropdown-item" href="#">Remove</a>
                                    <a class="dropdown-item" href="#">Assign</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div> <!-- .row -->
    </main>
    <!-- SinglePage -->
@endsection

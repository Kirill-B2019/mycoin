@extends('adp.layouts.Adm')
@section('title')
    Валюты - управление на MyCOIN CRYPTO FOUND Plarform
@endsection
@section('content')
    <main role="main" class="main-content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-12">
                    <h2 class="mb-2 page-title">Валюты</h2>
                    <div class="row my-4">
                        <!-- Small table -->
                        <div class="col-md-12">
                            <div class="card shadow">
                                <div class="card-body">
                                    <!-- table -->

                                    <table class="table datatables smaller" id="dataTable-1">
                                        <thead>
                                        <tr>
                                            <th>id</th>
                                            <th>Символ</th>
                                            <th>Код</th>
                                            <th>Название</th>
                                            <th>Тип</th>
                                            <th>Статс</th>
                                            <th>Курс</th>

                                            <th></th>
                                        </tr>
                                        </thead>
                                        <tbody>

                                        @foreach($currencies as $key=>$data)
                                            <tr>
                                                <td>{{$data->id}}</td>
                                                <td><strong>{{$data->symbol}}</strong></td>
                                                <td>{{$data->code}}</td>
                                                <td>{{$data->name}}</td>
                                                <td>{{$data->type}}</td>
                                                <td>
                                                    @if($data->status == 1)
                                                        <span class="dot dot-lg bg-success mr-2"></span>
                                                    @endif
                                                </td>
                                                <th>Курс</th>

                                                <td>
                                                    <button class="btn btn-sm dropdown-toggle more-horizontal"
                                                            type="button" data-toggle="dropdown"
                                                            aria-haspopup="true" aria-expanded="false">
                                                        <span class="text-muted sr-only">Действие</span>
                                                    </button>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="{{ $data->id }}"
                                                           data-toggle="modal"
                                                           data-target="#EditModal{{ $data->id }}">Редактировать</a>
                                                    </div>
                                                </td>

                                            </tr>
                                            <div class="modal fade" id="EditModal{{ $data->id }}" tabindex="-1"
                                                 role="dialog" aria-labelledby="EditModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <form method="POST"
                                                              action="{{ route('adp.currencies.update', ['id' => $data->id]) }}">
                                                            @csrf
                                                            <input type="hidden" name="id" value="{{$data->id}}">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="EditModalLabel">
                                                                    Индекс {{ $data->index_name }}</h5>
                                                                <button type="button" class="close"
                                                                        data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body small">
                                                                <div class="row">
                                                                    <div class="col">
                                                                        <div class="form-group">
                                                                            Название:<span
                                                                                    style="color: #fb5e1c">*</span>&nbsp;<input
                                                                                    id="name" type="text"
                                                                                    class="form-control"
                                                                                    name="index_name"
                                                                                    value="{{ $data->index_name }}"
                                                                                    required>

                                                                        </div>
                                                                    </div>
                                                                    <div class="col">
                                                                        <div class="form-group">
                                                                            От:<span style="color: #fb5e1c">*</span>&nbsp;<input
                                                                                    id="slug" type="text"
                                                                                    class="form-control "
                                                                                    name="range_start"
                                                                                    value="{{ $data->range_start }}"
                                                                                    required>
                                                                            До:<span style="color: #fb5e1c">*</span>&nbsp;<input
                                                                                    id="slug" type="text"
                                                                                    class="form-control "
                                                                                    name="range_stop"
                                                                                    value="{{ $data->range_stop }}"
                                                                                    required>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col">
                                                                        <div class="form-group">
                                                                            Описание:&nbsp;<textarea id="desc"
                                                                                                     class="form-control editor"
                                                                                                     name="desc">{{$data->desc}}</textarea>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col">
                                                                        <div class="form-group">
                                                                            <div
                                                                                    class="custom-control custom-switch">
                                                                                @if($data->used == 1)
                                                                                    <input type="checkbox"
                                                                                           class="custom-control-input"
                                                                                           id="customSwitch1"
                                                                                           name="used" checked>
                                                                                    <label
                                                                                            class="custom-control-label"
                                                                                            for="customSwitch1">Используется</label>
                                                                                @else
                                                                                    <input type="checkbox"
                                                                                           class="custom-control-input"
                                                                                           id="customSwitch1"
                                                                                           name="used">
                                                                                    <label
                                                                                            class="custom-control-label"
                                                                                            for="customSwitch1">Не
                                                                                        используется</label>
                                                                                @endif
                                                                            </div>

                                                                        </div>

                                                                    </div>

                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary"
                                                                        data-dismiss="modal">Закрыть
                                                                </button>
                                                                <button class="btn btn-primary" type="submit">
                                                                    Сохранить
                                                                </button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>



                                        @endforeach

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div> <!-- simple table -->
                    </div> <!-- end section -->
                </div> <!-- .col-12 -->
            </div> <!-- .row -->
        </div> <!-- .container-fluid -->
    </main> <!-- MainPage -->
@endsection

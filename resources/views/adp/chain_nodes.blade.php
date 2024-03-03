@extends('adp.layouts.Adm')
@section('title')
    Ноды - управление на MyCOIN CRYPTO FOUND Plarform
@endsection
@section('content')
        <main role="main" class="main-content">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <h2 class="mb-2 page-title">Узлы сети</h2>
                        <div class="row my-4">
                            <!-- Small table -->
                            <div class="col-md-12">
                                <div class="card shadow">
                                    <div class="card-body">
                                        <!-- table -->
                                        <button class="btn btn-primary float-right ml-3" type="button"
                                                data-toggle="modal" data-target="#AddNewCat">Новая +
                                        </button>
                                        <div class="modal fade" id="AddNewCat" tabindex="-1" role="dialog"
                                             aria-labelledby="EditModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <form method="POST" action="{{ route('adp.new-chain_nodes')}}">
                                                        @csrf
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="EditModalLabel">Новый узел
                                                                </h5>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                    aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body small">
                                                            <div class="row">
                                                                <div class="col">
                                                                    <div class="form-group">
                                                                        Публичный ключ узла:<span style="color: #fb5e1c">*</span>&nbsp;<input
                                                                                id="name" type="text"
                                                                                class="form-control @error('chainPublicKey') is-invalid @enderror"
                                                                                name="chainPublicKey" required>
                                                                        @error('name')
                                                                        <span class="invalid-feedback" role="alert">
                                                                                <strong>{{ $message }}</strong>
                                                                            </span>
                                                                        @enderror
                                                                    </div>
                                                                </div>


                                                            </div>
                                                            <div class="row">
                                                                <div class="col">
                                                                    <div class="form-group">
                                                                        IP:<span style="color: #fb5e1c">*</span>&nbsp;<input
                                                                                id="name" type="text"
                                                                                class="form-control @error('nodeIP') is-invalid @enderror"
                                                                                name="nodeIP" required>
                                                                        @error('name')
                                                                        <span class="invalid-feedback" role="alert">
                                                                                <strong>{{ $message }}</strong>
                                                                            </span>
                                                                        @enderror
                                                                    </div>
                                                                </div>
                                                                <div class="col">
                                                                    <div class="form-group">
                                                                        Порт:<span style="color: #fb5e1c">*</span>&nbsp;<input
                                                                                id="slug" type="text"
                                                                                class="form-control @error('nodePort') is-invalid @enderror"
                                                                                name="nodePort" required>
                                                                        @error('slug')
                                                                        <span class="invalid-feedback" role="alert">
                                                                                <strong>{{ $message }}</strong>
                                                                            </span>
                                                                        @enderror
                                                                    </div>
                                                                </div>

                                                            </div>
                                                            <div class="row">

                                                                <div class="col">

                                                                    <div class="form-group">
                                                                        Описание:&nbsp;<textarea id="data"
                                                                                                 class="form-control editor"
                                                                                                 name="data"></textarea>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                    data-dismiss="modal">Закрыть
                                                            </button>
                                                            <button class="btn btn-primary" type="submit">Добавить
                                                            </button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <table class="table datatables smaller" id="dataTable-1">
                                            <thead>
                                            <tr>
                                                <th>id</th>
                                                <th>Ключ</th>
                                                <th>Инфо</th>
                                                <th>Время обновления</th>
                                                <th>IP</th>
                                                <th>Порт</th>
                                                <th>Активность</th>

                                                <th></th>
                                            </tr>
                                            </thead>
                                            <tbody>

                                            @foreach($chainNodes as $key=>$data)
                                                <tr>
                                                    <td>{{$data->id}}</td>
                                                    <td>{{$data->chainPublicKey}}</td>
                                                    <td>{{$data->data}}</td>
                                                    <td>{{\Illuminate\Support\Carbon::parse($data->nodeTime)->format('H:i:s d M Y , D') }}</td>
                                                    <th>{{long2ip($data->nodeIP)}}</th>
                                                    <th>{{$data->nodePort}}</th>
                                                    <th>+</th>

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
                                                            <a class="dropdown-item" href="{{ $data->id }}"
                                                               data-toggle="modal"
                                                               data-target="#DeleteModal{{ $data->id }}">Удалить</a>
                                                        </div>
                                                    </td>

                                                </tr>
                                                <div class="modal fade" id="EditModal{{ $data->id }}" tabindex="-1"
                                                     role="dialog" aria-labelledby="EditModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <form method="POST"
                                                                  action="{{ route('adp.chain_nodes.update', ['id' => $data->id]) }}">
                                                                @csrf
                                                                <input type="hidden" name="id" value="{{$data->id}}">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title"
                                                                        id="EditModalLabel">{{long2ip($data->nodeIP)}}</h5>
                                                                    <button type="button" class="close"
                                                                            data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body small">
                                                                    <div class="row">
                                                                        <div class="col">
                                                                            <div class="form-group">
                                                                                Публичный ключ узла:<span style="color: #fb5e1c">*</span>&nbsp;<input
                                                                                        id="name" type="text"
                                                                                        class="form-control @error('chainPublicKey') is-invalid @enderror"
                                                                                        name="chainPublicKey"  value="{{ $data->chainPublicKey }}" required>
                                                                                @error('name')
                                                                                <span class="invalid-feedback" role="alert">
                                                                                <strong>{{ $message }}</strong>
                                                                            </span>
                                                                                @enderror
                                                                            </div>
                                                                        </div>


                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col">
                                                                            <div class="form-group">
                                                                                IP:<span style="color: #fb5e1c">*</span>&nbsp;<input
                                                                                        id="name" type="text"
                                                                                        class="form-control @error('nodeIP') is-invalid @enderror"
                                                                                        name="nodeIP" value="{{ $data->nodeIP }}" required>
                                                                                @error('name')
                                                                                <span class="invalid-feedback" role="alert">
                                                                                <strong>{{ $message }}</strong>
                                                                            </span>
                                                                                @enderror
                                                                            </div>
                                                                        </div>
                                                                        <div class="col">
                                                                            <div class="form-group">
                                                                                Порт:<span style="color: #fb5e1c">*</span>&nbsp;<input
                                                                                        id="slug" type="text"
                                                                                        class="form-control @error('nodePort') is-invalid @enderror"
                                                                                        name="nodePort" value="{{ $data->nodePort }}" required>
                                                                                @error('slug')
                                                                                <span class="invalid-feedback" role="alert">
                                                                                <strong>{{ $message }}</strong>
                                                                            </span>
                                                                                @enderror
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                    <div class="row">

                                                                        <div class="col">

                                                                            <div class="form-group">
                                                                                Описание:&nbsp;<textarea id="data"
                                                                                                         class="form-control editor"
                                                                                                         name="data">{{ $data->data }}</textarea>
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

                                                <div class="modal fade" id="DeleteModal{{ $data->id }}" tabindex="-1"
                                                     role="dialog" aria-labelledby="DeleteModalLabel"
                                                     aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <form method="POST"
                                                                  action="{{ route('adp.chain_nodes.delete', ['id' => $data->id]) }}">
                                                                @csrf
                                                                <input type="hidden" name="id" value="{{$data->id}}">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="DeleteModalLabel">
                                                                        Удаление статуса {{ $data->name }}</h5>
                                                                    <button type="button" class="close"
                                                                            data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body small">

                                                                    <div class="row">
                                                                        <div class="col">
                                                                            <div class="form-group">
                                                                                Вы действительно готовы удалить
                                                                                статус {{ $data->name }} ?
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary"
                                                                            data-dismiss="modal">Нет
                                                                    </button>
                                                                    <button class="btn btn-primary" type="submit">
                                                                        Удалить
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

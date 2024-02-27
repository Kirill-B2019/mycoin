@extends('adp.layouts.Adm')
@section('title')
   Проекты - управление на MyCOIN CRYPTO FOUND Plarform
@endsection
@section('content')
 <main role="main" class="main-content">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <h2 class="mb-2 page-title">Проекты</h2>
                        <div class="row my-4">
                            <!-- Small table -->
                            <div class="col-md-12">
                                <div class="card shadow">
                                    <div class="card-body">
                                        <!-- table -->

                                        <table class="table datatables smaller" id="dataTable-1">
                                            <thead>
                                            <tr>
                                                <th>Сектор</th>
                                                <th>Название</th>
                                                <th>Начало</th>
                                                <th>До</th>
                                                <th>Цель</th>
                                                <th>Оценка площадки</th>
                                                <th>Рейтинг</th>
                                                <th>Собрано</th>
                                                <th>Участников</th>
                                                <th>Опубликован</th>
                                                <th>Срочный</th>
                                                <th></th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($allProjects as $key=>$data)
                                                <tr>
                                                    <td>{{$data->projectSector->name}}</td>
                                                    <td>
                                                        <a href="{{ route('adp.single_project', ['id' => $data->id]) }}">{{$data->name}}</a>
                                                    </td>
                                                    <td>{{$data->start}}</td>
                                                    <td>
                                                        @if ($data->stop == NULL)
                                                            До цели
                                                        @else
                                                            {{$data->stop}}
                                                        @endif
                                                    </td>
                                                    <td>{{number_format($data->target, 0, '', ' ')}} USDT</td>
                                                    <td>
                                                        @if ($data->priced_around == 0)
                                                            <span class="dot dot-lg bg-danger mr-2"></span>
                                                        @else
                                                            {{number_format($data->priced_around, 0, '', ' ')}} USDT
                                                        @endif
                                                    </td>
                                                    <td> @if ($data->letter_index == NULL)
                                                            <span class="dot dot-lg bg-danger mr-2"></span>
                                                        @else
                                                            {{$data->letter_index}}
                                                        @endif
                                                    </td>
                                                    <td>{{number_format($data->collected, 0, '', ' ')}} USDT</td>
                                                    <td></td>
                                                    <td>
                                                        @if($data->published == NULL)
                                                            <span class="dot dot-lg bg-danger mr-2"></span>
                                                        @else
                                                            {{$data->published}}
                                                        @endif

                                                    </td>
                                                    <td>
                                                        @if($data->main_page == 1)
                                                            <span class="dot dot-lg bg-success mr-2"></span>
                                                        @endif
                                                    </td>
                                                    <td>
                                                        <button class="btn btn-sm dropdown-toggle more-horizontal"
                                                                type="button" data-toggle="dropdown"
                                                                aria-haspopup="true" aria-expanded="false">
                                                            <span class="text-muted sr-only">Действие</span>
                                                        </button>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            @if($data->published == NULL)
                                                                <a class="dropdown-item"
                                                                   href="{{ route('adp.publishProject', ['id' => $data->id]) }}">Опубликовать</a>
                                                            @endif
                                                            <a class="dropdown-item"
                                                               href="{{ route('adp.assessment', ['id' => $data->id]) }}">Расчет
                                                                оценки</a>
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
                                                                  action="{{ route('adp.categories.update', ['id' => $data->id]) }}">
                                                                @csrf
                                                                <input type="hidden" name="id" value="{{$data->id}}">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title"
                                                                        id="EditModalLabel">{{ $data->name }}</h5>
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
                                                                                    class="form-control @error('name') is-invalid @enderror"
                                                                                    name="name"
                                                                                    value="{{ $data->name }}"
                                                                                    required>
                                                                                @error('name')
                                                                                <span class="invalid-feedback"
                                                                                      role="alert">
                                                                                <strong>{{ $message }}</strong>
                                                                            </span>
                                                                                @enderror
                                                                            </div>
                                                                        </div>
                                                                        <div class="col">
                                                                            <div class="form-group">
                                                                                Slug:<span
                                                                                    style="color: #fb5e1c">*</span>&nbsp;<input
                                                                                    id="shot_desc" type="text"
                                                                                    class="form-control "
                                                                                    name="shot_desc"
                                                                                    value="{{ $data->shot_desc }}"
                                                                                    disabled>

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
                                                                  action="#">
                                                                @csrf
                                                                <input type="hidden" name="id" value="{{$data->id}}">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="DeleteModalLabel">
                                                                        Удаление  {{ $data->name }}</h5>
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
                                                                                проект {{ $data->name }} ?
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

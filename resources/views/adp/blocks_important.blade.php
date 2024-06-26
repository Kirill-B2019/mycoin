@extends('adp.layouts.Adm')
@section('title')
    Блок "ВАЖНО" - управление на MyCOIN CRYPTO FOUND Plarform
@endsection
@section('content')
        <main role="main" class="main-content">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <h2 class="mb-2 page-title"> Блок "ВАЖНО" </h2>
                        <div class="row my-4">
                            <!-- Small table -->
                            <div class="col-md-12">
                                <div class="card shadow">
                                    <div class="card-body">
                                        <!-- table -->
                                        <button class="btn btn-primary float-right ml-3" type="button"
                                                data-toggle="modal" data-target="#AddNewCat">Новый +
                                        </button>
                                        <div class="modal fade" id="AddNewCat" tabindex="-1" role="dialog"
                                             aria-labelledby="EditModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <form method="POST" action="{{ route('adp.new-block_important')}}">
                                                        @csrf
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="EditModalLabel">Новая
                                                                запись</h5>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                    aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body small">
                                                            <div class="row">
                                                                <div class="col">
                                                                    <div class="form-group">
                                                                        Название:<span style="color: #fb5e1c">*</span>&nbsp;<input
                                                                                id="name" type="text"
                                                                                class="form-control @error('name') is-invalid @enderror"
                                                                                name="name" required>
                                                                        @error('name')
                                                                        <span class="invalid-feedback" role="alert">
                                                                                <strong>{{ $message }}</strong>
                                                                            </span>
                                                                        @enderror
                                                                    </div>
                                                                </div>
                                                                <div class="col">
                                                                    <div class="form-group">
                                                                        Slug:<span style="color: #fb5e1c">*</span>&nbsp;<input
                                                                                id="slug" type="text"
                                                                                class="form-control @error('slug') is-invalid @enderror"
                                                                                name="slug" required>
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
                                                                        Описание:&nbsp;<textarea id="desc"
                                                                                                 class="form-control editor"
                                                                                                 name="desc"></textarea>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col">
                                                                    <div class="form-group">
                                                                        Текст кнопки:<span style="color: #fb5e1c">*</span>&nbsp;<input
                                                                            id="button_text" type="text"
                                                                            class="form-control"
                                                                            name="button_text" >
                                                                    </div>
                                                                </div>
                                                                <div class="col">
                                                                    <div class="form-group">
                                                                        Имя маршрута:<span style="color: #fb5e1c">*</span>&nbsp;<input
                                                                            id="route_name" type="text"
                                                                            class="form-control"
                                                                            name="route_name" >
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col">
                                                                    <div class="form-group">
                                                                        Начало:<input
                                                                            id="start_data" type="date"
                                                                            class="form-control"
                                                                            name="start_data" >
                                                                    </div>
                                                                </div>
                                                                <div class="col">
                                                                    <div class="form-group">
                                                                        Окончание:<input
                                                                            id="stop_data" type="date"
                                                                            class="form-control"
                                                                            name="stop_data" >
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col">
                                                                    <div class="form-group">
                                                                        Цель USDT:<input
                                                                            id="target" type="text"
                                                                            class="form-control"
                                                                            name="target" >
                                                                    </div>
                                                                </div>
                                                                <div class="col">
                                                                    <div class="form-group">
                                                                        Собрано USDT:<input
                                                                            id="collected" type="text"
                                                                            class="form-control"
                                                                            name="collected" >
                                                                    </div>
                                                                </div>
                                                                <div class="col">
                                                                    <div class="form-group">
                                                                        Мин.платеж USDT:<input
                                                                            id="minimum_payment" type="text"
                                                                            class="form-control"
                                                                            name="minimum_payment" >
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col">
                                                                    <div class="form-group">
                                                                        Дополнительно:&nbsp;<textarea id="other_desc"
                                                                                                 class="form-control editor"
                                                                                                 name="other_desc"></textarea>
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
                                                <th>Название</th>
                                                <th>Slug</th>
                                                <th>Описание</th>
                                                <th>Активен</th>
                                                <th>Обнавлен</th>

                                                <th></th>
                                            </tr>
                                            </thead>
                                            <tbody>

                                            @foreach($blocks as $key=>$data)
                                                <tr>
                                                    <td>{{$data->id}}</td>
                                                    <td>{{$data->name}}</td>
                                                    <td>{{$data->slug}}</td>
                                                    <td>{{$data->desc}}</td>
                                                    <td>
                                                        @if($data->active == 1)
                                                            <span class="dot dot-lg bg-success mr-2"></span>
                                                        @endif
                                                    </td>
                                                    <th>{{$data->updated_at}}</th>

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
                                                                  action="{{ route('adp.block_important.update', ['id' => $data->id]) }}">
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
                                                                                        id="slug" type="text"
                                                                                        class="form-control "
                                                                                        name="slug"
                                                                                        value="{{ $data->slug }}"
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

                                                                    <div class="row">
                                                                        <div class="col">
                                                                            <div class="form-group">
                                                                                Текст кнопки:<span style="color: #fb5e1c">*</span>&nbsp;<input
                                                                                    id="button_text" type="text"
                                                                                    class="form-control"
                                                                                    value="{{ $data->button_text}}"
                                                                                    name="button_text" >
                                                                            </div>
                                                                        </div>
                                                                        <div class="col">
                                                                            <div class="form-group">
                                                                                Имя маршрута:<span style="color: #fb5e1c">*</span>&nbsp;<input
                                                                                    id="route_name" type="text"
                                                                                    class="form-control"
                                                                                    value="{{ $data->route_name}}"
                                                                                    name="route_name" >
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col">
                                                                            <div class="form-group">
                                                                                Начало:<input
                                                                                    id="start_data" type="date"
                                                                                    class="form-control"
                                                                                    value="{{ $data->start_data}}"
                                                                                    name="start_data" >
                                                                            </div>
                                                                        </div>
                                                                        <div class="col">
                                                                            <div class="form-group">
                                                                                Окончание:<input
                                                                                    id="stop_data" type="date"
                                                                                    class="form-control"
                                                                                    value="{{ $data->stop_data}}"
                                                                                    name="stop_data" >
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col">
                                                                            <div class="form-group">
                                                                                Цель USDT:<input
                                                                                    id="target" type="text"
                                                                                    class="form-control"
                                                                                    value="{{ $data->target}}"
                                                                                    name="target">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col">
                                                                            <div class="form-group">
                                                                                Собрано USDT:<input
                                                                                    id="collected" type="text"
                                                                                    class="form-control"
                                                                                    value="{{ $data->collected}}"
                                                                                    name="collected" >
                                                                            </div>
                                                                        </div>
                                                                        <div class="col">
                                                                            <div class="form-group">
                                                                                Мин.платеж USDT:<input
                                                                                    id="minimum_payment" type="text"
                                                                                    class="form-control"
                                                                                    value="{{ $data->minimum_payment}}"
                                                                                    name="minimum_payment" >
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col">
                                                                            <div class="form-group">
                                                                                Дополнительно:&nbsp;<textarea id="other_desc"
                                                                                                              class="form-control editor"
                                                                                                              name="other_desc">{{ $data->other_desc}}</textarea>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col">
                                                                            <div class="form-group">
                                                                                <div
                                                                                    class="custom-control custom-switch">
                                                                                    @if($data->active == 1)
                                                                                        <input type="checkbox"
                                                                                               class="custom-control-input"
                                                                                               id="customSwitch1"
                                                                                               name="active" checked>
                                                                                        <label
                                                                                            class="custom-control-label"
                                                                                            for="customSwitch1">Используется</label>
                                                                                    @else
                                                                                        <input type="checkbox"
                                                                                               class="custom-control-input"
                                                                                               id="customSwitch1"
                                                                                               name="active">
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

                                                <div class="modal fade" id="DeleteModal{{ $data->id }}" tabindex="-1"
                                                     role="dialog" aria-labelledby="DeleteModalLabel"
                                                     aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <form method="POST"
                                                                  action="{{ route('adp.block_important.delete', ['id' => $data->id]) }}">
                                                                @csrf
                                                                <input type="hidden" name="id" value="{{$data->id}}">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="DeleteModalLabel">
                                                                        Удаление категории {{ $data->name }}</h5>
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
                                                                                категорию {{ $data->name }} ?
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

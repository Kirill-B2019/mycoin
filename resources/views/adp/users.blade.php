@extends('adp.layouts.Adm')
@section('title')
    Пользователи - управление на MyCOIN CRYPTO FOUND Plarform
@endsection
@section('content')
        <main role="main" class="main-content">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <h2 class="mb-2 page-title">Пользователи</h2>




                        <div class="row my-4">
                            <!-- Small table -->
                            <div class="col-md-12">
                                <div class="card shadow">
                                    <div class="card-body">
                                        <!-- table -->
                                        <table class="table datatables smaller" id="dataTable-1">
                                            <thead>
                                            <tr>
                                                <th></th>
                                                <th>Ник</th>
                                                <th>Имя</th>
                                                <th>Фамилия</th>
                                                <th>Email</th>
                                                <th>Вериф.</th>
                                                <th>Роль</th>
                                                <th>Описание</th>
                                                <th>Компания</th>
                                                <th>Создан</th>
                                                <th>Обнавлен</th>
                                                <th></th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($userData as $key => $data)
                                                <tr>
                                                    <th>
                                                        <span class="avatar avatar-smaller mt-2">
                                                            <img src="{{asset(Auth::user()->avatar)}}"
                                                                 alt="{{ $data->name}}"
                                                                 class="avatar-img rounded-circle">
                                                        </span>

                                                    </th>
                                                    <th>{{ $data->name}}</th>
                                                    <th>{{ $data->user_real_name}}</th>
                                                    <th>{{ $data->user_last_name}}</th>
                                                    <th>{{ $data->email}}</th>
                                                    <th>
                                                        @if($data->verified == NUlL)
                                                            <span class="badge bg-danger">нет</span>
                                                        @else
                                                            <span class="badge bg-success">{{$data->verified}}</span>
                                                        @endif
                                                    </th>

                                                    <th>
                                                        @if (count($data->getAllRoles()) > 1)
                                                            @foreach($data->getAllRoles() as $userRoles)

                                                                <p class="text-muted small m-0">
                                                                    - {{$userRoles->name}}</p>
                                                            @endforeach
                                                        @else
                                                            <p class="text-muted small m-0">
                                                                - {{ $data->getRole()->name  ?? 'No name'}}</p>
                                                        @endif
                                                    </th>


                                                    <th>
                                                        @if($data->user_desc == NUlL)
                                                            <span class="badge bg-danger">нет</span>
                                                        @else
                                                            <span class="badge bg-success">да</span>
                                                        @endif
                                                    </th>
                                                    <th>{{ $data->user_company}}</th>
                                                    <th>{{ $data->created_at }}</th>
                                                    <th>{{ $data->updated_at }}</th>

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
                                                            <a class="dropdown-item"
                                                               href="{{ route('adp.userRolePermission', ['id' => $data->id]) }}">Назначить</a>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <div class="modal fade" id="EditModal{{ $data->id }}" tabindex="-1"
                                                     role="dialog" aria-labelledby="EditModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <form method="POST"
                                                                  action="{{ route('adp.user.update', ['id' => $data->id]) }}">
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
                                                                                Ник:<span
                                                                                        style="color: #fb5e1c">*</span>&nbsp;<input
                                                                                        id="users_name" type="text"
                                                                                        class="form-control @error('users_name') is-invalid @enderror"
                                                                                        name="users_name"
                                                                                        value="{{ $data->name }}"
                                                                                        required>
                                                                                @error('users_name')
                                                                                <span class="invalid-feedback"
                                                                                      role="alert">
                                                                                        <strong>{{ $message }}</strong>
                                                                                    </span>
                                                                                @enderror
                                                                            </div>
                                                                        </div>
                                                                        <div class="col">
                                                                            <div class="form-group">
                                                                                Email:<span
                                                                                        style="color: #fb5e1c">*</span>&nbsp;<input
                                                                                        id="users_email" type="email"
                                                                                        class="form-control @error('users_email') is-invalid @enderror"
                                                                                        name="users_email"
                                                                                        value="{{ $data->email }}"
                                                                                        required autofocus>
                                                                                @error('users_email')
                                                                                <span class="invalid-feedback"
                                                                                      role="alert">
                                                                                <strong>{{ $message }}</strong>
                                                                            </span>
                                                                                @enderror
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col">
                                                                            <div class="form-group">
                                                                                Имя:&nbsp;<input
                                                                                        id="user_detail_user_name"
                                                                                        type="text" class="form-control"
                                                                                        name="user_detail_user_name"
                                                                                        value="{{ $data->user_real_name }}">

                                                                            </div>
                                                                        </div>
                                                                        <div class="col">
                                                                            <div class="form-group">
                                                                                Фамилия:&nbsp;<input
                                                                                        id="user_detail_user_last_name"
                                                                                        type="text" class="form-control"
                                                                                        name="user_detail_user_last_name"
                                                                                        value="{{ $data->user_last_name}}">

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col col-md-4">
                                                                            Верифицирован:
                                                                            <br>
                                                                            @if($data->verified== NULL)
                                                                                <span
                                                                                        class="text-warning-light">нет</span>
                                                                            @else
                                                                                {{$data->verified}}
                                                                            @endif
                                                                        </div>
                                                                        <div class="col">
                                                                            <div class="form-group">
                                                                                Компания:&nbsp;<input
                                                                                        id="user_detail_user_company"
                                                                                        type="text" class="form-control"
                                                                                        name="user_detail_user_company"
                                                                                        value="{{ $data->user_company}}">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">

                                                                        <div class="col">

                                                                            <div class="form-group">
                                                                                О себе:&nbsp;<textarea
                                                                                        id="user_detail_user_desc"
                                                                                        class="form-control editor"
                                                                                        name="user_detail_user_desc">{{$data->user_desc}}</textarea>
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
                                                                  action="{{ route('adp.user.delete', ['id' => $data->id]) }}">
                                                                @csrf
                                                                <input type="hidden" name="id" value="{{$data->id}}">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="DeleteModalLabel">
                                                                        Удаление пользователя {{ $data->name }}</h5>
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
                                                                                пользователя {{ $data->name }} ?
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

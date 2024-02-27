@extends('adp.layouts.Adm')
@section('title')
    {{$user->name}} - управление на MyCOIN CRYPTO FOUND Plarform
@endsection
@section('content')
        <main role="main" class="main-content">
            <div class="container-fluid">
                <div class="row justify">
                    <div class="col-12">
                        <h2 class="mb-2 page-title">Роли и привелегии (права) :: {{$user->name}}</h2>

                        <div class="row">
                            <div class="col-8">
                                <div class="card shadow mr-2">
                                    <div class="card-body">
                                        <h4 class="text-primary">Роли:</h4>
                                        <table class="table datatables smaller">

                                            <tbody>

                                            @foreach($allroles as $role)
                                                <tr>
                                                    <td>{{ $role->id }}</td>
                                                    <td
                                                        @if ($user->hasRole($role->slug))
                                                            class="text-primary"
                                                        @endif
                                                    >{{ $role->slug }}</td>
                                                    <td
                                                        @if ($user->hasRole($role->slug))
                                                            class="text-primary"
                                                        @endif
                                                    >{{ $role->name }}</td>
                                                    <td class="center">
                                                        @php $params = ['user' => $user->id, 'role' => $role->id]; @endphp

                                                        @if ($user->hasRole($role->slug))
                                                            <a href="{{ route('Adm.user.unassign.role', $params) }}"
                                                               class="btn btn-sm btn-outline-light">Отменить</a>
                                                        @else
                                                            <a href="{{ route('Adm.user.assign.role', $params) }}"
                                                               class="btn btn-sm btn-primary">Выдать</a>
                                                        @endif


                                                    </td>
                                                </tr>
                                            @endforeach

                                            <tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card shadow">
                                    <div class="card-body">
                                        <h4 class="text-primary">Права:</h4>
                                        <form
                                            action="{{ route('Adm.user.updateUserPermission', ['user' => $user->id])}}"
                                            method="post">
                                            @csrf


                                            <div class="form-group d-flex flex-wrap">
                                                @php
                                                    /*
                                                     * Тут возможны такие варианты:
                                                     * 1. Форма редактирования еще не отправлена, привязанные права берем
                                                     *    из связи модели User с моделью Permission через сводную таблицу
                                                     * 2. Форма редактирования была отправлена, но были ошибки формы,
                                                     *    поэтому отмеченные админом checkbox-ы берем из old()
                                                     */
                                                    $perms = $user->permissions->keyBy('id')->keys()->toArray();
                                                    if (old('perms')) $perms = old('perms');
                                                @endphp
                                                <div class="custom-control custom-checkbox">
                                                    @foreach ($allperms as $item)
                                                        <div class="row">
                                                            <div class="col-12">


                                                                @php $checked = in_array($item->id, $perms) @endphp
                                                                <input class="custom-control-input" type="checkbox"
                                                                       name="perms[]" id="perm-id-{{ $item->id }}"
                                                                       value="{{ $item->id }}"
                                                                       @if($checked) checked @endif>
                                                                <label class="custom-control-label"
                                                                       for="perm-id-{{ $item->id }}">
                                                                    {{ $item->name }} <span class="text-muted small">({{$item->slug}})</span>
                                                                </label>

                                                            </div>
                                                        </div>

                                                    @endforeach
                                                </div>
                                            </div>

                                            <button class="btn btn-primary" type="submit">Сохранить</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>

                </div> <!-- .row -->
            </div> <!-- .container-fluid -->

        </main> <!-- MainPage -->
@endsection

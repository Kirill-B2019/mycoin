@extends('adp.layouts.Adm')
@section('title')
    Роли и привелегии (права) - управление на MyCOIN CRYPTO FOUND Plarform
@endsection
@section('content')
        <main role="main" class="main-content">
            <div class="container-fluid">
                <div class="row justify">
                    <div class="col-12">
                        <h2 class="mb-2 page-title">Роли и привелегии (права)</h2>
                                      <h5>{{ $Role->name }}</h5>
                                    <form method="POST" action="{{ route('adp.role.update', ['id' => $Role->id]) }}">
                                        @csrf
                                        <input type="hidden" name="id" value="{{$Role->id}}">
                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-group">
                                                        Название:<span
                                                            style="color: #fb5e1c">*</span>&nbsp;<input
                                                            id="name" type="text"
                                                            class="form-control @error('name') is-invalid @enderror"
                                                            name="name"
                                                            value="{{ $Role->name }}"
                                                            required>

                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-group">
                                                        Slug:<span
                                                            style="color: #fb5e1c">*</span>&nbsp;<input
                                                            id="slug" type="text"
                                                            class="form-control "
                                                            name="slug"
                                                            value="{{ $Role->slug }}"
                                                            >
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                     <div class="form-group">
                                                        Права:

                                                        <div
                                                            class="form-group d-flex flex-wrap">
                                                            @php
                                                                // если это форма создания новой роли
                                                                $perms = [];
                                                                // если это форма редактирования роли

                                                                $perms = $Role->permissions->keyBy('id')->keys()->toArray();
                                                                // форма была отправлена, но с ошибками
                                                                if (old('perms')) $perms = old('perms');
                                                            @endphp
                                                            <div
                                                                class="custom-control custom-checkbox"
                                                                id="{{ $Role->id }}">
                                                                <div class="row  row-cols-auto">
                                                                    @foreach ($AllPermissions as $item)
                                                                    @php $checked = in_array($item->id, $perms) @endphp

                                                                        <div class="col" style="border-left: 2px solid #f8520c;">
                                                                            <input class="custom-control-input"
                                                                                   type="checkbox"
                                                                                   name="perms[]"
                                                                                   id="perm-id-{{ $item->id }}"
                                                                                   value="{{ $item->id }}"
                                                                                   @if($checked) checked @endif>
                                                                            <label class="custom-control-label"
                                                                                   for="perm-id-{{ $item->id }}">{{ $item->name }}
                                                                                <span
                                                                                    class="text-muted small">({{$item->slug}})</span></label>
                                                                        </div>

                                                                    @endforeach
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>

                                                </div>
                                            </div>
                                            <div class="row">
                                            <div class="col">
                                                <button class="btn btn-primary" type="submit">
                                                    Сохранить
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                    </div>
                </div> <!-- .row -->
            </div> <!-- .container-fluid -->

        </main> <!-- MainPage -->
@endsection

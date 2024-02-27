@extends('adp.layouts.Adm')
@section('title')
    Статьи FAQ - управление на MyCOIN CRYPTO FOUND Plarform
@endsection
@section('content')
        <main role="main" class="main-content">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <h2 class="mb-2 page-title">Статьи FAQ</h2>
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
                                                    <form method="POST" action="{{ route('adp.new-FAQArticles')}}">
                                                        @csrf
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="EditModalLabel">Новая
                                                                статья</h5>
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
                                                                        Статья:&nbsp;<textarea id="desc"
                                                                                               class="form-control ckeditor"
                                                                                               name="coinIn-editor"></textarea>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col">
                                                                    <div class="form-group">
                                                                        <label for="name">Относиться к FAQ категории
                                                                            <span
                                                                                    style="color: #fb5e1c">*</span></label>
                                                                        <select class="custom-select" id="custom-select"
                                                                                name="FAQCategory_ID">

                                                                            @foreach(\App\Models\FaqCategory::all() as $Faq_Category)
                                                                                <option
                                                                                        value="{{$Faq_Category->id}}">{{$Faq_Category->name}}</option>

                                                                            @endforeach
                                                                        </select>

                                                                    </div>

                                                                    <div class="custom-control custom-switch">
                                                                        <input type="checkbox"
                                                                               class="custom-control-input"
                                                                               id="customSwitch1" name="published"
                                                                               checked>
                                                                        <label class="custom-control-label"
                                                                               for="customSwitch1">Опубликовать</label>
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
                                                <th>Родительская категория</th>
                                                <th>Опубликована</th>
                                                <th>Slug</th>
                                                <th>Создан</th>
                                                <th>Обнавлен</th>

                                                <th></th>
                                            </tr>
                                            </thead>
                                            <tbody>

                                            @foreach($FaqArticles as $key=>$data)
                                                <tr>
                                                    <td>{{$data->id}}</td>
                                                    <td>{{$data->name}}</td>
                                                    <th>{{$data->faqCategory->name}}
                                                    </th>
                                                    <td>
                                                        @if($data->published != NULL)
                                                            <span class="dot dot-lg bg-success mr-2"></span>
                                                        @endif
                                                    </td>
                                                    <td>{{$data->slug}}</td>
                                                    <th>{{$data->created_at}}</th>
                                                    <th>{{$data->updated_at}}</th>

                                                    <td>
                                                        <button class="btn btn-sm dropdown-toggle more-horizontal"
                                                                type="button" data-toggle="dropdown"
                                                                aria-haspopup="true" aria-expanded="false">
                                                            <span class="text-muted sr-only">Действие</span>
                                                        </button>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            @if($data->published == NULL)
                                                                <a class="dropdown-item"
                                                                   href="{{ route('adp.publishArticle', ['id' => $data->id]) }}">Опубликовать</a>
                                                            @else
                                                                <a class="dropdown-item"
                                                                   href="{{ route('adp.unpublishArticle', ['id' => $data->id]) }}">Снять
                                                                    с публикации</a>
                                                            @endif
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
                                                                  action="{{ route('adp.FAQArticles.update', ['id' => $data->id]) }}">
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
                                                                                                         class="form-control ckeditor"
                                                                                                         name="coinIn-editor">{{$data->desc}}</textarea>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col">
                                                                            <div class="form-group">
                                                                                <label for="name">Относиться к FAQ
                                                                                    категории</label>
                                                                                <select class="custom-select"
                                                                                        id="custom-select"
                                                                                        name="FAQCategory_ID">

                                                                                    @foreach(\App\Models\FaqCategory::all() as $Faq_Category)
                                                                                        @if (isset($data->faqArticleCategory->id) && $Faq_Category->id == $data->faqArticleCategory->id)
                                                                                            )
                                                                                            <option
                                                                                                    value="{{$Faq_Category->id}}"
                                                                                                    selected="selected">{{$Faq_Category->name}}</option>
                                                                                        @else
                                                                                            <option
                                                                                                    value="{{$Faq_Category->id}} ">{{$Faq_Category->name}}</option>
                                                                                        @endif
                                                                                    @endforeach
                                                                                </select>

                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col">
                                                                            <div class="form-group">
                                                                                @if($data->published == NULL)
                                                                                    <a class="btn btn-primary "
                                                                                       href="{{ route('adp.publishArticle', ['id' => $data->id]) }}">Опубликовать</a>
                                                                                @else
                                                                                    Опубликовано: {{$data->published}}
                                                                                @endif
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
                                                                  action="{{ route('adp.FAQArticles.delete', ['id' => $data->id]) }}">
                                                                @csrf
                                                                <input type="hidden" name="id" value="{{$data->id}}">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="DeleteModalLabel">
                                                                        Удаление статьи {{ $data->name }}</h5>
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

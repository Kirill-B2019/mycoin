@extends('adp.layouts.Adm')
@section('title')
    Новый проект - управление на MyCOIN CRYPTO FOUND Plarform
@endsection
@section('content')
    <main role="main" class="main-content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-12">
                    <h2 class="mb-2 page-title">Новый проект</h2>
                    <div class="row my-4">
                        <!-- Форма нового проекта -->
                        @include('adp.forms._form_new_project')
                        <!-- END Форма нового проекта -->
                    </div> <!-- end section -->
                </div> <!-- .col-12 -->
            </div> <!-- .row -->
        </div> <!-- .container-fluid -->
    </main> <!-- MainPage -->
@endsection

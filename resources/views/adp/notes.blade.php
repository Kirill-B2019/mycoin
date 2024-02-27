@extends('adp.layouts.Adm')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">

                        {{ __('Сообщения') }}
                        @auth
                            @if(Auth::user()->isAdmin())
                                <br>
                                Админ
                            @endif
                        @endauth
                    </div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{ __('Пользователи') }}


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

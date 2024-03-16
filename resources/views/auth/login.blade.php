@extends('project.layouts.EmptyPage.EmptyPageMain')
@section('title')
    Аутентификация LOGIN
@endsection


@section('content')
    <div class="wrapper vh-100">
        <div class="row align-items-center h-100">
            <div class="col-lg-6 d-none d-lg-flex">

                <div class="col auth_welcome">
                    <a href="{{ url('/') }}"><img src="{{asset('images/logo-grey.png')}}" alt></a>
                    <h1><span>Привет!</span> С возвращением на <span>MyCOIN!</span></h1>
                    <h6>Нажав кнопки
                        <sapn>ВОЙТИ</sapn>
                        , вы принимаете условия пользовательского соглашения, условия публичной оферты и условия
                        политики конфиденциальности
                    </h6>
                    @if (Route::has('register'))
                        <h2 class="reg">Впервые на <span>MyCOIN?</span> <br><a href="{{ route('register') }}"
                                                                               class="btn mb-2 btn-outline-primary">ЗАРЕГИСТРИРУЙТЕСЬ</a>
                        </h2>
                    @endif

                </div>
            </div> <!-- ./col -->
            <div class="col-lg-6">

                <div class="w-50 mx-auto">
                    <form method="POST" class="mx-auto text-center" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group">
                            Авторизуйтесь для продолжения работы
                        </div>
                        <div class="form-group">
                            <label for="email" class="sr-only">Email адрес</label>

                            <input id="email" type="email"
                                   class="form-control form-control-lg @error('email') is-invalid @enderror"
                                   name="email" value="{{ old('email') }}" required autocomplete="email" autofocus
                                   placeholder="Ваш email">
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="password" class="sr-only">Пароль</label>
                            <input id="password" type="password"
                                   class="form-control form-control-lg @error('password') is-invalid @enderror"
                                   name="password" required autocomplete="current-password" placeholder="Пароль">

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror

                        </div>
                        <div class="checkbox mb-3">
                            <input class="form-check-input" type="checkbox" name="remember"
                                   id="remember" {{ old('remember') ? 'checked' : '' }}>

                            <label class="form-check-label" for="remember">
                                {{ __('Запомнить меня на площадке MyCOIN') }}
                            </label>
                        </div>
                        <button class="btn btn-lg btn-primary btn-block" type="submit">Войти</button>

                        @if (Route::has('password.request'))
                            <a class="nav-link" href="{{ route('password.request') }}">
                                {{ __('Забыли пароль?') }}
                            </a>
                        @endif
                    </form>
                </div> <!-- .card -->
            </div> <!-- ./col -->
        </div> <!-- .row -->
    </div>
@endsection



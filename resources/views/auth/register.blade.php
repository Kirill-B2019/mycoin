@extends('project.layouts.EmptyPage.EmptyPageMain')
@section('title')
    Аутентификация РЕГИСТРАЦИЯ
@endsection


@section('content')
    <div class="wrapper vh-100">
        <div class="row align-items-center h-100">

            <form method="POST" action="{{ route('register') }}" class="col-lg-6 col-md-8 col-10 mx-auto">
                @csrf
                <div class="mx-auto text-center my-4">
                    <a href="{{ url('/') }}"><img src="{{asset('images/logo-grey.png')}}" alt></a>
                    <h2 class="my-3">Регистрация на площадке</h2>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="email">Ваш Email <span style="color: #fb5e1c">*</span> </label>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                               name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                    <div class="form-group col-md-6">
                        <label for="name">Ваше имя <span style="color: #fb5e1c">*</span></label>
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                               name="name" value="{{ old('name') }}" required autocomplete="name">
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                </div>
                <hr class="my-4">
                <div class="row mb-4">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="password">Новый пароль</label>
                            <input id="password" type="password"
                                   class="form-control @error('password') is-invalid @enderror" name="password" required
                                   autocomplete="new-password">
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror

                        </div>
                        <div class="form-group">
                            <label for="password-confirm">Повторите пароль</label>
                            <input id="password-confirm" type="password" class="form-control"
                                   name="password_confirmation" required autocomplete="new-password">
                        </div>
                    </div>

                    <div class="col-md-6">


                        <p class="mb-2">Требования к паролю</p>
                        <ul class="small text-muted pl-4 mb-0">
                            <li>Минимум 8 знаков</li>
                            <li>Oдно число</li>
                        </ul>


                    </div>
                </div>
                <button class="btn btn-lg btn-primary btn-block" type="submit">Зарегистрироваться</button>
                <div class="mx-auto text-center my-4">
                    <h3 class="reg"><span>Есть логин?</span> <br><a href="{{ route('login') }}"
                                                                    class="btn mb-2 btn-outline-primary">АВТОРИЗУЙТЕСЬ</a>
                    </h3>
                </div>
                <p class="mt-5 mb-3 text-muted text-center">© 2023</p>
            </form>
        </div>
    </div>
@endsection

@extends('layouts.SinglePage.SinglePage')
@section('title')
    Взнос - MyCOINin CRYPTO FOUND Plarform
@endsection

@section('content')
    <section class="blog-single-main-content section-padding">
        <div class="container">
            <div class="row">
                <div class="col col-lg-8 col-md-8 col-sm-12 text-center ">
                    <h2>ВЗНОС</h2>
                </div> <!-- end blog-SinglePage-content -->
                <div class="col col-lg-4 col-md-4 col-sm-5 text-center ">
                    @guest()

                        <h2>РЕГИСТРАЦИЯ</h2>
                    @endguest()
                    @auth()
                            <h2>Другие проекты {{auth()->user()->name}}</h2>
                    @endauth





                </div>
            </div> <!-- end row -->
            <div class="row">
                <div class="col col-lg-8 col-md-8 col-sm-12 blog-single-content ">
                    <form action="#" method="post">
                        <div class="donate">
                            <div class="row">
                                <div class="col">
                                    <div class="col text-center text-muted">

                                        <h4>{{$project->name}}</h4>
                                        <input type="hidden" id="hid_adm" name="ammount" value="150">
                                        Инвестировать <span id="InAmm" class="Amm"> {{$project->minimum_payment}} </span> USDT
                                        <span class="nb_span">СЕТЬ ERC-20</span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="donate-amount">
                                        <div class="denomination selected">
                                            <input autocomplete="off" type="radio" name="amount" id="amount{{$project->minimum_payment}}" value="{{$project->minimum_payment}}" checked="">
                                            <label for="amount5">{{$project->minimum_payment}} USDT</label>
                                        </div>
                                        <div class="denomination">
                                            <input autocomplete="off" type="radio" name="amount" id="amount{{$project->minimum_payment*2}}" value="{{$project->minimum_payment*2}}">
                                            <label for="amount10">{{$project->minimum_payment*2}} USDT</label>
                                        </div>
                                        <div class="denomination">
                                            <input autocomplete="off" type="radio" name="amount" id="amount{{$project->minimum_payment*3}}" value="{{$project->minimum_payment*3}}">
                                            <label for="amount15">{{$project->minimum_payment*3}} USDT</label>
                                        </div>
                                    </div>
                                    <label for="inp" class="inp">
                                        <input type="text" id="inp" placeholder="&nbsp;">
                                        <span class="label">Другая сумма</span>
                                        <span class="focus-bg"></span>
                                    </label>
                                </div>
                            </div>
                            <div class="row ">
                                <div class="col text-center text-muted">
                                    <a href="#" class="btn theme-btn btn-lg" type="submit" >Инвестировать</a>
                                    <p class="text-small-desc">Минимальный взнос: {{$project->minimum_payment}} USDT</p>
                                    <span id="paymentalert"></span>
                                </div>
                            </div>
                        </div>
                    </form>
                </div> <!-- end blog-SinglePage-content -->
                <div class="col col-lg-4 col-md-4 col-sm-5 align-items-center login_reg">



                        @guest()

                            <form method="POST" action="{{ route('register') }}">
                            @csrf

                                <label for="inp" class="inp_login_reg">
                                    <input type="email" placeholder="&nbsp;  @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="email">
                                    <span class="label">Ваш Email <span style="color: #fb5e1c">*</span></span>

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </label>


                                <label for="inp" class="inp_login_reg">
                                    <input type="name" placeholder="&nbsp;  @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" autocomplete="name">
                                    <span class="label">Ваше имя <span style="color: #fb5e1c">*</span></span>

                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </label>


                                <label for="inp" class="inp_login_reg">
                                    <input type="password" placeholder="&nbsp;  @error('password') is-invalid @enderror" name="password" value="{{ old('password') }}" autocomplete="password">
                                    <span class="label">Новый пароль</span>

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </label>


                                <label for="inp"  class="inp_login_reg">
                                    <input type="password" placeholder="&nbsp;" name="password_confirmation">
                                    <span class="label">Повторите пароль</span>
                                </label>




                                <button class="btn theme-btn-s4" type="submit">Зарегистрироваться</button>

                                <h3 class="reg"><span>Есть логин?</span> <br><a href="{{ route('login') }}"
                                                                                class="btn">АВТОРИЗУЙТЕСЬ</a>
                                </h3>


                        </form>
                        @endguest()
                        @auth()
                            Информация ждя зарегистрированного пользователя
                        @endauth



                </div>
            </div> <!-- end row -->
        </div>

    </section>
@endsection




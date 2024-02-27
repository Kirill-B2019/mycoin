@extends('layouts.AuthUser.AuthUserPage')
@section('title')
    {{ Auth::user()->name }} на MyCOIN CRYPTO FOUND Plarform
@endsection
@section('content')
    <div class="wrapper">
        <main role="main" class="main-content">
            Настройки
        </main> <!-- MainPage -->
    </div> <!-- .wrapper -->
@endsection

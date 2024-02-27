@extends('cabinet.layouts.Cabinet')
@section('title')
    {{ Auth::user()->name }} на MyCOIN CRYPTO FOUND Plarform
@endsection
@section('content')
    <div class="wrapper">
        <main role="main" class="main-content h-100">
            Профиль
        </main> <!-- MainPage -->
    </div> <!-- .wrapper -->
@endsection

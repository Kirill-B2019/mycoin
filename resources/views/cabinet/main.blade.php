@extends('cabinet.layouts.Cabinet')
@section('title')
    {{ Auth::user()->name }} на MyCOIN CRYPTO FOUND Plarform
@endsection
@section('content')
    <div class="wrapper">
        <main role="main" class="main-content h-100">
            <div class="container">
                <div class="row">
                    <div class="col col-lg-3 col-md-4 col-sm-12 blog-single-content">
                        <div class="blog-sidebar">

                            <div class="profile_rigth_side">
                                <p><span>{{ Auth::user()->name }}</span></p>
                                <h4>{{ Auth::user()->email }}</h4>

                                    <img src="{{asset('images/volunteer-single/volunteers/img-1.jpg')}}" alt=""  class="avatar">

                            </div>
                        </div>

                    </div>

                    <div class="col col-lg-9 col-md-8 col-sm-12 blog-single-content">
                        <div class="blog-sidebar">

                            <div class="profile_left_side">
                                11
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main> <!-- MainPage -->
    </div> <!-- .wrapper -->
@endsection

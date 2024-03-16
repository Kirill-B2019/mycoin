@extends('layouts.SinglePage.SinglePage')
@section('title')
    FAQ - MyCOINin CRYPTO FOUND Plarform
@endsection

@section('content')
    <!-- start blog-SinglePage-MainPage-content -->
    <section class="blog-single-main-content section-padding">
        <div class="container">
            <div class="row">
                <div class="col col-lg-4 col-md-4 col-sm-5 blog-single-content">
                    <h2>FAQ</h2>

                    <ul class="faq_ul">
                        @foreach($FAQCategories as $cat)
                            <li>
                                @if($cat->categories->isNotEmpty())
                                    <h3>{{$cat->name}}&nbsp;<span
                                            class="badge badge-secondary">{{$cat->publicGetArticles->count()}}</span>
                                    </h3>
                                @else
                                    <h3><a href="{{$cat->slug}}">{{$cat->name}} <span
                                                class="badge badge-secondary">{{$cat->publicGetArticles->count()}}</span></a>
                                    </h3>
                                @endif
                                @if($cat->categories->isNotEmpty())
                                    @foreach($cat->categories as $catsub)
                                        <ul>
                                            <li>
                                                - <a href="{{$catsub->slug}}">{{$catsub->name}}<span
                                                        class="badge badge-secondary">{{$cat->publicGetArticles->count()}}</span></a>
                                            </li>
                                        </ul>
                                    @endforeach
                                @endif
                            </li>
                        @endforeach


                    </ul>
                </div> <!-- end blog-SinglePage-content -->
                <div class="col col-lg-8 col-md-8 col-sm-12">


                    <div class="blog-sidebar faq-main-slide">

                        <h2 class=" text-muted">приступая к работе на площадке</h2>
                    </div>
                </div>

            </div>
        </div> <!-- end row -->

    </section>
    <!-- end blog-SinglePage-MainPage-content -->
@endsection




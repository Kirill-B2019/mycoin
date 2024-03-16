<!-- Start header -->
<header id="header" class="header-style-three">
    <div class="topbar">
        <div class="upper-topbar">
            <div class="container">
                <div class="row">
                    <div class="col col-sm-6">
                        <div class="contact-info">
                            <ul>
                                <li><i class="fa fa-child" aria-hidden="true"></i>Многое становится возможным, когда мы
                                    объединяемся вместе!
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="social align-items-end">
                        <ul>
                            <li><a href="{{ route('project.add_project') }}"><span
                                        style="font-size: small; font-weight: bolder"> РАЗМЕСТИТЬ ПРОЕКТ</span></a></li>
                        </ul>
                    </div>

                </div>
            </div>
        </div> <!-- end upper-topbar -->

        <div class="lower-topbar">
            <div class="container">
                <div class="row">
                    <div class="col col-md-4">
                        <div class="logo">
                            <a href="{{ route('project.main') }}"><img src="{{asset('images/logo-2.png')}}" alt
                                                          class="img img-responsive"></a>
                        </div>
                    </div>
                    <div class="col col-md-8">
                        <div class="next-event">
                            <div class="subject"><img src="{{asset('images/future-section-home.png')}}" alt>
                                <h5><span><small>новый раздел в</small> 2024</span>СТРОИТЕЛЬСТВО<br>НЕДВИЖЕМОСТЬ</h5>
                            </div>
                            <div id="clock"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end lower-topbar -->

    </div> <!-- end top-bar -->

    @include('project.layouts.MainPage.MainPage_nav')
</header>
<!-- end of header -->




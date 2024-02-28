<!DOCTYPE html>
<html lang="ru" class="js">

<head>
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <!-- Favicon and Touch Icons -->
    <link href="{{asset('images/favicon.png')}}" rel="shortcut icon" type="image/png">
    <link href="{{asset('images/apple-touch-icon.png')}}" rel="apple-touch-icon">
    <link href="{{asset('images/apple-touch-icon-72x72.png')}}" rel="apple-touch-icon" sizes="72x72">
    <link href="{{asset('images/apple-touch-icon-114x114.png')}}" rel="apple-touch-icon" sizes="114x114">
    <link href="{{asset('images/apple-touch-icon-144x144.png')}}" rel="apple-touch-icon" sizes="144x144">
    <!-- Site Title  -->
    <title>MCP - Coin | MyCoinToken Platform SYStem (MCOIN) - ICO Platform MyCOIN In</title>
    <!-- Bundle and Base CSS -->
    <link rel="stylesheet" href="{{asset('ico/assets/css/vendor.bundle.css?ver=210')}}">
    <link rel="stylesheet" href="{{asset('ico/assets/css/style-azalea.css?ver=210')}}">
    <!-- Extra CSS -->
    <link rel="stylesheet" href="{{asset('ico/assets/css/theme.css?ver=210')}}">
</head>

<body class="nk-body body-wider bg-theme mode-onepage">
@yield('content')
<!-- Modals -->
<!-- This is used in azalea, azalea-woa, gentian, gentian-woa, gentian-pro, gentian-pro-woa.html pages  -->
<!-- Modal @s -->
<div class="modal fade" id="login-popup">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <a href="#" class="modal-close" data-bs-dismiss="modal" aria-label="Close"><em class="ti ti-close"></em></a>
            <div class="ath-container m-0">
                <div class="ath-body bg-theme tc-light">
                    <h5 class="ath-heading title">Sign in <small class="tc-default">with your ICO Account</small></h5>
                    <form action="#">
                        <div class="field-item">
                            <div class="field-wrap">
                                <input type="text" class="input-bordered" placeholder="Your Email">
                            </div>
                        </div>
                        <div class="field-item">
                            <div class="field-wrap">
                                <input type="password" class="input-bordered" placeholder="Password">
                            </div>
                        </div>
                        <div class="field-item d-flex justify-content-between align-items-center">
                            <div class="field-item pb-0">
                                <input class="input-checkbox" id="remember-me-100" type="checkbox">
                                <label for="remember-me-100">Remember Me</label>
                            </div>
                            <div class="forget-link fz-6">
                                <a href="#" data-bs-toggle="modal" data-bs-dismiss="modal" data-bs-target="#reset-popup">Forgot password?</a>
                            </div>
                        </div>
                        <button class="btn btn-primary btn-block btn-md">Sign In</button>
                    </form>
                    <div class="sap-text"><span>Or Sign In With</span></div>
                    <ul class="row gutter-20px gutter-vr-20px">
                        <li class="col"><a href="#" class="btn btn-md btn-facebook btn-block"><em class="icon fab fa-facebook-f"></em><span>Facebook</span></a></li>
                        <li class="col"><a href="#" class="btn btn-md btn-google btn-block"><em class="icon fab fa-google"></em><span>Google</span></a></li>
                    </ul>
                    <div class="ath-note text-center"> Don’t have an account? <a href="#" data-bs-toggle="modal" data-bs-dismiss="modal" data-bs-target="#register-popup"> <strong>Sign up here</strong></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!-- .modal @e -->
<!-- Modal @s -->
<div class="modal fade" id="reset-popup">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <a href="#" class="modal-close" data-bs-dismiss="modal" aria-label="Close"><em class="ti ti-close"></em></a>
            <div class="ath-container m-0">
                <div class="ath-body bg-theme tc-light">
                    <h5 class="ath-heading title">Reset <small class="tc-default">with your Email</small></h5>
                    <form action="#">
                        <div class="field-item">
                            <div class="field-wrap">
                                <input type="text" class="input-bordered" placeholder="Your Email">
                            </div>
                        </div>
                        <button class="btn btn-primary btn-block btn-md">Reset Password</button>
                        <div class="ath-note text-center"> Remembered? <a href="#" data-bs-toggle="modal" data-bs-dismiss="modal" data-bs-target="#login-popup"> <strong>Sign in here</strong></a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div><!-- .modal @e -->
<!-- preloader -->
<div class="preloader preloader-alt no-split"><span class="spinner spinner-alt"><img class="spinner-brand" src="{{asset('images/load.png')}}" alt=""></span></div>
<!-- JavaScript -->
<script src="{{asset('ico/assets/js/jquery.bundle.js?ver=210')}}"></script>
<script src="{{asset('ico/assets/js/scripts.js?ver=210')}}"></script>
<script src="{{asset('ico/assets/js/charts.js?ver=210')}}"></script>
<script src="{{asset('ico/assets/js/charts.js?ver=210')}}"></script>
</body>

</html>

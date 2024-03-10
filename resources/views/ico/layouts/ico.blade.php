<!DOCTYPE html>
<html lang="ru" class="js">

<head>
    <meta charset="utf-8">
    <meta name="author" content="KB">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">

    <!-- csrf -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Favicon and Touch Icons -->
    <link href="{{asset('images/favicon.png')}}" rel="shortcut icon" type="image/png">
    <link href="{{asset('images/apple-touch-icon.png')}}" rel="apple-touch-icon">
    <link href="{{asset('images/apple-touch-icon-72x72.png')}}" rel="apple-touch-icon" sizes="72x72">
    <link href="{{asset('images/apple-touch-icon-114x114.png')}}" rel="apple-touch-icon" sizes="114x114">
    <link href="{{asset('images/apple-touch-icon-144x144.png')}}" rel="apple-touch-icon" sizes="144x144">
    <!-- Site Title  -->
    <title>MCP - Coin | MyCoinToken Platform SYStem (MCOIN) - ICO Platform MyCOIN In</title>
    <!-- Bundle and Base CSS -->
    <link rel="stylesheet" href="{{asset('ico/assets/css/vendor.bundle.css')}}">
    <link rel="stylesheet" href="{{asset('ico/assets/css/style-azalea.css')}}">
    <!-- Extra CSS -->
    <link rel="stylesheet" href="{{asset('ico/assets/css/my.css')}}">
</head>

<body class="nk-body body-wider bg-theme mode-onepage">
@yield('content')
<!-- Modals -->
<!-- This is used in azalea, azalea-woa, gentian, gentian-woa, gentian-pro, gentian-pro-woa.html pages  -->
<!-- Modal @s -->
<div class="modal" id="payMCP-popup">
    <div class="modal-dialog modal-xl modal-dialog-centered" style="width: 80%;">
        <div class="modal-content">
            <a href="#" class="modal-close" data-bs-dismiss="modal" aria-label="Close"><em class="ti ti-close"></em></a>
            <div class="ath-container m-0">
                <div class="ath-body bg-theme tc-light">
                    <h5 class="ath-heading title">Участие<br/> в PRE-ICO</h5>

                        <form action="{{route('send_pay')}}" method="POST">
                            <input type="hidden" id="hid_adm" name="mcp_amount" value="10">
                            @csrf
                            <div class="row">
                            <div class="col-xxl-7 col-sm-6 col-md-7 col-lg-7 col-xl-7">

                                <div class="row">
                                    <div class="col">
                                        <div class="row mb-5">
                                            <div class="col">
                                                <input type="text" id="inp" class="input-line" placeholder="Сумма в USDT" name="amount" autofocus required>
                                            </div>
                                        </div>
                                        <div class="donate-amount">
                                            <div class="row my-5">
                                                <div class="col">
                                                    <div class="denomination">
                                                        <input autocomplete="off" type="radio"  id="amount10" value="10" checked="">
                                                        <label for="amount10">10 USDT</label>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="denomination">
                                                        <input autocomplete="off" type="radio" id="amount50" value="50">
                                                        <label for="amount50">50 USDT</label>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="denomination">
                                                        <input autocomplete="off" type="radio" id="amount100" value="100">
                                                        <label for="amount100">100 USDT</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row ">
                                    <div class="col text-center text-muted">
                                        <span class="h5 ath-heading title" id="InAmm">10</span><small class="tc-default"> USDT = <span class="h5 ath-heading title" id="InAmm2">{{round(10/($nowPrice*0.4),5)}}</span> MCP</small>

                                    </div>
                                </div>
                                <div class="row my-5">
                                    <div class="col">
                                        <input type="text" class="input-line" placeholder="Ваш ETH кошелек" name="sender_adress">
                                    </div>
                                </div>
                                <div class="row my-5">
                                    <div class="col">
                                        <input type="email" class="input-line" placeholder="Ваш Email *" name="email" required>
                                    </div>
                                </div>

                            </div>
                            <div class="col-xxl-5 col-sm-6 col-md-5 col-lg-5 col-xl-5">

                                <div class="row ">
                                    <div class="col nb">
                                        <hr/>
                                        <div class="row">
                                            <div class="col-2 col-left">
                                                NB!
                                            </div>
                                            <div class="col-10 col-right">
                                                <p>На указанный Вами адрес автоматически регистрируется системный кошелек с начислением MCP на баланс. </p>
                                                <p>Зачисленные на системный баланс MCP доступны для участия в инвестировании проектов</p>
                                                <p>Вывод MPC на баланс Внешнего кошелька будет осуществлен при следующем обновлении системы.</p>
                                                <div class="field-wrap">
                                                    <input class="input-switch" id="switch-2" name="allow" type="checkbox"  aria-invalid="true" checked required>
                                                    <label for="switch-2">Ознакомлен(-а)</label>
                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>
                            </div>
                            <div class="row ">
                        <div class="col text-center text-muted">
                            <button type="submit" class="btn btn-primary btn-block btn-md">Перейти к оплате</button>
                            <p><small>СЕТЬ ERC-20</small></p>

                        </div>
                    </div>
                    </form>
                 </div>
            </div>
        </div>
    </div>
</div>
<!-- .modal @e -->
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

<script src="{{asset('ico/assets/js/jquery.bundle.js?ver=210')}}"></script>

<script src="{{asset('ico/assets/js/scripts.js?ver=210')}}"></script>
<script src="{{asset('ico/assets/js/charts.js?ver=210')}}"></script>
<script src="{{asset('ico/assets/js/charts.js?ver=210')}}"></script>

<!-- JavaScript -->

<!-- All JavaScript files

================================================== -->
<script>
var price = <?php echo round($nowPrice*0.4,5);?>;

    $(".denomination").click(function () {
        $(".denomination").removeClass("selected").prop("checked", false);

        $(this).addClass("selected");
        $(this).children(":first").prop("checked", true);

        $("#InAmm").text($(this).children(":first").val());
        $("#InAmm2").text(parseFloat($(this).children(":first").val() / price).toFixed(6));
        $("#hid_adm").val(parseFloat($(this).children(":first").val() / price).toFixed(6));
        $("#inp").val($(this).children(":first").val());

    });
    $("#inp").on("keydown", function (event) {

        var $i = String($(this).val());
        if(event.which == 8)
        {
            $i=$i.slice(0, -1);
            var $res = String(parseFloat($i / price).toFixed(6));
            if($i == ''){$i = 0;}
            $("#InAmm").text($i);
            $("#InAmm2").text($res);
            $("#hid_adm").val($i);

        }
        else{
            let key = parseInt(event.key)
            if (isNaN(key)){
                    event.preventDefault();
                    return false;
                }
                else {
                    var res2 = String(parseFloat(($i + key) / price).toFixed(6));
                    $("#InAmm").text($i + key);
                    $("#InAmm2").text(res2);
                    $("#hid_adm").val(res2);
                }
        }
        $(".denomination").removeClass("selected").prop("checked", false);
        $(this).addClass("selected");
    });

</script>

</body>
</html>

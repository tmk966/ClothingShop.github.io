<!DOCTYPE html>
<html>
<head>
    <title>Phong Ken</title>
    <base href="{{asset('')}}">
    <link href={{url('css/bootstrap-3.1.1.min.css')}} rel='stylesheet' type='text/css'/>
    <link rel="stylesheet" href="slick-1.8.1/slick/slick.css">
    <link rel="stylesheet" type="text/css" href="sick-1.8.1/slick/slick-theme.css"/>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src={{url('js/jquery.min.js')}}></script>
    <!-- Custom Theme files -->
    <!--theme-style-->
    <link href={{url('css/style.css ')}} rel="stylesheet" type="text/css" media="all"/>
    <!--//theme-style-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css"
          integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="keywords" content="Youth Fashion Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design"/>
    <script type="application/x-javascript">
            addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);
        function hideURLbar() {
            window.scrollTo(0, 1);
        } </script>
    <link href={{url('fonts.googleapis.com/css?family=Raleway')}} rel='stylesheet' type='text/css'>
    <link href={{url('fonts.googleapis.com/css?family=Poiret+One')}} rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css"
          integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link rel="stylesheet" href="{{url('css/quoc.css')}}">
    <!-- start menu -->
    <script src={{url('js/bootstrap.min.js')}}></script>
    <script src={{url('js/simpleCart.min.js')}}></script>
    <!-- slide -->
    <script src={{url('js/responsiveslides.min.js')}}></script>
    <script>
        $(function () {
            $("#slider").responsiveSlides({
                auto: false,
                speed: 500,
                namespace: "callbacks",
                pager: true,
            });
        });
    </script>
    <!-- animation-effect -->
    <link rel="stylesheet" href="fontaw/css/all.css">
    <script src="fontaw/js/all.js"></script>
    <link href={{url('css/animate.min.css')}} rel="stylesheet">
    <script src={{url('js/wow.min.js')}}></script>
    <script src="shopquanao/batloiform/bootstrapvalidator.min.js"></script>
    <script src="shopquanao/batloiform/jquery.validate.min.js"></script>
    <script src="shopquanao/batloiform/jquery.validation.js"></script>
    <script src="shopquanao/formdk.js"></script>
    <script src="shopquanao/formdn.js"></script>


    <script src="slick-1.8.1/slick/slick.js"></script>

    <script src="bootstrap-notify-master/bootstrap-notify.js"></script>

    <script>
        new WOW().init();
    </script>
    <!-- //animation-effect -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        * {
            box-sizing: border-box
        }
        body {
            font-family: "Lato", sans-serif;
        }
        /* Style the tab */
        .tab {
            float: left;
            border: 1px solid #ccc;
            background-color: #f1f1f1;
            width: 30%;
            height: 300px;
        }
        /* Style the buttons inside the tab */
        .tab button {
            display: block;
            background-color: inherit;
            color: black;
            padding: 22px 16px;
            width: 100%;
            border: none;
            outline: none;
            text-align: left;
            cursor: pointer;
            transition: 0.3s;
            font-size: 17px;
        }
        /* Change background color of buttons on hover */
        .tab button:hover {
            background-color: #ddd;
        }
        /* Create an active/current "tab button" class */
        .tab button.active {
            background-color: #ccc;
        }
        /* Style the tab content */
        .tabcontent {
            float: left;
            padding: 0px 12px;
            border: 1px solid #ccc;
            width: 70%;
            border-left: none;
            height: 300px;
        }
    </style>
</head>
<body style="background-color: whitesmoke" class="font-gg">
<!--header-->
<div class="header">
    <div class="header-top">
        <div class="container">
            <div class="col-sm-4 logo animated wow fadeInLeft" data-wow-delay=".5s">
                <h1><a href="{{url('/')}}">Phong <span>Ken</span></a></h1>
            </div>
            <div class="col-sm-4 world animated wow fadeInRight" data-wow-delay=".5s">
                <div class="cart box_1">
                    <a href="{{url('gio-hang')}}">
                        <h3>
                            {{--<div class="total">--}}
                            {{--<span class="simpleCart_total"></span>--}}
                            {{--</div>--}}
                            <div>
                                <span>
                                    <?php
                                    $count = \Gloudemans\Shoppingcart\Facades\Cart::count();
                                    ?>
                                </span>
                            </div>
                            <i class="fas fa-shopping-cart"></i>
                            @if ($count > 0)
                            ( {{$count}} )
                            @endif
                        </h3>
                    </a>
                    <p><a href="{{url('gio-hang')}}">Giỏ hàng của bạn</a></p>
                </div>
            </div>
            <div class="col-sm-2 number animated wow fadeInRight" data-wow-delay=".5s">
                <span><i class="glyphicon glyphicon-phone"></i>0969805153</span>
                <p>Gọi cho chúng tôi</p>
            </div>
            <div class="col-sm-2 search animated wow fadeInRight" data-wow-delay=".5s">
                <a class="play-icon popup-with-zoom-anim" href="#small-dialog"><i
                            class="glyphicon glyphicon-search"> </i> </a>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <div class="container">
        <div class="head-top">
            <div class="n-avigation">
                <nav class="navbar nav_bottom" role="navigation">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header nav_2">
                        <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse"
                                data-target="#bs-megadropdown-tabs">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#"></a>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
                        <ul class="nav navbar-nav nav_1">
                            <li><a href="{{url('/')}}">Trang chủ</a></li>
                            <li class="dropdown mega-dropdown active">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Nữ<span
                                            class="caret"></span></a>
                                <div class="dropdown-menu mega-dropdown-menu">
                                    <div class="container-fluid">
                                        <!-- Tab panes -->
                                        <div class="tab-content">
                                            <div class="tab-pane active" id="men">
                                                <ul class="nav-list list-inline">
                                                    <?php
                                                    $lsps = \App\Loai::where('gioitinh', 'Nữ')->get();
                                                    ?>
                                                    @foreach($lsps as $sp)
                                                        <li><a href="{{url('do-nu',$sp->id)}}">{{$sp->tenloai}}</a></li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Nav tabs -->
                                </div>
                            </li>
                            <li class="dropdown mega-dropdown active">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Nam<span
                                            class="caret"></span></a>
                                <div class="dropdown-menu mega-dropdown-menu">
                                    <div class="container-fluid">
                                        <!-- Tab panes -->
                                        <div class="tab-content">
                                            <div class="tab-pane active" id="men">
                                                <ul class="nav-list list-inline">
                                                    <?php
                                                    $lsps = \App\Loai::where('gioitinh', 'Nam')->get();
                                                    ?>
                                                    @foreach($lsps as $sp)
                                                        <li><a href="{{url('do-nam',$sp->id)}}">{{$sp->tenloai}}</a>
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Nav tabs -->
                                </div>
                            </li>
                            {{--<li><a href="{{url('tai-khoan')}}">Đăng nhập</a></li>--}}

                            <li class="dropdown mega-dropdown active">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                   aria-haspopup="true"
                                   aria-expanded="false">
                                    <?php

                                    if (\Illuminate\Support\Facades\Auth::check()) {
                                        $hovaten = \Illuminate\Support\Facades\Auth::user()->name;
                                        $nhieumanh = explode(' ', $hovaten);
                                        $tucuoi = array_pop($nhieumanh);
                                    }
                                    ?>
                                    {{--Check xem có đăng nhập hay chưa--}}
                                    @if(\Illuminate\Support\Facades\Auth::check())

                                        {{--Trỏ tới user vưa đăng nhập--}}
                                        Chào {{$tucuoi}}
                                        {{--Kêt thúc trỏ tới--}}
                                    @else
                                        Tài Khoản <i class="icon ion-person"></i>
                                    @endif
                                    <span class="caret"></span>
                                </a>
                                @if(\Illuminate\Support\Facades\Auth::check())
                                    <ul class="dropdown-menu" style="margin-left: -20px">
                                        <li><a href="{{url('dang-xuat')}}"><i class="icon ion-log-out"></i> Đăng
                                                xuất</a></li>
                                        <li><a href="{{url('thong-tin-tai-khoan',\Illuminate\Support\Facades\Auth::user()->id)}}"><i class="icon ion-compose"></i>	Thông tin cá nhân</a></li>
                                    </ul>

                                @else
                                    <ul class="dropdown-menu" style="margin-left: -20px !important;">
                                        <li><a href="{{url('dang-ki')}}"><i class="icon ion-person-add"></i> Đăng ký</a>
                                        </li>
                                        <li><a href="{{url('tai-khoan')}}"><i class="icon ion-log-in"></i> Đăng nhập</a>
                                        </li>
                                    </ul>
                                @endif
                                {{--Kết thúc check--}}

                            </li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </nav>
            </div>
            <div class="clearfix"></div>
            <!---pop-up-box---->
            <link href={{url('css/popuo-box.css')}} rel="stylesheet" type="text/css" media="all"/>
            <script src={{url('js/jquery.magnific-popup.js')}} type="text/javascript"></script>
            <!---//pop-up-box---->
            <div id="small-dialog" class="mfp-hide">
                <div class="search-top">
                    <div class="login">
                        <form action="{{url('tim-kiem')}}" method="get">
                            <input type="submit" value="" placeholder="Nhập tên sản phẩm">
                            <input type="text" name="tk" value="Nhập sản phẩm ...." onfocus="this.value = '';"
                                   onblur="if (this.value == '') {this.value = '';}">
                        </form>
                    </div>
                    <p> Tìm kiếm</p>
                </div>
            </div>
            <script>
                $(document).ready(function () {
                    $('.popup-with-zoom-anim').magnificPopup({
                        type: 'inline',
                        fixedContentPos: false,
                        fixedBgPos: true,
                        overflowY: 'auto',
                        closeBtnInside: true,
                        preloader: false,
                        midClick: true,
                        removalDelay: 300,
                        mainClass: 'my-mfp-zoom-in'
                    });
                });
            </script>
            <!---->
        </div>
    </div>
</div>


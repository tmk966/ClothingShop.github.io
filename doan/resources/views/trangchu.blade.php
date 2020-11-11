@extends('khoi.mau')
@section('noidung')
    <!--banner-->
    <div class="banner">
        <div class="matter-banner">
            <div class="slider">
                <div class="callbacks_container">
                    <ul class="rslides" id="slider">
                        <li>
                            <img src="{{url('banner/1.jpg')}}" alt="">
                            <div class="tes animated wow fadeInUp animated" data-wow-delay=".5s"
                                 style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
                            </div>
                        </li>
                        <li>
                            <img src="{{url('banner/2.jpg')}}" alt="">
                            <div class="tes animated wow fadeInUp animated" data-wow-delay=".5s"
                                 style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
                            </div>
                        </li>
                        <li>
                            <img src="{{url('banner/3.jpg')}}" alt="">
                            <div class="tes animated wow fadeInUp animated" data-wow-delay=".5s"
                                 style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
    <!--//banner-->

    <div class="content">
        <div class="container">
            <div class="navbar" style="  overflow: hidden;  background-color: #333; margin-top: 10px"><span href="#" style="float: left;  display: block;
  color: #f2f2f2;  text-align: center;  padding: 14px 16px;  text-decoration: none;  font-size: 17px;">Sản phẩm Mới</span>
            </div>
            <div class="content-top">
                <div class="content-top1">
                    <div class="row">
                        @foreach($sp as $sq)
                            <div class="col-md-3 col-md2 animated wow fadeInLeft" data-wow-delay=".5s">
                                <div class="col-md1 simpleCart_shelfItem">
                                    <a href="{{url('chi-tiet',$sq->id)}}">
                                        <img class="img img-responsive" src="{{$sq->anh}}" alt="">
                                    </a>
                                    <h3><a href="#">{{$sq->tensp}}</a></h3>
                                    <div class="price">
                                        <h5 class="item_price">{{number_format($sq->gia)}} đ</h5>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>

                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="navbar" style="  overflow: hidden;  background-color: #333;"><span href="#" style="float: left;  display: block;
  color: #f2f2f2;  text-align: center;  padding: 14px 16px;  text-decoration: none;  font-size: 17px;">Áo Sơ Mi Nam</span>
            </div>
            <div class="content-top">
                <div class="content-top1 ">
                    <div class="row danhmuc">
                        @foreach($asm as $sp)
                            <div class="col-md-3 col-md2 animated wow fadeInLeft" data-wow-delay=".5s"
                                 style="height: 485px;">
                                <div class="col-md1 simpleCart_shelfItem" style="height: 484px">
                                    <a href="{{url('chi-tiet',$sp->id)}}">
                                        <img class="img img-responsive" src="{{$sp->anh}}" alt="">
                                    </a>
                                    <h3><a href="#">{{$sp->tensp}}</a></h3>
                                    <div class="price">
                                        <h5 class="item_price">{{number_format($sp->gia)}} đ</h5>
                                        {{--<form action=""></form>--}}
                                        {{--<a href="{{url('mua-hang',$sp->id)}}" class="cart item_add">Add cart</a>--}}
                                        {{--<div class="clearfix"></div>--}}
                                    </div>
                                </div>
                            </div>

                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="navbar" style="  overflow: hidden;  background-color: #333;"><span href="#" style="float: left;  display: block;
  color: #f2f2f2;  text-align: center;  padding: 14px 16px;  text-decoration: none;  font-size: 17px;">Quần Short Nam</span>
            </div>
            <div class="content-top">
                <div class="content-top1">
                    <div class="row danhmuc">
                        @foreach($qs as $sq)
                            <div class="col-md-3 col-md2 animated wow fadeInLeft" data-wow-delay=".5s"
                                 style="height: 485px;">
                                <div class="col-md1 simpleCart_shelfItem" style="height: 484px">
                                    <a href="{{url('chi-tiet',$sq->id)}}">
                                        <img class="img img-responsive" src="{{$sq->anh}}" alt="">
                                    </a>
                                    <h3><a href="#">{{$sq->tensp}}</a></h3>
                                    <div class="price">
                                        <h5 class="item_price">{{number_format($sq->gia)}} đ</h5>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>

                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        {{--Quần dài--}}
        <div class="container">
            <div class="navbar" style="  overflow: hidden;  background-color: #333;"><span href="#" style="float: left;  display: block;
  color: #f2f2f2;  text-align: center;  padding: 14px 16px;  text-decoration: none;  font-size: 17px;">Quần Dài Nam</span>
            </div>
            <div class="content-top">
                <div class="content-top1">
                    <div class="row danhmuc">
                        @foreach($quandai as $sq)
                            <div class="col-md-3 col-md2 animated wow fadeInLeft" data-wow-delay=".5s"
                                 style="height: 485px;">
                                <div class="col-md1 simpleCart_shelfItem" style="height: 484px">
                                    <a href="{{url('chi-tiet',$sq->id)}}">
                                        <img class="img img-responsive" src="{{$sq->anh}}" alt="">
                                    </a>
                                    <h3><a href="#">{{$sq->tensp}}</a></h3>
                                    <div class="price">
                                        <h5 class="item_price">{{number_format($sq->gia)}} đ</h5>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>

                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        {{--Áo thun--}}
        <div class="container">
            <div class="navbar" style="  overflow: hidden;  background-color: #333;"><span href="#" style="float: left;  display: block;
  color: #f2f2f2;  text-align: center;  padding: 14px 16px;  text-decoration: none;  font-size: 17px;">Áo Thun Nam</span>
            </div>
            <div class="content-top">
                <div class="content-top1">
                    <div class="row danhmuc">
                        @foreach($aothun as $sq)
                            <div class="col-md-3 col-md2 animated wow fadeInLeft" data-wow-delay=".5s"
                                 style="height: 485px;">
                                <div class="col-md1 simpleCart_shelfItem" style="height: 484px">
                                    <a href="{{url('chi-tiet',$sq->id)}}">
                                        <img class="img img-responsive" src="{{$sq->anh}}" alt="">
                                    </a>
                                    <h3><a href="#">{{$sq->tensp}}</a></h3>
                                    <div class="price">
                                        <h5 class="item_price">{{number_format($sq->gia)}} đ</h5>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>

                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        {{--Đầm--}}
        <div class="container">
            <div class="navbar" style="  overflow: hidden;  background-color: #333;"><span href="#" style="float: left;  display: block;
  color: #f2f2f2;  text-align: center;  padding: 14px 16px;  text-decoration: none;  font-size: 17px;">Đầm</span>
            </div>
            <div class="content-top">
                <div class="content-top1">
                    <div class="row danhmuc">
                        @foreach($dam as $sq)
                            <div class="col-md-3 col-md2 animated wow fadeInLeft" data-wow-delay=".5s"
                                 style="height: 485px;">
                                <div class="col-md1 simpleCart_shelfItem" style="height: 484px">
                                    <a href="{{url('chi-tiet',$sq->id)}}">
                                        <img class="img img-responsive" src="{{$sq->anh}}" alt="">
                                    </a>
                                    <h3><a href="#">{{$sq->tensp}}</a></h3>
                                    <div class="price">
                                        <h5 class="item_price">{{number_format($sq->gia)}} đ</h5>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>

                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        {{--Quần Jeans--}}
        <div class="container">
            <div class="navbar" style="  overflow: hidden;  background-color: #333;"><span href="#" style="float: left;  display: block;
  color: #f2f2f2;  text-align: center;  padding: 14px 16px;  text-decoration: none;  font-size: 17px;">Quần Jean Nữ</span>
            </div>
            <div class="content-top">
                <div class="content-top1">
                    <div class="row danhmuc">
                        @foreach($quanjean as $sq)
                            <div class="col-md-3 col-md2 animated wow fadeInLeft" data-wow-delay=".5s"
                                 style="height: 485px;">
                                <div class="col-md1 simpleCart_shelfItem" style="height: 484px">
                                    <a href="{{url('chi-tiet',$sq->id)}}">
                                        <img class="img img-responsive" src="{{$sq->anh}}" alt="">
                                    </a>
                                    <h3><a href="#">{{$sq->tensp}}</a></h3>
                                    <div class="price">
                                        <h5 class="item_price">{{number_format($sq->gia)}} đ</h5>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>

                        @endforeach
                    </div>
                </div>
            </div>
        </div>


        {{--Áo thun nữ--}}
        <div class="container">
            <div class="navbar" style="  overflow: hidden;  background-color: #333;"><span href="#" style="float: left;  display: block;
  color: #f2f2f2;  text-align: center;  padding: 14px 16px;  text-decoration: none;  font-size: 17px;">Áo Thun Nữ</span>
            </div>
            <div class="content-top">
                <div class="content-top1">
                    <div class="row danhmuc">
                        @foreach($aothunnu as $sq)
                            <div class="col-md-3 col-md2 animated wow fadeInLeft" data-wow-delay=".5s"
                                 style="height: 485px;">
                                <div class="col-md1 simpleCart_shelfItem" style="height: 484px">
                                    <a href="{{url('chi-tiet',$sq->id)}}">
                                        <img class="img img-responsive" src="{{$sq->anh}}" alt="">
                                    </a>
                                    <h3><a href="#">{{$sq->tensp}}</a></h3>
                                    <div class="price">
                                        <h5 class="item_price">{{number_format($sq->gia)}} đ</h5>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>

                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        {{--Áo sơ mi nữ--}}
        <div class="container">
            <div class="navbar" style="  overflow: hidden;  background-color: #333;"><span href="#" style="float: left;  display: block;
  color: #f2f2f2;  text-align: center;  padding: 14px 16px;  text-decoration: none;  font-size: 17px;">Áo Sơ Mi Nữ</span>
            </div>
            <div class="content-top">
                <div class="content-top1">
                    <div class="row danhmuc">
                        @foreach($asmnu as $sq)
                            <div class="col-md-3 col-md2 animated wow fadeInLeft" data-wow-delay=".5s"
                                 style="height: 485px;">
                                <div class="col-md1 simpleCart_shelfItem" style="height: 484px">
                                    <a href="{{url('chi-tiet',$sq->id)}}">
                                        <img class="img img-responsive" src="{{$sq->anh}}" alt="">
                                    </a>
                                    <h3><a href="#">{{$sq->tensp}}</a></h3>
                                    <div class="price">
                                        <h5 class="item_price">{{number_format($sq->gia)}} đ</h5>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>

                        @endforeach
                    </div>
                </div>
            </div>
        </div>


    </div>



@endsection
@section('script')

    <script>
        $('.danhmuc').slick({
            dots: false,
            slidesToShow: 4,
            slidesToScroll: 1,
            arrows: false,
            autoplay: true,
            autoplaySpeed: 3000,
        });
    </script>
    <script>
        @if(session('tb'))
        $.notify({
            message: '{{session('tb')}}'
        }, {
            type: 'success',
            placement: {
                from: 'top',
                align: 'center'
            },
            delay: 2000
        });
        @endif
    </script>
@endsection
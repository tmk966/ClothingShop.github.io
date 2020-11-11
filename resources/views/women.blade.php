@extends('khoi.mau')
@section('noidung')
    <div class="breadcrumbs">
        <div class="container">
            <ol class="breadcrumb breadcrumb1 animated wow slideInLeft animated" data-wow-delay=".5s"
                style="visibility: visible; animation-delay: 0.5s; animation-name: slideInLeft;">
                <li><a href="{{url('/')}}"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Trang chủ</a></li>
                <li class="active">Nữ / {{$lsp->tenloai}}</li>
            </ol>
        </div>
    </div>
    <!--content-->
    <div class="products">
        <div class="container">
            <h2>Sản phẩm dành cho phái nữ</h2>

            <div class="content-top1">
                @foreach($dns as $sp)
                    <div class="col-md-3">
                        <div class="col-md1 simpleCart_shelfItem">
                            <a href="{{url('chi-tiet',$sp->id)}}">
                                <img class="img-responsive" src="{{url($sp->anh)}}" alt="khong co anh">
                            </a>
                            <h3><a href="">{{$sp->tensp}}</a></h3>
                            <div class="price">
                                <h5 class="item_price">{{number_format($sp->gia)}} đ</h5>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                @endforeach
                <div class="clearfix"></div>
            </div>

            <div class="clearfix"></div>
        </div>
    </div>

    <!--//content-->
@endsection
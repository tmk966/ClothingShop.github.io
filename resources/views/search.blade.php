@extends('khoi.mau')
@section('noidung')
    <div class="breadcrumbs">
        <div class="container">
            <ol class="breadcrumb breadcrumb1 animated wow slideInLeft animated" data-wow-delay=".5s"
                style="visibility: visible; animation-delay: 0.5s; animation-name: slideInLeft;">
                <li><a href="{{url('/')}}"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Trang
                        chủ</a></li>
                <li class="active">Tìm kiếm sản phẩm</li>
            </ol>
        </div>
    </div>
    <div class="container">
        <h1>Kết quả tìm kiếm: {{$tk}}, có {{count($kqs)}} kết quả</h1>
        @if(count($kqs) > 0)
            <div class="content-top">
                <div class="content-top1">
                    <div class="row danhmuc">
                        @foreach($kqs as $tk)
                            <div class="col-md-3 col-md2 animated wow fadeInLeft" data-wow-delay=".5s"
                                 style="height: 485px;">
                                <div class="col-md1 simpleCart_shelfItem" style="height: 484px">
                                    <a href="{{url('chi-tiet',$tk->id)}}">
                                        <img class="img img-responsive" src="{{$tk->anh}}" alt="">
                                    </a>
                                    <h3><a href="#">{{$tk->tensp}}</a></h3>
                                    <div class="price">
                                        <h5 class="item_price">{{number_format($tk->gia)}} đ</h5>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        @else
            <h3>Không tìm thấy kết quả</h3>
        @endif
        {{--{{ $kqs->links() }}--}}
    </div>
@endsection
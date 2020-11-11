@extends('khoi.mau')
@section('noidung')
    <div class="breadcrumbs">
        <div class="container">
            <ol class="breadcrumb breadcrumb1 animated wow slideInLeft animated" data-wow-delay=".5s"
                style="visibility: visible; animation-delay: 0.5s; animation-name: slideInLeft;">
                <li><a href="{{url('/')}}"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Trang chủ</a></li>
                <li class="active">{{\App\Loai::where('id',$ctiet->idloai)->first()->tenloai}}</li>
            </ol>
        </div>
    </div>
    <div class="single">
        <div class="container">
            <form action="{{url('mua-hang',$ctiet->id)}}" method="post">
                {{csrf_field()}}
                <div class="col-md-9">
                    <div class="col-md-5 grid">
                        <img src="{{url($ctiet->anh)}}" alt="" style="width: 250px; height: 343px">
                    </div>
                    <div class="col-md-7 single-top-in">
                        <div class="single-para simpleCart_shelfItem">

                            <h2>Tên sản phẩm: {{$ctiet->tensp}}</h2>
                            <p>Mô tả sản phẩm: {{$ctiet->mota}}</p>

                            <label class="add-to item_price">Giá: {{number_format($ctiet->gia)}} đ</label>

                            <div class="available">
                                <label for="">Số lượng:</label>
                                <input type="number" name="soluong" min="1" value="1">
                                <br>
                                <h4>Size: {{$ctiet->size}}</h4>
                            </div>
                            <button class="cart item_add acount-btn"><h4>Thêm vào giỏ hàng</h4></button>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="content-top1">
                        <div class="row">
                            <legend><h2 style="text-align: center">Sản phẩm tương tự</h2></legend>
                            <?php

                            $spl = \App\SanPham::orderBy('created_at', 'desc')->take(4)->get();
                            ?>
                            @foreach($sp_tuongtu as $sp)
                                <div class="col-md-3">
                                    <div class="col-md1 simpleCart_shelfItem">
                                        <a href="{{url('chi-tiet',$sp->id)}}">
                                            <img class="img-responsive" src="{{url($sp->anh)}}" alt="">
                                        </a>
                                        <h3><a href="{{url('chi-tiet',$sp->id)}}">{{$sp->tensp}}</a></h3>
                                        <div class="price">
                                            <h5 class="item_price">{{number_format($sp->gia)}} đ</h5>

                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                            <legend><h2 style="text-align: center">Sản phẩm mới</h2></legend>
                            <?php

                            $spl = \App\SanPham::orderBy('created_at', 'desc')->take(4)->get();
                            ?>
                            @foreach($spl as $sp)
                                <div class="col-md-3">
                                    <div class="col-md1 simpleCart_shelfItem">
                                        <a href="{{url('chi-tiet',$sp->id)}}">
                                            <img class="img-responsive" src="{{url($sp->anh)}}" alt="">
                                        </a>
                                        <h3><a href="{{url('chi-tiet',$sp->id)}}">{{$sp->tensp}}</a></h3>
                                        <div class="price">
                                            <h5 class="item_price">{{number_format($sp->gia)}} đ</h5>

                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </form>
        </div>
        <div class="clearfix"></div>
    </div>

@endsection
@section('script')
    <script>
        @if(session('tb'))
        $.notify({
                message: '{{session('tb')}}'
            },
            {
                type: 'success',
                placement: {
                    from: 'top',
                    align: 'center',
                },
                delay: 2000
            });
        @endif
    </script>
    @endsection
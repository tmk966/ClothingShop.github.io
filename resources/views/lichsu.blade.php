@extends('khoi.mau')
@section('noidung')
    <div class="breadcrumbs">
        <div class="container">
            <ol class="breadcrumb breadcrumb1 animated wow slideInLeft animated" data-wow-delay=".5s"
                style="visibility: visible; animation-delay: 0.5s; animation-name: slideInLeft;">
                <li><a href="{{url('/')}}"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Trang chủ</a>
                </li>
                <li class="active">Lịch sử đặt mua hàng</li>
            </ol>
        </div>
    </div>
<div class="container">
    <div class="row">
        <legend>Lịch sử đặt mua hàng</legend>

        @if(count($chitietdonhang) > 0)

        <table class="table">
            <thead>
            <tr>
                <th>Ảnh sản phẩm</th>
                <th>Tên hàng</th>
                <th>Số lương</th>
                <th>Thành Tiền</th>
                <th>Ngày mua</th>
            </tr>
            </thead>
            <tbody>

            @for($i=0 ; $i<count($chitietdonhang) ; $i++)
            @foreach($chitietdonhang[$i] as $ct)

            <tr>
                <td><img src="{{url(App\SanPham::where('id',$ct->idSP)->first()->anh)}}" alt="" style="width: 50px; height: 50px"></td>
                <td>{{App\SanPham::where('id',$ct->idSP)->first()->tensp}}</td>
                <td>{{$ct->soLuong}}</td>
                <td>{{number_format($ct->thanhtien)}} đ</td>
                <td>{{$ct->created_at}}</td>
            </tr>

            @endforeach
                @endfor
            </tbody>
        </table>
            @else
                <span><b>Bạn chưa đặt mua hàng từ website của chúng tôi</b></span>
            @endif
    </div>
</div>
@endsection
@extends('khoi.mau')
@section('noidung')
    @if(session('tb'))
        {{session('tb')}}
    @endif
    <div class="container">
        <ol class="breadcrumb breadcrumb1 animated wow slideInLeft animated" data-wow-delay=".5s"
            style="visibility: visible; animation-delay: 0.5s; animation-name: slideInLeft;">
            <li><a href="index.html"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Trang chủ</a></li>
            <li class="active">Giỏ hàng</li>
        </ol>
    </div>

    <div class="container">
        <legend><h2 style="text-align: center; color: #403b37">GIỎ HÀNG</h2></legend>

        <table class="table" style="background-color: white">
            <thead>
            <tr>
                <th>Hình ảnh</th>
                <th>Tên sản phẩm</th>
                <th>Size</th>
                <th>Số lượng</th>
                <th>Xóa</th>
                <th>Đơn giá</th>
                <th>Tổng cộng</th>
            </tr>

            </thead>
            <tbody>
            {{--Vòng lặp--}}
            @foreach($ghs as $gh)
                <tr>
                    {{--Lấy hình ảnh--}}
                    {{--Muốn lấy hình ảnh phải trỏ tới options trước rồi mới trỏ tới img và để trong thẻ img và phải có url hình ảnh phải đặt trong class reponsive--}}
                    <th><img src="{{url($gh->options->img)}}" style="width: 50px; height: 60px" class="img img-responsive" alt="">
                    </th>

                    {{--Lấy tên sản phẩm phải lấy tên theo cái của Cart là name--}}
                    <th>{{$gh->name}}</th>

                    {{--Lấy size sản phẩm khách hàng vừa thêm vào giỏ hàng, size là mình tự đặt--}}
                    <th>{{$gh->options->size}}</th>

                    {{--Lấy số lượng sản phẩm khách hàng vừa thêm vào giỏ hàng--}}
                    <th><input class="updatesl" id="{{$gh->rowId}}" min="1" type="number"
                               data-id={{$gh->id}} data-rowid={{$gh->rowId}} value="{{$gh->qty}}" required></th>

                    {{--Xóa sản phẩm trong giỏ hàng--}}
                    {{--Khi bấm vào xoa nó sẽ gọi tới Route xoa-sp-gh truyền rowId vào Route đó--}}
                    <th><a href="{{url('xoa-sp-gh',$gh->rowId)}}" style="font-size: 20px; color: #e74c3c"><i class="fas fa-trash"></i>

                        </a>
                        {{--<button onclick="update('{{$gh->rowId}}')" type="button">Update</button>--}}
                    </th>

                    {{--Giá sản phẩm trong Cart là price--}}
                    <th>{{$gh->price}} ₫

                    {{--Tổng tiền của 1 sản phẩm với tổng tiền = số lượng * giá sản phẩm--}}
                    <th><p class="dongia{{$gh->id}}"><span class="subtotal">{{number_format($gh->price*$gh->qty)}}
                                ₫</span></p></th>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div style="display: block; float: right; margin-bottom: 20px">

            {{--Tổng tiền của giỏ hàng--}}
            <h5><b id="total">Thành Tiền: {{\Gloudemans\Shoppingcart\Facades\Cart::subtotal(0)}} đ</b></h5>
            @if(\Illuminate\Support\Facades\Auth::check())
                @if(\Gloudemans\Shoppingcart\Facades\Cart::count() == 0)
                    {{--<a href="{{url('gio-hang')}}" class="btn btn-danger">Thanh Toán</a>--}}
                    @else
                <a href="{{route('dathang')}}" class="btn btn-danger">Đặt hàng</a>
                    @endif
            @else
                <a class="btn btn-danger" href="{{url('tai-khoan')}}">Đặt hàng</a>

                {{--@if(\Gloudemans\Shoppingcart\Facades\Cart::count() == 0)--}}
                    {{--<a class="btn btn-danger" href="#">Thanh Toán</a>--}}

                    {{--@endif--}}
            @endif
        </div>
        <br>
        {{--<div style="display: block; float: right; margin-bottom: 20px">--}}
            {{--@if(\Illuminate\Support\Facades\Auth::check())--}}
                {{--<a href="{{route('dathang')}}" class="btn btn-danger">Thanh Toán</a>--}}
            {{--@else--}}
                {{--<a class="btn btn-danger" href="{{url('tai-khoan')}}">Thanh Toán</a>--}}
            {{--@endif--}}
        {{--</div>--}}
    </div>

@endsection
@section('script')
    {{--<script>--}}
    {{--function update(rowId) {--}}
    {{--$.ajax({--}}
    {{--data: {--}}
    {{--_token: '{{csrf_token()}}',--}}
    {{--rowId: rowId,--}}
    {{--sl: $('#' + rowId).val()--}}
    {{--},--}}
    {{--url: '{{url('update-sp')}}',--}}
    {{--dataType: 'text',--}}
    {{--success: function (kq) {--}}
    {{--window.location.reload();--}}
    {{--}--}}
    {{--});--}}
    {{--}--}}
    {{--</script>--}}
    <script>
        $(document).ready(function () {
            $('.updatesl').keyup(function () {
                var sl = $(this).val();
                var id = $(this).data('id');
                var rowid = $(this).data('rowid');
                var total = 0;
                var b = 0;
                var phay = ",";
                var regex = new RegExp(phay, 'g');
                $.get("update-sl/" + sl + "/" + id + "/" + rowid, function (data) {

                    $('.dongia' + id).html(data);
                    // alert(data);
                    $('.subtotal').each(function (index) {
                        b = parseInt($(this).html().replace(regex, ''));
                        total += b;
                    });
                    var c = Intl.NumberFormat().format(total);
                    $('#total').html("Thành Tiền: " + c + " đ");
                });
            })
        })

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
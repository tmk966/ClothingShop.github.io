@extends('khoi.mau')
@section('noidung')
    <div class="breadcrumbs">
        <div class="container">
            <ol class="breadcrumb breadcrumb1 animated wow slideInLeft animated" data-wow-delay=".5s"
                style="visibility: visible; animation-delay: 0.5s; animation-name: slideInLeft;">
                <li><a href="{{url('/')}}"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Trang chủ</a>
                </li>
                <li class="active">Đăng nhập</li>
            </ol>
        </div>
    </div>
    <div class="account">
        <div class="container">
            <h2>Đăng nhập</h2>
            <h4 style="text-align: center" id="tb"></h4><br>
            <div class="account_grid">
                <div class="col-md-6 login-right" id="form-dn">

                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" id="email" name="email">
                    </div>
                    <div class="form-group">
                        <label for="pwd">Mật khẩu:</label>
                        <input style="width: 100%" type="password" class="form-control" id="password" name="password">
                    </div>

                        <button id="btnDN" class="btn btn-primary">Đăng nhập</button>


                </div>
                <div class="col-md-6 login-left">
                    <h4>Tạo tài khoản</h4>
                    <p>Bằng cách tạo tài khoản với cửa hàng của chúng tôi, bạn sẽ có thể di chuyển qua quy trình thanh
                        toán nhanh hơn, lưu trữ nhiều địa chỉ giao hàng, xem và theo dõi đơn đặt hàng của bạn trong tài
                        khoản của bạn và hơn thế nữa.</p>
                    <a class="acount-btn" href="{{url('dang-ki')}}">Tạo tài khoản mới</a>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <script>
        $('#btnDN').click(function () {
            // alert($('#email').val());
            $.ajax({
                data: {
                    password: $('#password').val(),
                    email: $('#email').val(),
                    _token: $('input[name=_token]').val(),
                },
                url: 'tai-khoan',
                type: 'post',
                dataType: 'text',

                success: function (kq) {
                    if (kq == 'Đăng nhập thành công') {
                        window.location = '{{url('/')}}';
                    }
                    else {
                        $('#tb').html(kq);
                    }
                }
            })
        })
    </script>
@endsection
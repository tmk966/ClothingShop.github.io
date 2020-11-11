@extends('khoi.mau')
@section('noidung')
    <div class="breadcrumbs">
        <div class="container">
            <ol class="breadcrumb breadcrumb1 animated wow slideInLeft animated" data-wow-delay=".5s"
                style="visibility: visible; animation-delay: 0.5s; animation-name: slideInLeft;">
                <li><a href="{{url('/')}}"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Trang chủ</a>
                </li>
                <li class="active">Đăng kí</li>
            </ol>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="register" id="dangki">
                    <legend><h2>Đăng kí</h2></legend>
                    <h4 style="text-align: center" id="tb">{{session('tb')}}</h4>
                    
                    <form action="{{url('dang-ki')}}" method="post" id="form-dk">
                        {{--<div id="form-dk">--}}
                            {{csrf_field()}}
                            <div class="form-group">
                                <label for="email">Họ tên:</label>
                                <input type="text" class="form-control" id="name" name="name">
                            </div>
                            <div class="form-group">
                                <label for="email">Email:</label>
                                <input type="email" class="form-control" id="email" name="email">
                            </div>
                            <div class="form-group">
                                <label for="pwd">Mật khẩu:</label>
                                <input type="password" class="form-control" id="password" name="password">
                            </div>
                            <div class="form-group">
                                <label for="pwd">Nhập lại mật khẩu:</label>
                                <input type="password" class="form-control" name="confirmPassword" id="confirmPassword">
                            </div>
                            <div class="form-group">
                                <label for="pwd">Số điện thoại:</label>
                                <input type="text" class="form-control" name="sdt" id="sdt">
                            </div>
                            <div class="form-group">
                                <label for="pwd">Địa chỉ:</label>
                                <input type="text" class="form-control" name="diachi" id="diachi">
                            </div>
                            <button type="submit" class="btn btn-primary">Đăng ký</button>
                            <button type="reset" class="btn btn-danger">Hủy bỏ</button>
                        {{--</div>--}}

                    </form>
                </div>
            </div>
        </div>

    </div>
    <script>
        $('#btnDK').click(function () {
            $.ajax({
                data: {
                    name: $('#name').val(),
                    email: $('#email').val(),
                    password: $('#password').val(),
                    sdt: $('#sdt').val(),
                    diachi: $('#diachi').val(),
                    _token: $('input[name=_token]').val()
                },
                url: '{{url('dang-ki')}}',
                type: 'post',
                dataType: 'text',
                success: function (kq) {
                    if (kq == 'Đăng ký thành công') {
                        $('#tb').html(kq);
                        $('#name').val('');
                        $('#email').val('');
                        $('#sdt').val('');
                        $('#diachi').val('');
                        $('#password').val('');
                        $('#confirmPassword').val('');
                    }
                    else {
                        $('#tb').html(kq)
                    }
                }
            })
        })
    </script>
@endsection
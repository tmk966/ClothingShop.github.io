@extends('admin.khoi.master')
@section('noidung')
    <section class="container">
        <h1><b>Sửa thông tin khách hàng</b></h1>
        <div class="col-md-6">
            <form action="{{url('admin/sua-kh', $kh->id)}}"  method="post" style="margin-bottom: 20px">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="email">Tên khách hàng:</label>
                    <input required type="text" name="tkh" class="form-control" value="{{$kh->name}}">
                </div>
                <div class="form-group">
                    <label for="pwd">Email:</label>
                    <input disabled required type="email" name="email" class="form-control" value="{{$kh->email}}" >
                </div>
                <div class="form-group">
                    <label for="pwd">Mật khẩu:</label>
                    <input required type="password" name="mk" class="form-control" value="{{$kh->password}}">
                </div>
                <div class="form-group">
                    <label for="pwd">Số điện thoại:</label>
                    <input required type="text" name="sdt" class="form-control" ivalue="{{$kh->sodt}}">
                </div>
                <div class="form-group">
                    <label for="pwd">Địa chỉ:</label>
                    <input required type="text" name="dc" class="form-control" value="{{$kh->diachi}}">
                </div>

                <button class="btn btn-success">Đồng ý</button>
                <button type="reset" class="btn btn-danger">Hủy</button>
            </form>
        </div>
    </section>
@endsection
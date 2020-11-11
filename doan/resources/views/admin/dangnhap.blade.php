@extends('admin.khoi.dangnhap')
@section('noidung')
<div class="content-wrapper">
    <div class="row">
        @if(session('tb'))
            <b><h4 style="text-align: center" class="text-success">{{session('tb')}}</h4></b>
        @endif
        <div class="col-md-3"></div>
        <div class="col-md-7">
            <form action="{{url('admin/dangnhap')}}" method="post">
                {{csrf_field()}}
                <h1 style="text-align: center">Đăng nhập</h1>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input name="tendangnhap" class="form-control" id="email">
                </div>
                <div class="form-group">
                    <label for="pwd">Password:</label>
                    <input type="password" name="matkhau" class="form-control" id="pwd">
                </div>
                <button class="btn btn-primary" style="margin-left: 300px">Đăng nhập</button>
            </form>
        </div>
    </div>
</div>
@endsection


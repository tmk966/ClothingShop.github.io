@extends('khoi.mau')
@section('noidung')
    <div class="breadcrumbs">
        <div class="container">
            <ol class="breadcrumb breadcrumb1 animated wow slideInLeft animated" data-wow-delay=".5s"
                style="visibility: visible; animation-delay: 0.5s; animation-name: slideInLeft;">
                <li><a href="{{url('/')}}"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Trang chủ</a>
                </li>
                <li class="active">Chỉnh sửa thông tin cá nhân</li>
            </ol>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <legend>Chỉnh sửa thông tin</legend>
            <b><h4 style="text-align: center" class="text-success" id="tb">{{session('tb')}}</h4></b>
            <form class="well form-horizontal" action="{{url('chinh-sua-tai-khoan',$user->id)}}" method="post" id="contact_form">
                <fieldset>
                    {{csrf_field()}}

                    <div class="form-group">
                        <label class="col-md-4 control-label">Tên khách hàng</label>
                        <div class="col-md-4 inputGroupContainer">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fas fa-user-circle"></i> </span>
                                <input name="name" class="form-control" type="text" style="z-index:0"
                                       value="{{$user->name}}">
                            </div>
                        </div>
                    </div>


                    <div class="form-group">
                        <label class="col-md-4 control-label">Số điện thoại</label>
                        <div class="col-md-4 inputGroupContainer">
                            <div class="input-group" style="z-index:1">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                                <input name="sdt" class="form-control" type="text" value="{{$user->sodt}}">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label">Địa chỉ</label>
                        <div class="col-md-4 inputGroupContainer">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                                <input class="form-control" name="diachi" style="z-index:0"
                                       value="{{$user->diachi}}">
                            </div>
                        </div>
                    </div>

                    {{--<!-- Success message -->--}}
                    {{--<div class="alert alert-success" role="alert" id="success_message">Success <i class="glyphicon glyphicon-thumbs-up"></i> Thanks for contacting us, we will get back to you shortly.</div>--}}

                    {{--<!-- Button -->--}}
                    <div class="form-group">
                        <label class="col-md-4 control-label"></label>
                        <div class="col-md-4">
                                <button type="submit" class="btn btn-success">Đồng ý</button>
                                <button type="reset" class="btn btn-danger">Hủy bỏ</button>

                        </div>
                    </div>

                </fieldset>
            </form>
        </div>
    </div>

@endsection
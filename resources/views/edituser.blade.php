@extends('khoi.mau')
@section('noidung')
    <div class="breadcrumbs">
        <div class="container">
            <ol class="breadcrumb breadcrumb1 animated wow slideInLeft animated" data-wow-delay=".5s"
                style="visibility: visible; animation-delay: 0.5s; animation-name: slideInLeft;">
                <li><a href="{{url('/')}}"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Trang chủ</a>
                </li>
                <li class="active">Thông tin cá nhân</li>
            </ol>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <form class="well form-horizontal">
                <fieldset>

                    <!-- Form Name -->
                    <legend style="text-align: centert">Thông tin cá nhân</legend>

                    <div class="form-group">
                        <label class="col-md-4 control-label">Tên khách hàng</label>
                        <div class="col-md-4 inputGroupContainer">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fas fa-user-circle"></i> </span>
                                <input disabled name="username" class="form-control" type="text" style="z-index:0"
                                       value="{{$user->name}}">
                            </div>
                        </div>
                    </div>


                    <div class="form-group">
                        <label class="col-md-4 control-label">Email</label>
                        <div class="col-md-4 selectContainer">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>

                                <input disabled type="text" name="gt" id="date" class="form-control"
                                       value="{{$user->email}}">

                            </div>
                        </div>
                    </div>


                    <!-- radio checks -->


                    <!-- Text area -->
                    <div class="form-group">
                        <label class="col-md-4 control-label">Số điện thoại</label>
                        <div class="col-md-4 inputGroupContainer">
                            <div class="input-group" style="z-index:1">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                                <input disabled name="lienhe" class="form-control" type="text" value="{{$user->sodt}}">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label">Địa chỉ</label>
                        <div class="col-md-4 inputGroupContainer">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                                <input disabled class="form-control" name="" style="z-index:0"
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
                            <a href="{{url('chinh-sua-tai-khoan',$user->id)}}">
                                <span class="btn btn-danger">Chỉnh sửa thông tin cá nhân</span>
                            </a>
                            <a href="{{url('lich-su-mua-hang',$user->id)}}">
                                <span class="btn btn-success">Lịch sửa đặt mua hàng</span>
                            </a>
                        </div>
                    </div>

                </fieldset>
            </form>
        </div>
    </div>
@endsection
@extends('admin.khoi.master')
@section('noidung')
    <section class="content">
        <h1><b>Quản lý khách hàng</b></h1>
        <div class="row">
            <div class="col-xs-12">
                <a href="{{url('admin/them-kh')}}">
                    <button class="btn btn-success" data-toggle="modal" data-target="#themlsp"
                            style="margin-bottom: 20px">
                        Thêm
                    </button>
                </a>

                <b><h4 class="text-success" style="text-align: center">{{session('tb')}}</h4></b>


                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Danh Sách Khách Hàng</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>Tên khách hàng</th>
                                <th>Email</th>
                                <th>Số điện thoại</th>
                                <th>Địa chỉ</th>
                                <th>Hành động</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            $kh = \App\User::all();
                            ?>
                            @foreach($kh as $khs)
                                <tr>
                                    <td>{{$khs->name}}</td>
                                    <td>{{$khs->email}}</td>
                                    <td>{{$khs->sodt}}</td>
                                    <td>{{$khs->diachi}}</td>
                                    <td>
                                        <a href="{{url('admin/sua-kh',$khs->id)}}" class="btn btn-primary"
                                           style="float: left;margin-right: 10px">
                                            Sửa
                                        </a>
                                        <form action="{{url('admin/khach-hang',$khs->id)}}" method="post"
                                              style="margin-bottom: 0px; float: left">
                                            {{csrf_field()}}
                                            <button class="btn btn-danger"
                                                    onclick="if(confirm('Bạn chắc chắn muốn xóa?'))return true;return false;">
                                                Xóa
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach

                            </tbody>
                            <tfoot>
                            <tr>
                                <th>Tên khách hàng</th>
                                <th>Email</th>
                                <th>Số điện thoại</th>
                                <th>Địa chỉ</th>
                                <th>Hành động</th>
                            </tr>
                            </tfoot>
                        </table>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
        </div>
    </section>
@endsection


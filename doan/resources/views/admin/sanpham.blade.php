@extends('admin.khoi.master')
@section('noidung')
    <section class="content">
        <h1><b>Quản lý sản phẩm</b></h1>


        <div class="row">
            <div class="col-xs-12">
                <a href="{{url('admin/them-sp')}}">
                    <button class="btn btn-success" data-toggle="modal" data-target="#themlsp"
                            style="margin-bottom: 20px">
                        Thêm
                    </button>
                </a>
                <b><h4 style="text-align: center" class="text-success" id="tb">{{session('tb')}}</h4></b>
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Danh Sách Sản Phẩm</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>Tên sản phẩm</th>
                                <th>Số lượng</th>
                                <th>Giá</th>
                                <th>Hành động</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($sps as $sp)
                                <tr>
                                    <td>{{$sp->tensp}}</td>
                                    <td>{{$sp->soluong}}</td>
                                    <td>{{$sp->gia}}</td>

                                    <td>
                                        <a href="{{url('admin/sua-sp',$sp->id)}}" class="btn btn-primary"
                                           style="float: left;margin-right: 10px">
                                            Sửa
                                        </a>
                                        <form action="{{url('admin/xoa-sp',$sp->id)}}" method="post"
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
                                <th>Tên sản phẩm</th>
                                <th>Số lượng</th>
                                <th>Giá</th>
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


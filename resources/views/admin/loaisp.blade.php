@extends('admin.khoi.master')
@section('noidung')
    <section class="content">
        <h1><b>Quản lý loại sản phẩm</b></h1>

        <div class="row">
            <div class="col-xs-12">

                <button class="btn btn-success" style="margin-bottom: 20px" data-toggle="modal" data-target="#themlsp">
                    Thêm
                </button>

                {{--Để kiểm tra nó có tồn tại hay không--}}
                @if(session('tb'))
                    <h4 class="text-success" style="text-align: center">{{session('tb')}} </h4>
                    <?php
                    session()->forget('tb');
                    ?>
                @endif
                <h4 class="text-success" style="text-align: center"></h4>
                {{--In ra màn hình với session 'tb' có giá trị nằm trong Controller--}}

                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Danh Sách Loại Sản Phẩm</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Tên Loại Sản Phẩm</th>
                                <th>Giới tính</th>
                                <th>Hành động</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($lsp as $sp)
                                <tr>
                                    <td>{{$sp->id}}</td>
                                    <td>{{$sp->tenloai}}</td>
                                    <td>{{$sp->gioitinh}}</td>
                                    <td>
                                        <a href="{{url('admin/sua-lsp',$sp->id)}}" class="btn btn-primary"
                                           style="float: left;margin-right: 10px">
                                            Sửa
                                        </a>
                                        <form action="{{url('admin/xoa-loai',$sp->id)}}" method="post"
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
                                <th>ID</th>
                                <th>Tên Loại Sản Phẩm</th>
                                <th>Hành Động</th>
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
        <!-- /.row -->
        <!-- Modal -->
        <div class="modal fade" id="themlsp" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Thêm Sản Phẩm</h4>
                        <h5 class="text-danger" style="text-align: center" id="thongbao"></h5>
                    </div>
                    <div class="modal-body" style="text-align: center">
                        <form action="{{url('admin/them-lsp')}}" method="post">
                            {{csrf_field()}}
                            <div class="form-group" style="text-align: left">
                                <label for="email">Tên Loại Sản Phẩm</label>
                                <input required type="text" class="form-control" id="lsp"
                                       placeholder="Nhập tên loại sản phẩm"
                                       name="lsp">
                            </div>
                            <div class="form-group" style="text-align: left">
                                <label for="pwd">Giới tính</label>
                                <select name="gt" required class="form-control">
                                    <option value="">-- Chọn giới tính --</option>
                                    <option value="Nam">Nam</option>
                                    <option value="Nữ">Nữ</option>
                                </select>
                            </div>

                            <button type="" id="" class="btn btn-primary">Đồng ý</button>
                        </form>
                    </div>
                </div>
            </div>
        </div><!-- Modal -->

    </section>
@endsection

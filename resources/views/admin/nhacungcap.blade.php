@extends('admin.khoi.master')
@section('noidung')
    <section class="content">
        <h1><b>Thương hiệu</b></h1>

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

                {{--In ra màn hình với session 'tb' có giá trị nằm trong Controller--}}

                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Danh sách các thương hiệu</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Tên Nhà Cung Cấp</th>
                                <th>Hành động</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($ncc as $nha)
                                <tr>
                                    <td>{{$nha->id}}</td>
                                    <td>{{$nha->tenncc}}</td>
                                    <td>
                                        <a href="{{url('admin/sua-ncc',$nha->id)}}" class="btn btn-primary"
                                           style="float: left;margin-right: 10px">
                                            Sửa
                                        </a>
                                        <form action="{{url('admin/xoa-ncc',$nha->id)}}" method="post"
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
                                <th>Tên nhà cung cấp</th>
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
                        <h4 class="modal-title">Thêm thương hiệu</h4>
                        <h5 class="text-danger" style="text-align: center" id="thongbao"></h5>
                    </div>
                    <div class="modal-body" style="text-align: center">
                        <form action="{{url('admin/them-nhacc')}}" method="post">
                            {{csrf_field()}}
                            <div class="form-group" style="text-align: left">
                                <label for="email">Tên thương hiệu</label>
                                <input required type="text" class="form-control" id="ncc"
                                       placeholder="Nhập tên thương hiệu sản phẩm"
                                       name="ncc">
                            </div>
                            <button class="btn btn-primary">Đồng ý</button>
                        </form>
                    </div>
                </div>
            </div>
        </div><!-- Modal -->

    </section>
@endsection
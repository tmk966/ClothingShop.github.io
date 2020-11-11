@extends('admin.khoi.master')
@section('noidung')

    <script>
        window.onload = function (ev) {
            $(".tbdataTable").DataTable();
            $(".nav-pills li:first-child, .tab-pane:first-child").addClass('active');
        };
    </script>

    <section class="content">
        <div id="exTab1">
            <ul class="nav nav-pills">

                @foreach($categories as $cate)
                <li>
                    <a href="#{{$cate->id}}_cate" data-toggle="tab"><b>{{$cate->tenloai}}</b></a>
                </li>
                @endforeach
            </ul>

            <div class="tab-content clearfix">
                @foreach($categories as $cate)
                <div class="tab-pane" id="{{$cate->id}}_cate">
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title"><b>Danh sách {{$cate->tenloai}} còn lại trong kho</b></h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <table class="table table-bordered table-striped tbdataTable" style="color: black">
                                <thead>
                                <tr>
                                    <th>Hình ảnh</th>
                                    <th>Tên sản phẩm</th>
                                    <th>Số lượng</th>
                                    <th>Giá</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($cate->sanpham as $item)
                                    <tr>
                                        <td width="100"><img src="{{url($item->anh)}}" class="img img-responsive"
                                                             style="width: 50px; height: 50px" alt=""></td>
                                        <td>{{$item->tensp}}</td>
                                        <td>{{number_format($item->soluong)}}</td>
                                        <td>{{number_format($item->gia)}}</td>

                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                </div>
                @endforeach


            </div>
        </div>
    </section>
@endsection

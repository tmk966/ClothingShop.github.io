@extends('admin.khoi.master')
@section('noidung')

    <section class="content">
        <div id="exTab1">
            <ul class="nav nav-pills">
                <li class="active">
                    <a href="#1a" data-toggle="tab"><b>Mới đặt</b></a>
                </li>
                <li><a href="#2a" data-toggle="tab"><b>Đang giao</b></a>
                </li>
                <li><a href="#3a" data-toggle="tab"><b>Đã giao</b></a>
                </li>
                <li><a href="#4a" data-toggle="tab"><b>Hủy bỏ</b></a>
                </li>
            </ul>

            <div class="tab-content clearfix">
                <div class="tab-pane active" id="1a">
                    <div class="box">

                        <div class="box-header">
                            <h3 class="box-title"><b>Danh sách đơn đặt hàng</b></h3>
                        </div>

                        <!-- /.box-header -->
                        <div class="box-body">
                            <table id="example1" class="table table-bordered table-striped" style="color: black">
                                <thead>

                                <tr>
                                    <th>Tên khách hàng</th>
                                    <th>Email khách hàng</th>
                                    <th>Tổng hóa hơn</th>
                                    <th>Tình trạng</th>
                                    <th>Xem chi tiết</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($mds as $md)
                                    <tr>
                                        <td>{{\App\User::where('id',$md->iduser)->first()->name}}</td>
                                        <td>{{\App\User::where('id',$md->iduser)->first()->email}}</td>
                                        <td>{{$md->tongtien}}</td>
                                        <td>{{$md->tinhTrang}}</td>
                                        <td>
                                            <a href="{{url('admin/don-hang/chi-tiet',$md->id)}}">
                                                <button class="btn btn-primary">Xem chi tiết</button>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>Tên khách hàng</th>
                                    <th>Email khách hàng</th>
                                    <th>Tổng hóa hơn</th>
                                    <th>Tình trạng</th>
                                    <th>Xem chi tiết</th>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                </div>
                <div class="tab-pane" id="2a">
                    <div class="box">

                        <div class="box-header">
                            <h3 class="box-title"><b>Danh sách đơn đặt hàng</b></h3>
                        </div>

                        <!-- /.box-header -->
                        <div class="box-body">
                            <table id="example2" class="table table-bordered table-striped" style="color: black">
                                <thead>
                                <tr>
                                    <th>Tên khách hàng</th>
                                    <th>Email khách hàng</th>
                                    <th>Tổng hóa hơn</th>
                                    <th>Tinh trạng</th>
                                    <th>Xem chi tiết</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($dgs as $dd)
                                    <tr>
                                        <td>{{\App\User::where('id',$dd->iduser)->first()->name}}</td>
                                        <td>{{\App\User::where('id',$dd->iduser)->first()->email}}</td>
                                        <td>{{$dd->tongtien}}</td>
                                        <td>{{$dd->tinhTrang}}</td>
                                        <td>
                                            <a href="{{url('admin/don-hang/chi-tiet',$dd->id)}}">
                                                <button class="btn btn-primary">Xem chi tiết</button>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>Tên khách hàng</th>
                                    <th>Email khách hàng</th>
                                    <th>Tổng hóa hơn</th>
                                    <th>Tình trạng</th>
                                    <th>Xem chi tiết</th>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                        <!-- /.box-body -->
                    </div>

                </div>
                <div class="tab-pane" id="3a">
                    <div class="box">

                        <div class="box-header">
                            <h3 class="box-title"><b>Danh sách đơn đặt hàng</b></h3>
                        </div>

                        <!-- /.box-header -->
                        <div class="box-body">
                            <table id="example3" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>Tên khách hàng</th>
                                    <th>Email khách hàng</th>
                                    <th>Tổng hóa hơn</th>
                                    <th>Tình trạng</th>
                                    <th>Xem chi tiết</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($hts as $ht)
                                    <tr>
                                        <td>{{\App\User::where('id',$ht->iduser)->first()->name}}</td>
                                        <td>{{\App\User::where('id',$ht->iduser)->first()->email}}</td>
                                        <td>{{$ht->tongtien}}</td>
                                        <td>{{$ht->tinhTrang}}</td>
                                        <td></td>
                                        <td>
                                            <a href="{{url('admin/don-hang/chi-tiet',$ht->id)}}">
                                                <button class="btn btn-primary">Xem chi tiết</button>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>Tên khách hàng</th>
                                    <th>Email khách hàng</th>
                                    <th>Tổng hóa hơn</th>
                                    <th>Tình trạng</th>
                                    <th>Xem chi tiết</th>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                        <!-- /.box-body -->
                    </div>

                </div>
                <div class="tab-pane" id="4a">
                    <div class="box">

                        <div class="box-header">
                            <h3 class="box-title"><b>Danh sách đơn đặt hàng</b></h3>
                        </div>

                        <!-- /.box-header -->
                        <div class="box-body">
                            <table id="example4" class="table table-bordered table-striped" style="color: black">
                                <thead>
                                <tr>
                                    <th>Tên khách hàng</th>
                                    <th>Email khách hàng</th>
                                    <th>Tổng hóa hơn</th>
                                    <th>Tình trạng</th>
                                    <th>Xem chi tiết</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($huys as $hb)
                                    <tr>
                                        <td>{{\App\User::where('id',$hb->iduser)->first()->name}}</td>
                                        <td>{{\App\User::where('id',$hb->iduser)->first()->email}}</td>
                                        <td>{{$hb->tongtien}}</td>
                                        <td>{{$hb->tinhTrang}}</td>
                                        <td>
                                            <a href="{{url('admin/don-hang/chi-tiet',$hb->id)}}">
                                                <button class="btn btn-primary">Xem chi tiết</button>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>Tên khách hàng</th>
                                    <th>Email khách hàng</th>
                                    <th>Tổng hóa hơn</th>
                                    <th>Trạng thái</th>
                                    <th>Xem chi tiết</th>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                        <!-- /.box-body -->
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection

@extends('admin.khoi.master')
@section('noidung')

    <section class="content">
        <div class="row" style="margin-top: 15px;margin-bottom: 15px">
            <div class="row" style="margin-top: 15px;margin-bottom: 15px">
                <div class="col-md-4">
                    <div style="background-color: white;padding: 15px">
                        <b>Trạng thái đơn hàng là:</b> {{\App\DonHang::where('id',$id)->first()->tinhTrang}}
                        <br>
                        @if(\App\DonHang::where('id',$id)->first()->tinhTrang != 'Hoàn thành')
                            <form action="{{route('pcapnhat',$id)}}" method="post">
                                {{csrf_field()}}
                                <select name="trangthai">
                                    <option value="Đang giao">Đang giao</option>
                                    <option value="Hoàn thành">Hoàn thành</option>
                                    <option value="Hủy bỏ">Hủy bỏ</option>
                                </select>
                                <button class="btn btn-primary">Cập nhật</button>
                            </form>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <div class="box">

            <div class="box-header">
                <h3 class="box-title"><b>Danh sách đơn đặt hàng {{$id}}</b></h3>
            </div>

            <!-- /.box-header -->
            <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>Tên sản phẩm</th>
                        <th>Hóa đơn ID</th>
                        <th>Thành tiền</th>
                        <th>Số lượng</th>
                        <th>Giá</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($cthds as $ct)
                        <tr>
                            <td>{{\App\SanPham::where('id',$ct->idSP)->first()->tensp}}</td>
                            <td>{{$ct->idDonHang}}</td>
                            <td>{{$ct->thanhtien}}</td>
                            <td>{{$ct->soLuong}}</td>
                            <td>{{$ct->donGia}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                    <tfoot>
                    <tr>
                        <th>Tên sản phẩm</th>
                        <th>Hóa đơn ID</th>
                        <th>Thành tiền</th>
                        <th>Số lượng</th>
                        <th>Giá</th>
                    </tr>
                    </tfoot>
                </table>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </section>
@endsection

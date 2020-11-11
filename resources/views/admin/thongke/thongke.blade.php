@extends('admin.khoi.master')
@section('noidung')
    <section class="content">
        <h1><b>Thống kê sản phẩm</b></h1>
        {{--<b><h4 style="text-align: center" class="text-success" id="tb">{{session('tb')}}</h4></b>--}}
        <div class="form-group">
            <form action="{{url('admin/thong-ke')}}" method="post">
                {{csrf_field()}}
                <select name="month" is="thang" class="form-control inline" style="width: 150px; text-align: center">
                    <option value="">
                        Chọn tháng
                    </option>

                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                </select>
                <input type="text" name="year" placeholder="Nhập năm">
                    <button type="submit" class="btn btn-primary">Thống kê</button>
                {{--<label for=""></label>--}}
            </form>
        </div>

        @if (isset($products))
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Thống kê sản phẩm bán được vào tháng <b>{{$current_date}}</b></h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>Hình ảnh</th>
                                <th>Sản phẩm</th>
                                <th>Số lượng</th>
                                <th>Tổng Tiền</th>
                            </tr>
                            </thead>

                            <tbody>

                            @foreach($products as $prod)
                            <tr>
                                <td width="100"><img src="{{url($prod->anh)}}" class="img img-responsive"
                                                     style="width: 50px; height: 50px" alt=""></td>
                                <td>{{$prod->tensp}}</td>
                                <td>{{$prod->TotalQuantity}}</td>
                                <td>{{number_format($prod->TotalQuantity * $prod->gia)}}</td>

                            </tr>
                            @endforeach

                            </tbody>

                            <tfoot>
                            <tr>
                                <th>Hình ảnh</th>
                                <th>Tháng</th>
                                <th>Số lượng</th>
                                <th>Tổng tiền</th>
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
        @endif
    </section>
@endsection


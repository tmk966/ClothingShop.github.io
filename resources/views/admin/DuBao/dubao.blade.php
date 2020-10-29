@extends('admin.khoi.master')
@section('noidung')
    <section class="content">
        <h1><b>Dự báo sản phẩm sẽ bán được trong tháng kế tiếp (Tháng: {{date('m/Y', strtotime('+1 month'))}})</b></h1>
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Danh Sách Sản Phẩm</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>Hình ảnh</th>
                                <th>Sản phẩm</th>
                                <th>Số lượng bán được dự tính</th>
                                <th>Tổng tiền thu được dự tính</th>
                            </tr>
                            </thead>

                            <tbody>

                            {{--@foreach($products as $prod)--}}
                                {{--<tr>--}}
                                    {{--<td width="100"><img src="{{url($prod->anh)}}" class="img img-responsive"--}}
                                                         {{--style="width: 100%" alt=""></td>--}}
                                    {{--<td>{{$prod->tensp}}</td>--}}
                                    {{--<td>{{$prod->avgBuy}}</td>--}}
                                    {{--<td>{{number_format($prod->avgBuy * $prod->gia)}}</td>--}}

                                {{--</tr>--}}
                            {{--@endforeach--}}

                            @foreach($products as $prod)
                                <tr>
                                    <td width="100"><img src="{{url($prod->anh)}}" class="img img-responsive"
                                    style="width: 100%" alt=""></td>
                                    <td>{{$prod->tensp}}</td>
                                    <td>
                                        Sản phẩm có thể bán ra trong tháng tới: {{$prod->KetQua}} <br>
                                        Tổng bán dc tháng này: {{$prod->ThangNay}} <br>
                                        Tổng bán dc tháng trước: {{$prod->ThangTruoc}} <br>
                                    </td>
                                    <td>Tổng tiền sản phẩm có thể bán được trong tháng tới: {{number_format($prod->KetQua * $prod->gia)}} đ</td>
                                </tr>
                            @endforeach

                            </tbody>


                            <tfoot>
                            <tr>
                                <th>Hình ảnh</th>
                                <th>Sản phẩm</th>
                                <th>Số lượng bán được dự tính</th>
                                <th>Tổng tiền thu được dự tính</th>
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


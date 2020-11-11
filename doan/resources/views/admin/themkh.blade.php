@extends('admin.khoi.master')
@section('noidung')
    <section class="container">
        <h1><b>Thêm khách hàng</b></h1>
        @if(session('tb'))
            <h4></h4>
        <?php
                session()->forget('tb');
                ?>
        @endif
        <h4 style="text-align: center" class="text-success" id="tb"></h4>
        <div class="col-md-6">
            <form action="{{url('admin/them-kh')}}" method="post" enctype="multipart/form-data"
                  style="margin-bottom: 20px">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="email">Tên khách hàng:</label>
                    <input required type="text" name="tkh" class="form-control" id="tkh">
                </div>
                <div class="form-group">
                    <label for="pwd">Email: <h6 class="text-danger" style="text-align: center" id="tbl"></h6></label>

                    <input required type="email" name="email" class="form-control" id="email1">
                </div>
                <div class="form-group">
                    <label for="pwd">Mật khẩu:</label>
                    <input required type="password" name="mk" class="form-control" id="mk">
                </div>
                <div class="form-group">
                    <label for="pwd">Số điện thoại:</label>
                    <input required type="text" name="sdt" class="form-control" id="sdt">
                </div>
                <div class="form-group">
                    <label for="pwd">Địa chỉ:</label>
                    <input required type="text" name="dc" class="form-control" id="dc">
                </div>

                <button  class="btn btn-success">Đồng ý</button>
                <button type="reset" class="btn btn-danger">Hủy</button>
            </form>
        </div>
    </section>
@endsection
{{--@section('script')--}}
{{--<script>--}}
{{--$('#btnDY').click(function () {--}}
{{--$.ajax({--}}
{{--data: {--}}
{{--tkh: $('#tkh').val(),--}}
{{--email: $('#email1').val(),--}}
{{--mk: $('#mk').val(),--}}
{{--sdt: $('#sdt').val(),--}}
{{--dc: $('#dc').val(),--}}
{{--_token: $('input[name=_token]').val(),--}}
{{--},--}}
{{--url: '{{url('admin/them-kh')}}',--}}
{{--type: 'post',--}}
{{--dataType: 'text',--}}
{{--success: function (kq) {--}}

{{--if ($('#tbl').html() == 'Email đã tồn tại') {  //khac rong co nghia la da co gia tri thi--}}
{{--$('#tbl').html(''); //gan cho no bang rong - no se mat di--}}
{{--}--}}

{{--if (kq == 'Thêm Email thành công') {--}}
{{--$('#tb').html(kq);--}}
{{--}--}}

{{--else {--}}
{{--if ($('#tb').html() != '') {--}}
{{--$('#tb').html('');--}}
{{--}--}}
{{--$('#tbl').html(kq);--}}
{{--}--}}
{{--}--}}
{{--})--}}
{{--})--}}
{{--</script>--}}
{{--@endsection--}}
@extends('admin.khoi.master')
@section('noidung')
    <section class="content-header">
        <h1>Quản lý loại sản phẩm</h1>
        <h4 class="text-danger" style="text-align: center" id="tb"></h4>
    </section>
    <section class="content">
        <form action="{{url('admin/sua-lsp',$sp->id)}}" method="post">
            {{csrf_field()}}
            <div class="form-group" style="text-align: left">
                <label for="email">Tên loại sản phẩm</label>
                <input required type="text" class="form-control" id="slsp" placeholder="Nhập tên loại sản phẩm"
                       name="slsp" value="{{$sp->tenloai}}">
            </div>
            <div class="form-group"  style="text-align: left" >
                <label for="pwd">Giới tính</label>
                <select name="sgt" required class="form-control">
                    <option value="">-- Chọn giới tính --</option>
                    <option value="Nam">Nam</option>
                    <option value="Nữ">Nữ</option>
                </select>
            </div>
            <button class="btn btn-primary">Đồng ý</button>
        </form>
    </section>

@endsection
{{--@section('script')--}}
{{--<script>--}}
{{--$('#btnS').click(function () {--}}
{{--$.ajax({--}}
{{--data: {--}}
{{--tlsp: $('#slsp').val(),--}}
{{--_token: $('input[name=_token]').val(),--}}
{{--},--}}
{{--url: '{{url('admin/sua-lsp', $lsp->id)}}',--}}
{{--type: 'post',--}}
{{--dataType: 'text',--}}
{{--success: function (kq) {--}}
{{--if(kq == 'Sửa tên loại sản phẩm thành công'){--}}
{{--$('#tb').text(kq);--}}
{{--}--}}
{{--else {--}}
{{--$('#tb').text(kq);--}}
{{--}--}}
{{--}--}}
{{--})--}}
{{--})--}}
{{--</script>--}}
{{--@endsection--}}
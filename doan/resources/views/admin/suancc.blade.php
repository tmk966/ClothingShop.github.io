@extends('admin.khoi.master')
@section('noidung')
    <section class="content-header">
        <h1>Quản lý thương hiệu</h1>
        <h4 class="text-danger" style="text-align: center" id="tb"></h4>
    </section>
    <section class="content">
        <form action="{{url('admin/sua-ncc',$ncc->id)}}" method="post">
            {{csrf_field()}}
            <div class="form-group" style="text-align: left">
                <label for="email">Tên thương hiệu</label>
                <input required type="text" class="form-control" id="sncc" placeholder="Nhập tên nhà cung cấp"
                       name="sncc" value="{{$ncc->tenncc}}">
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
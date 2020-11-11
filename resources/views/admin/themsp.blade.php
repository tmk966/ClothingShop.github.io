@extends('admin.khoi.master')
@section('noidung')
    <section class="container">
        <h1><b>Thêm sản phẩm</b></h1>

        <b><h4 class="text-success" style="text-align: center" id="tb"></h4></b>

        <h4></h4>
        <div class="col-md-6">
            <form action="{{url('admin/them-sp')}}" method="post" style="margin-bottom: 20px"
                  enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="email">Tên sản phẩm:</label>
                    <input required type="text" name="t_sp" class="form-control" id="123456789">
                </div>
                <div class="form-group">
                    <label for="pwd">ID loại sản phẩm:</label><br>
                    <select name="idl" id="12345678" required class="form-control">
                        <option value=""> --Chọn loại sản phẩm--</option>
                        <?php
                        $lsp = \App\Loai::all();
                        ?>
                        @foreach($lsp as $sp)
                            <option value="{{$sp->id}}">{{$sp->tenloai}}</option>
                        @endforeach
                    </select>
                </div>



                <div class="form-group">
                    <label for="pwd">Nhà cung cấp:</label><br>
                    <select name="idnha" required class="form-control">
                        <option value=""> --Chọn loại sản phẩm--</option>
                        <?php
                        $ncc = \App\NhaCungCap::all();
                        ?>
                        @foreach($ncc as $nha)
                            <option value="{{$nha->id}}">{{$nha->tenncc}} </option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="pwd">Số lượng:</label>
                    <input required type="number" name="sl" class="form-control" min="1">
                </div>
                <div class="form-group">
                    <label for="pwd">Size:</label>
                    <input required type="text" name="size" class="form-control" min="1">
                </div>
                <div class="form-group">
                    <label for="pwd">Giá:</label>
                    <input required type="text" name="gia" class="form-control" id="123456">
                </div>

                <div class="form-group">
                    <label for="pwd">Ảnh sản phẩm:</label>
                    <input required type="file" name="anh" class="form-control" id="1234">

                </div>
                <div class="form-group">
                    <label for="pwd">Mô tả:</label>
                    <textarea required name="mt" id="" cols="30" rows="10" class="form-control"></textarea>

                </div>


                <button class="btn btn-success">Đồng ý</button>
                <button type="reset" class="btn btn-danger">Hủy</button>
            </form>
        </div>
    </section>
@endsection
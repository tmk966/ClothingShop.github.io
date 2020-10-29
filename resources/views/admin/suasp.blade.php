@extends('admin.khoi.master')
@section('noidung')
    <section class="content-header">
        <h1><b>Quản lý sản phẩm</b></h1>
    </section>
    <section class="content">
        <form action="{{url('admin/sua-sp',$sp->id)}}" method="post" enctype="multipart/form-data">
           {{csrf_field()}}
            <div class="form-group">
                <label for="email">Tên sản phẩm:</label>
                <input required type="text" name="tsp" class="form-control"  placeholder="Nhập tên sản phẩm"
                value="{{$sp->tensp}}">
            </div>
            <div class="form-group">
                <label for="pwd">ID loại sản phẩm:</label>
                <select name="idl"  required class="form-control">

                    <?php
                       $lx = App\Loai::all();
                    ?>
                    @foreach($lx as $ssp)
                            <option value="{{$ssp->id}}"
                            <?php
                                if($ssp->id == $sp->idSP){
                                    echo "selected";
                                }
                            ?>
                            >{{$ssp->tenloai}}</option>
                        @endforeach
                </select>

            </div>



            <div class="form-group">
                <label for="pwd">Nhà cung cấp:</label><br>
                <select name="idnha" required class="form-control">
                    <option value="{{$sp->idncc}}"> --Chọn nhà cung cấp--</option>
                    <?php
                    $ncc = \App\NhaCungCap::all();
                    ?>
                    @foreach($ncc as $nha)
                        <option value="{{$nha->id}}">{{$nha->tenncc}} </option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="pwd">Size:</label>
                <input required type="text" name="size" class="form-control"  placeholder="Nhập size"
                       value="{{$sp->size}}">
            </div>
            <div class="form-group">
                <label for="pwd">Số lượng:</label>
                <input required type="number" name="sl" class="form-control"  placeholder="Nhập số lượng sản phẩm"
                value="{{$sp->soluong}}">
            </div>
            <div class="form-group">
                <label for="pwd">Giá:</label>
                <input required type="text" name="gia" class="form-control"  placeholder="Nhập giá sản phẩm"
                value="{{$sp->gia}}">
            </div>

            <div class="form-group">
                <label for="pwd">Ảnh sản phẩm:</label>
                <img src="{{url($sp->anh)}}" style="width: 50px;" alt="">
                <input type="file" name="asp" class="form-control"  placeholder="Nhập ảnh sản phẩm">
            </div>
            <div class="form-group">
                <label for="pwd" style="">Mô tả:</label>
                <input required type="text" name="mt" class="form-control" id="123" placeholder="Nhập mô tả của sản phẩm"
                value="{{$sp->mota}}">
            </div>
            <button  class="btn btn-primary">Đồng ý</button>
        </form>
    </section>
@endsection
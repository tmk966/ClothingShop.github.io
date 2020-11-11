<?php

namespace App\Http\Controllers;

use App\ChiTietDonHang;
use App\DonHang;
use App\Loai;
use App\NhaCungCap;
use App\SanPham;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function trangchu()
    {

        return view('admin.trangchu');
    }

    public function loaisp()
    {
        $lsp = Loai::all();
        return view('admin.loaisp', compact('lsp'));
    }

    public function ptlsp(Request $request)
    {
        $lsp = Loai::where('tenloai', $request->lsp)->first();
        if ($lsp != NULL) {
            return 'Loại sản phẩm đã tồn tại đã tồn tại';
        } else {
            $lsp = new Loai();
            $lsp->tenloai = $request->lsp;
            $lsp->gioitinh = $request->gt;
            $lsp->save();
            session()->put('tb', 'Thêm loại sản phẩm thành công');
            return redirect('admin/loai-san-pham');
        }

    }


    public function sualoaisp($id)
    {
        $sp = Loai::where('id', $id)->first();
        return view('admin.sualsp', compact('sp'));
    }

    public function pslsp(Request $request, $id)
    {
        $sp = Loai::where('id', $id)->first();
        $sp->tenloai = $request->slsp;
        $sp->gioitinh = $request->sgt;
        $sp->save();
        return redirect('admin/loai-san-pham')->with('tb', 'Sửa thành công');
    }


    public function pxlsp($id)
    {
        Loai::where('id', $id)->delete();
        return redirect('admin/loai-san-pham')->with('tb', "Xóa thành công");
    }

    public function nhacc()
    {
        $ncc = NhaCungCap::all();
        return view('admin.nhacungcap', compact('ncc'));
    }

    public function ptncc(Request $request)
    {
        $ncc = NhaCungCap::where('tenncc', $request->ncc)->first();
        if ($ncc !=  NULL) {
            return 'Nhà cung cấp đã tồn tại';
        } else {
            $ncc = new NhaCungCap();
            $ncc->tenncc = $request->ncc;
            $ncc->save();
            session()->put('tb', 'Thêm nhà cung cáp thành công');
            return redirect('admin/nha-cung-cap')->with('tb', 'Thêm thành công');
        }

    }

    public function suancc($id)
    {
        $ncc = NhaCungCap::where('id', $id)->first();
        return view('admin.suancc', compact('ncc'));
    }

    public function psncc(Request $request, $id)
    {
        $ncc = NhaCungCap::where('id', $id)->first();
        $ncc->tenncc = $request->sncc;
        $ncc->save();
        return redirect('admin/nha-cung-cap')->with('tb', 'Sửa thành công');
    }

    public function pxncc($id)
    {
        NhaCungCap::where('id', $id)->delete();
        return redirect('admin/nha-cung-cap')->with('tb', 'Xóa thành công');
    }

    public function spham()
    {
        $sps = SanPham::all();
        return view('admin.sanpham', compact('sps'));
    }


    public function themsp()
    {
        return view('admin.themsp');
    }

    public function ptsp(Request $request)
    {

        $sp = new SanPham();
        $sp->tensp = $request->t_sp;
        $sp->idloai = $request->idl;
        $sp->idncc = $request->idnha;
        $sp->soluong = $request->sl;
        $sp->size = $request->size;
        $sp->gia = $request->gia;

        $name1 = str_slug(Loai::where('id', $request->idl)->first()->tenloai);

        $image = $request->file('anh');
        $name = time() . '.' . $image->getClientOriginalExtension();
        $destinationPath = 'image/' . $name1;
        $image->move($destinationPath, $name);
        $sp->anh = $destinationPath . '/' . $name;
        $sp->mota = $request->mt;
        $sp->save();

        return redirect('admin/san-pham')->with('tb', 'Thêm sản phẩm thành công');
    }

    public function suasp($id)
    {
        $sp = SanPham::where('id', $id)->first();
        return view('admin.suasp', compact('sp'));
    }

    public function pssp(Request $request, $id)
    {
//        dd($request);
        $sp = SanPham::where('id', $id)->first();
        $sp->tensp = $request->tsp;
        $sp->idloai = $request->idl;
        $sp->idncc = $request->idnha;
        $sp->size = $request->size;
        $sp->soluong = $request->sl;
        $sp->gia = $request->gia;

        $name1 = str_slug(Loai::where('id', $request->idl)->first()->tenloai);
        if($request->file('asp')){
            $image = $request->file('asp');
            $name = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = 'image/' . $name1;
            $image->move($destinationPath, $name);
            $sp->anh = $destinationPath . '/' . $name;
//            $sp->anh = $request->asp;
        }


        $sp->mota = $request->mt;
        $sp->save();
        return redirect('admin/san-pham')->with('tb', 'Sửa thành công');
    }

    public function pxsp($id)
    {
        SanPham::where('id', $id)->delete();
        return redirect('admin/san-pham')->with('tb', 'Xóa thàng công');
    }

    public function kh()
    {
        return view('admin.khachhang');
    }

    public function ptkhs(Request $request){

        $kh = new User();
        $kh->name = $request->tkh;
        $kh->email = $request->email;
        $kh-> password= $request->mk;
        $kh-> sodt= $request->sdt;
        $kh->diachi = $request->dc;
        $kh->save();
        session()->put('tb', 'Thêm khách hàng thành công');
        return redirect('admin/khach-hang')->with('tb', 'Them thanh cong');
    }

    public function pxkh($id)
    {
        User::where('id', $id)->delete();
        return redirect('admin/khach-hang')->with('tb', 'Xóa thành công');
    }

    public function themkh()
    {
        return view('admin.themkh');
    }

//    public function ptkh(){
//        $kh =
//    }

    public function suakh($id)
    {
        $kh = User::where('id',$id)->first();
        return view('admin.suakh',compact('kh'));
    }

    public function pskh(Request $request ,$id)
    {
        $kh = User::where('id',$id)->first();
        $kh->name = $request->tkh;
        $kh->password = $request->mk;
        $kh->email = $request->email;
        $kh->sodt = $request->sdt;
        $kh->diachi = $request->dc;
        $kh->save();
        return redirect('admin/khach-hang')->with('tb','Sửa thàng công');

    }

    public function dh()
    {
 //       $dhs = DonHang::all();

        $mds = DonHang::where('tinhtrang','Mới đặt')->get();
        $dgs = DonHang::where('tinhtrang','Đang giao')->get();
        $hts = DonHang::where('tinhtrang','Hoàn thành')->get();
        $huys = DonHang::where('tinhtrang','Hủy bỏ')->get();
        return view('admin.donhang', compact('mds','dgs','hts','huys'));
    }

    public function chitiethd($id){
        $cthds = ChiTietDonHang::where('idDonHang',$id)->get();
        return view('admin.chitiethd', compact('cthds','id'));
    }

    public function pcapnhat(Request $request, $id){
        $hd = DonHang::where('id',$id)->first();

        $hd->tinhTrang = $request->trangthai;
        $hd->save();
        return redirect()->back();
    }

    public  function dangnhap(){
        return view('admin.dangnhap');
    }

    public  function pdangnhap(Request $request){
        if (Auth::guard('admin')->attempt(['email' => $request->tendangnhap, 'password' => $request->matkhau])) {
            return redirect('admin/trang-chu')->with('tb', 'Đăng nhập thành công');
        } else {
            return redirect()->back()->with('tb', 'Email hoặc mật khẩu sai');
        }
    }
    public  function dangxuat(){
        Auth::guard('admin')->logout();
        return redirect('admin/dangnhap');
    }

}

<?php

namespace App\Http\Controllers;

use App\ChiTietDonHang;
use App\DonHang;
use App\Loai;
use App\SanPham;
use App\User;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use DB;

class TrangChuController extends Controller
{
    public function trangchu()
    {

        $sp = SanPham::orderBy('created_at', 'desc')->take(4)->get(); // san pham moi

        $qs = SanPham::where('idLoai', 1)->get();
        $asm = SanPham::where('idloai', 2)->get();
        $quandai = SanPham::where('idloai', 3)->get();
        $aothun = SanPham::where('idloai', 4)->get();
        $dam = SanPham::where('idloai', 5)->get();
        $quanjean = SanPham::where('idloai', 6)->get();
        $aothunnu = SanPham::where('idloai', 7)->get();
        $asmnu = SanPham::where('idloai', 8)->get();

//        $cts = SanPham::where('id', $id)->first();

        return view('trangchu',
            compact('asm', 'qs', 'sp', 'quandai', 'aothun', 'dam', 'quanjean', 'aothunnu', 'asmnu'));
    }

    public function pdonu($id)
    {
        $dns = SanPham::where('idloai', $id)->get();
        $lsp = Loai::where('id', $id)->first();
        return view('women', compact('dns', 'lsp'));
    }

    public function pdonam($id)
    {
        $dns = SanPham::where('idloai', $id)->get();
        $lsp = Loai::where('id', $id)->first();
        return view('men', compact('dns', 'lsp'));
    }

    public function timkiem(Request $request)
    {
        $tk = $request->tk;
//        $tks = SanPham::where('tensp', 'like', '%' . $tk . '%');
//        $tks->withPath('tim-kiem?tk=' . $tk);
        $kqs = SanPham::where('tensp', 'like', '%' . $tk . '%')->get();
        return view('search', compact('tk', 'kqs'));
    }

    public function tk()
    {
        return view('account');
    }

    public function dk()
    {
        return view('register');
    }

    public function pdk(Request $request)
    {
        $user = User::where('email', $request->email)->first();
        if ($user != Null) {
            return redirect()->back()->with('tb','Email đã tồn tại');
        } else {
            $dk = new User();
            $dk->name = $request->name;
            $dk->email = $request->email;
            $dk->password = Hash::make($request->password);
            $dk->diachi = $request->diachi;
            $dk->sodt = $request->sdt;
            $dk->save();
            return redirect()->back()->with('tb','Đăng ký thành công');
        }
    }

    public function dangxuat()
    {
        Auth::logout();
        return redirect()->back();
    }

    public function ptk(Request $request)
    {

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            echo 'Đăng nhập thành công';
        } else {
            echo 'Email hoặc mật khẩu sai';
        }
    }

    public function gh()
    {
        $ghs = Cart::content();
        return view('giohang', compact('ghs'));
    }

    public function getupdate($sl, $id, $rowid)
    {
        Cart::update($rowid, $sl);
        $dongia = SanPham::find($id)->gia * $sl;
        echo "<span class='subtotal'>" . number_format($dongia) . "</span>" . " đ";

    }

    public function ctiet($id, Request $request)
    {

        //$sp_tuongtu = Product::where('id_type', $sanpham->id_type)->paginate(3);
        $sp = SanPham::where('id', $id)->first();
        $sp_tuongtu = SanPham::where('idloai', $sp->idloai)->paginate(4);
        $ctiet = SanPham::where('id', $id)->first();

        return view('chitiet', compact('ctiet', 'sp_tuongtu', 'sp'));
    }

    public function pmuahang($id, Request $request)
    {

        $sp = SanPham::where('id', $id)->first(); // lấy 1 sản phẩm có $id = id


        $soluong = $request->soluong; // lấy giá trị số lượng sản phẩm khách hàng đặt gán vào biến $soluong
        $gia = $sp->gia; // lấy giá sản phẩm gán vào biến $gia
        $tensp = $sp->tensp; // lấy tên sản phẩm gán vào biến $tensp
        $size = $sp->size;
        $img = $sp->anh; // lấy ảnh sản phẩm gán vào biến $img
        Cart::add(['id' => $sp->id, 'name' => $tensp, 'qty' => $soluong, 'price' => $gia,
            'options' => ['size' => $size, 'img' => $img]]); // thêm vào giỏ hàng, có 4 phần và có thể thêm thành phần khác từ options
        return redirect()->back()->with('tb', 'Đã thêm vào giỏ hàng');// trở lại trang vừa rồi và thông báo
    }

    public function xspgh($rowid)
    {
        Cart::remove($rowid);
        // xóa 1 sản phẩm trong giỏ hàng dựa theo rowId
        return redirect()->back();//trở về trang vừa rồi
    }

    public function dathang()
    {
        $hd = new DonHang();
        $hd->iduser = Auth::user()->id;
        $hd->tongtien = Cart::subtotal();
        $hd->tinhTrang = 'Mới đặt';
        $hd->save();

        $tcspgh = Cart::content();

        foreach ($tcspgh as $item) {
            $cthd = new ChiTietDonHang();
            $cthd->idSP = $item->id;
            $cthd->idDonHang = $hd->id;
            $cthd->soluong = $item->qty;
            $cthd->donGia = $item->price;
            $cthd->thanhtien = $item->qty * $item->price;
            $cthd->save();
        }
        Cart::destroy();
        return redirect('/')->with('tb', 'Đặt hàng thành công');
    }

    public function pupdatesp(Request $request)
    {
        Cart::update($request->rowId, $request->sl);
        return $request;
    }

    public function csdoitra()
    {
        return view('chinhsachdoitra');
    }

    public function edit($id)
    {
        $user = User::where('id', $id)->first();
        return view('edituser', compact('user'));
    }

    public function getedit($id)
    {
        $user = User::find($id);
        return view('postedit', compact('user'));
    }

    public function postedit($id, Request $request)
    {
        $user = User::find($id);
        $user->name = $request->name;
        $user->sodt = $request->sdt;
        $user->diachi = $request->diachi;
        $user->save();
        return redirect('thong-tin-tai-khoan/'.$id)->with('tb', 'Sửa thàng công');
    }

    public function getlichsu($id){

        $donhang = DonHang::where('iduser',$id)->get();

//        dd($donhang);
        $chitietdonhang = array();
        foreach($donhang as $item){
            $chitietdonhang[] = ChiTietDonHang::where('idDonHang',$item->id)->get();
//            dd($chitietdonhang);
        }
//        dd($chitietdonhang);
//        $results = DB::select('SELECT * FROM don_hangs as dh where dh.iduser = ? ', [$id]);
//        $sp = array();
//        foreach ($results as $key => $value) {
//            $sp[$key] = DB::select('SELECT sp.*,dh.* FROM san_phams as sp
//,don_hangs as dh where sp.id = ( SELECT ctdh.idSP FROM chi_tiet_don_hangs as ctdh where ctdh.idDonHang = ?) ', [$value->id]);
//        }

        return view('lichsu',compact('donhang','chitietdonhang'));
    }
}

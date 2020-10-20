<?php

namespace App\Http\Controllers;

use App\ChiTietDonHang;
use App\Loai;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ThongKeController extends Controller
{
    public function thongke(){

        return view('admin.thongke.thongke');

    }


    public function postthongke(Request $request){
        $month = $request->post("month");
//        $year = date("Y");
        $year = $request->post("year");
        // query to get all order of item in this month
        $result = DB::table("chi_tiet_don_hangs")
                        ->join("san_phams", "san_phams.id", "=", "chi_tiet_don_hangs.idSp")
                        ->whereMonth("chi_tiet_don_hangs.created_at", $month)
                        ->whereYear("chi_tiet_don_hangs.created_at", $year)
                        ->selectRaw("SUM(chi_tiet_don_hangs.soLuong) as TotalQuantity, san_phams.id, san_phams.tensp, san_phams.gia, san_phams.anh")
                        ->groupBy("san_phams.id")
                        ->get();

        return view('admin.thongke.thongke', [
            'products' => $result,
            'current_date' => $month."/".$year,
        ]);
    }

    public function hangtonkho(){
        $categories = Loai::all();

        return view('admin.thongke.hangtonkho', ['categories' => $categories]);
    }
}

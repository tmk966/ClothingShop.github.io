<?php
/**
 * Created by PhpStorm.
 * User: Seth Phat
 * Date: 11/9/2018
 * Time: 8:07 PM
 */

namespace App\Http\Controllers;


use App\ChiTietDonHang;
use App\SanPham;
use Illuminate\Support\Facades\DB;

class DuBaoController extends Controller
{
    // he so, tang giam trong khoang 0 < a < 1, dat alpha = 0.2
    const BASE_NUM = 0.2;

    // du bao - dung cong thuc san bang mu so don
    function index() {
        $now = now();
        $now->month = 5; // ban co the sua cai nay de hard code, test du lieu

        // clone ra object moi tranh bi ref
        $last_month = clone $now;
        $last_month->subMonth(); // tru 1 thang

        // ok query now - lay toan bo sp ra va tinh
        $products = SanPham::all();
        foreach ($products as $prod) {
            $tong_thang_nay = $this->total_order_month($prod->id, $now->month, $now->year);
            $tong_thang_truoc = $this->total_order_month($prod->id, $last_month->month, $last_month->year);

            // tinh theo cong thuc san bang mu don
            $prod->KetQua = ceil(self::BASE_NUM * $tong_thang_nay + (1-self::BASE_NUM) * $tong_thang_truoc); // lam tron len 1 chu so

            // set kq thang nay + thang truoc
            $prod->ThangNay = $tong_thang_nay;
            $prod->ThangTruoc = $tong_thang_truoc;
        }

        return view('admin.DuBao.dubao', [
            'products' => $products,
        ]);
    }

    private function total_order_month($idsp, $month, $year) {
		// tinh tong cua san pham trong thang
        $result = DB::table("chi_tiet_don_hangs")
                        ->where("idSP", $idsp)
                        ->whereMonth('created_at', $month)
                        ->whereYear('created_at', $year)
                        ->selectRaw("SUM(chi_tiet_don_hangs.soLuong) as TotalQuantity")
                        ->get();

		// tra ve 0 neu ko co du lieu
         return $result[0]->TotalQuantity ?? 0;
    }

//    function index() {
//        $now = now();
////        $now->month = 5;
//
//        // query this month
//        $result = DB::table("chi_tiet_don_hangs")
//            ->join("san_phams", "san_phams.id", "=", "chi_tiet_don_hangs.idSp")
//            ->whereMonth("chi_tiet_don_hangs.created_at", $now->month)
//            ->whereYear("chi_tiet_don_hangs.created_at", $now->year)
//            ->selectRaw("SUM(chi_tiet_don_hangs.soLuong) as TotalQuantity, san_phams.id, san_phams.tensp, san_phams.gia, san_phams.anh")
//            ->groupBy("san_phams.id")
//            ->orderBy('san_phams.id', 'DESC')
//            ->get();
//
//        foreach ($result as $index => $item) {
//            $total_orders = ChiTietDonHang::where('idSP', $item->id)
//                                ->whereMonth("created_at", $now->month)
//                                ->whereYear("created_at", $now->year)
//                                ->count();
//
//            $item->avgBuy = ceil($item->TotalQuantity / $total_orders);
//        }
//
//        return view('admin.DuBao.dubao', [
//            'products' => $result,
//        ]);
//    }
}
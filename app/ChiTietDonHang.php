<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ChiTietDonHang extends Model
{
    protected $table = 'chi_tiet_don_hangs';
    protected $fillable = [
      'soLuong','donGia', 'idDonHang','idSP','thanhtien'
    ];

    public function donhang(){
        return $this->belongsTo('App\DonHang','idDonHang');
    }

    public function sanpham(){
        return $this->belongsTo('App\SanPham','idSP');
    }


}

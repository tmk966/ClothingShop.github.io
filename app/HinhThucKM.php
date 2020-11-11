<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HinhThucKM extends Model
{
    protected $table = 'hinh_thuc_k_ms';
    protected $fillable = [
      'hThuc', 'idKM', 'idSP'
    ];

    public function khuyenmai(){
        return $this->belongsTo('App\KhuyenMai','idKM');
    }

    public function sanpham(){
        return $this->belongsTo('App\SanPham','idSP');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DoiTra extends Model
{
    protected $table = 'doi_tras';
    protected $fillable = [
        'idDonHang', 'idSP'
    ];

    public function donhang(){
        return $this->belongsTo('App\DonHang','idDonHang');
    }

    public function sanpham(){
        return $this->belongsTo('App\SanPham','idSP');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SanPham extends Model
{
    protected $table = 'san_phams';
    protected $fillable = [
        'tensp','soluong','idloai','idncc','anh','mota'
    ];

    public function loai(){
        return $this->belongsTo('App\Loai','idloai');
    }
    public function nhacungcap(){
        return $this->belongsTo('App\NhaCungCap','idncc');
    }
}

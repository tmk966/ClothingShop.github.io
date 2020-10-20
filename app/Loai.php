<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Loai extends Model
{
    protected $table = 'loais';
    protected $fillable = [
        'tenloai','gioitinh'
    ];

    public function sanpham(){
        return $this->hasMany('App\SanPham', 'idloai', 'id');
    }
}

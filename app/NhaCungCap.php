<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NhaCungCap extends Model
{
    protected $table = 'nha_cung_caps';
    protected $fillable = [
        'tenncc'
        ];

    public function SanPham(){
        return $this->hasMany('App\SanPham');
    }
}

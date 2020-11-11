<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DonHang extends Model
{
    protected $table = 'don_hangs';
    protected $fillable = [
        'ngaylap', 'tinhTrang', 'iduser'
    ];

    public function user()
    {
        return $this->belongsTo('App\User','iduser');
    }
}

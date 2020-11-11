<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KhuyenMai extends Model
{
    protected $table = 'khuyen_mais';
    protected $fillable = [
        'tenkm','ngaybd','ngaykt'
    ];
}

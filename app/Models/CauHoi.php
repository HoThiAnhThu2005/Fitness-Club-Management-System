<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CauHoi extends Model
{
    protected $table = 'cau_hois';
    protected $fillable =[
        'tieu_de',
        'mo_ta',
        'loai_trang',
        'tinh_trang',
    ];
}

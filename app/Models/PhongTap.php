<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PhongTap extends Model
{
    protected $table = 'phong_taps';
    protected $fillable = [
        'ten_phong',
        'loai_phong',
        'is_active',
        'tinh_trang'
    ];
}

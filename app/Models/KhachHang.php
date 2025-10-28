<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KhachHang extends Model
{
    protected $table = 'khach_hangs';
    protected $fillable = [
        'ho_va_ten',
        'email',
        'cccd',
        'so_dien_thoai',
        'password',
        'ngay_sinh',
        'hash_reset',
        'hash_active',
        'is_active',
        'is_block',
    ];
}

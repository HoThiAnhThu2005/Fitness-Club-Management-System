<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HuanLuyenVien extends Model
{
    protected $table = 'huan_luyen_viens';
    protected $fillable=[
        'email',
        'ho_va_ten',
        'slug',
        'password',
        'hinh_anh',
        'mo_ta_ngan',
        'gioi_thieu_chi_tiet',
        'kinh_nghiem',
        'thanh_tich',
        'chuyen_mon',
        'triet_ly',
        'so_dien_thoai',
        'tinh_trang',
        'is_master',
    ];
}

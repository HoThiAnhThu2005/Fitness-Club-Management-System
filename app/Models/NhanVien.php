<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class NhanVien extends Model
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $table = 'nhan_viens';
    protected $fillable = ['ho_va_ten','email',  'password',
    'so_dien_thoai',  'ngay_sinh',
    'tinh_trang', 'id_chuc_vu', 'is_master'
    ];
}

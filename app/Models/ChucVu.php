<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class ChucVu extends Model
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $table = 'chuc_vus';
    protected $fillable = ['ten_chuc_vu', 'slug_chuc_vu', 'tinh_trang'];
}

<?php

namespace Database\Seeders;

use App\Models\KhachHang;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void{
        $this->call([
            BaiVietSeeder::class,
            CauHoiSeeder::class,
            HuanLuyenVienSeeder::class,
            ChucVuSeeder::class,
            ChucNangSeeder::class,
            NhanVienSeeder::class,
            KhachHangSeeder::class,
            PhongTapSeeder::class,
        ]);
    }
}

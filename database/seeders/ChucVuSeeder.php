<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ChucVuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $chucVu = [
            [
                'id'           => 1,
                'ten_chuc_vu'  => 'Admin',
                'slug_chuc_vu' => 'admin',
                'tinh_trang'   => 1
            ],
            [
                'id'           => 2,
                'ten_chuc_vu'  => 'Nhân viên kỹ thuật',
                'slug_chuc_vu' => 'nhan-vien-ky-thuat',
                'tinh_trang'   => 1
            ],
            [
                'id'           => 3,
                'ten_chuc_vu'  => 'PT',
                'slug_chuc_vu' => 'pt',
                'tinh_trang'   => 1
            ],
            [
                'id'           => 4,
                'ten_chuc_vu'  => 'Lễ Tân',
                'slug_chuc_vu' => 'le-tan',
                'tinh_trang'   => 1
            ],
        ];
        DB::table('chuc_vus')->truncate();
        DB::table('chuc_vus')->insert($chucVu);
    }
}

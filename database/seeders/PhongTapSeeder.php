<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PhongTapSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $phongTap = [
            [
                'ten_phong' => 'Phòng 1',
                'loai_phong' => 'Aerial Yoga',
                'is_active' => 1,
                'tinh_trang' => 1,
            ],
            [
                'ten_phong' => 'Phòng 2',
                'loai_phong' => 'Iyenaga Yoga',
                'is_active' => 1,
                'tinh_trang' => 1,
            ],
            [
                'ten_phong' => 'Phòng 3',
                'loai_phong' => 'Dynamic Yoga',
                'is_active' => 1,
                'tinh_trang' => 1,
            ],
            [
                'ten_phong' => 'Phòng 4',
                'loai_phong' => 'Vinyasa',
                'is_active' => 1,
                'tinh_trang' => 1,
            ],
            [
                'ten_phong' => 'Phòng 5',
                'loai_phong' => 'Hatha Yoga',
                'is_active' => 1,
                'tinh_trang' => 1,
            ],
            [
                'ten_phong' => 'Phòng 6',
                'loai_phong' => 'Gym',
                'is_active' => 1,
                'tinh_trang' => 1,
            ],
        ];

        DB::table('phong_taps')->truncate();
        DB::table('phong_taps')->delete();
        DB::table('phong_taps')->insert($phongTap);
    }
}

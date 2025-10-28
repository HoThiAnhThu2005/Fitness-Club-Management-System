<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NhanVienSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $NhanVien = [
            [
                'email' => 'hothianhthu@gmail.com',
                'ho_va_ten' => 'Hồ Thị Anh Thư',
                'password' => '123456',
                'so_dien_thoai' => '0901234567',
                'ngay_sinh' => '2005-05-19',
                'tinh_trang' => 1,
                'id_chuc_vu' => 1,
            ],
            [
                'email' => 'maiantiem@gmail.com',
                'ho_va_ten' => 'Mai An Tiêm',
                'password' => '123456',
                'so_dien_thoai' => '0901234567',
                'ngay_sinh' => '1990-01-15',
                'tinh_trang' => 1,
                'id_chuc_vu' => 2,
            ],
            [
                'email' => 'quynh@gmail.com',
                'ho_va_ten' => 'Trạng Quỳnh',
                'password' => '123456',
                'so_dien_thoai' => '0909000003',
                'ngay_sinh' => '1993-06-15',
                'tinh_trang' => 1,
                'id_chuc_vu' => 3,
            ],
            [
                'email' => 'thach@gmail.com',
                'ho_va_ten' => 'Thạch Sanh',
                'password' => '123456',
                'so_dien_thoai' => '0909000004',
                'ngay_sinh' => '1995-09-10',
                'tinh_trang' => 1,
                'id_chuc_vu' => 4,
            ],
        ];

        DB::table('nhan_viens')->truncate();
        DB::table('nhan_viens')->delete();
        DB::table('nhan_viens')->insert($NhanVien);
    }
}

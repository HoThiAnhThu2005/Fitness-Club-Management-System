<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ChucNangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $chucNang = [
            ['ten_chuc_nang' =>'Quản lý nhân viên'],
            ['ten_chuc_nang' =>'Quản lý hội viên'],
            ['ten_chuc_nang' =>'Quản lý phòng tập'],
            ['ten_chuc_nang' =>'Quản lý thiết bị'],
            ['ten_chuc_nang' =>'Quản lý lịch tập'],
            ['ten_chuc_nang' =>'Quản lý dịch vụ'],
            ['ten_chuc_nang' =>'Quản lý voucher'],
            ['ten_chuc_nang' =>'Quản lý tài chính'],
            ['ten_chuc_nang' =>'Quản lý đánh giá'],
            ['ten_chuc_nang' =>'Quản lý chi phí vận hành'],
        ];

        DB::table('chuc_nangs')->truncate();
        DB::table('chuc_nangs')->insert($chucNang);

    }
}

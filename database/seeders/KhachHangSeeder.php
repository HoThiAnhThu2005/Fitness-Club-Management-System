<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KhachHangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $khach_hang = [
            [
                'ho_va_ten' => 'Nguyễn Thị G',
                'email' => 'nguyenthig@gmail.com',
                'so_dien_thoai' => '0900111222',
                'password' => '123456',
                'ngay_sinh' => '1999-04-12',
                'created_at' => '2025-06-02',
            ],
            [
                'ho_va_ten' => 'Trần Văn H',
                'email' => 'tranvanh@gmail.com',
                'so_dien_thoai' => '0911002200',
                'password' => '123456',
                'ngay_sinh' => '2001-07-20',
                'created_at' => '2025-06-02',
            ],
            [
                'ho_va_ten' => 'Lê Thị I',
                'email' => 'lethii@gmail.com',
                'so_dien_thoai' => '0922334455',
                'password' => '123456',
                'ngay_sinh' => '2000-02-28',
                'created_at' => '2025-06-02',
            ],
            [
                'ho_va_ten' => 'Phạm Văn J',
                'email' => 'phamvanj@gmail.com',
                'so_dien_thoai' => '0933445566',
                'password' => '123456',
                'ngay_sinh' => '1996-09-15',
                'created_at' => '2025-06-12',
            ],
            [
                'ho_va_ten' => 'Nguyễn Thị K',
                'email' => 'nguyenthik@gmail.com',
                'so_dien_thoai' => '0944556677',
                'password' => '123456',
                'ngay_sinh' => '1995-05-10',
                'created_at' => '2025-06-13',
            ],
             [
                'ho_va_ten' => 'Lê Thị M',
                'email' => 'lethim@gmail.com',
                'so_dien_thoai' => '0966778899',
                'password' => '123456',
                'ngay_sinh' => '2002-03-21',
                'created_at' => '2025-06-23',
            ],
            [
                'ho_va_ten' => 'Phạm Văn N',
                'email' => 'phamvann@gmail.com',
                'so_dien_thoai' => '0977889900',
                'password' => '123456',
                'ngay_sinh' => '1994-08-08',
                'created_at' => '2025-06-23',
            ],
            [
                'ho_va_ten' => 'Nguyễn Thị O',
                'email' => 'nguyenthio@gmail.com',
                'so_dien_thoai' => '0988990011',
                'password' => '123456',
                'ngay_sinh' => '2000-06-12',
                'created_at' => '2025-06-23',
            ],
            [
                'ho_va_ten' => 'Trần Văn P',
                'email' => 'tranvanp@gmail.com',
                'so_dien_thoai' => '0999001122',
                'password' => '123456',
                'ngay_sinh' => '1993-01-17',
                'created_at' => '2025-06-30',
            ],
            [
                'ho_va_ten' => 'Nguyễn Thị Q',
                'email' => 'nguyenthiq@gmail.com',
                'so_dien_thoai' => '0902233445',
                'password' => '123456',
                'ngay_sinh' => '1999-10-01',
                'created_at' => '2025-06-23',
            ],
        ];
        DB::table('khach_hangs')->truncate();
        DB::table('khach_hangs')->delete();
        DB::table('khach_hangs')->insert($khach_hang);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\NhanVien;
use Illuminate\Http\Request;

class NhanVienController extends Controller
{

    public function getData()
    {
        $data = NhanVien::join('chuc_vus', 'chuc_vus.id', 'nhan_viens.id_chuc_vu')
            ->select('nhan_viens.*', 'chuc_vus.ten_chuc_vu')
            ->get();

        return response()->json([
            'data' => $data
        ]);
    }


    public function addData(Request $request)
    {
        NhanVien::create([
            'ho_va_ten'         => $request->ho_va_ten,
            'email'             => $request->email,
            'password'          => $request->password,
            'so_dien_thoai'     => $request->so_dien_thoai,
            'ngay_sinh'         => $request->ngay_sinh,
            'tinh_trang'        => $request->tinh_trang,
            'id_chuc_vu'        => $request->id_chuc_vu
        ]);

        return response()->json([
            'status' => true,
            'message' => 'Thêm nhân viên' . $request->ho_va_ten . ' thành công!'
        ]);
    }

    public function updateData(Request $request)
    {
        NhanVien::where('id', $request->id)->update([
            'ho_va_ten'         => $request->ho_va_ten,
            'email'             => $request->email,
            'password'          => $request->password,
            'so_dien_thoai'     => $request->so_dien_thoai,
            'ngay_sinh'         => $request->ngay_sinh,
            'tinh_trang'        => $request->tinh_trang,
            'id_chuc_vu'        => $request->id_chuc_vu
        ]);

        return response()->json([
            'status' => true,
            'message' => 'Cập nhật nhân viên' . $request->ho_va_ten . ' thành công!'
        ]);
    }

    public function delete(Request $request)
    {
        NhanVien::where('id', $request->id)->delete();
        return response()->json([
            'status' => true,
            'message' => 'Xóa nhân viên thành công!'
        ]);
    }

    public function changeStatus(Request $request)
    {
        $nhan_vien = NhanVien::where('id', $request->id)->first();
        $nhan_vien->tinh_trang = !$nhan_vien->tinh_trang;
        $nhan_vien->save();

        return response()->json([
            'status' => true,
            'message' => 'Thay đổi trạng thái nhân viên thành công',
        ]);
    }
}

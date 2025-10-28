<?php

namespace App\Http\Controllers;

use App\Models\KhachHang;
use Illuminate\Http\Request;

class KhachHangController extends Controller
{
    public function getData()
    {
        $data = KhachHang::all();
        return response()->json([
            'data' => $data
        ]);
    }
    public function addData(Request $request)
    {
        KhachHang::create([
            'ho_va_ten'         => $request->ho_va_ten,
            'email'             => $request->email,
            'cccd'             => $request->cccd,
            'so_dien_thoai'     => $request->so_dien_thoai,
            'password'          =>'123456',
            'ngay_sinh'         => $request->ngay_sinh,
            'is_block'          =>0,
        ]);

        return response()->json([
            'status'    =>true,
            'message'   =>'Thêm khách hàng ' . $request->ho_va_ten . ' thành công!',
        ]);
    }

    public function update(Request $request){
        KhachHang::where('id' , $request->id)->update([
            'ho_va_ten'         => $request->ho_va_ten,
            'email'             => $request->email,
            'cccd'             => $request->cccd,
            'so_dien_thoai'     => $request->so_dien_thoai,
            'password'          => $request->password,
            'ngay_sinh'         => $request->ngay_sinh,
            'is_block'          => $request->is_block,
        ]);

        return response()->json([
            'status'    =>true,
            'message'   =>'Cập nhật khách hàng ' . $request->ho_va_ten . ' thành công!',
        ]);
    }

    public function destroy(Request $request){
        KhachHang::where('id', $request->id)->delete();
        return response()->json([
            'status' => true,
            'message' => 'Xóa khách hàng thành công',
        ]);
    }

    public function changeStatus(Request $request){
        $nhan_vien = KhachHang::where('id', $request->id)->first();
        $nhan_vien->is_block =!$nhan_vien->is_block;
        $nhan_vien->save();

        return response()->json([
            'status' => true,
            'message' => 'Thay đổi trạng thái thành công',
        ]);
    }

    public function kichHoat(Request $request){
        $khach_hang = KhachHang::find($request->id);
        $khach_hang->is_active =!$khach_hang->is_active;
        $khach_hang->save();

        return response()->json([
            'status' => true,
            'message' => 'Thay đổi trạng thái kích hoạt thành công',
        ]);
    }
}

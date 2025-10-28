<?php

namespace App\Http\Controllers;

use App\Models\PhongTap;
use Illuminate\Http\Request;

class PhongTapController extends Controller
{
    public function getData(){
        $data = PhongTap::get();
        return response()->json([
            'data' =>$data
        ]);
    }
    public function addData(Request $request){
        $data = PhongTap::create([
            'ten_phong'=>$request->ten_phong,
            'loai_phong'=>$request->loai_phong,
            'tinh_trang'=>$request->tinh_trang,
        ]);
        return response()->json([
            'status'    => true,
            'message'   => 'Thêm phòng chiếu ' . $request->ten_phong . ' thành công',
            'data'      => $data
        ]);
    }
     public function update(Request $request){
        $data = PhongTap::where('id', $request->id)->update([
            'ten_phong'=>$request->ten_phong,
            'loai_phong'=>$request->loai_phong,
            'tinh_trang'=>$request->tinh_trang,
        ]);
        return response()->json([
            'status'    => true,
            'message'   => 'Cập nhật phòng chiếu ' . $request->ten_phong . ' thành công',
        ]);
    }
    public function destroy(Request $request)
    {
        PhongTap::where('id', $request->id)->delete();

        return response()->json([
            'status' => true,
            'message' => 'Xóa phòng chiếu thành công',
        ]);
    }

    public function changeStatus(Request $request){
        $phong_tap = PhongTap::where('id', $request->id)->first();
        $phong_tap->tinh_trang =!$phong_tap->tinh_trang;
        $phong_tap->save();
        return response()->json([
            'status' => true,
            'message' => 'Thay đổi trạng thái phòng chiếu thành công',
        ]);
    }
    public function getDataClient(){
        $data = PhongTap::where('tinh_trang', '>',0)->get();
        return response()->json([
            'data' =>$data
        ]);
    }
}

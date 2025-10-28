<?php

namespace App\Http\Controllers;

use App\Models\BaiViet;
use App\Models\CauHoi;
use App\Models\HuanLuyenVien;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function homepageData(){
        $data_bv = BaiViet::where('tinh_trang', 1)->get();
        $data_cauhoi= CauHoi::where('tinh_trang',1)
                            ->where('loai_trang', 'home')->get();
        $data_hlv = HuanLuyenVien::where('tinh_trang',1)->get();

        return response()->json([
            'data_hlv'      =>$data_hlv,
            'data_bv'       =>$data_bv,
            'data_cauhoi'   =>$data_cauhoi,
        ]);
    }
}

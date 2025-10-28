<?php

namespace App\Http\Controllers;

use App\Models\CauHoi;
use Illuminate\Http\Request;

class CauHoiController extends Controller
{
    public function getDataByLoaiTrang($loai_trang)
    {
        $data = CauHoi::where('tinh_trang', 1)
            ->where('loai_trang', $loai_trang)
            ->get();

        return response()->json([
            'data' => $data
        ]);
    }
    public function getDataHome()
    {
        return $this->getDataByLoaiTrang('home');
    }
    public function getDataYoga()
    {
        return $this->getDataByLoaiTrang('yoga');
    }
    
}

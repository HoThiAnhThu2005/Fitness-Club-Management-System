<?php

namespace App\Http\Controllers;

use App\Models\HuanLuyenVien;
use Illuminate\Http\Request;

class HuanLuyenVienController extends Controller
{
    public function getData(){
        $data = HuanLuyenVien::all();
        return response()->json([
            'data' =>$data,
        ]);
    }
}

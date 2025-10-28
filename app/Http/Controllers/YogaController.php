<?php

namespace App\Http\Controllers;

use App\Models\CauHoi;
use Illuminate\Http\Request;

class YogaController extends Controller
{
    public function getDataClient(){
        $data= CauHoi::where('tinh_trang',1)
                            ->where('loai_trang', 'yoga')->get();
        return response()->json([
            'status'=>true,
            'data' =>$data
        ]);
    }
}

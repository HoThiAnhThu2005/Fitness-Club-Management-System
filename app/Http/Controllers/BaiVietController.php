<?php

namespace App\Http\Controllers;

use App\Models\BaiViet;
use Illuminate\Http\Request;

class BaiVietController extends Controller
{
    public function getData()
    {
        $data = BaiViet::all();
        return response()->json([
            'data' => $data
        ]);
    }
}

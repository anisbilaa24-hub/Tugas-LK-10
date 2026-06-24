<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Laporan;

class LaporanApiController extends Controller
{
    public function index()
    {
        return response()->json([
            'status' => true,
            'data' => Laporan::all()
        ]);
    }
}
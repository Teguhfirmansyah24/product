<?php

namespace App\Http\Controllers;

use App\Models\industri;
use Illuminate\Http\Request;

class IndustriController extends Controller
{
    public function index()
    {
        $industris = Industri::all();

        return response()->json([
            'status' => 200,
            'success' => true,
            'message' => 'Products berhasil diambil',
            'data' => $industris,
        ]);
    }
}

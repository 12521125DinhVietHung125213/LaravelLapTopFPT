<?php

namespace App\Http\Controllers;

use App\Models\chi_tiet_don_hang;
use App\Models\don_hang;
use Illuminate\Http\Request;

class chi_tiet_don_hangcontroller extends Controller
{

    public function showctdh($ma_don_hang)
    {
        $sanPhams = chi_tiet_don_hang::laySanPhamTheoMaDonHang($ma_don_hang);
        return view('admins.donhang.showchitietdonhang', compact('sanPhams'));
        dd($sanPhams);
    }

   
}

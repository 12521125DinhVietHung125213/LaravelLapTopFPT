<?php

namespace App\Http\Controllers;

use App\Models\danh_muc_san_pham;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class danh_muc_san_phamcontroller extends Controller
{
    public function index()
    {
        $danhmuc = DB::table('danh_muc_san_pham')->get();
        return view('admins.danhmuc.index',compact('danhmuc'));

    }


    
    public function createdm()
    {
        return view('admins.danhmuc.create');
    }



    
    public function storedm(Request $request)
    {
        $danhmuc = $request->all();
        danh_muc_san_pham :: create($danhmuc);

        return redirect()->route('danh_muc_san_pham')->with('success', 'Thêm thông tin danh mục thành công !');
    }



    public function showdm(string $ma_danh_muc)
    {
        $danhmuc = danh_muc_san_pham::findOrFail($ma_danh_muc);
        return view('admins.danhmuc.show' , compact('danhmuc'));
    }



    public function editdm(string $ma_danh_muc)
    {
        $danhmuc = danh_muc_san_pham::findOrFail($ma_danh_muc);
        return view('admins.danhmuc.edit' , compact('danhmuc'));
    }


   
    public function updatedm(Request $request, string $ma_danh_muc)
    {
        $danhmuc = danh_muc_san_pham::findOrFail($ma_danh_muc);
        $danhmuc -> update($request->all());
        return redirect()->route('danh_muc_san_pham')->with('success', 'Sửa thông tin danh mục thành công !');
    }




    public function destroy(string $id)
    {
        $danhmuc = DB::table('danh_muc_san_pham')->where('ma_danh_muc', $id);
        $danhmuc->delete();
        return redirect('danh_muc_san_pham')->with('success', 'Xóa sản phẩm thành công !');
    }
}

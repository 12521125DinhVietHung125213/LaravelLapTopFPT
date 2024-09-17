<?php

namespace App\Http\Controllers;

use App\Models\kho_hang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class kho_hangcontroller extends Controller
{
    public function index()
    {
        $khohang = DB::table('kho_hang')->get();
        return view('admins.khohang.index',compact('khohang'));
    }



    public function createkh()
    {
        return view('admins.khohang.create');
    }



    
    public function storekh(Request $request)
    {
        $khohang = $request->all();
        kho_hang :: create($khohang);

        return redirect()->route('kho_hang')->with('success', 'Thêm thông tin sản phẩm thành công !');
    }




    public function showkh(string $ma_san_pham)
    {
        $khohang = kho_hang::findOrFail($ma_san_pham);
        return view('admins.khohang.show' , compact('khohang'));
    }



    public function editkh(string $ma_san_pham)
    {
        $khohang = kho_hang::findOrFail($ma_san_pham);
        return view('admins.khohang.edit' , compact('khohang'));
    }



    public function updatekh(Request $request, string $ma_san_pham)
    {
        $khohang = kho_hang::findOrFail($ma_san_pham);
        $khohang -> update($request->all());
        return redirect()->route('kho_hang')->with('success', 'Sửa thông tin sản phẩm thành công');
    }
    


    public function destroy(string $id)
    {
        $khohang = DB::table('kho_hang')->where('ma_san_pham', $id);
        $khohang->delete();
        return redirect('kho_hang')->with('success', 'Xóa sản phẩm thành công !');
    }
}

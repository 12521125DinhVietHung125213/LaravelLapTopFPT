<?php

namespace App\Http\Controllers;

use App\Models\don_hang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class don_hangcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $donhang = DB::table('don_hang')->get();
        return view('admins.donhang.index',compact('donhang'));
    }




    public function createdh()
    {
        return view('admins.donhang.create');
    }



    
    public function storedh(Request $request)
    {
        $donhang = $request->all();
        don_hang :: create($donhang);

        return redirect()->route('don_hang')->with('success', 'Thêm thông tin đơn hàng!');
    }




    public function showdh(string $ma_don_hang)
    {
        $donhang = don_hang::findOrFail($ma_don_hang);
        return view('admins.donhang.show' , compact('donhang'));
    }



    public function editdh(string $ma_don_hang)
    {
        $donhang = don_hang::findOrFail($ma_don_hang);
        return view('admins.donhang.edit' , compact('donhang'));
    }


   
    public function updatedh(Request $request, string $ma_don_hang)
    {
        $donhang = don_hang::findOrFail($ma_don_hang);
        $donhang -> update($request->all());
        return redirect()->route('don_hang')->with('success', 'Sửa thông tin đơn hàng');
    }




    public function destroy(string $id)
    {
        $donhang = DB::table('don_hang')->where('ma_don_hang', $id);
        $donhang->delete();
        return redirect('don_hang')->with('success', 'Xóa đơn hàng !');
    }

    
}

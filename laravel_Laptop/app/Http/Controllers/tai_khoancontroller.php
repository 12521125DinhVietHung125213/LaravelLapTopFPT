<?php

namespace App\Http\Controllers;

use App\Models\tai_khoan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class tai_khoancontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $taikhoan = DB::table('users')->get();
        return view('admins.taikhoan.index',compact('taikhoan'));
    }



    public function createtk()
    {
        return view('admins.taikhoan.create');
    }

    
    public function storetk(Request $request)
    {
        $taikhoan = $request->all();
        tai_khoan :: create($taikhoan);

        return redirect()->route('tai_khoan')->with('success', 'Thêm thông tin sản phẩm thành công !');
    }

    public function showtk(string $id)
    {
        $taikhoan = tai_khoan::findOrFail($id);
        return view('admins.taikhoan.show' , compact('taikhoan'));
    }



    public function edittk(string $id)
    {
        $taikhoan = tai_khoan::findOrFail($id);
        return view('admins.taikhoan.edit' , compact('taikhoan'));
    }


   
    public function updatetk(Request $request, string $id)
    {
        $taikhoan = tai_khoan::findOrFail($id);
        $taikhoan -> update($request->all());
        return redirect()->route('tai_khoan')->with('success', 'Sửa thông tin sản phẩm thành công');
    }

    

    public function destroy(string $id)
    {
        $taikhoan = DB::table('users')->where('id', $id);
        $taikhoan->delete();
        return redirect('tai_khoan')->with('success', 'Xóa sản phẩm thành công !');
    }

    
}

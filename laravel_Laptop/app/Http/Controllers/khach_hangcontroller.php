<?php
namespace App\Http\Controllers;
use App\Models\khach_hang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class khach_hangcontroller extends Controller
{
    public function index()
    {
        $khachhang = DB::table('khach_hang')->get();
        return view('admins.khachhang.index',compact('khachhang'));

    }


    public function createkh()
    {
        return view('admins.khachhang.create');
    }



    
    public function storekh(Request $request)
    {
        $khachhang = $request->all();
        khach_hang :: create($khachhang);

        return redirect()->route('khach_hang')->with('success', 'Thêm thông tin sản phẩm thành công !');
    }



    public function showkh(string $ma_khach_hang)
    {
        $khachhang = khach_hang::findOrFail($ma_khach_hang);
        return view('admins.khachhang.show' , compact('khachhang'));
    }



    public function editkh(string $ma_khach_hang)
    {
        $khachhang = khach_hang::findOrFail($ma_khach_hang);
        return view('admins.khachhang.edit' , compact('khachhang'));
    }


   
    public function updatekh(Request $request, string $ma_khach_hang)
    {
        $khachhang = khach_hang::findOrFail($ma_khach_hang);
        $khachhang -> update($request->all());
        return redirect()->route('khach_hang')->with('success', 'Sửa thông tin sản phẩm thành công');
    }

    

    public function destroy(string $id)
    {
        $khachhang = DB::table('khach_hang')->where('ma_khach_hang', $id);
        $khachhang->delete();
        return redirect('khach_hang')->with('success', 'Xóa sản phẩm thành công !');
    }
   
}

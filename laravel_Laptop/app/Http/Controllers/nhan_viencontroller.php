<?php

namespace App\Http\Controllers;

use App\Models\nhan_vien;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class nhan_viencontroller extends Controller
{
    public function index()
    {
        $nhanvien = DB::table('nhan_vien')->get();

        return view('admins.nhanvien.index', compact('nhanvien'));
    }



    public function createnv()
    {
        return view('admins.nhanvien.create');
    }



    public function store(Request $request)
    {
        $requestDataphoto = $request->all();

        $filename = $request->file('anh_nhanvien')->getClientOriginalName();

        $path = $request->file('anh_nhanvien')->storeAs('images', $filename, 'public');

        $requestDataphoto["anh_nhanvien"] = 'client/' . $path;

        nhan_vien::create($requestDataphoto);

        return redirect()->route('nhan_vien')->with('success', 'Thêm thông tin sản phẩm thành công !');
    }



    public function shownv(string $ma_nhan_vien)
    {
        $nhanvien = nhan_vien::findOrFail($ma_nhan_vien);
        return view('admins.nhanvien.show', compact('nhanvien'));
    }



    public function showdetailnv(string $ma_nhan_vien)
    {
        $nhanvien = nhan_vien::findOrFail($ma_nhan_vien);
        return view('client.chitietsanpham', compact('nhanvien'));
    }




    public function editnv(string $ma_nhan_vien)
    {
        $nhanvien = nhan_vien::findOrFail($ma_nhan_vien);
        return view('admins.nhanvien.edit', compact('nhanvien'));
    }


    


    public function updatenv(Request $request, string $ma_nhan_vien)
    {
        $nhanvien = nhan_vien::findOrFail($ma_nhan_vien);
        
      
        if ($request->hasFile('anh_nhanvien')) {
            // Lấy file ảnh từ request
            $image = $request->file('anh_nhanvien');
            
            // Lấy tên file gốc
            $filename = $image->getClientOriginalName();
            
            // Lưu file ảnh mới vào thư mục public/images và đổi tên nếu cần
            $path = $image->storeAs('images', $filename, 'public');
            
            // Cập nhật đường dẫn ảnh mới vào dữ liệu sản phẩm
            $nhanvien->anh_nhanvien = 'client/' . $path;
        }
    
        // Cập nhật thông tin sản phẩm với dữ liệu được gửi trong request
        $nhanvien->update($request->except('anh_nhanvien'));
        return redirect()->route('nhan_vien')->with('success', 'Sửa thông tin sản phẩm thành công');
    }



    public function destroyvn(string $id)

    {
        $nhanvien = DB::table('nhan_vien')->where('ma_san_pham', $id);
        $nhanvien->delete();
        return redirect('nhan_vien')->with('success', 'Xóa sản phẩm thành công !');
    }

}

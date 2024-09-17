<?php
namespace App\Http\Controllers;
use App\Models\blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class blogcontroller extends Controller
{


    public function index()
    {
        $blog = DB::table('blog')->get();
        return view('admins.blog.index',compact('blog'));
    }


    public function bloguser()
    {
        $blog = DB::table('blog')->get();
        return view('client.blog',compact('blog'));
    }



    public function createblog()
    {
        return view('admins.blog.create');
    }



    public function storeblog(Request $request)
    {
        $requestDataphoto = $request->all();
        $filename = $request->file('image_blog')->getClientOriginalName();
        $path = $request->file('image_blog')->storeAs('images', $filename, 'public');
        $requestDataphoto["image_blog"] = 'client/' . $path;
        blog::create($requestDataphoto);

        return redirect()->route('blog')->with('success', 'Thêm thông tin sản phẩm thành công !');
    }




    public function showblog(string $ma_blog)
    {
        $blog = blog::findOrFail($ma_blog);
        return view('admins.blog.show', compact('blog'));
    }




    public function editblog(string $ma_blog)
    {
        $blog = blog::findOrFail($ma_blog);
        return view('admins.blog.edit', compact('blog'));
    }




    public function updateblog(Request $request, string $ma_blog)
    {
        $blog = blog::findOrFail($ma_blog);
        if ($request->hasFile('image_blog')) {
            // Lấy file ảnh từ request
            $image = $request->file('image_blog');
            
            // Lấy tên file gốc
            $filename = $image->getClientOriginalName();
            
            // Lưu file ảnh mới vào thư mục public/images và đổi tên nếu cần
            $path = $image->storeAs('images', $filename, 'public');
            
            // Cập nhật đường dẫn ảnh mới vào dữ liệu sản phẩm
            $blog->image_blog = 'client/' . $path;
        }
    
        // Cập nhật thông tin sản phẩm với dữ liệu được gửi trong request
        $blog->update($request->except('image_blog'));
        return redirect()->route('qlyblog')->with('success', 'Sửa thông tin sản phẩm thành công');
    }

    



    public function destroy(string $id)

    {
        $blog = DB::table('blog')->where('image_blog', $id);
        $blog->delete();
        return redirect('blog')->with('success', 'Xóa sản phẩm thành công !');
    }

  
}

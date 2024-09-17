<?php
namespace App\Http\Controllers;
use App\Models\slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class slidercontroller extends Controller
{
    public function index()
    {
        $slider = DB::table('slider')->get();
        return view('admins.slider.index',compact('slider'));
    }



    public function createslider()
    {
        return view('admins.slider.create');
    }





    public function storeslider(Request $request)
    {
        $requestDataphoto = $request->all();
        $filename = $request->file('image_slider')->getClientOriginalName();
        $path = $request->file('image_slider')->storeAs('images', $filename, 'public');
        $requestDataphoto["image_slider"] = 'client/' . $path;
        slider::create($requestDataphoto);

        return redirect()->route('slider')->with('success', 'Thêm thông tin sản phẩm thành công !');
    }





    public function showslider(string $image_slider)
    {
        $slider = slider::findOrFail($image_slider);
        return view('admins.slider.show', compact('slider'));
    }





    public function showdetailslider(string $image_slider)
    {
        $slider = slider::findOrFail($image_slider);
        return view('client.chitietsanpham', compact('slider'));
    }





    public function editslider(string $image_slider)
    {
        $slider = slider::findOrFail($image_slider);
        return view('admins.slider.edit', compact('slider'));
    }





    public function updateslider(Request $request, string $image_slider)
    {
        $slider = slider::findOrFail($image_slider);
        
        if($request->hasFile("image_slider")){
            if (File::exists("client/images/".$slider->image_slider)) {
                File::delete("client/images/".$slider->image_slider);
            }
            $file=$request->file("image_slider");
            $slider->image_slider=time()."_".$file->getClientOriginalName();
            $slider->file('image_slider')->storeAs('images', $file, 'public');
            $request['image_slider']=$slider->image_slider;
        }

        $slider->update($request->all());
        return redirect()->route('slider')->with('success', 'Sửa thông tin sản phẩm thành công');
    }

    



    public function destroy(string $id)

    {
        $slider = DB::table('slider')->where('image_slider', $id);
        $slider->delete();
        return redirect('slider')->with('success', 'Xóa sản phẩm thành công !');
    }

  
}

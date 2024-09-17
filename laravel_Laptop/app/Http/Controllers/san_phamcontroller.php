<?php

namespace App\Http\Controllers;

use App\Models\chi_tiet_don_hang;
use App\Models\danh_muc_san_pham;
use App\Models\don_hang;
use App\Models\san_pham;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\Storage;


class san_phamcontroller extends Controller
{
    protected $imageName ;



    public function index()
    {
        $sanpham = DB::table('san_pham')->get();
        return view('admins.sanpham.index',compact('sanpham'));
    }



    public function indexuser()
    {
        $sanpham = DB::table('san_pham')->get();
        $slider = DB::table('slider')->get();
        $data=["sanpham"=>$sanpham,"slider"=>$slider,];
        return view('client.layouts.index', $data);
    }


    
    public function sanpham()
    {
        $sanpham = DB::table('san_pham')->get();

        return view('client.product', compact('sanpham'));
    }



    public function create()
    {
        return view('admins.sanpham.create');
    }




    public function store(Request $request)
    {
        $requestDataphoto = $request->all();
        $filename = $request->file('anh_sanpham')->getClientOriginalName();
        $path = $request->file('anh_sanpham')->storeAs('images', $filename, 'public');
        $requestDataphoto["anh_sanpham"] = 'client/' . $path;
        san_pham::create($requestDataphoto);

        return redirect()->route('san_pham')->with('success', 'Thêm thông tin sản phẩm thành công !');
    }




    public function show(string $ma_san_pham)
    {
        $sanpham = san_pham::findOrFail($ma_san_pham);
        return view('admins.sanpham.show', compact('sanpham'));
    }



    public function showProductDetailWithCategory($ma_san_pham)
    {
        // Lấy thông tin sản phẩm
        $sanpham = san_pham::findOrFail($ma_san_pham);
    
        // Lấy mã danh mục từ sản phẩm
        $ma_danh_muc = $sanpham->ma_danh_muc;
    
        // Lấy danh mục
        $danhMuc = danh_muc_san_pham::findOrFail($ma_danh_muc);
    
        // Lấy các sản phẩm có cùng mã danh mục, ngoại trừ sản phẩm hiện tại
        $sanPhams = san_pham::where('ma_danh_muc', $ma_danh_muc)
                            ->where('ma_san_pham', '!=', $ma_san_pham)
                            ->get();
    
        // Truyền dữ liệu đến view
        return view('client.chitietsanpham', compact('sanpham', 'danhMuc', 'sanPhams'));
    }
    
    


    public function edit(string $ma_san_pham)
    {
        $sanpham = san_pham::findOrFail($ma_san_pham);
        return view('admins.sanpham.edit', compact('sanpham'));
    }





    public function update(Request $request, string $ma_san_pham)
    {
        $sanpham = san_pham::findOrFail($ma_san_pham);
        if ($request->hasFile('anh_sanpham')) {
            // Lấy file ảnh từ request
            $image = $request->file('anh_sanpham');
            
            // Lấy tên file gốc
            $filename = $image->getClientOriginalName();
            
            // Lưu file ảnh mới vào thư mục public/images và đổi tên nếu cần
            $path = $image->storeAs('images', $filename, 'public');
            
            // Cập nhật đường dẫn ảnh mới vào dữ liệu sản phẩm
            $sanpham->anh_sanpham = 'client/' . $path;
        }
    
        // Cập nhật thông tin sản phẩm với dữ liệu được gửi trong request
        $sanpham->update($request->except('anh_sanpham'));

        return redirect()->route('san_pham')->with('success', 'Sửa thông tin sản phẩm thành công');
    }





    public function destroy(string $id)

    {
        $sanpham = DB::table('san_pham')->where('ma_san_pham', $id);
        $sanpham->delete();
        return redirect('san_pham')->with('success', 'Xóa sản phẩm thành công !');
    }




    public function addToCart($ma_san_pham){
        $size = request('size','XL');
        $color = request('color','Xanh');
        $quantity = request('quantity',1);
       

        $sanpham = san_pham::findOrFail($ma_san_pham);

        $cart = session()->get('cart',[]);

        if(isset($cart[$ma_san_pham])) {
            $cart[$ma_san_pham]['soluong']++;


        }  else {
            $cart[$ma_san_pham] = [
                "ten_san_pham" => $sanpham->ten_san_pham,
                "anh_san_pham" => $sanpham->anh_sanpham,
                "gia_tien" => $sanpham->gia,
                "soluong" => $quantity,
                "mausac" => $color,
                "kichco" => $size
                
            ];
        }
        
        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Sản phẩm đã được thêm vào giỏ hàng !');
    }



    public function removeCart(Request $request){
        if($request->ma_san_pham){
            $cart = session()->get('cart');
            if(isset ($cart[$request->ma_san_pham])){
                unset($cart[$request->ma_san_pham]);
                session()->put('cart',$cart);
            }
            session()->flash('succes');
        }
    }



    public function updateCart(Request $request){
        if($request->ma_san_pham && $request -> soluong){
            $cart = session()->get('cart');
            $cart[$request -> ma_san_pham]["soluong"] = $request->soluong;
            session()->put('cart' ,$cart);
            session()->flash('succes');
        }
    }



    public function placeOrder(Request $request) {
        // Lấy giỏ hàng hiện tại từ session
        
        $cart = session()->get('cart', []);
        $tongtien = 0;

        foreach ($cart as $item) {
            $tongtien += ($item['gia_tien'] * $item['soluong']);
        }
        // Kiểm tra nếu giỏ hàng rỗng
        if (empty($cart)) {
            return redirect()->back()->with('error', 'Giỏ hàng của bạn đang trống!');
        }
       
        $order = new don_hang();
      
        $order->ngay_dat_hang = date("Y/m/d",time());
        $order->tong_tien = $tongtien;

        $user = Auth::user();
        $order ->ma_khach_hang = $user->id;
        $order->trang_thai = 2;
        $order ->ten_khach = request('ten');
        $order ->dia_chi = request('thanhpho');
        $order ->ghi_chu = request('ghichu');
        $order->save();
        
        foreach ($cart as $key => $value) {
            $row = [
                'ma_chi_tiet_don_hang' => $order->ma_chi_tiet_don_hang,
                'ma_don_hang' =>$order->ma_don_hang,
                'ma_san_pham' => $key,
                'ten_san_pham' => $value['ten_san_pham'],
                'gia' => $value['gia_tien'],
                'so_luong' => $value['soluong'],
                'kich_co' =>$value['kichco'],
                'mau_sac' =>$value['mausac']

            ];
            
            chi_tiet_don_hang::create($row);
        }

        session()->forget('cart');
        // Chuyển hướng với thông báo thành công
        return redirect()->route('home')->with('success', 'Đặt hàng thành công! Giỏ hàng của bạn đã được làm trống.');
    }

    
   
}

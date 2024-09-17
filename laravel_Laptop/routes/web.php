<?php
use App\Http\Controllers\Auth;
use App\Http\Controllers\blogcontroller;
use App\Http\Controllers\danh_muc_san_phamcontroller;
use App\Http\Controllers\don_hangcontroller;
use App\Http\Controllers\khach_hangcontroller;
use App\Http\Controllers\kho_hangcontroller;
use App\Http\Controllers\nhan_viencontroller;
use App\Http\Controllers\san_phamcontroller;
use App\Http\Controllers\slidercontroller;
use App\Http\Controllers\tai_khoancontroller;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\chi_tiet_don_hangcontroller;
use App\Http\Controllers\Thongkecontroller;
use Illuminate\Support\Facades\Auth as FacadesAuth;
use Illuminate\Support\Facades\Route;
FacadesAuth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('/login', [LoginController::class, 'login'])->name('login');

Route::get('/login', [LoginController::class, 'LoginGD'])->name('login');

Route::get('home/admins', [App\Http\Controllers\HomeController::class, 'adminHome'])->name('adminhome')->middleware('is_admin');

Route::delete('/logout', [LoginController::class, 'logout'])->name('logout');


Route :: controller(Thongkecontroller :: class) ->group(function(){
    Route::get('admins','index')->name('admins') ;
}); 

Route::get('/blog', function () {
    return view('client.blog');
});

Route::get('/about', function () {
    return view('client.about');
});

Route::get('/lienhe', function () {
    return view('client.contact');
});
Route::get('/giohang', function () {
    return view('client.giohang');
});

Route::get('/hoadonnhap', function () {
    return view('admins.hoadonnhap.index');
});

Route::get('/thongtindonhang', function () {
    return view('client.thongtindonhang');
});


Route::controller(san_phamcontroller::class)->group(function () {
    Route::get('san_pham', 'index')->name('san_pham');
    Route::get('trangchu', 'indexuser')->name('trangchu');
    Route::get('sanphamuser', 'sanpham')->name('sanphamuser');
    Route::get('create', 'create')->name('san_pham.create');
    Route::post('store', 'store')->name('san_pham.store');
    Route::get('show/{id}', 'show')->name('san_pham.show');
    Route::get('showdetail/{id}', 'showProductDetailWithCategory')->name('san_pham.showdetail');
    Route::get('danh-muc/{ma_danh_muc}', 'showProductsByCategory')->name('san_pham.by_category');
    Route::get('edit/{id}', 'edit')->name('san_pham.edit');
    Route::put('edit/{id}', 'update')->name('san_pham.update');
    Route :: delete('destroy/{ma_san_pham}','destroy') ->name('san_pham.destroy');
});



Route :: controller(danh_muc_san_phamcontroller :: class)->group(function(){
    Route :: get('danh_muc_san_pham','index')->name('danh_muc_san_pham');
    Route::get('createdm', 'createdm')->name('danh_muc_san_pham.create');
    Route::post('storedm', 'storedm')->name('danh_muc_san_pham.store');
    Route::get('showdm/{id}', 'showdm')->name('danh_muc_san_pham.showdm');
    Route::get('editdm/{id}', 'editdm')->name('danh_muc_san_pham.edit');
    Route::put('editdm/{id}', 'updatedm')->name('danh_muc_san_pham.update');
    Route :: delete('destroydm/{ma_danh_muc_san_pham}','destroy') ->name('danh_muc_san_pham.destroy');
});


Route :: controller(nhan_viencontroller :: class)->group(function(){
    Route :: get('nhan_vien','index')->name('nhan_vien');
    Route::get('createnv', 'createnv')->name('nhan_vien.create');
    Route::post('storenv', 'storenv')->name('nhan_vien.store');
    Route::get('shownv/{id}', 'shownv')->name('nhan_vien.show');
    Route::get('editnv/{id}', 'editnv')->name('nhan_vien.edit');
    Route::put('editnv/{id}', 'updatenv')->name('nhan_vien.update');
    Route :: delete('destroydm/{ma_nhan_vien}','destroy') ->name('nhan_vien.destroy');
});


Route :: controller(khach_hangcontroller :: class)->group(function(){
    Route :: get('khach_hang','index')->name('khach_hang');
    Route::get('createkhach', 'createkh')->name('khach_hang.create');
    Route::post('storekhach', 'storekh')->name('khach_hang.store');
    Route::get('showkhach/{id}', 'showkh')->name('khach_hang.show');
    Route::get('editkhach/{id}', 'editkh')->name('khach_hang.edit');
    Route::put('editkhach/{id}', 'updatekh')->name('khach_hang.update');
    Route :: delete('destroykhach/{ma_khach_hang}','destroy') ->name('khach_hang.destroy');
});



Route :: controller(kho_hangcontroller :: class)->group(function(){
    Route :: get('kho_hang','index')->name('kho_hang');
    Route::get('createkh', 'createkh')->name('kho_hang.create');
    Route::post('storekh', 'storekh')->name('kho_hang.store');
    Route::get('showkh/{id}', 'showkh')->name('kho_hang.show');
    Route::get('editkh/{id}', 'editkh')->name('kho_hang.edit');
    Route::put('editkh/{id}', 'updatekh')->name('kho_hang.update');
    Route :: delete('destroykh/{ma_san_pham}','destroy') ->name('kho_hang.destroy');
});


Route :: controller(tai_khoancontroller:: class)->group(function(){
    Route :: get('tai_khoan','index')->name('tai_khoan');
    Route::get('createtk', 'createtk')->name('tai_khoan.create');
    Route::post('storetk', 'storetk')->name('tai_khoan.store');
    Route::get('showtk/{id}', 'showtk')->name('tai_khoan.show');
    Route::get('edittk/{id}', 'edittk')->name('tai_khoan.edit');
    Route::put('edittk/{id}', 'updatetk')->name('tai_khoan.update');
    Route :: delete('destroytk/{id}','destroy') ->name('tai_khoan.destroy');
});



Route :: controller(slidercontroller:: class)->group(function(){
    Route::get('slider','index')->name('slider');
    Route::get('createslider', 'createslider')->name('slider.create');
    Route::post('storeslider', 'storeslider')->name('slider.store');
    Route::get('showslider/{id}', 'showslider')->name('slider.show');
    Route::get('editslider/{id}', 'editslider')->name('slider.edit');
    Route::put('editslider/{id}', 'updateslider')->name('slider.update');
    Route :: delete('destroyslider/{ma_slider}','destroy') ->name('slider.destroy');
});



Route :: controller(don_hangcontroller:: class)->group(function(){
    Route :: get('don_hang','index')->name('don_hang');
    Route::get('createdh', 'createdh')->name('don_hang.create');
    Route::post('storedh', 'storesh')->name('don_hang.store');
    Route::get('showdh/{id}', 'showdh')->name('don_hang.show');
    Route::get('editdh/{id}', 'editdh')->name('don_hang.edit');
    Route::put('editdh/{id}', 'updatedh')->name('don_hang.update');
    Route :: delete('destroydh/{ma_don_hang}','destroy') ->name('don_hang.destroy');
});



Route :: controller(chi_tiet_don_hangcontroller:: class)->group(function(){
    Route::get('chi-tiet-don-hang/{ma_don_hang}' ,'showctdh')->name('chitietdonhang.show');
});



Route :: controller(blogcontroller:: class)->group(function(){
    Route::get('qlyblog','index')->name('qlyblog');
    Route::get('userblog','bloguser')->name('userblog');
    Route::get('createblog', 'createblog')->name('blog.create');
    Route::post('storeblog', 'storeblog')->name('blog.store');
    Route::get('showblog/{id}', 'showblog')->name('blog.show');
    Route::get('editblog/{id}', 'editblog')->name('blog.edit');
    Route::put('editblog/{id}', 'updateblog')->name('blog.update');
    Route :: delete('destroyblog/{ma_blog}','destroy') ->name('blog.destroy');
});


Route :: get('add-to-cart/{ma_san_pham}',[san_phamcontroller::class,'addToCart'])->name('add_to_cart');
Route :: delete('xoa-sanpham-giohang',[san_phamcontroller::class , 'removeCart'])->name('xoaGioHang');
Route :: patch('update-sanpham-giohang',[san_phamcontroller::class,'updateCart'])->name('updateGioHang');

Route::group(['middleware' => 'auth'], function () {

    Route :: post('dathang-sanpham-giohang',[san_phamcontroller::class,'placeOrder'])->name('placeOrder');
    
});


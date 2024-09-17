@extends('admins.layouts.app')

@section('title', 'Edit Product')

@section('contents')
<h1 class="mb-0">Cập nhật tài khoản</h1>
<hr />
<form action="{{ route('tai_khoan.update', $taikhoan->ma_tai_khoan) }}" enctype="multipart/form-data" method="POST">
    @csrf
    @method('PUT')
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Tên đăng nhập</label>
            <input type="text" name="ten_tai_khoan" class="form-control" placeholder="Tên đăng nhập" value="{{ $taikhoan -> ten_tai_khoan }}" >
        </div>
        <div class="col mb-3">
            <label class="form-label">Mật khẩu</label>
            <input type="text" name="mat_khau" class="form-control" placeholder="Mật khẩu" value="{{ $taikhoan ->mat_khau }}" >
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Mã loại tài khoản</label>
            <input type="text" name="ma_loai_tai_khoan" class="form-control" placeholder="Mã loại tài khoản" value="{{ $taikhoan->ma_loai_tai_khoan }}" >
        </div>

    </div>
    
    <div class="row">
        <div class="d-grid">
            <button style="margin-left: 10px;" class="btn btn-warning">Update</button>
        </div>
    </div>
</form>
@endsection
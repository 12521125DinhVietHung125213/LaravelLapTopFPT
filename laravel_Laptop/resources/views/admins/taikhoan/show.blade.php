@extends('admins.layouts.app')

@section('title', 'Show Product')

@section('contents')
<h3 class="mb-0">Thông tin tài khoản</h3>
<hr />
<div class="row">
    <div class="col mb-3">
        <label class="form-label">Mã tài khoản</label>
        <input type="text" name="ma_tai_khoan" class="form-control" placeholder="Mã tài khoản" value="{{ $taikhoan->id}}" readonly>
    </div>
    <div class="col mb-3">
        <label class="form-label">Tên đăng nhập</label>
        <input type="text" name="ten_tai_khoan" class="form-control" placeholder="Tên đăng nhập" value="{{ $taikhoan->name}}" readonly>
    </div>
</div>

<div class="row">
    <div class="col mb-3">
        <label class="form-label">Mật khẩu</label>
        <input type="text" name="mat_khau" class="form-control" placeholder="Mật khẩu" value="{{ $taikhoan->password }}" readonly>
    </div>
    <div class="col mb-3">
        <label class="form-label">Mã loại tài khoản</label>
        <input type="text" name="ma_loai_tai_khoan" class="form-control" placeholder="Mã loại tài khoản" value="{{ $taikhoan -> is_admin }}" readonly>
    </div>

</div>
<div class="row">
    <div class="col mb-3">
        <label class="form-label">Email</label>
        <input type="text" name="email" class="form-control" placeholder="Email" value="{{ $taikhoan -> email }}" readonly>
    </div>

</div>


@endsection
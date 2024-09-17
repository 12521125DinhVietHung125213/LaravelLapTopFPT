@extends('admins.layouts.app')

@section('title', 'Create Product')

@section('contents')
<h3 class="mb-0">Thêm tài khoản</h3>
<hr />
<form action="{{ route('tai_khoan.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row mb-3">
        <div class="col">
            <input type="text" name="ten_tai_khoan" class="form-control" placeholder="Tên đăng nhập ">
        </div>
        <div class="col">
            <input type="text" name="mat_khau" class="form-control" placeholder="Mật khẩu">
        </div>
    </div>
    <div class="row mb-3">
        <div class="col">
            <input type="text" name="ma_loai_tai_khoan" class="form-control" placeholder="Mã Loại">
        </div>
    </div>
    <div class="row">
        <div class="d-grid">
            <button style="margin-left: 10px;" type="submit" class="btn btn-primary">Thêm</button>
        </div>
    </div>
</form>
@endsection
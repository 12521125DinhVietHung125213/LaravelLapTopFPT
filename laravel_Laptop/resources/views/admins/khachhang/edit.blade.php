@extends('admins.layouts.app')

@section('contents')
<h1 class="mb-0">Cập nhật khách hàng</h1>
<hr />
<form action="{{ route('khach_hang.update', $khachhang->ma_khach_hang) }}" enctype="multipart/form-data" method="POST">
    @csrf
    @method('PUT')
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Tên khách hàng</label>
            <input type="text" name="ten_khach_hang" class="form-control" placeholder="Tên khách hàng" value="{{ $khachhang -> ten_khach_hang }}" >
        </div>
        <div class="col mb-3">
            <label class="form-label">Email</label>
            <input type="text" name="gioi_tinh" class="form-control" placeholder="Email" value="{{ $khachhang ->email }}" >
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Số điện thoại</label>
            <input type="text" name="so_dien_thoai" class="form-control" placeholder="Số điện thoại" value="{{ $khachhang->so_dien_thoai }}" >
        </div>
        <div class="col mb-3">
            <label class="form-label">Địa chỉ</label>
            <input type="text" name="dia_chi" class="form-control" placeholder="Địa chỉ" value="{{ $khachhang->dia_chi }}" >
        </div>

    </div>
    
    <div class="row">
        <div class="d-grid">
            <button style="margin-left: 10px;" class="btn btn-warning">Cập nhật</button>
        </div>
    </div>
</form>
@endsection
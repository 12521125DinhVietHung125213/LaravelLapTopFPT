@extends('admins.layouts.app')

@section('contents')
<h3 class="mb-0">Thông tin khách hàng</h3>
<hr />
<div class="row">
    <div class="col mb-3">
        <label class="form-label">Mã khách hàng</label>
        <input type="text" name="ma_khach_hang" class="form-control" placeholder="Mã khách hàng" value="{{ $khachhang->ma_khach_hang}}" readonly>
    </div>
    <div class="col mb-3">
        <label class="form-label">Tên khách hàng</label>
        <input type="text" name="ten_khach_hang" class="form-control" placeholder="Tên khách hàng" value="{{ $khachhang->ten_khach_hang}}" readonly>
    </div>
</div>

<div class="row">
    <div class="col mb-3">
        <label class="form-label">Số điện thoại</label>
        <input type="text" name="so_dien_thoai" class="form-control" placeholder="Số điện thoại" value="{{ $khachhang->so_dien_thoai }}" readonly>
    </div>
    <div class="col mb-3">
        <label class="form-label">Email</label>
        <input type="text" name="email" class="form-control" placeholder="Email" value="{{ $khachhang -> email }}" readonly>
    </div>

</div>
<div class="row">

    <div class="col mb-3">
        <label class="form-label">Địa chỉ</label>
        <input type="text" name="dia_chi" class="form-control" placeholder="Địa chỉ" value="{{ $khachhang ->dia_chi }}" readonly>
    </div>

</div>

@endsection
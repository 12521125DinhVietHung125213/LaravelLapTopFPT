@extends('admins.layouts.app')

@section('contents')
<h3 class="mb-0">Thông tin kho hàng</h3>
<hr />
<div class="row">
    <div class="col mb-3">
        <label class="form-label">Mã sản phẩm</label>
        <input type="text" name="ma_san_pham" class="form-control" placeholder="Mã sản phẩm" value="{{ $khohang->ma_san_pham}}" readonly>
    </div>
    <div class="col mb-3">
        <label class="form-label">Tên sản phẩm</label>
        <input type="text" name="ten_san_pham" class="form-control" placeholder="Tên sản phẩm" value="{{ $khohang->ten_san_pham}}" readonly>
    </div>
</div>

<div class="row">
    <div class="col mb-3">
        <label class="form-label">Số lượng</label>
        <input type="text" name="so_luong" class="form-control" placeholder="Số lượng" value="{{ $khohang->so_luong }}" readonly>
    </div>
    <div class="col mb-3">
        <label class="form-label">Ngày nhập kho</label>
        <input type="text" name="ngay_san_xuat" class="form-control" placeholder="Ngày nhập kho" value="{{ $khohang -> ngay_san_xuat }}" readonly>
    </div>

</div>
<div class="row">
    <div class="col mb-3">
        <label class="form-label">Màu sắc</label>
        <input type="text" name="mau_sac" class="form-control" placeholder="Màu sắc" value="{{ $khohang->mau_sac }}" readonly>
    </div>
   

</div>

@endsection
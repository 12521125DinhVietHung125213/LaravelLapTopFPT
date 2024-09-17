@extends('admins.layouts.app')

@section('title', 'Show Product')

@section('contents')
<h3  class="mb-0">Thông tin : {{$sanpham -> ten_san_pham}}</h3>
<hr>

<div  class="row">
<img style="border-radius: 10px; margin-left: 10px"  src="{{ asset($sanpham->anh_sanpham) }}"  width='150' height='180' class="img img-responsive" />
<div class="row-1">
    <div class="col mb-3">
        <label class="form-label">Mã sản phẩm</label>
        <input type="text" name="ma_danh_muc" class="form-control" placeholder="Mã sản phẩm" value="{{ $sanpham->ma_san_pham }}" readonly>
    </div>
    <div class="col mb-3">
        <label class="form-label">Mã danh mục</label>
        <input type="text" name="ma_danh_muc" class="form-control" placeholder="Mã danh mục" value="{{ $sanpham->ma_danh_muc }}" readonly>
    </div>
</div>
</div>

<hr />

<div class="row">
<div class="col mb-3">
        <label class="form-label">Giá</label>
        <input type="text" name="gia" class="form-control" placeholder="Giá" value=" {{ number_format($sanpham ->gia) }} VNĐ" readonly>
    </div>
<div class="col mb-3">
        <label class="form-label">Số lượng</label>
        <input type="text" name="soluong" class="form-control" placeholder="Số lượng" value="{{ $sanpham->soluong }}" readonly>
    </div>

</div>
<div class="row">
    <div class="col mb-3">
        <label class="form-label">Màu sắc</label>
        <input type="text" name="mau_sac" class="form-control" placeholder="Màu sắc" value="{{ $sanpham->mau_sac }}" readonly>
    </div>
    <div class="col mb-3">
        <label class="form-label">Kích cỡ</label>
        <input type="text" name="size" class="form-control" placeholder="Kích cỡ" value="{{ $sanpham->size }}" readonly>
    </div>

</div>
<div class="row">
    <div class="col mb-3">
        <label class="form-label">Mô tả</label>
        <textarea class="form-control" name="mo_ta" placeholder="Mô tả" readonly>{{ $sanpham ->mo_ta }}</textarea>
    </div>

</div>

@endsection
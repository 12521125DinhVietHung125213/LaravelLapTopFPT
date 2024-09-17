@extends('admins.layouts.app')

@section('title', 'Edit Product')

@section('contents')
<h3 class="mb-0">Cập nhật sản phẩm</h3>

<hr />
<form action="{{ route('san_pham.update', $sanpham->ma_san_pham) }}" enctype="multipart/form-data" method="POST">
    @csrf
    @method('PUT')
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Tên sản phẩm</label>
            <input type="text" name="ten_san_pham" class="form-control" placeholder="Tên sản phẩm" value="{{ $sanpham -> ten_san_pham }}" >
        </div>
        <div class="col mb-3">
            <label class="form-label">Giá tiền</label>
            <input type="text" name="gia" class="form-control" placeholder="Giá tiền" value="{{ $sanpham ->gia }}" >
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Kích cỡ</label>
            <input type="text" name="size" class="form-control" placeholder="Kích cỡ" value="{{ $sanpham->size }}" >
        </div>
        <div class="col mb-3">
            <label class="form-label">Màu sắc</label>
            <input type="text" name="mau_sac" class="form-control" placeholder="Màu sắc" value="{{ $sanpham->mau_sac }}" >
        </div>

    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Mô tả</label>
            <input type="text" name="mo_ta" class="form-control" placeholder="Mô tả" value="{{ $sanpham->mo_ta }}" >
        </div>
        <div class="col mb-3">
            <label class="form-label">Mã danh mục</label>
            <input type="text" name="ma_danh_muc" class="form-control" placeholder="Mã danh mục" value="{{ $sanpham->ma_danh_muc }}" >
        </div>
    </div>
    <div class="row">
    <img style="border-radius: 10px; margin-left: 10px"  src="{{ asset($sanpham->anh_sanpham) }}"  width='150' height='180' class="img img-responsive" />
        <div class="col mb-3">
            <label class="form-label">Ảnh sản phẩm</label>
            <input type="file" name="anh_sanpham" class="form-control" placeholder="Ảnh sản phẩm" value="{{ $sanpham->anh_sanpham }}" readonly>
        </div>
        
    </div>
    <div class="row">
        <div class="d-grid">
            <button style="margin-left: 10px; margin-top: 30px" class="btn btn-warning">Cập nhật</button>
        </div>
    </div>
</form>
@endsection
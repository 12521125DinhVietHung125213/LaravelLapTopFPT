@extends('admins.layouts.app')

@section('title', 'Create Product')

@section('contents')
<h3 class="mb-0">Thêm sản phẩm</h3>
<hr />
<form action="{{ route('san_pham.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row mb-3">
        <div class="col">
            <input type="text" name="ten_san_pham" class="form-control" placeholder="Tên sản phẩm ">
        </div>
        <div class="col">
            <input type="text" name="gia" class="form-control" placeholder="Giá">
        </div>
    </div>
    <div class="row mb-3">
        <div class="col">
            <input type="text" name="size" class="form-control" placeholder="Kích cỡ">
        </div>
        <div class="col">
            <input type="text" name="mau_sac" class="form-control" placeholder="Màu sắc">
        </div>

    </div>
    <div class="row mb-3">
        <div class="col">
            <input type="file" name="anh_sanpham" class="form-control" placeholder="Ảnh sản phẩm">
        </div>
        <div class="col">
            <input type="text" class="form-control" name="ma_danh_muc" placeholder="Mã danh mục">
        </div>
    </div>
    <div class="row mb-3">
        <div class="col">
            <input type="text" name="soluong" class="form-control" placeholder="Số lượng">
        </div>
        <div class="col">
        <textarea name="mo_ta" class="form-control" placeholder="Mô tả"></textarea>
        </div>
        
    </div>

    <div class="row">
        <div class="d-grid">
            <button style="margin-left: 10px;" type="submit" class="btn btn-primary">Thêm</button>
        </div>
    </div>
</form>
@endsection
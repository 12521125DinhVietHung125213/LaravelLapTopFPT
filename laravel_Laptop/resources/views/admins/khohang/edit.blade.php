@extends('admins.layouts.app')

@section('contents')
<h1 class="mb-0">Cập nhật kho hàng</h1>
<hr />
<form action="{{ route('kho_hang.update', $khohang->ma_san_pham) }}" enctype="multipart/form-data" method="POST">
    @csrf
    @method('PUT')
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Tên sản phẩm</label>
            <input type="text" name="ten_san_pham" class="form-control" placeholder="Tên sản phẩm" value="{{ $khohang -> ten_san_pham }}" >
        </div>
        <div class="col mb-3">
            <label class="form-label">Ngày nhập kho</label>
            <input type="text" name="ngay_san_xuat" class="form-control" placeholder="Ngày nhập kho" value="{{ $khohang ->ngay_san_xuat }}" >
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Số lượng</label>
            <input type="text" name="so_luong" class="form-control" placeholder="Màu sắc" value="{{ $khohang->so_luong }}" >
        </div>
        <div class="col mb-3">
            <label class="form-label">Màu sắc</label>
            <input type="text" name="mau_sac" class="form-control" placeholder="Màu sắc" value="{{ $khohang->mau_sac }}" >
        </div>

    </div>
    
    <div class="row">
        <div class="d-grid">
            <button style="margin-left: 10px;" class="btn btn-warning">Cập nhật</button>
        </div>
    </div>
</form>
@endsection
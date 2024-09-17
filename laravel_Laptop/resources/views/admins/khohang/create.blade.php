@extends('admins.layouts.app')

@section('contents')
<h3 class="mb-0">Thêm sản phẩm vào kho</h3>
<hr />
<form action="{{ route('kho_hang.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row mb-3">
        <div class="col">
            <input type="text" name="ten_san_pham" class="form-control" placeholder="Tên sản phẩm ">
        </div>
        <div class="col">
            <input type="text" name="ngay_san_xuat" class="form-control" placeholder="Ngày nhập kho">
        </div>
    </div>
    <div class="row mb-3">
        <div class="col">
            <input type="text" name="so_luong" class="form-control" placeholder="Số lượng">
        </div>
        <div class="col">
            <input type="text" name="mau_sac" class="form-control" placeholder="Màu sắc">
        </div>

    </div>
    <div class="row">
        <div class="d-grid">
            <button style="margin-left: 10px;" type="submit" class="btn btn-primary">Thêm</button>
        </div>
    </div>
</form>
@endsection
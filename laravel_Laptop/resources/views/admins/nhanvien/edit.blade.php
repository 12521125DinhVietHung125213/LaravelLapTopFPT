@extends('admins.layouts.app')

@section('contents')
<h1 class="mb-0">Cập nhật nhân viên</h1>
<hr />
<form action="{{ route('nhan_vien.update', $nhanvien->ma_nhan_vien) }}" enctype="multipart/form-data" method="POST">
    @csrf
    @method('PUT')
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Tên nhân viên</label>
            <input type="text" name="ten_nhan_vien" class="form-control" placeholder="Tên nhân viên" value="{{ $nhanvien -> ten_nhan_vien }}" >
        </div>
        <div class="col mb-3">
            <label class="form-label">Giới tính</label>
            <input type="text" name="gioi_tinh" class="form-control" placeholder="Giới tính" value="{{ $nhanvien ->gioi_tinh }}" >
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Ngày sinh</label>
            <input type="text" name="ngay_sinh" class="form-control" placeholder="Ngày sinh" value="{{ $nhanvien->ngay_sinh }}" >
        </div>
        <div class="col mb-3">
            <label class="form-label">Địa chỉ</label>
            <input type="text" name="dia_chi" class="form-control" placeholder="Địa chỉ" value="{{ $nhanvien->dia_chi }}" >
        </div>

    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Số điện thoại</label>
            <input type="text" name="sdt" class="form-control" placeholder="Số điện thoại" value="{{ $nhanvien->sdt }}" >
        </div>
        <div class="col mb-3">
            <label class="form-label">Căn cước công dân</label>
            <input type="text" name="cmnd" class="form-control" placeholder="Căn cước công dân" value="{{ $nhanvien->cmnd }}" >
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Ảnh nhân viên</label>
            <input type="file" name="anh_nhanvien" class="form-control" placeholder="Ảnh nhân viên" value="{{ $nhanvien->anh_nhanvien }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="d-grid">
            <button style="margin-left: 10px;" class="btn btn-warning">Cập nhật</button>
        </div>
    </div>
</form>
@endsection
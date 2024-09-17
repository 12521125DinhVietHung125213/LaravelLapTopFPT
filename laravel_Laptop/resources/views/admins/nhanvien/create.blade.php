@extends('admins.layouts.app')

@section('contents')
<h3 class="mb-0">Thêm nhân viên</h3>
<hr />
<form action="{{ route('nhan_vien.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row mb-3">
        <div class="col">
            <input type="text" name="ten_nhan_vien" class="form-control" placeholder="Tên nhân viên ">
        </div>
        <div class="col">
            <input type="text" name="gioi_tinh" class="form-control" placeholder="Giới tính">
        </div>
    </div>
    <div class="row mb-3">
        <div class="col">
            <input type="text" name="ngay_sinh" class="form-control" placeholder="Ngày sinh">
        </div>
        <div class="col">
            <input type="text" name="dia_chi" class="form-control" placeholder="Địa chỉ">
        </div>

    </div>
    <div class="row mb-3">
        <div class="col">
            <input type="file" name="sdt" class="form-control" placeholder="Số điện thoại">
        </div>
        <div class="col">
            <input type="text" class="form-control" name="cmnd" placeholder="Căn cước công dân">
        </div>
    </div>
    <div class="row mb-3">

        <div class="col">
            <input type="text" name="anh_nhanvien" class="form-control" placeholder="Ảnh nhân viên">
        </div>
    </div>

    <div class="row">
        <div class="d-grid">
            <button style="margin-left: 10px;" type="submit" class="btn btn-primary">Thêm</button>
        </div>
    </div>
</form>
@endsection
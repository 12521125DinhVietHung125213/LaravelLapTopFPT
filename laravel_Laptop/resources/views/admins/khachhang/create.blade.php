@extends('admins.layouts.app')

@section('contents')
<h3 class="mb-0">Thêm khách hàng</h3>
<hr />
<form action="{{ route('khach_hang.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row mb-3">
        <div class="col">
            <input type="text" name="ten_khach_hang" class="form-control" placeholder="Tên khách hàng ">
        </div>
        <div class="col">
            <input type="text" name="email" class="form-control" placeholder="Email">
        </div>
    </div>
    <div class="row mb-3">
        <div class="col">
            <input type="text" name="so_dien_thoai" class="form-control" placeholder="Số điện thoại">
        </div>
        <div class="col">
            <input type="text" name="dia_chi" class="form-control" placeholder="Địa chỉ">
        </div>

    </div>
    <div class="row">
        <div class="d-grid">
            <button style="margin-left: 10px;" type="submit" class="btn btn-primary">Thêm</button>
        </div>
    </div>
</form>
@endsection
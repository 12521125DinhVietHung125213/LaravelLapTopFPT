@extends('admins.layouts.app')

@section('contents')
<h3 class="mb-0">Thêm đơn hàng</h3>
<hr />
<form action="{{ route('don_hang.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row mb-3">
        <div class="col">
            <input type="text" name="ma_khach_hang" class="form-control" placeholder="Mã khách hàng ">
        </div>
        <div class="col">
            <input type="text" name="ngay_dat_hang" class="form-control" placeholder="Ngày đặt hàng ">
        </div>
    </div>
    <div class="row mb-3">
        <div class="col">
            <input type="text" name="tong_tien" class="form-control" placeholder="Tổng tiền">
        </div>
        

    </div>
    <div class="row">
        <div class="d-grid">
            <button style="margin-left: 10px;" type="submit" class="btn btn-primary">Thêm</button>
        </div>
    </div>
</form>
@endsection
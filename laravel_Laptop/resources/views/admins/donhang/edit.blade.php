@extends('admins.layouts.app')

@section('contents')
<h1 class="mb-0">Cập nhật đơn hàng</h1>
<hr />
<form action="{{ route('don_hang.update', $donhang->ma_don_hang) }}" enctype="multipart/form-data" method="POST">
    @csrf
    @method('PUT')
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Mã khách hàng</label>
            <input type="text" name="ma_khach_hang" class="form-control" placeholder="Mã khách hàng" value="{{ $donhang -> ma_khach_hang }}" >
        </div>
        <div class="col mb-3">
            <label class="form-label">Trạng thái</label>
            <input type="text" name="trang_thai" class="form-control" placeholder="Trạng thái" value="{{$donhang->trang_thai }}" >
        </div>
        
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Tên khách hàng</label>
            <input type="text" name="ten_khach" class="form-control" placeholder="Tên khách hàng" value="{{ $donhang -> ten_khach }}" >
        </div>
        <div class="col mb-3">
            <label class="form-label"> Địa chỉ </label>
            <input type="text" name="dia_chi" class="form-control" placeholder="Ngày đặt hàng" value="{{ $donhang ->dia_chi }}" >
        </div>
    </div>
   
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Tổng tiền</label>
            <input type="text" name="tong_tien" class="form-control" placeholder="Tổng tiền" value="{{$donhang->tong_tien }}" >
        </div>

        <div class="col mb-3">
            <label class="form-label"> Ngày đặt hàng</label>
            <input type="text" name="ngay_dat_hang" class="form-control" placeholder="Ngày đặt hàng" value="{{ $donhang ->ngay_dat_hang }}" >
        </div>

    </div>

    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Số điện thoại</label>
            <input type="text" name="sdt" class="form-control" placeholder="Mã khách hàng" value="{{ $donhang -> sdt }}" >
        </div>
        <div class="col mb-3">
            <label class="form-label">Ghi chú</label>
            <input type="text" name="ghi_chu" class="form-control" placeholder="Mã khách hàng" value="{{ $donhang -> ghi_chu }}" >
        </div>
    </div>
    
    <div class="row">
        <div class="d-grid">
            <button style="margin-left: 10px;" class="btn btn-warning">Cập nhật</button>
        </div>
    </div>
</form>
@endsection
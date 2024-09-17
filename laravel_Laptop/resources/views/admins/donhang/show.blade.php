@extends('admins.layouts.app')

@section('contents')
<h3 class="mb-0">Thông tin đơn hàng</h3>
<hr />
<div class="row">
    <div class="col mb-3">
        <label class="form-label">Mã đơn hàng</label>
        <input type="text" name="ma_don_hang" class="form-control" placeholder="Mã đơn hàng" value="{{ $donhang->ma_don_hang}}" readonly>
    </div>
    <div class="col mb-3">
        <label class="form-label">Mã khách hàng</label>
        <input type="text" name="ma_khach_hang" class="form-control" placeholder="Mã khách hàng" value="{{ $donhang->ma_khach_hang}}" readonly>
    </div>
</div>

<div class="row">
    <div class="col mb-3">
        <label class="form-label">Ngày đặt hàng</label>
        <input type="text" name="ngay_dat_hang" class="form-control" placeholder="Ngày đặt hàng" value="{{ $donhang->ngay_dat_hang }}" readonly>
    </div>
    <div class="col mb-3">
        <label class="form-label">Tổng tiền</label>
        <input type="text" name="tong_tien" class="form-control" placeholder="Tổng tiền" value="{{ number_format($donhang -> tong_tien) VNĐ }}" readonly>
    </div>

</div>


@endsection
@extends('admins.layouts.app')

@section('contents')
<h3 class="mb-0">Thông tin danh mục : {{$danhmuc->ten_danh_muc}}</h3>
<hr />
<div class="row">
   <div class="col mb-3">
        <label class="form-label">Mã danh mục</label>
        <input type="text" name="ma_danh_muc" class="form-control" placeholder="Mã danh mục" value="{{ $danhmuc->ma_danh_muc }}" readonly>
    </div>
    <div class="col mb-3">
        <label class="form-label">Tên danh mục</label>
        <input type="text" name="ten_danh_muc" class="form-control" placeholder="Tên danh mục" value="{{ $danhmuc->ten_danh_muc }}" readonly>
    </div>
</div>


@endsection
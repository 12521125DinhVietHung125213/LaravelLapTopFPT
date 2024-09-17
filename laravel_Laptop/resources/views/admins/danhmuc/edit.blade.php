@extends('admins.layouts.app')

@section('contents')
<h1 class="mb-0">Cập nhật Danh Mục</h1>
<hr />
<form action="{{route('danh_muc_san_pham.update',$danhmuc -> ma_danh_muc)}}" enctype="multipart/form-data" method="POST">
    @csrf
    @method('PUT')
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Tên danh mục</label>
            <input type="text" name="ten_danh_mu" class="form-control" placeholder="Title" value="{{ $danhmuc -> ten_danh_muc}}" >
        </div>
        
    </div>
    <div class="row">
        <div class="d-grid">
            <button style="margin-left: 10px;" class="btn btn-warning">Sửa dữ liệu</button>
        </div>
    </div>
  
</form>
@endsection
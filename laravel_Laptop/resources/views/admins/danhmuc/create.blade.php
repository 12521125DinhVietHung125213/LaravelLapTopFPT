@extends('admins.layouts.app')

@section('contents')
<h3 class="mb-0">Thêm danh mục</h3>
<hr />
<form action="{{route('danh_muc_san_pham.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row mb-3">
        <div class="col">
            <input type="text" name="ten_danh_muc" class="form-control" placeholder="Nhập tên danh mục . . .">
        </div>
    </div>

    <div class="row">
        <div class="d-grid">
            <button style="margin-left: 10px;" type="submit" class="btn btn-primary">Thêm</button>
        </div>
    </div>
    
</form>
@endsection
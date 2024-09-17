@extends('admins.layouts.app')

@section('title', 'Create Product')

@section('contents')
<h3 class="mb-0">Thêm blog</h3>
<hr />
<form action="{{ route('blog.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row mb-3">
        <div class="col">
            <input type="file" name="image_blog" class="form-control" placeholder="Ảnh blog ">
        </div>
    </div>
    <div class="row mb-3">
        <div class="col">
            <input type="text" name="noidung1" class="form-control" placeholder="Nội Dung 1">
        </div>
        <div class="col">
            <input type="text" name="noidung2" class="form-control" placeholder="Nội Dung 2">
        </div>

    </div>
    <div class="row">
        <div class="d-grid">
            <button style="margin-left: 10px;" type="submit" class="btn btn-primary">Thêm</button>
        </div>
    </div>
</form>
@endsection
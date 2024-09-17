@extends('admins.layouts.app')

@section('title', 'Edit Product')

@section('contents')
<h3 class="mb-0">Cập nhật slide</h3>
<hr />
<form action="{{ route('blog.update', $blog->ma_blog) }}" enctype="multipart/form-data" method="POST">
    @csrf
    @method('PUT')
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Ảnh blog</label>
            <input type="file" name="image_blog" class="form-control" placeholder="Ảnh blog" value="{{ $blog -> image_blog }}" >
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Nội dung 1</label>
            <input type="text" name="noidung1" class="form-control" placeholder="Nội dung" value="{{ $blog->noidung1 }}" >
        </div>
        <div class="col mb-3">
            <label class="form-label">Nội dung 2</label>
            <input type="text" name="noidung2" class="form-control" placeholder="Nội dung" value="{{ $blog->noidung2 }}" >
        </div>

    </div>
    
    <div class="row">
        <div class="d-grid">
            <button style="margin-left: 10px;" class="btn btn-warning">Update</button>
        </div>
    </div>
</form>
@endsection
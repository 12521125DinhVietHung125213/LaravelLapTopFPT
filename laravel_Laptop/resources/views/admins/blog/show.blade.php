@extends('admins.layouts.app')

@section('contents')
<h3 class="mb-0">Thông tin blog</h3>
<hr />
<div class="row">
    <div class="col mb-3">
        <label class="form-label">Mã blog</label>
        <input type="text" name="ma_blog" class="form-control" placeholder="Mã blog" value="{{ $blog->ma_blog}}" readonly>
    </div>
    <div class="col mb-3">
        <label class="form-label">Ảnh blog</label>
        <input type="text" name="image_blog" class="form-control" placeholder="Ảnh blog" value="{{ $blog->image_blog}}" readonly>
    </div>
</div>

<div class="row">
    <div class="col mb-3">
        <label class="form-label">Nội dung 1</label>
        <input type="text" name="noidung1" class="form-control" placeholder="Nội dung 1" value="{{ $blog->noidung1 }}" readonly>
    </div>
    <div class="col mb-3">
        <label class="form-label">Nội dung 2</label>
        <input type="text" name="noidung2" class="form-control" placeholder="Nội dung 2" value="{{ $blog -> noidung2 }}" readonly>
    </div>

</div>

@endsection
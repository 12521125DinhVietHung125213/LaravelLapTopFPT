@extends('admins.layouts.app')

@section('title', 'Edit Product')

@section('contents')
<h3 class="mb-0">Cập nhật slide</h3>
<hr />
<form action="{{ route('slider.update', $slider->ma_slider) }}" enctype="multipart/form-data" method="POST">
    @csrf
    @method('PUT')
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Ảnh slider</label>
            <input type="file" name="image_slider" class="form-control" placeholder="Ảnh slider" value="{{ $slider -> image_slider }}" >
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Nội dung 1</label>
            <input type="text" name="text1" class="form-control" placeholder="Nội dung 1" value="{{ $slider->text1 }}" >
        </div>
        <div class="col mb-3">
            <label class="form-label">Nội dung 2</label>
            <input type="text" name="text2" class="form-control" placeholder="Nội dung 2" value="{{ $slider->text2 }}" >
        </div>

    </div>
    
    <div class="row">
        <div class="d-grid">
            <button style="margin-left: 10px;" class="btn btn-warning">Cập nhật</button>
        </div>
    </div>
</form>
@endsection
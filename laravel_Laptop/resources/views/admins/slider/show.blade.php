@extends('admins.layouts.app')

@section('contents')
<h3 class="mb-0">Thông tin slide</h3>
<hr />
<div class="row">
    <div class="col mb-3">
        <label class="form-label">Mã slider</label>
        <input type="text" name="ma_slider" class="form-control" placeholder="Mã slider" value="{{ $slider->ma_slider}}" readonly>
    </div>
    <div class="col mb-3">
        <label class="form-label">Ảnh slider</label>
        <input type="text" name="image_slider" class="form-control" placeholder="Ảnh slider" value="{{ $slider->image_slider}}" readonly>
    </div>
</div>

<div class="row">
    <div class="col mb-3">
        <label class="form-label">Nội dung 1</label>
        <input type="text" name="text1" class="form-control" placeholder="Nội dung 1" value="{{ $slider->text1 }}" readonly>
    </div>
    <div class="col mb-3">
        <label class="form-label">Nội dung 2</label>
        <input type="text" name="text2" class="form-control" placeholder="Nội dung 2" value="{{ $slider -> text2 }}" readonly>
    </div>

</div>

@endsection
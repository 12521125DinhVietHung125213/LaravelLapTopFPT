@extends('admins.layouts.app')

@section('title', 'Create Product')

@section('contents')
<h3 class="mb-0">Thêm slide</h3>
<hr />
<form action="{{ route('slider.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row mb-3">
        <div class="col">
            <input type="file" name="image_slider" class="form-control" placeholder="Ảnh slider ">
        </div>
    </div>
    <div class="row mb-3">
        <div class="col">
            <input type="text" name="text1" class="form-control" placeholder="Nội Dung 1">
        </div>
        <div class="col">
            <input type="text" name="text2" class="form-control" placeholder="Nội Dung 2">
        </div>

    </div>
    <div class="row">
        <div class="d-grid">
            <button style="margin-left: 10px;" type="submit" class="btn btn-primary">Thêm</button>
        </div>
    </div>
</form>
@endsection
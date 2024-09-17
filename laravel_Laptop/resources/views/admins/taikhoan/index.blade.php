@extends('admins.layouts.app')

@section('title', 'Home Product')

@section('contents')
@if(Session::has('success'))
<div class="alert alert-success" role="alert">
    {{ Session::get('success') }}
</div>
@endif

    <div class="card shadow mb-4">
        <div class="d-flex align-items-center justify-content-between card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Dữ Liệu Tài Khoản</h6>
            <a href="{{ route('tai_khoan.create') }}" class="btn btn-primary">Thêm tài khoản</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Mã tài khoản</th>
                            <th>Tên đăng nhập</th>
                            <th>Mật khẩu</th>
                            <th>Loại tài khoản</th>
                            <th>Chi tiết</th>
                            <th>Sửa</th>
                            <th>Xóa</th>

                        </tr>
                    </thead>

                    <tbody>

                        @foreach ($taikhoan as $item)
                        <tr>
                            <td>{{$item -> id}}</td>
                            <td>{{$item -> email}}</td>
                            <td>{{ substr($item->password, 0, 10) }}...</td>
                            <td>{{$item -> is_admin}}</td>
                            <td><a href="{{route ('tai_khoan.show' , $item -> id)}}" type="button" class="btn btn-primary">Chi Tiết</a></td>
                            <td><a href="{{route ('tai_khoan.edit' , $item -> id)}}" class="btn btn-warning">Sửa</a></td>
                            <td>
                                <form method="POST" action="{{route('tai_khoan.destroy', $item->id )}}">
                                    @csrf
                                    @method('DELETE')
                                    <button type='submit' onclick="deleteConfirm(event)" class='btn btn-danger'>Xóa</button>
                                </form>
                            </td>


                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>



<script>
    window.deleteConfirm = function(e) {
        e.preventDefault();
        var form = e.target.form;
        Swal.fire({
            title: "Bạn có muốn xóa?",
            text: "Dữ liệu của bạn sẽ bị xóa !",
            icon: "Cảnh báo",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Xóa ",
            cancelButtonText: "Không"
        }).then((result) => {
            if (result.isConfirmed) {
                form.submit();
            }
        });
    }
</script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


<!-- Bootstrap core JavaScript-->
<script src="{{asset('adminclient/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('adminclient/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

<!-- Core plugin JavaScript-->
<script src="{{asset('adminclient/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

<!-- Custom scripts for all pages-->
<script src="{{asset('adminclient/js/sb-admin-2.min.js')}}"></script>

<!-- Page level plugins -->

<!-- Page level custom scripts -->
<script src="{{asset('adminclient/vendor/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('adminclient/vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('adminclient/js/demo/datatables-demo.js')}}"></script>

<!-- Custom fonts for this template -->
<link href="{{asset('adminclient/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

<!-- Custom styles for this template -->
<link href="{{asset('adminclient/css/sb-admin-2.min.css')}}" rel="stylesheet">

<!-- Custom styles for this page -->
<link href="{{asset('adminclient/vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
@endsection
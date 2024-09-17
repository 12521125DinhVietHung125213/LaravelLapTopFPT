@extends('admins.layouts.app')

@section('contents')
@if(Session::has('success'))
<div class="alert alert-success" role="alert">
    {{ Session::get('success') }}
</div>
@endif

    <div class="card shadow mb-4">
        <div class="d-flex align-items-center justify-content-between card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Thông tin đơn hàng</h6>
            <a href="" class="btn btn-primary">Thêm chi tiết </a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Mã đơn hàng</th>
                            <th>Mã sản phẩm</th>
                            <th>Tên sản phẩm</th>
                            <th>Kích cỡ</th>
                            <th>Màu sắc</th>
                            <th>Số lượng</th>
                            <th>Giá</th>

                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($sanPhams as $chiTiet)
                        <tr>
                            <td>{{$chiTiet -> ma_don_hang}}</td>
                            <td>{{$chiTiet -> ma_san_pham}}</td>
                            <td>{{$chiTiet -> ten_san_pham}}</td>
                            <td>{{$chiTiet -> kich_co}}</td>
                            <td>{{$chiTiet -> mau_sac}}</td>
                            <td>{{$chiTiet -> so_luong}}</td>
                            <td>{{number_format($chiTiet -> gia)}} VNĐ</td>
                            
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
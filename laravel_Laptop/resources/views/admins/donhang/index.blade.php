@extends('admins.layouts.app')

@section('contents')
@if(Session::has('success'))
<div class="alert alert-success" role="alert">
    {{ Session::get('success') }}
</div>
@endif

    <div class="card shadow mb-4">
        <div class="d-flex align-items-center justify-content-between card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Dữ Liệu Đơn Hàng</h6>
            <a href="{{ route('don_hang.create') }}" class="btn btn-primary">Thêm đơn hàng </a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Mã ĐH</th>
                            <th>Mã KH</th>
                            <th>Tên KH</th>
                            <th>Ngày đặt</th>
                            <th>Tổng tiền</th>
                            <th>Địa chỉ</th>
                            <th>Ghi chú</th>
                            <th>Trạng thái</th>
                            <th>Chi tiết</th>
                            <th>Duyệt</th>
                            <th>Xóa</th>

                        </tr>
                    </thead>

                    <tbody>

                    @foreach ($donhang as $item)
                        <tr>
                            <td>{{$item -> ma_don_hang}}</td>
                            <td>{{$item -> ma_khach_hang}}</td>
                            <td>{{$item -> ten_khach}}</td>
                            <td>{{$item -> ngay_dat_hang}}</td>
                            <td>{{number_format($item -> tong_tien)}} VNĐ</td>
                            <td>{{$item -> dia_chi}}</td>
                            <td>{{$item -> ghi_chu}}</td>
                            <td>
                                @if($item->trang_thai == 1)
                                    Đã duyệt
                                @else
                                    Chưa duyệt
                                @endif
                            </td>
                            <td><a href="{{ route('chitietdonhang.show',$item -> ma_don_hang)}}" type="button" class="btn btn-primary">Chi Tiết</a></td>
                            <td><a href="{{route ('don_hang.edit' , $item -> ma_don_hang)}}" class="btn btn-warning">Duyệt</a></td>
                            <td>
                                <form method="POST" action="{{route('don_hang.destroy', $item->ma_don_hang )}}">
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
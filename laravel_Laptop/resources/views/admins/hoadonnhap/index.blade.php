@extends('admins.layouts.app')

@section('contents')
@if(Session::has('success'))
<div class="alert alert-success" role="alert">
    {{ Session::get('success') }}
</div>
@endif

    <div class="card shadow mb-4">
        <div class="d-flex align-items-center justify-content-between card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Dữ Liệu Hóa Đơn Nhập</h6>
            <a href="" class="btn btn-primary">Thêm Hóa Đơn</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Mã HĐ</th>
                            <th>Mã NV</th>
                            <th>Tên NCC</th>
                            <th>SĐT</th>
                            <th>Email</th>
                            <th>Địa chỉ</th>
                            <th>Ngày nhập</th>
                            <th>Tổng tiền</th>
                            <th>Chi Tiết</th>
                            <th>Sửa</th>
                            <th>Xóa</th>
                            

                        </tr>
                    </thead>

                    <tbody>

                        <tr>
                           <td>1</td>
                           <td>2</td>
                           <td>May Nhật Tân</td>
                           <td>0992922332</td>
                           <td>nhattan@gmail.com</td>
                           <td>Hà Nội</td>
                           <td>2024-05-18</td>
                           <td>2,000,000 VNĐ</td>
                            <td><a href="" type="button" class="btn btn-primary">Chi Tiết</a></td>
                            <td><a href="" class="btn btn-warning">Sửa</a></td>
                            <td>
                                <form method="POST" action="">
                                    @csrf
                                    @method('DELETE')
                                    <button type='submit' onclick="deleteConfirm(event)" class='btn btn-danger'>Xóa</button>
                                </form>
                            </td>


                        </tr>
                    </tbody>
                    <tbody>

                        <tr>
                           <td>2</td>
                           <td>1</td>
                           <td>Dior</td>
                           <td>0992992831</td>
                           <td>dior@gmail.com</td>
                           <td>Singapo</td>
                           <td>2024-05-21</td>
                           <td>1,590,000 VNĐ</td>
                            <td><a href="" type="button" class="btn btn-primary">Chi Tiết</a></td>
                            <td><a href="" class="btn btn-warning">Sửa</a></td>
                            <td>
                                <form method="POST" action="">
                                    @csrf
                                    @method('DELETE')
                                    <button type='submit' onclick="deleteConfirm(event)" class='btn btn-danger'>Xóa</button>
                                </form>
                            </td>


                        </tr>
                    </tbody>
                    <tbody>

                        <tr>
                           <td>4</td>
                           <td>2</td>
                           <td>Tân đệ 9</td>
                           <td>0122922332</td>
                           <td>td9@gmail.com</td>
                           <td>Thái Bình</td>
                           <td>2024-05-23</td>
                           <td>2,399,000 VNĐ</td>
                            <td><a href="" type="button" class="btn btn-primary">Chi Tiết</a></td>
                            <td><a href="" class="btn btn-warning">Sửa</a></td>
                            <td>
                                <form method="POST" action="">
                                    @csrf
                                    @method('DELETE')
                                    <button type='submit' onclick="deleteConfirm(event)" class='btn btn-danger'>Xóa</button>
                                </form>
                            </td>


                        </tr>
                    </tbody>
                    <tbody>

                        <tr>
                           <td>7</td>
                           <td>2</td>
                           <td>Chí hà</td>
                           <td>0922322332</td>
                           <td>chiha@gmail.com</td>
                           <td>Bắc Ninh</td>
                           <td>2024-05-24</td>
                           <td>1,000,000 VNĐ</td>
                            <td><a href="" type="button" class="btn btn-primary">Chi Tiết</a></td>
                            <td><a href="" class="btn btn-warning">Sửa</a></td>
                            <td>
                                <form method="POST" action="">
                                    @csrf
                                    @method('DELETE')
                                    <button type='submit' onclick="deleteConfirm(event)" class='btn btn-danger'>Xóa</button>
                                </form>
                            </td>


                        </tr>
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
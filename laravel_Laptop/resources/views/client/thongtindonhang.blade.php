<!DOCTYPE html>
<html lang="en">

<head>
	<title>Shoping Cart</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="client/images/icons/favicon.png" />
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('client/vendor/bootstrap/css/bootstrap.min.css')}}">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('client/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('client/fonts/iconic/css/material-design-iconic-font.min.css')}}">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('client/fonts/linearicons-v1.0.0/icon-font.min.css')}}">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('client/vendor/animate/animate.css')}}">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('client/vendor/css-hamburgers/hamburgers.min.css')}}">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('client/vendor/animsition/css/animsition.min.css')}}">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('client/vendor/select2/select2.min.css')}}">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('client/vendor/perfect-scrollbar/perfect-scrollbar.css')}}">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('client/css/util.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('client/css/main.css')}}">
	<link rel="stylesheet" href="{{asset('client/css/giohang2.css')}}">
	<!--===============================================================================================-->
</head>

<body class="animsition">

	<!-- Header -->
	<header class="header-v4">
		<!-- Header desktop -->
		<div class="container-menu-desktop">
			<!-- Topbar -->
			@include('client.layouts.navbar')

		</div>

		<!-- Modal Search -->
		<div class="modal-search-header flex-c-m trans-04 js-hide-modal-search">
			<div class="container-search-header">
				<button class="flex-c-m btn-hide-modal-search trans-04 js-hide-modal-search">
					<img src="client/images/icons/icon-close2.png" alt="CLOSE">
				</button>

				<form class="wrap-search-header flex-w p-l-15">
					<button class="flex-c-m trans-04">
						<i class="zmdi zmdi-search"></i>
					</button>
					<input class="plh3" type="text" name="search" placeholder="Search...">
				</form>
			</div>
		</div>
	</header>

	<!-- Cart -->
	@include('client.layouts.giohang')


	<!-- breadcrumb -->
	<div class="container1">
		<div style="margin-left: 50px;" class="bread-crumb flex-w p-l-25 p-r-15 p-t-30 p-lr-0-lg">
			<a href="{{route('trangchu')}}" class="stext-109 cl8 hov-cl1 trans-04">
				Trang chủ
				<i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
			</a>

			<span class="stext-109 cl4">
				Thông tin đơn hàng
			</span>
		</div>
	</div>


	<!-- Shoping Cart -->
	
		<main id="new-main">
		<form  class="bg0 p-t-75 p-b-85">
			<div class="container1">
				<div class="row">
					
					<div style="margin-left: 50px;" class="col-lg-10 col-xl-10  m-b-50">
						<div class="m-l-25 m-r--38 m-lr-0-xl">
							<div class="wrap-table-shopping-cart">
								<table id='cart' class="table-shopping-cart">
									<tr class="table_head">
										<th class="column-1">Sản phẩm</th>
										<th class="column-2"></th>
										<th class="column-3">Giá tiền</th>
										<th class="column-3">Kích cỡ</th>
										<th class="column-3">Màu sắc</th>
										<th class="column-3">Số lượng</th>
										<th class="column-3">Tổng tiền</th>
										<th class="column-6">Thông tin vận chuyển</th>
									</tr>

									<tr data-id="" class="table_row">
										<td class="column-1">
											<div class="how-itemcart1">
												<img src="client/images/Screenshot 2024-05-21 161054.png" alt="IMG">
											</div>
										</td>
										<td class="column-2">Áo Thun Nam Chạy Bộ Graphic Heartbeat</td>
										
										<td class="column-3"> 200,000 VNĐ

										<td>XL</td>

										<td>Xám</td>

                                        <td>2</td>

										<td class="column-3">400,000 VNĐ</td>

										<td class="actions" data-th="">
											Đang chờ xác nhận
										</td>
									</tr>
								</table>
							</div>

						</div>
					</div>
				</div>
			</form>
        </main>

	




	<!-- Footer -->
	@include('client.layouts.fotter')


	<!-- Back to top -->
	<div class="btn-back-to-top" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="zmdi zmdi-chevron-up"></i>
		</span>
	</div>

	<!--===============================================================================================-->
	<script src="{{asset('client/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
	<!--===============================================================================================-->
	<script src="{{asset('client/vendor/animsition/js/animsition.min.js')}}"></script>
	<!--===============================================================================================-->
	<script src="{{asset('client/vendor/bootstrap/js/popper.js')}}"></script>
	<script src="{{asset('client/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
	<!--===============================================================================================-->
	<script src="{{asset('client/vendor/select2/select2.min.js')}}"></script>
	<script>
		$(".js-select2").each(function() {
			$(this).select2({
				minimumResultsForSearch: 20,
				dropdownParent: $(this).next('.dropDownSelect2')
			});
		})
	</script>
	<!--===============================================================================================-->
	<script src="{{asset('client/vendor/MagnificPopup/jquery.magnific-popup.min.js')}}"></script>
	<!--===============================================================================================-->
	<script src="{{asset('client/vendor/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
	<script>
		$('.js-pscroll').each(function() {
			$(this).css('position', 'relative');
			$(this).css('overflow', 'hidden');
			var ps = new PerfectScrollbar(this, {
				wheelSpeed: 1,
				scrollingThreshold: 1000,
				wheelPropagation: false,
			});

			$(window).on('resize', function() {
				ps.update();
			})
		});
	</script>
	<!--===============================================================================================-->
	<script src="{{asset('client/js/main.js')}}"></script>

	<script type="text/javascript">
		$(".cart_update").click(function(e) {
			e.preventDefault();

			var ele = $(this);
			debugger;
			$.ajax({
				url: "{{ route('updateGioHang')}}",
				method: "patch",
				data: {
					_token: '{{ csrf_token() }}',
					ma_san_pham: ele.parents("tr").attr("data-id"),
					soluong: ele.parents("tr").find(".num-product").val()
				},
				success: function(response) {
					window.location.reload();
				}

			});

		});

		$(".cart_remove").click(function(e) {
			e.preventDefault();

			var ele = $(this);

			if (confirm("Bạn có thật sự muốn xóa sản phẩm khỏi giỏ hàng ?")) {
				$.ajax({
					url: "{{ route('xoaGioHang') }}",
					method: "DELETE",
					data: {
						_token: '{{ csrf_token() }}',
						ma_san_pham: ele.parents("tr").attr("data-id")
					},
					success: function(response) {
						window.location.reload();
					}
				});
			}



		});
	</script>

	<script>
		const btnThanhtoan = document.getElementById('thanhtoan')
		const formThongtin = document.forms['thongtin']
		btnThanhtoan.onclick = () =>{
			formThongtin.submit();
			alert('Xác nhận đặt hàng ?');
		}
	</script>





</body>

</html>
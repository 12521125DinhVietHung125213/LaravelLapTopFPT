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
		<div class="wrap-header-mobile">
			<!-- Logo moblie -->
			<div class="logo-mobile">
				<a href="index.html"><img src="client/images/icons/logo-01.png" alt="IMG-LOGO"></a>
			</div>

			<!-- Icon header -->
			<div class="wrap-icon-header flex-w flex-r-m m-r-15">
				<div class="icon-header-item cl2 hov-cl1 trans-04 p-r-11 js-show-modal-search">
					<i class="zmdi zmdi-search"></i>
				</div>

				<div class="icon-header-item cl2 hov-cl1 trans-04 p-r-11 p-l-10 icon-header-noti js-show-cart" data-notify="2">
					<i class="zmdi zmdi-shopping-cart"></i>
				</div>

				<a href="#" class="dis-block icon-header-item cl2 hov-cl1 trans-04 p-r-11 p-l-10 icon-header-noti" data-notify="0">
					<i class="zmdi zmdi-favorite-outline"></i>
				</a>
			</div>

			<!-- Button show menu -->
			<div class="btn-show-menu-mobile hamburger hamburger--squeeze">
				<span class="hamburger-box">
					<span class="hamburger-inner"></span>
				</span>
			</div>
		</div>
		<!-- Menu Mobile -->
		<div class="menu-mobile">
			<ul class="topbar-mobile">
				<li>
					<div class="left-top-bar">
						Free shipping for standard order over $100
					</div>
				</li>

				<li>
					<div class="right-top-bar flex-w h-full">
						<a href="#" class="flex-c-m p-lr-10 trans-04">
							Help & FAQs
						</a>

						<a href="#" class="flex-c-m p-lr-10 trans-04">
							My Account
						</a>

						<a href="#" class="flex-c-m p-lr-10 trans-04">
							EN
						</a>

						<a href="#" class="flex-c-m p-lr-10 trans-04">
							USD
						</a>
					</div>
				</li>
			</ul>

			<ul class="main-menu-m">
				<li>
					<a href="index.html">Home</a>
					<ul class="sub-menu-m">
						<li><a href="index.html">Homepage 1</a></li>
						<li><a href="home-02.html">Homepage 2</a></li>
						<li><a href="home-03.html">Homepage 3</a></li>
					</ul>
					<span class="arrow-main-menu-m">
						<i class="fa fa-angle-right" aria-hidden="true"></i>
					</span>
				</li>

				<li>
					<a href="product.html">Shop</a>
				</li>

				<li>
					<a href="shoping-cart.html" class="label1 rs1" data-label1="hot">Features</a>
				</li>

				<li>
					<a href="blog.html">Blog</a>
				</li>

				<li>
					<a href="about.html">About</a>
				</li>

				<li>
					<a href="contact.html">Contact</a>
				</li>
			</ul>
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
				Giỏ hàng
			</span>
		</div>
	</div>


	<!-- Shoping Cart -->
	
		<main id="new-main">
		<form  class="bg0 p-t-75 p-b-85">
			<div class="container1">
				<div class="row">
					
					<div style="margin-left: 50px;" class="col-lg-10 col-xl-9  m-b-50">
						<div class="m-l-25 m-r--38 m-lr-0-xl">
							<div class="wrap-table-shopping-cart">
								<table id='cart' class="table-shopping-cart">
									<tr class="table_head">
										<th class="column-1">Sản phẩm</th>
										<th class="column-2"></th>
										<th class="column-3">Giá tiền</th>
										<th class="column-3">Kích cỡ</th>
										<th class="column-3">Màu sắc</th>
										<th style="padding-left: 20px;" class="column-3">Số lượng</th>
										<th class="column-5">Tổng tiền</th>
										<th class="column-6"></th>
									</tr>
									@php
									$total = 0
									@endphp
									@if(session('cart'))
									@foreach (session('cart') as $ma_san_pham => $details )
									@php
									$total += $details['gia_tien'] * $details['soluong']
									@endphp
									<tr data-id="{{$ma_san_pham}}" class="table_row">
										<td class="column-1">
											<div class="how-itemcart1">
												<img src="/{{ $details['anh_san_pham'] }}" alt="IMG">
											</div>
										</td>
										<td class="column-2">{{$details['ten_san_pham']}}</td>
										
										<td class="column-3">{{number_format($details['gia_tien']) }} VNĐ

										<td>{{$details['kichco']}}</td>

										<td>{{$details['mausac']}}</td>

										<td data-th="soluong" class="column-4">
											<div class="wrap-num-product flex-w m-l-auto m-r-0">
												<div class="btn-num-product-down cl8 hov-btn3 trans-04 flex-c-m cart_update">
													<i class="fs-16 zmdi zmdi-minus"></i>
												</div>

												<input class="mtext-104 num-product cl3 txt-center cart_update " type="number" name="num-product1" value="{{$details['soluong']}}">

												<div class="btn-num-product-up cl8 hov-btn3 trans-04 flex-c-m cart_update">
													<i class="fs-16 zmdi zmdi-plus"></i>
												</div>
											</div>
										</td>

										<td style="padding-right: 20px;" class="column-4"> {{number_format($details['gia_tien'] * $details['soluong'])}} VNĐ</td>

										<td class="actions" data-th="">
											<button class="btn btn-danger btn-sm cart_remove"><i class="fa fa-trash-o"></i> Xóa</button>
										</td>
									</tr>
									@endforeach
									@endif


								</table>
							</div>

							<div class="flex-w flex-sb-m bor15 p-t-18 p-b-15 p-lr-40 p-lr-15-sm">
								<div class="flex-w flex-m m-r-20 m-tb-5">
									<input class="stext-104 cl2 plh4 size-117 bor13 p-lr-20 m-r-10 m-tb-5" type="text" name="coupon" placeholder="Mã giảm giá">

									<div class="flex-c-m stext-101 cl2 size-118 bg8 bor13 hov-btn3 p-lr-15 trans-04 pointer m-tb-5">
										Áp dụng
									</div>
								</div>


								<a class="flex-c-m stext-101 cl2 size-119 bg8 bor13 hov-btn3 p-lr-15 trans-04 pointer m-tb-10" href="/sanphamuser">Tiếp tục mua</a>

							</div>
						</div>
					</div>
				</div>
			</form>
            <div class="cartPage-container">
                <form name ="thongtin" class="info" action="{{ route('placeOrder')}}" method="post">
					@csrf
                    <div class="info-header">
                        <h2>Thông tin giao hàng </h2>
                    </div>
                    <div class="row info-body">
                        <div class="col-p-6"style="flex: 0 0 50%; max-width: 50% ">
                            <input name="ten" class="input-name" placeholder="Họ tên" type="text" required>
                        </div>
                        <div class="col-p-6" style="flex: 0 0 50%; max-width: 50%; padding-left: 5px">
                            <input name="sodt" class="input-phone" placeholder="Số điện thoại" type="text" required>
                        </div>
                        <div class="col-email" style="flex: 0 0 100%; max-width: 100%;">
                            <input name="email" type="Email" class="input-email" placeholder="Email">
                        </div>
						<div class="adress col p-4" style=" flex: 0 0 33.33333%;max-width: 33.33333%; ; margin-left : -18px">
                        <select name="thanhpho" id="" required>
                            <option value="">Chọn Tỉnh/Thành Phố</option>
                            <option value="Hưng Yên ">Hưng yên</option>
                            <option value="Hà Nội">Hà nội</option>
                            <option value="Hải Phòng">Hải phòng</option>
                        </select>
                    </div>
                    <div class="adress col p-4"style=" padding-left: -5px; flex: 0 0 33.33333%;max-width: 33.33333%;" >
                        <select name="huyen" id="" required>
                            <option value="">Chọn Quận/Huyện</option>
                            <option value="hungyen">Hưng yên</option>
                            <option value="hanoi">Hà nội</option>
                            <option value="haiphong">Hỉa phòng</option>
                        </select>
                    </div>
                    <div class="adress col p-4" style=" flex: 0 0 33.33333%;max-width: 33.33333%; ">
                        <select name="xa" id="" required>
                            <option value="">Phường/Xã</option>
                            <option value="Thái Thụy">Thái Thụy</option>
                            <option value="Hưng Hà">Hưng Hà</option>
                            <option value="Diêm Điền">Diêm Điền</option>
                        </select>
                    </div>
                        <div class="col-p-12">
                            <p style="margin-left:10px ;">Nhập ghi chú dưới đây (nếu có):</p>
                            <input name ="ghichu" type="text" class="input-note" placeholder="Ghi chú thêm">
                        </div>
						
                    </div>
                    <div class="payments">
                        <h2 class="payments">Hình thức thanh toán</h2>
                        <div class="payments-item active">
                            <input type="radio" class="check" name="check" value="ZaloPay">
                            <img src="https://www.coolmate.me/images/logo-zalopay.svg" alt="">
                            <p class="payments-item__text">Ví điện tử ZaloPay</p>
                        </div>
                        <div class="payments-item">
                            <input type="radio" class="check" name="check" value="MOMO">
                            <img style="width:35px;height:35px;" src="https://shop-document.aftee.vn/images/AFTEElogo_40x40.svg"
                                alt="">
                            <p style="padding-left: 20px;" class="payments-item__text">COD - Thanh toán khi nhận hàng</p>
                        </div>
						<div class="payments-item">
                            <input type="radio" class="check" name="check" value="MOMO">
                            <img style="width:35px;height:35px;" src="https://www.coolmate.me/images/momo-icon.png"
                                alt="">
                            <p style="padding-left: 20px;" class="payments-item__text">MOMO</p>
                        </div>
						<div class="payments-item">
                            <input type="radio" class="check" name="check" value="VNPay">
                            <img style="width:40px;" src="https://gateway.zalopay.vn/image/emvco/icon-vietqr.svg" alt="">
                            <div class="payments-item__text">
								<p style="padding-left: 12px;">Quét QR & Thanh toán bằng ứng dụng ngân hàng</p>
                                <p style="padding-left: 12px;">TMờ ứng dụng ngân hàng để thanh toán</p>
                            </div>
                        </div>
                        <div class="payments-item">
                            <input type="radio" class="check" name="check" value="VNPay">
                            <img style="width:55px;" src="https://www.coolmate.me/images/vnpay.png" alt="">
                            <div class="payments-item__text">
								<p>Thẻ ATM / Internet Banking</p>
                                <p>Thẻ tín dụng (Credit card) / Thẻ ghi nợ (Debit card) VNPay QR</p>
                            </div>
                        </div>
						

                    </div>
                </form>
                <div class="list-product">
				<div class="Checkout">
						<div class="bor10 p-lr-40 p-t-30 p-b-40 m-l-63 m-r-40 m-lr-0-xl p-lr-15-sm">
							<h4 class="mtext-109 cl2 p-b-30">
								Tổng giỏ hàng
							</h4>

							<div class="flex-w flex-t bor12 p-b-13">
								<div class="size-208">
									<span class="stext-110 cl2">
										Tạm tính :
									</span>
								</div>

								<div class="size-209">
									<span class="mtext-110 cl2">
										{{number_format($total) }} VNĐ
									</span>
								</div>
							</div>

							<div class="flex-w flex-t p-t-27 p-b-33">
								<div class="size-208">
									<span class="mtext-101 cl2">
										Tổng:
									</span>
								</div>

								<div class="size-209 p-t-1">
									<span class="mtext-110 cl2">
										{{number_format($total) }} VNĐ
									</span>
								</div>
							</div>

							
								<button type="button" id = "thanhtoan" class="flex-c-m stext-101 cl0 size-116 bg3 bor14 hov-btn3 p-lr-15 trans-04 pointer">
									Thanh toán đặt hàng
								</button>
							
						</div>
					</div>
                    
                </div>

            </div>
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
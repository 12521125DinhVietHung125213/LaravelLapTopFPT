<div class="top-bar">
    <div class="content-topbar flex-sb-m h-full container">
        <div class="left-top-bar">
            Hè năng động cùng Coolmate tặng ngay vocher 299k
        </div>

        <div class="right-top-bar flex-w h-full">
            <a href="" class="flex-c-m trans-04 p-lr-25">
                Trợ giúp
            </a>
            <li class="nav-item dropdown no-arrow flex-c-m trans-04 p-lr-25">
                <a href="" class="nav-link dropdown-toggle" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Tài khoản

                </a>

                <!-- Dropdown - User Information -->
                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" style="z-index : 9999 ; position :relative ; margin-right: -40px;" aria-labelledby="userDropdown">

                    @if (Auth :: user())

                    <a class="dropdown-item" href="#">
                        <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>

                        <span>{{Auth :: user()->name}}</span>

                    </a>

                    <a class="dropdown-item" href="#">
                        <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                        Cài đặt
                    </a>
                    <a class="dropdown-item" href="#">
                        <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                        Hoạt động
                    </a>
                    <a class="dropdown-item" href="/thongtindonhang">
                        <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                        Đơn hàng của tôi
                    </a>

                    <div class="dropdown-divider"></div>

                    <div class="dropdown-item" data-toggle="modal" data-target="#logoutModal">
                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>

                        <form action="{{ route('logout') }}" method="POST">

                            @csrf
                            @method('DELETE')

                            <button class="dropdown-item">Đăng xuất</button>
                        </form>
                    </div>

                    @else

                    <div class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>

                        <form action="{{ route('login') }}" method="GET">

                            @csrf
                            @method('GET')

                            <button type="submit" class="dropdown-item">Đăng nhập</button>

                        </form>
                    </div>

                    <div class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>

                        <form action="{{ route('register') }}" method="GET">

                            @csrf
                            @method('GET')

                            <button type="submit" class="dropdown-item">Đăng ký</button>

                        </form>
                    </div>



                    @endif
                </div>
            </li>




            <a href="#" class="flex-c-m trans-04 p-lr-25">
                Ngôn Ngữ
            </a>

            <a href="#" class="flex-c-m trans-04 p-lr-25">
                Ví
            </a>
        </div>
    </div>
</div>
<div class="wrap-menu-desktop">
    <nav class="limiter-menu-desktop container">

        <!-- Logo desktop -->
        <a href="#" class="logo">
            <img src="https://www.coolmate.me/images/logo-coolmate-new.svg?v=1" alt="IMG-LOGO">
        </a>

        <!-- Menu desktop -->
        <div class="menu-desktop">
            <ul style="margin-left : -50px" class="main-menu">
                <li class="active-menu">
                    <a href="/trangchu">Trang chủ</a>

                </li>
                <li class="">
                    <a href="/trangchu">Danh mục</a>
                    <ul class="sub-menu">
                        @foreach ($showdanhmuc as $item)
                        <li><a href="">{{$item -> ten_danh_muc}}</a></li>
                        @endforeach


                    </ul>

                </li>

                <li class="label1" data-label1="hot sale" >
                    <a href="/sanphamuser">Sản phẩm</a>

                </li>

                <li class="label1" data-label1="hot">
                    <a href="/giohang">Ưu đãi</a>
                </li>

                <li>
                    <a href="{{route('userblog')}}">Blog</a>
                </li>

                <li>
                    <a href="/about">Tìm hiểu</a>
                </li>

                <li>
                    <a href="/lienhe">Liên hệ</a>
                </li>
            </ul>
        </div>

        <!-- Icon header -->
        <div class="wrap-icon-header flex-w flex-r-m">
            <div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 js-show-modal-search">
                <i class="zmdi zmdi-search"></i>
            </div>

            <div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti js-show-cart" data-notify="{{count((array) session('cart'))}}">
                <i class="zmdi zmdi-shopping-cart"></i>
            </div>

            <a href="#" class="dis-block icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti" data-notify="0">
                <i class="zmdi zmdi-favorite-outline"></i>
            </a>
        </div>
    </nav>
</div>
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">COOLMATE <sup></sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="{{route('admins')}}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Thống kê</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                
            </div>

            <li class="nav-item">
                <a class="nav-link" href="{{ route('san_pham') }}">
                    <i class="fas fa-tshirt"></i>
                    <span>Sản phẩm</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ route('danh_muc_san_pham') }}">
                    <i class="fas fa-tasks"></i>
                    <span>Danh mục</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ route('don_hang') }}">
                    <i class="fas fa-comments-dollar"></i>
                    <span>Đơn hàng</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="/hoadonnhap">
                    <i class="fas fa-comments-dollar"></i>
                    <span>Hóa đơn nhập</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{('kho_hang')}}">
                    <i class="fas fa-truck"></i>
                    <span>Kho hàng</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{route('khach_hang')}}">
                    <i class="fas fa-user-friends"></i>
                    <span>Khách hàng</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{route('nhan_vien')}}">
                    <i class="fas fa-user-check"></i>
                    <span>Nhanvien</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{route('tai_khoan')}}">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Tài khoản</span></a>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Cài đặt</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="{{route('slider')}}">Slider</a>
                        <a class="collapse-item" href="{{route('qlyblog')}}">Blog</a>
                        
  
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
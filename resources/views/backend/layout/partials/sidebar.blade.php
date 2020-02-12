<nav class="col-md-2 d-none d-md-block bg-light sidebar">
    <div class="sidebar-sticky">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link {{ (strpos(Route::currentRouteName(), 'backend.dashboard') === 0) ? 'active' : '' }}" href="{{ route('backend.dashboard') }}">
                    <span data-feather="home"></span>
                    Bảng tin <span class="sr-only">(current)</span>
                </a>
            </li>
            <!-- Menu Chủ đề - Start -->
            <li class="nav-item">
                <a href="#chudeSubMenu" data-toggle="collapse" aria-expanded="false" class="nav-link dropdown-toggle {{ (strpos(Route::currentRouteName(), 'backend.chude') === 0) ? 'active' : '' }}">
                    <span data-feather="package"></span> Chủ đề
                </a>
                <ul class="{{ (strpos(Route::currentRouteName(), 'backend.chude') === 0) ? 'collapse show' : 'collapse' }}" id="chudeSubMenu">
                    <li class="nav-item">
                        <a class="nav-link {{ (strpos(Route::currentRouteName(), 'backend.chude.index') === 0) ? 'active' : '' }}" href="{{ route('backend.chude.index') }}/">
                            <span data-feather="list"></span>
                            Danh sách
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ (strpos(Route::currentRouteName(), 'backend.chude.create') === 0) ? 'active' : '' }}" href="{{ route('backend.chude.create') }}">
                            <span data-feather="plus"></span>
                            Thêm mới
                        </a>
                    </li>
                </ul>
            </li>
            <!-- Menu Chủ đề - End -->
            <!-- Menu Loại - Start -->
            <li class="nav-item">
                <a href="#loaiSubMenu" data-toggle="collapse" aria-expanded="false" class="nav-link dropdown-toggle {{ (strpos(Route::currentRouteName(), 'backend.loai') === 0) ? 'active' : '' }}">
                    <span data-feather="package"></span> Loại
                </a>
                <ul class="{{ (strpos(Route::currentRouteName(), 'backend.loai') === 0) ? 'collapse show' : 'collapse' }}" id="loaiSubMenu">
                    <li class="nav-item">
                        <a class="nav-link {{ (strpos(Route::currentRouteName(), 'backend.loai.index') === 0) ? 'active' : '' }}" href="{{ route('backend.loai.index') }}/">
                            <span data-feather="list"></span>
                            Danh sách
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ (strpos(Route::currentRouteName(), 'backend.loai.create') === 0) ? 'active' : '' }}" href="{{ route('backend.loai.create') }}">
                            <span data-feather="plus"></span>
                            Thêm mới
                        </a>
                    </li>
                </ul>
            </li>
            <!-- Menu Loại - End -->
            <!-- Menu Loại - Start -->
            <li class="nav-item">
                <a href="#vanchuyenSubMenu" data-toggle="collapse" aria-expanded="false" class="nav-link dropdown-toggle {{ (strpos(Route::currentRouteName(), 'backend.vanchuyen') === 0) ? 'active' : '' }}">
                    <span data-feather="package"></span> Vận chuyển
                </a>
                <ul class="{{ (strpos(Route::currentRouteName(), 'backend.vanchuyen') === 0) ? 'collapse show' : 'collapse' }}" id="vanchuyenSubMenu">
                    <li class="nav-item">
                        <a class="nav-link {{ (strpos(Route::currentRouteName(), 'backend.vanchuyen.index') === 0) ? 'active' : '' }}" href="{{ route('backend.vanchuyen.index') }}/">
                            <span data-feather="list"></span>
                            Danh sách
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ (strpos(Route::currentRouteName(), 'backend.vanchuyen.create') === 0) ? 'active' : '' }}" href="{{ route('backend.vanchuyen.create') }}">
                            <span data-feather="plus"></span>
                            Thêm mới
                        </a>
                    </li>
                </ul>
            </li>
            <!-- Menu Loại - End -->
            <!-- Menu Sản phẩm - Start -->
            <li class="nav-item">
                <a href="#sanphamSubMenu" data-toggle="collapse" aria-expanded="false" class="nav-link dropdown-toggle {{ (strpos(Route::currentRouteName(), 'backend.sanpham') === 0) ? 'active' : '' }}">
                    <span data-feather="package"></span> Sản phẩm
                </a>
                <ul class="{{ (strpos(Route::currentRouteName(), 'backend.sanpham') === 0) ? 'collapse show' : 'collapse' }}" id="sanphamSubMenu">
                    <li class="nav-item">
                        <a class="nav-link {{ (strpos(Route::currentRouteName(), 'backend.sanpham.index') === 0) ? 'active' : '' }}" href="{{ route('backend.sanpham.index') }}/">
                            <span data-feather="list"></span>
                            Danh sách
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ (strpos(Route::currentRouteName(), 'backend.sanpham.create') === 0) ? 'active' : '' }}" href="{{ route('backend.sanpham.create') }}">
                            <span data-feather="plus"></span>
                            Thêm mới
                        </a>
                    </li>
                </ul>
            </li>
            <!-- Menu Sản phẩm - End -->
            <!-- Menu xuất xứ - Start -->
            <li class="nav-item">
                <a href="#xuatxuSubMenu" data-toggle="collapse" aria-expanded="false" class="nav-link dropdown-toggle {{ (strpos(Route::currentRouteName(), 'backend.xuatxu') === 0) ? 'active' : '' }}">
                    <span data-feather="package"></span> Xuất xứ
                </a>
                <ul class="{{ (strpos(Route::currentRouteName(), 'backend.xuatxu') === 0) ? 'collapse show' : 'collapse' }}" id="xuatxuSubMenu">
                    <li class="nav-item">
                        <a class="nav-link {{ (strpos(Route::currentRouteName(), 'backend.xuatxu.index') === 0) ? 'active' : '' }}" href="{{ route('backend.xuatxu.index') }}/">
                            <span data-feather="list"></span>
                            Danh sách
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ (strpos(Route::currentRouteName(), 'backend.xuatxu.create') === 0) ? 'active' : '' }}" href="{{ route('backend.xuatxu.create') }}">
                            <span data-feather="plus"></span>
                            Thêm mới
                        </a>
                    </li>
                </ul>
            </li>
            <!-- Menu xuất xứ - End -->
            <!-- Menu màu - Start -->
            <li class="nav-item">
                <a href="#mauSubMenu" data-toggle="collapse" aria-expanded="false" class="nav-link dropdown-toggle {{ (strpos(Route::currentRouteName(), 'backend.mau') === 0) ? 'active' : '' }}">
                    <span data-feather="package"></span> Màu
                </a>
                <ul class="{{ (strpos(Route::currentRouteName(), 'backend.mau') === 0) ? 'collapse show' : 'collapse' }}" id="mauSubMenu">
                    <li class="nav-item">
                        <a class="nav-link {{ (strpos(Route::currentRouteName(), 'backend.mau.index') === 0) ? 'active' : '' }}" href="{{ route('backend.mau.index') }}/">
                            <span data-feather="list"></span>
                            Danh sách
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ (strpos(Route::currentRouteName(), 'backend.mau.create') === 0) ? 'active' : '' }}" href="{{ route('backend.mau.create') }}">
                            <span data-feather="plus"></span>
                            Thêm mới
                        </a>
                    </li>
                </ul>
            </li>
            <!-- Menu màu - End -->
            <!-- Menu Khách hàng - Start-->
            <li class="nav-item">
                <a href="#khachhangSubMenu" data-toggle="collapse" aria-expanded="false" class="nav-link dropdown-toggle {{ (strpos(Route::currentRouteName(), 'backend.khachhang') === 0) ? 'active' : '' }}">
                    <span data-feather="package"></span> Khách hàng
                </a>
                <ul class="{{ (strpos(Route::currentRouteName(), 'backend.khachhang') === 0) ? 'collapse show' : 'collapse' }}" id="khachhangSubMenu">
                    <li class="nav-item">
                        <a class="nav-link {{ (strpos(Route::currentRouteName(), 'backend.khachhang.index') === 0) ? 'active' : '' }}" href="{{ route('backend.khachhang.index') }}/">
                            <span data-feather="list"></span>
                            Danh sách
                        </a>
                    </li>
                </ul>
            </li>
            <!-- Menu Khách hàng - End -->
            <!-- Menu Báo cáo - Start -->
            <li class="nav-item">
                <a href="#baocaoSubMenu" data-toggle="collapse" aria-expanded="false" class="nav-link dropdown-toggle {{ (strpos(Route::currentRouteName(), 'backend.baocao') === 0) ? 'active' : '' }}">
                    <span data-feather="package"></span> Báo cáo - Thống kê
                </a>
                <ul class="{{ (strpos(Route::currentRouteName(), 'backend.baocao') === 0) ? 'collapse show' : 'collapse' }}" id="baocaoSubMenu">
                    <li class="nav-item">
                        <a class="nav-link {{ (strpos(Route::currentRouteName(), 'backend.baocao.donhang') === 0) ? 'active' : '' }}" href="{{ route('backend.baocao.donhang') }}/">
                            <span data-feather="list"></span>
                            Đơn hàng
                        </a>
                    </li>
                </ul>
            </li>
            <!-- Menu Báo cáo - End -->
        </ul>
    </div>
</nav>
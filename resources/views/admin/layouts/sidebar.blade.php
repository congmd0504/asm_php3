<div class="sidebar-logo">
    <!-- Logo Header -->
    <div class="logo-header" data-background-color="dark">
        <a href="index.html" class="logo">
            <img src="assets/img/kaiadmin/logo_light.svg" alt="navbar brand" class="navbar-brand" height="20" />
        </a>
        <div class="nav-toggle">
            <button class="btn btn-toggle toggle-sidebar">
                <i class="gg-menu-right"></i>
            </button>
            <button class="btn btn-toggle sidenav-toggler">
                <i class="gg-menu-left"></i>
            </button>
        </div>
        <button class="topbar-toggler more">
            <i class="gg-more-vertical-alt"></i>
        </button>
    </div>
    <!-- End Logo Header -->
</div>
<div class="sidebar-wrapper scrollbar scrollbar-inner">
    <div class="sidebar-content">
        <ul class="nav nav-secondary">
            <li class="nav-section">
                <span class="sidebar-mini-icon">
                    <i class="fa fa-ellipsis-h"></i>
                </span>
                <h4 class="text-section">Quản lý</h4>
            </li>
            <li class="nav-item">
                <a data-bs-toggle="collapse" href="#base">
                    <i class="fas fa-layer-group"></i>
                    <p>Danh mục</p>
                    <span class="caret"></span>
                </a>
                <div class="collapse" id="base">
                    <ul class="nav nav-collapse">
                        <li>
                            <a href="{{ route('categories.index') }}">
                                <span class="sub-item">Danh sách danh mục</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('categories.create') }}">
                                <span class="sub-item">Thêm mới danh mục</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a data-bs-toggle="collapse" href="#base2">
                    <i class="fas fa-layer-group"></i>
                    <p>Sản phẩm</p>
                    <span class="caret"></span>
                </a>
                <div class="collapse" id="base2">
                    <ul class="nav nav-collapse">
                        <li>
                            <a href="{{ route('products.index') }}">
                                <span class="sub-item">Danh sách sản phẩm</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('products.create') }}">
                                <span class="sub-item">Thêm mới sản phẩm</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <a href="{{route('client.index')}}">
                    <i class="fa fa-backward"></i>
                    <p>Trang khách hàng</p>
                </a>
            </li>
        </ul>
    </div>
</div>

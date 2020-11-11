<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="http://cdn.trochoiviet.com/wp-content/uploads/2016/08/pikachu.jpg" class="img-circle"
                     alt="User Image">
            </div>
            <div class="pull-left info">
                <p>Admin Phong Ken</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>


        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">Thanh Công Cụ</li>
            <li>
                <a href="{{url('admin/loai-san-pham')}}">
                    <i class="fa fa-th"></i> <span>Quản lý loại sản phẩm</span>
                </a>
            </li>
            <li>
                <a href="{{url('admin/nha-cung-cap')}}">
                    <i class="fa fa-th"></i> <span>Thương hiệu</span>
                </a>
            </li>
            <li>
                <a href="{{url('admin/san-pham')}}">
                    <i class="fa fa-gift" aria-hidden="true"></i> <span>Quản lý sản phẩm</span>
                </a>
            </li>
            <li>
                <a href="{{url('admin/khach-hang')}}">
                    <i class="fa fa-user-o" aria-hidden="true"></i> <span>Quản lý khách hàng</span>
                </a>
            </li>

            <li>
                <a href="{{url('admin/don-hang')}}">
                    <i class="fa fa-building-o" aria-hidden="true"></i> <span>Quản lý đơn đặt hàng</span>
                </a>
            </li>

            <li>
                <a href="{{url('admin/thong-ke')}}">
                    <i class="fa fa-building-o" aria-hidden="true"></i> <span>Thống kê</span>
                </a>
            </li>

            <li>
                <a href="{{url('admin/hang-ton-kho')}}">
                    <i class="fa fa-cart-arrow-down" aria-hidden="true"></i> <span>Hàng tồn kho</span>
                </a>
            </li>

            
            <li>
                <a href="{{url('admin/dang-xuat')}}">
                    <i class="fa fa-sign-out" aria-hidden="true"></i> <span>Đăng xuất</span>
                </a>
            </li>
        </ul>
    </section>

</aside>

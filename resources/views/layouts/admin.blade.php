@extends('layouts.master')

<body>
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span></button>
                <a class="navbar-brand" href="#"><span>SHOP</span>Admin</a>
            </div>
        </div><!-- /.container-fluid -->
    </nav>
    <div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar collapse navbar-collapse">
        <div class="profile-sidebar">
            <div class="profile-userpic">
                <img src="http://placehold.it/50/30a5ff/fff" class="img-responsive" alt="">
            </div>
            <div class="profile-usertitle">

                <div class="profile-usertitle-name">

                    {{Auth::user()->name}}

                </div>
                <div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
            </div>
            <div class="clear"></div>
        </div>
        <div class="divider"></div>
        <form role="search">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Search">
            </div>
        </form>
        <ul class="nav menu">
            <li><a href="{{ url('/') }}"><i class="fas fa-home"></i> Giao diện trang web</a></li>
            <li role="presentation" class="divider"></li>
            <li><a href="{{route('index')}}"><i class="fas fa-home"></i> Trang chủ</a></li>
            <li><a href="{{ route('products.index')}}"><i class="fab fa-product-hunt"></i> Sản phẩm</a></li>
            <li><a href="{{ route('categories.index') }}"><i class="fas fa-list"></i> Danh mục</a></li>
            <li><a href="{{ route('customers.index') }}"><i class="fas fa-user-friends"></i> Khách hàng</a></li>
            <li><a href="{{ route('users.index') }}"><i class="fas fa-user-tie"></i> Nhân viên</a></li>
            <li><a href="{{ route('bills.index') }}"><i class="fas fa-file-invoice-dollar"></i> Hóa đơn</a></li>
            <li role="presentation" class="divider"></li>
            <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                    <em class="fa fa-power-off">&nbsp;</em> Logout</a></li>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </ul>
    </div>
    <!--/.sidebar -->
    @yield('main')
    <!-- </div> -->
</body>

</html>
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ url('/') }}" class="brand-link">
    <img src="{{ asset('template/dist/img/logo.svg') }}" alt="logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">Ravaa <b>POS</b></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
    <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('template/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Admin</a>
            </div>
        </div>

    <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
            <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
                <button class="btn btn-sidebar">
                <i class="fas fa-search fa-fw"></i>
                </button>
            </div>
            </div>
        </div>

    <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                    with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="{{ url('/') }}" class="nav-link {{ Request::is('/') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="nav-header">MAIN MENU</li>
                <li class="nav-item">
                    <a href="{{ url('sales') }}" class="nav-link {{ Request::is('sales') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-shopping-cart"></i>
                        <p>Sales</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-exchange-alt"></i>
                        <p>Transaction<i class="fas fa-angle-left right"></i></p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ url('list-pos') }}" class="nav-link {{ Request::is('list-pos') ? 'active' : '' }}">
                                <i class="nav-icon far fa-circle"></i>
                                <p>List POS</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('purchases') }}" class="nav-link {{ Request::is('purchases') ? 'active' : '' }}">
                                <i class="nav-icon far fa-circle"></i>
                                <p>Purchases</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('list-purchases') }}" class="nav-link {{ Request::is('list-purchases') ? 'active' : '' }}">
                                <i class="nav-icon far fa-circle"></i>
                                <p>List Purchases</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link {{ Request::is('#') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Item Return</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ asset('debt') }}" class="nav-link {{ Request::is('debt') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Debt</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-archive"></i>
                        <p>Products<i class="fas fa-angle-left right"></i></p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ url('products') }}" class="nav-link">
                            <i class="nav-icon far fa-circle text-info"></i>
                            <p>Products</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="category-unit" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Categories / Units</p>
                            </a>
                        </li>
                        {{-- <li class="nav-item">
                            <a href="{{ url('stockin') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Stock In</p>
                            </a>
                        </li> --}}
                        <li class="nav-item">
                            <a href="{{ url('stockout') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Stock Out</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('stock-opname') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Stock Opname</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="{{ url('supplier') }}" class="nav-link">
                        <i class="nav-icon fas fa-truck"></i>
                        <p>Suppliers</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('customers') }}" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>Customers</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-file"></i>
                        <p>Reports<i class="fas fa-angle-left right"></i></p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Sales</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Stock In/Out</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Profit & Loss</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-header">SETTINGS</li>
                <li class="nav-item">
                    <a href="{{ url('user') }}" class="nav-link">
                        <i class="nav-icon fas fa-user"></i>
                        <p>Users / Employees</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('setting') }}" class="nav-link">
                        <i class="nav-icon fas fa-cog"></i>
                        <p>Setting</p>
                    </a>
                </li>
            </ul>
        </nav>
    <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
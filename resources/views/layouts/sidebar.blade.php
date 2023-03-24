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
                <a href="{{ url('/user') }}" class="d-block">Admin</a>
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
                <li class="nav-item  {{ Request::is('transactions') || Request::is('transactions/*') ? 'menu-is-opening menu-open' : '' }}">
                    <a href="#" class="nav-link {{ Request::is('transactions') || Request::is('transactions/*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-exchange-alt"></i>
                        <p>Transaction<i class="fas fa-angle-left right"></i></p>
                    </a>
                    <ul class="nav nav-treeview {{ Request::is('transactions/list-pos', 'transactions/debt') ? 'active' : '' }}">
                        <li class="nav-item">
                            <a href="{{ url('/transactions/list-pos') }}" class="nav-link {{ Request::is('transactions/list-pos') ? 'active' : '' }}">
                                <i class="nav-icon far fa-circle"></i>
                                <p>List POS</p>
                            </a>
                        </li>
                        {{-- <li class="nav-item">
                            <a href="#" class="nav-link {{ Request::is('#') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Item Return</p>
                            </a>
                        </li> --}}
                        <li class="nav-item">
                            <a href="{{ url('/transactions/debt') }}" class="nav-link {{ Request::is('transactions/debt') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Debt</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <div class="nav-item  {{ Request::is('purchases') || Request::is('purchases/*') ? 'menu-is-opening menu-open' : '' }}">
                    <a href="#" class="nav-link {{ Request::is('purchases') || Request::is('purchases/*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-cart-arrow-down"></i>
                        <p>Purchases<i class="fas fa-angle-left right"></i></p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ url('/purchases/purchase') }}" class="nav-link {{ Request::is('purchases/purchase') ? 'active' : '' }}">
                                <i class="nav-icon far fa-circle"></i>
                                <p>Purchase</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/purchases/list-purchases') }}" class="nav-link {{ Request::is('purchases/list-purchases') ? 'active' : '' }}">
                                <i class="nav-icon far fa-circle"></i>
                                <p>List Purchases</p>
                            </a>
                        </li>
                    </ul>
                </div>
                <li class="nav-item {{ Request::is('products') || Request::is('products/*') ? 'menu-is-opening menu-open' : '' }}">
                    <a href="#" class="nav-link {{ Request::is('products') || Request::is('products/*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-archive"></i>
                        <p>Products<i class="fas fa-angle-left right"></i></p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('products.products.index') }}" class="nav-link {{ Request::is('products/products') ? 'active' : '' }}">
                                <i class="nav-icon far fa-circle text-info"></i>
                                <p>Products</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('products.category-unit.index') }}" class="nav-link {{ Request::is('products/category-unit') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Categories & Units</p>
                            </a>
                        </li>
                        {{-- <li class="nav-item">
                            <a href="{{ url('stockin') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Stock In</p>
                            </a>
                        </li> --}}
                        <li class="nav-item">
                            <a href="{{ url('/products/stockout') }}" class="nav-link {{ Request::is('products/stockout') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Stock Out</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/products/stock-opname') }}" class="nav-link {{ Request::is('products/stock-opname') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Stock Opname</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="{{ route('supplier') }}" class="nav-link {{ Request::is('supplier') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-truck"></i>
                        <p>Suppliers</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('customer') }}" class="nav-link {{ Request::is('customers') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-users"></i>
                        <p>Customers</p>
                    </a>
                </li>
                <li class="nav-item  {{ Request::is('report') || Request::is('report/*') ? 'menu-is-opening menu-open' : '' }}">
                    <a href="#" class="nav-link {{ Request::is('report') || Request::is('report/*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-file"></i>
                        <p>Reports<i class="fas fa-angle-left right"></i></p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ url('/report/sales-report') }}" class="nav-link {{ Request::is('report/sales-report') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Sales</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/report/stockin-out') }}" class="nav-link {{ Request::is('report/stockin-out') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Stock In/Out</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/report/profit-loss') }}" class="nav-link {{ Request::is('report/profit-loss') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Profit & Loss</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/report/debt-report') }}" class="nav-link {{ Request::is('report/debt-report') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Debt Report</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-header">SETTINGS</li>
                <li class="nav-item">
                    <a href="{{ url('/user') }}" class="nav-link {{ Request::is('user') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-user"></i>
                        <p>Users / Employees</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/setting') }}" class="nav-link {{ Request::is('setting') ? 'active' : '' }}">
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

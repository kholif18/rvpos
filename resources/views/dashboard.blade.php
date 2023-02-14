<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Ravaa POS</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('template/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('template/dist/css/adminlte.min.css') }}">
  <link rel="stylesheet" href="{{ asset('template/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
</head>
<body class="hold-transition sidebar-mini">
	<div class="wrapper">
	<!-- Navbar -->
	<nav class="main-header navbar navbar-expand navbar-white navbar-light">
		<!-- Left navbar links -->
		<ul class="navbar-nav">
			<li class="nav-item">
				<a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
			</li>
		</ul>
		<!-- Right navbar links -->
		<ul class="navbar-nav ml-auto">
			<!-- Notifications Dropdown Menu -->
			<li class="nav-item dropdown">
				<a class="nav-link" data-toggle="dropdown" href="#">
					<i class="far fa-bell"></i>
					<span class="badge badge-warning navbar-badge">15</span>
				</a>
				<div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
					<span class="dropdown-item dropdown-header">15 Notifications</span>
					<div class="dropdown-divider"></div>
					<a href="#" class="dropdown-item">
						<i class="fas fa-envelope mr-2"></i> 4 new messages
						<span class="float-right text-muted text-sm">3 mins</span>
					</a>
					<div class="dropdown-divider"></div>
					<a href="#" class="dropdown-item">
						<i class="fas fa-users mr-2"></i> 8 friend requests
						<span class="float-right text-muted text-sm">12 hours</span>
					</a>
					<div class="dropdown-divider"></div>
					<a href="#" class="dropdown-item">
						<i class="fas fa-file mr-2"></i> 3 new reports
						<span class="float-right text-muted text-sm">2 days</span>
					</a>
					<div class="dropdown-divider"></div>
					<a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
				</div>
			</li>
			<li class="nav-item">
				<a class="nav-link" data-widget="fullscreen" href="#" role="button">
				<i class="fas fa-expand-arrows-alt"></i>
				</a>
			</li>
			<!-- User Account -->
			<li class="dropdown user user-menu nav-item">
				<a href="" class="nav-link" data-toggle="dropdown">
					<img src="{{ asset('template/dist/img/user2-160x160.jpg') }}" class="user-image">
					<span class="hidden-xs">Admin</span>
				</a>
				<ul class="dropdown-menu">
					<li class="user-header">
						<img src="{{ asset('template/dist/img/user2-160x160.jpg') }}" class="img-circle">
						<p>Rahmad Nur K. R.<small>Ngluyu, Nganjuk</small></p>
					</li>
					<li class="user-footer">
						<div class="fa-pull-left">
						<a href="#" class="btn btn-default btn-sm">Profile</a>
						</div>
						<div class="fa-pull-right">
						<a href="#" class="btn bg-red btn-sm">Sign Out</a>
						</div>
					</li>
				</ul>
			</li>
		</ul>
	</nav>
	<!-- /.navbar -->

	<!-- Main Sidebar Container -->
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
					<li class="nav-header">MAIN MENU</li>
					<!-- Add icons to the links using the .nav-icon class
						with font-awesome or any other icon font library -->
					<li class="nav-item">
						<a href="{{ url('/') }}" class="nav-link">
							<i class="nav-icon fas fa-tachometer-alt"></i>
							<p>Dashboard</p>
						</a>
					</li>
					<li class="nav-item">
						<a href="#" class="nav-link">
							<i class="nav-icon fas fa-truck"></i>
							<p>Suppliers</p>
						</a>
					</li>
					<li class="nav-item">
						<a href="#" class="nav-link">
							<i class="nav-icon fas fa-users"></i>
							<p>Customers</p>
						</a>
					</li>
					<li class="nav-item">
						<a href="#" class="nav-link">
							<i class="nav-icon fas fa-archive"></i>
							<p>Products<i class="fas fa-angle-left right"></i></p>
						</a>
						<ul class="nav nav-treeview">
							<li class="nav-item">
								<a href="#" class="nav-link">
								<i class="far fa-circle nav-icon"></i>
								<p>Categories</p>
								</a>
							</li>
							<li class="nav-item">
								<a href="#" class="nav-link">
								<i class="far fa-circle nav-icon"></i>
								<p>Units</p>
								</a>
							</li>
							<li class="nav-item">
								<a href="#" class="nav-link">
								<i class="nav-icon far fa-circle text-info"></i>
								<p>Items</p>
								</a>
							</li>
						</ul>
					</li>
					<li class="nav-item">
						<a href="#" class="nav-link">
							<i class="nav-icon fas fa-shopping-cart"></i>
							<p>Transaction<i class="fas fa-angle-left right"></i></p>
						</a>
						<ul class="nav nav-treeview">
							<li class="nav-item">
								<a href="#" class="nav-link">
									<i class="nav-icon far fa-circle text-info"></i>
									<p>Sales</p>
								</a>
							</li>
							<li class="nav-item">
								<a href="#" class="nav-link">
									<i class="far fa-circle nav-icon"></i>
									<p>Stock In / Purchases</p>
								</a>
							</li>
							<li class="nav-item">
								<a href="#" class="nav-link">
									<i class="far fa-circle nav-icon"></i>
									<p>Stock Out</p>
								</a>
							</li>
							<li class="nav-item">
								<a href="#" class="nav-link">
									<i class="far fa-circle nav-icon"></i>
									<p>Stock Opname</p>
								</a>
							</li>
							<li class="nav-item">
								<a href="#" class="nav-link">
									<i class="far fa-circle nav-icon"></i>
									<p>Item Return</p>
								</a>
							</li>
						</ul>
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
						</ul>
					</li>
					<li class="nav-header">SETTINGS</li>
					<li class="nav-item">
						<a href="#" class="nav-link">
							<i class="nav-icon fas fa-user"></i>
							<p>Users / Employees</p>
						</a>
					</li>
					<li class="nav-item">
						<a href="#" class="nav-link">
							<i class="nav-icon fas fa-cog"></i>
							<p>Configuration</p>
						</a>
					</li>
				</ul>
			</nav>
		<!-- /.sidebar-menu -->
		</div>
		<!-- /.sidebar -->
	</aside>

	<!-- Content Wrapper. Contains page content -->
	<div class="content-wrapper">
		    <!-- Content Header (Page header) -->
			<section class="content-header">
				<div class="container-fluid">
					<div class="row mb-2">
					<div class="col-sm-6">
						<h1>Dashboard</h1>
					</div>
					<div class="col-sm-6">
						<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="#">Home</a></li>
						<li class="breadcrumb-item active">Dashboard</li>
						</ol>
					</div>
					</div>
				</div><!-- /.container-fluid -->
    		</section>
		<!-- Main content -->
		<section class="content">
			        <!-- Small boxes (Stat box) -->
					<div class="row">
						<div class="col-lg-3 col-6">
							<!-- small box -->
							<div class="small-box bg-info">
								<div class="inner">
								<h3>150</h3>

								<p>Orders Today</p>
								</div>
								<div class="icon">
								<i class="fas fa-shopping-bag"></i>
								</div>
								<a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
							</div>
						</div>
						<!-- ./col -->
						<div class="col-lg-3 col-6">
						<!-- small box -->
							<div class="small-box bg-success">
								<div class="inner">
								<h3>53<sup style="font-size: 20px">%</sup></h3>

								<p>Items</p>
								</div>
								<div class="icon">
								{{-- <i class="ion ion-stats-bars"></i> --}}
								<i class="fas fa-archive"></i>
								</div>
								<a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
							</div>
						</div>
						<!-- ./col -->
						<div class="col-lg-3 col-6">
						<!-- small box -->
						<div class="small-box bg-warning">
							<div class="inner">
							<h3>44</h3>

							<p>Customers</p>
							</div>
							<div class="icon">
							<i class="fas fa-users"></i>
							</div>
							<a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
						</div>
						</div>
						<!-- ./col -->
						<div class="col-lg-3 col-6">
						<!-- small box -->
						<div class="small-box bg-danger">
							<div class="inner">
							<h3>65</h3>

							<p>Suppliers</p>
							</div>
							<div class="icon">
							<i class="fas fa-truck-loading"></i>
							</div>
							<a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
						</div>
						</div>
						<!-- ./col -->
					</div>
					<div class="row">
						<div class="col-lg-6 col-md-3 col-sm-6 col-xs-12">
							<!-- small box -->
							<div class="small-box bg-gradient-primary">
								<div class="inner">
								<h3>Rp 100.000</h3>

								<p>Kas In</p>
								</div>
								<div class="icon">
								<i class="fas fa-sign-in-alt"></i>
								</div>
								<a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
							</div>
						</div>
						<!-- ./col -->
						<div class="col-lg-6 col-md-3 col-sm-6 col-xs-12">
							<!-- small box -->
							<div class="small-box bg-danger">
								<div class="inner">
								<h3>Rp 100.000</h3>

								<p>Kas Out</p>
								</div>
								<div class="icon">
								<i class="fas fa-sign-out-alt"></i>
								</div>
								<a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
							</div>
						</div>
						<!-- ./col -->
					</div>
					<!-- /.row -->
			<div class="row">
				<div class="col-lg-9 col-12" >
				<!-- AREA CHART -->
				<div class="card card-primary">
					<div class="card-header">
					<h3 class="card-title">Mounthly Sales - 2023</h3>
	
					<div class="card-tools">
						<button type="button" class="btn btn-tool" data-card-widget="collapse">
						<i class="fas fa-minus"></i>
						</button>
						<button type="button" class="btn btn-tool" data-card-widget="remove">
						<i class="fas fa-times"></i>
						</button>
					</div>
					</div>
					<div class="card-body">
					<div class="chart">
						<canvas id="areaChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
					</div>
					</div>
					<!-- /.card-body -->
				</div>
				<!-- /.card -->
				</div>
				<div class="col-lg-3 col-12">
					<div class="card card-primary">
						<div class="card-header">
						<h3 class="card-title">Total sales</h3>
		
						<div class="card-tools">
							<button type="button" class="btn btn-tool" data-card-widget="collapse">
							<i class="fas fa-minus"></i>
							</button>
							<button type="button" class="btn btn-tool" data-card-widget="remove">
							<i class="fas fa-times"></i>
							</button>
						</div>
						</div>
						<div class="card-body">
						<div class="chart">
							<canvas id="areaChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;">
								<h3>150</h3>
							</canvas>
						</div>
						</div>
						<!-- /.card-body -->
					</div>
				</div>
			</div>	
		<!-- Default box -->
		<div class="card">
			<div class="card-header">
			<h3 class="card-title">Title</h3>

			<div class="card-tools">
				<button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
				<i class="fas fa-minus"></i>
				</button>
				<button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
				<i class="fas fa-times"></i>
				</button>
			</div>
			</div>
			<div class="card-body">
			Start creating your amazing application!
			</div>
			<!-- /.card-body -->
			<div class="card-footer">
			Footer
			</div>
			<!-- /.card-footer-->
		</div>
		<!-- /.card -->

		</section>
		<!-- /.content -->
	</div>
	<!-- /.content-wrapper -->

	<footer class="main-footer">
		<div class="float-right d-none d-sm-block">
		<b>Version</b> 3.2.0
		</div>
		<strong>Copyright &copy; 2023 <a href="https://ravaastudio.business.site/">Ravaa Studio</a>.</strong> All rights reserved.
	</footer>

	<!-- Control Sidebar -->
	<aside class="control-sidebar control-sidebar-dark">
		<!-- Control sidebar content goes here -->
	</aside>
	<!-- /.control-sidebar -->
	</div>
	<!-- ./wrapper -->

	<!-- jQuery -->
	<script src="{{ asset('template/plugins/jquery/jquery.min.js') }}"></script>
	<!-- Bootstrap 4 -->
	<script src="{{ asset('template/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
	<!-- AdminLTE App -->
	<script src="{{ asset('template/dist/js/adminlte.min.js') }}"></script>
	<!-- ChartJS -->
	<script src="{{ asset('plugins/chart.js/Chart.min.js') }}"></script>
	
<script>
		$(function () {
		/* ChartJS
		   * -------
		   * Here we will create a few charts using ChartJS
		   */
		  //--------------
		  //- AREA CHART -
		  //--------------
		  // Get context with jQuery - using jQuery's .get() method.
			var areaChartCanvas = $('#areaChart').get(0).getContext('2d')
		
			var areaChartData = {
			labels  : ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
			datasets: [
			{
				label               : 'Digital Goods',
				backgroundColor     : 'rgba(60,141,188,0.9)',
				borderColor         : 'rgba(60,141,188,0.8)',
				pointRadius          : false,
				pointColor          : '#3b8bba',
				pointStrokeColor    : 'rgba(60,141,188,1)',
				pointHighlightFill  : '#fff',
				pointHighlightStroke: 'rgba(60,141,188,1)',
				data                : [28, 48, 40, 19, 86, 27, 90]
			},
			{
				label               : 'Electronics',
				backgroundColor     : 'rgba(210, 214, 222, 1)',
				borderColor         : 'rgba(210, 214, 222, 1)',
				pointRadius         : false,
				pointColor          : 'rgba(210, 214, 222, 1)',
				pointStrokeColor    : '#c1c7d1',
				pointHighlightFill  : '#fff',
				pointHighlightStroke: 'rgba(220,220,220,1)',
				data                : [65, 59, 80, 81, 56, 55, 40]
			},
			]
			}

		var areaChartOptions = {
			maintainAspectRatio : false,
			responsive : true,
			legend: {
				display: false
			},
			scales: {
				xAxes: [{
					gridLines : {
						display : false,
					}
				}],
				yAxes: [{
					gridLines : {
						display : false,
					}
				}]
			}
		}

		  // This will get the first returned node in the jQuery collection.
			new Chart(areaChartCanvas, {
				type: 'line',
				data: areaChartData,
				options: areaChartOptions
			})
		
			//-------------
			//- LINE CHART -
			//--------------
			var lineChartCanvas = $('#lineChart').get(0).getContext('2d')
			var lineChartOptions = $.extend(true, {}, areaChartOptions)
			var lineChartData = $.extend(true, {}, areaChartData)
			lineChartData.datasets[0].fill = false;
			lineChartData.datasets[1].fill = false;
			lineChartOptions.datasetFill = false
		
			var lineChart = new Chart(lineChartCanvas, {
				type: 'line',
				data: lineChartData,
				options: lineChartOptions
			})

			//-------------
			//- DONUT CHART -
			//-------------
			// Get context with jQuery - using jQuery's .get() method.
			var donutChartCanvas = $('#donutChart').get(0).getContext('2d')
			var donutData        = {
				labels: [
					'Chrome',
					'IE',
					'FireFox',
					'Safari',
					'Opera',
					'Navigator',
				],
				datasets: [
				{
					data: [700,500,400,600,300,100],
					backgroundColor : ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de'],
				}
				]
			}
			var donutOptions     = {
				maintainAspectRatio : false,
				responsive : true,
			}
			//Create pie or douhnut chart
			// You can switch between pie and douhnut using the method below.
			new Chart(donutChartCanvas, {
				type: 'doughnut',
				data: donutData,
				options: donutOptions
			})
		
			//-------------
			//- PIE CHART -
			//-------------
			// Get context with jQuery - using jQuery's .get() method.
			var pieChartCanvas = $('#pieChart').get(0).getContext('2d')
			var pieData        = donutData;
			var pieOptions     = {
				maintainAspectRatio : false,
				responsive : true,
			}
			//Create pie or douhnut chart
			// You can switch between pie and douhnut using the method below.
			new Chart(pieChartCanvas, {
				type: 'pie',
				data: pieData,
				options: pieOptions
			})
		
			//-------------
			//- BAR CHART -
			//-------------
			var barChartCanvas = $('#barChart').get(0).getContext('2d')
			var barChartData = $.extend(true, {}, areaChartData)
			var temp0 = areaChartData.datasets[0]
			var temp1 = areaChartData.datasets[1]
			barChartData.datasets[0] = temp1
			barChartData.datasets[1] = temp0
		
			var barChartOptions = {
				responsive              : true,
				maintainAspectRatio     : false,
				datasetFill             : false
			}
		
			new Chart(barChartCanvas, {
				type: 'bar',
				data: barChartData,
				options: barChartOptions
			})
		
			//---------------------
			//- STACKED BAR CHART -
			//---------------------
			var stackedBarChartCanvas = $('#stackedBarChart').get(0).getContext('2d')
			var stackedBarChartData = $.extend(true, {}, barChartData)
		
			var stackedBarChartOptions = {
				responsive              : true,
				maintainAspectRatio     : false,
				scales: {
				xAxes: [{
					stacked: true,
				}],
				yAxes: [{
					stacked: true
				}]
				}
			}
		
			new Chart(stackedBarChartCanvas, {
				type: 'bar',
				data: stackedBarChartData,
				options: stackedBarChartOptions
			})
			})
</script>
</body>
</html>

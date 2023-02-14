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
  <!-- Custom Style CSS -->
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body class="hold-transition sidebar-mini">
	<div class="wrapper">
	<!-- Navbar -->
	@includeIf('layouts.header')

	<!-- Main Sidebar Container -->
	@includeIf('layouts.sidebar')

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
				<div class="card card-primary card-outline">
					<div class="card-header">
					<h3 class="card-title">Mounthly Sales - 2023</h3>
	
					<div class="card-tools">
						<button type="button" class="btn btn-tool" data-card-widget="collapse">
						<i class="fas fa-minus"></i>
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
					<div class="card card-primary card-outline">
						<div class="card-header">
						<h3 class="card-title">Total sales</h3>
		
						<div class="card-tools">
							<button type="button" class="btn btn-tool" data-card-widget="collapse">
							<i class="fas fa-minus"></i>
							</button>
						</div>
						</div>
						<div class="card-body bg-count">
						<div class="count" id="areaChart">
							<h3>150</h3>
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

	{{-- Footer --}}
	@includeIf('layouts.footer')

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
	<script src="{{ asset('template/plugins/chart.js/Chart.min.js') }}"></script>
	
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

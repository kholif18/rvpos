@extends('layouts.master')

@section('title')
	Dashboard
@endsection

@section('breadcrumb')
	@parent
	<li class="active">Dashboard</li>
@endsection

@section('content')
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
					<div class="count">
						<h1 class="text-bold text-lg-center">Total Rp </h1>
						<h1 class="count text-bold text-lg-center" style="font-size: 6em">150,000</h1>
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

@endsection

@push('scripts')
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
</script>

@endpush
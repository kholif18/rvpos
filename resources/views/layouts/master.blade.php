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


	<!-- jQuery -->
	<script src="{{ asset('template/plugins/jquery/jquery.min.js') }}"></script>
	<!-- Bootstrap 4 -->
	<script src="{{ asset('template/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
	<!-- AdminLTE App -->
	<script src="{{ asset('template/dist/js/adminlte.min.js') }}"></script>
	<!-- ChartJS -->
	<script src="{{ asset('template/plugins/chart.js/Chart.min.js') }}"></script>
	<!-- DataTables  & Plugins -->
	<script src="{{ asset('template/plugins/datatables/jquery.dataTables.min.js') }}"></script>
	<script src="{{ asset('template/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
	<script src="{{ asset('template/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
	<script src="{{ asset('template/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
	<script src="{{ asset('template/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
	<script src="{{ asset('template/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
	<script src="{{ asset('template/plugins/jszip/jszip.min.js') }}"></script>
	<script src="{{ asset('template/plugins/pdfmake/pdfmake.min.js') }}"></script>
	<script src="{{ asset('template/plugins/pdfmake/vfs_fonts.js') }}"></script>
	<script src="{{ asset('template/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
	<script src="{{ asset('template/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
	<script src="{{ asset('template/plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>
	<!-- Page specific script -->
	
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

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Ravaa POS | @yield('title')</title>

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
		@includeIf('layouts.header')

		@includeIf('layouts.sidebar')
		
		        <!-- Content Wrapper. Contains page content -->
				<div class="content-wrapper">
					<!-- Content Header (Page header) -->
					<section class="content-header">
						<div class="row mb-2">
							<div class="col-sm-6">
								<h1>@yield('title')</h1>
							</div>
							<div class="col-sm-6">
								<ol class="breadcrumb float-sm-right">
									@section('breadcrumb')
									<li class="breadcrumb-item"><a href="{{ url('/') }}"><i class="fa fa-dashboard"></i> Home</a></li>
									<li class="breadcrumb-item active">@show</li>
								</ol>
							</div>
						</div>
					</section>
		
					<!-- Main content -->
					<section class="content">
						
						@yield('content')
		
					</section>
					<!-- /.content -->
				</div>
				<!-- /.content-wrapper -->
		
				@includeIf('layouts.footer')
	</div>
	{{-- ./wrapper --}}

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
        function preview(selector, temporaryFile, width = 200)  {
            $(selector).empty();
            $(selector).append(`<img src="${window.URL.createObjectURL(temporaryFile)}" width="${width}">`);
        }
    </script>
    @stack('scripts')
	
</body>
</html>

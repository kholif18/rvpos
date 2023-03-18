@extends('layouts.master')

@section('title')
    Dashboard
@endsection

@section('breadcrumb')
    @parent
    <li class="breadcrumb-item active">
        <a href="{{ url()->current() }}">
            Dashboard
        </a>
    </li>
@endsection

@section('content')
    <!-- Small boxes (Stat box) -->
    <div class="row">
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
                <div class="inner">
                    <h3>150</h3>
                    <p>Total Sales</p>
                </div>
                <div class="icon">
                    <i class="fas fa-shopping-bag"></i>
                </div>
                <a href="{{ url('sales') }}" class="small-box-footer">POS <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
                <div class="inner">
                    <h3>{{ $product }}</h3>
                    <p>Products</p>
                </div>
                <div class="icon">
                    {{-- <i class="ion ion-stats-bars"></i> --}}
                    <i class="fas fa-archive"></i>
                </div>
                <a href="{{ url('/products/products') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
                <div class="inner">
                    <h3>{{ $customer }}</h3>
                    <p>Customers</p>
                </div>
                <div class="icon">
                    <i class="fas fa-users"></i>
                </div>
                <a href="{{ url('customers') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
                <div class="inner">
                    <h3>{{ $supplier }}</h3>
                    <p>Suppliers</p>
                </div>
                <div class="icon">
                    <i class="fas fa-truck-loading"></i>
                </div>
                <a href="{{ url('/supplier') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
    </div>
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <!-- small box -->
            <div class="small-box bg-gradient-primary">
                <div class="inner">
                    <h3>Rp 100.000</h3>
                    <p>Kas In</p>
                </div>
                <div class="icon">
                    <i class="fas fa-sign-in-alt"></i>
                </div>
                <a href="{{ url('/kas') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <!-- small box -->
            <div class="small-box bg-danger">
                <div class="inner">
                    <h3>Rp 100.000</h3>
                    <p>Kas Out</p>
                </div>
                <div class="icon">
                    <i class="fas fa-sign-out-alt"></i>
                </div>
                <a href="{{ url('/kas') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-9 col-12">
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
            <div class="card card-info bg-info">
                <div class="card-header">
                    <h3 class="card-title">Total sales</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="count">
                        <h3 class="text-bold text-lg-center">Total Rp </h3>
                        <h1 class="text-bold text-lg-center" style="font-size: 5em">150 K</h1>
                    </div>
                </div>
                <!-- /.card-body -->
            </div>
        </div>
    </div>
    <!-- Default box -->
    <div class="card card-warning">
        <div class="card-header">
            <h3 class="card-title">Low Stock Products</h3>
            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse"><i class="fas fa-minus"></i></button>
            </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <div class="row">
                <div class="col-12">
                    <div class="card-body table-responsive p-0" style="height: 200px;">
                        <table class="table table-head-fixed text-nowrap table-sm">
                            <thead>
                                <tr>
                                    <th>Kode Products</th>
                                    <th>Barcode</th>
                                    <th>Name Products</th>
                                    <th>Status</th>
                                    <th>Kategory</th>
                                    <th style="width: 90px">Stock</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>RV001</td>
                                    <td>78909867578</td>
                                    <td>Kertas A4</td>
                                    <td>Pkg</td>
                                    <td>ATK</td>
                                    <td class="badge bg-danger">5</td>
                                </tr>
                                <tr>
                                    <td>RV006</td>
                                    <td>78909523230</td>
                                    <td>Map kertas</td>
                                    <td>Pcs</td>
                                    <td>ATK</td>
                                    <td class="badge bg-danger">2</td>
                                </tr>
                                <tr>
                                    <td>RV016</td>
                                    <td>45846548465</td>
                                    <td>Sampul</td>
                                    <td>Pcs</td>
                                    <td>ATK</td>
                                    <td class="badge bg-danger">2</td>
                                </tr>
                                <tr>
                                    <td>RV065</td>
                                    <td>54784654568254</td>
                                    <td>Pensil Steadler</td>
                                    <td>Pcs</td>
                                    <td>ATK</td>
                                    <td class="badge bg-danger">1</td>
                                </tr>
                                <tr>
                                    <td>RV085</td>
                                    <td>5146546544</td>
                                    <td>Penghapus Joyko Besar</td>
                                    <td>Pcs</td>
                                    <td>ATK</td>
                                    <td class="badge bg-danger">3</td>
                                </tr>
                                <tr>
                                    <td>RV077</td>
                                    <td>454654654</td>
                                    <td>Mika Transparan</td>
                                    <td>Pcs</td>
                                    <td>ATK</td>
                                    <td class="badge bg-danger">3</td>
                                </tr>
                                <tr>
                                    <td>RV068</td>
                                    <td>546548654</td>
                                    <td>Map Kancing Biru</td>
                                    <td>Pcs</td>
                                    <td>ATK</td>
                                    <td class="badge bg-danger">4</td>
                                </tr>
                                <tr>
                                    <td>RV006</td>
                                    <td>489846542</td>
                                    <td>Bolpoin Snowman V1</td>
                                    <td>Pcs</td>
                                    <td>ATK</td>
                                    <td class="badge bg-danger">5</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
@endsection

@push('scripts')
    <!-- ChartJS -->
    <script src="{{ asset('template/plugins/chart.js/Chart.min.js') }}"></script>

    <script>
        $(function() {
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
                labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
                datasets: [{
                    label: 'Digital Goods',
                    backgroundColor: 'rgba(60,141,188,0.9)',
                    borderColor: 'rgba(60,141,188,0.8)',
                    pointRadius: false,
                    pointColor: '#3b8bba',
                    pointStrokeColor: 'rgba(60,141,188,1)',
                    pointHighlightFill: '#fff',
                    pointHighlightStroke: 'rgba(60,141,188,1)',
                    data: [28, 48, 40, 19, 86, 27, 90]
                }, ]
            }

            var areaChartOptions = {
                maintainAspectRatio: false,
                responsive: true,
                legend: {
                    display: false
                },
                scales: {
                    xAxes: [{
                        gridLines: {
                            display: false,
                        }
                    }],
                    yAxes: [{
                        gridLines: {
                            display: false,
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
        });

        toastr.error('Stock Kertas A4 tinggal 5');
    </script>
@endpush

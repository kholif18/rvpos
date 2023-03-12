{{-- master template --}}
@extends('layouts.master')

@section('title')
    Sales Report
@endsection

@section('breadcrumb')
    @parent
    <li class="active">Reports / Sales Report</li>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-3">
            <div class="card card-indigo">
                <div class="card-header">
                    <h3 class="card-title">Sales Report</h3>
                </div>
                <div class="card-body">
                    <p>Tentukan tanggal awal dan akhir untuk export laporan penjualan!</p>
                    <div class="form-group">
                        <label>Date range button:</label>
                        <div class="input-group">
                            <button type="button" class="btn btn-default float-right" id="daterange-btn">
                                <i class="far fa-calendar-alt"></i> Date range picker
                                <i class="fas fa-caret-down"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="form-group">
                        <button class="btn btn-info"><i class="fas fa-file-pdf"></i> Export pdf</button>
                        <button class="btn btn-success"><i class="fas fa-print"></i> Print</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Preview</div>
                </div>
                <div class="card-body">
                    <div class="mailbox-read-message">
                        <h3 class="text-center">SALES REPORT</h3>
                        <h6 class="text-center">Periode :2023-02-01 s/d 2023-02-28</h6>
                        <br>
                        <div class="table-responsive">
                            <table class="table-sm">
                                <tr>
                                    <th style="width: 10%">Invoice</th>
                                    <td style="width: 2%">:</td>
                                    <td style="width: 30%">2702202300015</td>
                                    <th style="width: 10%">User</th>
                                    <td style="width: 2%">:</td>
                                    <td>Admin</td>
                                </tr>
                                <tr>
                                    <th>Date</th>
                                    <td>:</td>
                                    <td>27/02/2023 | 14:12</td>
                                    <th>Customer</th>
                                    <td>:</td>
                                    <td>Umum</td>
                                </tr>
                            </table>
                        </div>
                        <table id="example2" class="table table-head-fixed text-nowrap table-striped table-sm">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Invoice</th>
                                    <th>Product</th>
                                    <th>Price</th>
                                    <th>Qty</th>
                                    <th>Disc.</th>
                                    <th>Sub Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>13022023009</td>
                                    <td>Print A4 HP</td>
                                    <td>500</td>
                                    <td>5</td>
                                    <td>0</td>
                                    <td>2.500</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>13022023009</td>
                                    <td>Print A4 Warna</td>
                                    <td>1.000</td>
                                    <td>10</td>
                                    <td>0</td>
                                    <td>10.000</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>13022023009</td>
                                    <td>Print A4 Full Warna</td>
                                    <td>1.500</td>
                                    <td>10</td>
                                    <td>0</td>
                                    <td>15.000</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>13022023009</td>
                                    <td>Print F4 HP</td>
                                    <td>800</td>
                                    <td>20</td>
                                    <td>0</td>
                                    <td>16.000</td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="row">
                            <div class="col-8"></div>
                            <div class="col-4">
                                <div class="table-responsive">
                                    <table class="table-sm">
                                        <tr>
                                            <th style="width: 40%">Disc.</th>
                                            <td style="width: 2%">:</td>
                                            <td>0%</td>
                                        </tr>
                                        <tr>
                                            <th>Total</th>
                                            <td>:</td>
                                            <td>Rp 43.500</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


@push('scripts')
    <script>
        $(function() {
            $('.select2').select2()

            //Initialize Select2 Elements
            $('.select2bs4').select2({
                theme: 'bootstrap4'
            })

            $('#daterange-btn').daterangepicker({
                    ranges: {
                        'Today': [moment(), moment()],
                        'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                        'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                        'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                        'This Month': [moment().startOf('month'), moment().endOf('month')],
                        'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1,
                            'month').endOf('month')]
                    },
                    startDate: moment().subtract(29, 'days'),
                    endDate: moment()
                },
                function(start, end) {
                    $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format(
                        'MMMM D, YYYY'))
                }
            )
        })
    </script>
@endpush

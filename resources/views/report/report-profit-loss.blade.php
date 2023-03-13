{{-- master template --}}
@extends('layouts.master')

@section('title')
    Profit & Loss Report
@endsection

@section('breadcrumb')
    @parent
    <li class="active">Reports / Profit & Loss</li>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-3">
            <div class="card card-indigo">
                <div class="card-header">
                    <h3 class="card-title">Profit & Loss Report</h3>
                </div>
                <div class="card-body">
                    <p>Tentukan tanggal awal dan akhir untuk export laporan Laba dan rugi!</p>
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
                        <h3 class="text-center">PROFIT/LOSS REPORT</h3>
                        <h6 class="text-center">Periode :2023-02-01 s/d 2023-02-28</h6>
                        <br>
                        <table id="example2" class="table table-head-fixed text-nowrap table-striped table-sm">
                            <thead>
                                <tr>
                                    <th>Code</th>
                                    <th>Product Name</th>
                                    <th>Qty</th>
                                    <th>Cost</th>
                                    <th>Total</th>
                                    <th>Profit</th>
                                    <th>Margin</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>RS0001</td>
                                    <td>Print A4 HP</td>
                                    <td>10</td>
                                    <td>1.500</td>
                                    <td>5.000</td>
                                    <td>3.500</td>
                                    <td>70,00%</td>
                                </tr>
                                <tr>
                                    <td>RS0002</td>
                                    <td>Print A4 Warna</td>
                                    <td>5</td>
                                    <td>900</td>
                                    <td>4.600</td>
                                    <td>3.700</td>
                                    <td>80,43%</td>
                                </tr>
                                <tr>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th>Rp 2.400</th>
                                    <th>Rp 9.600</th>
                                    <th>Rp 7.200</th>
                                    <th></th>
                                </tr>
                            </tbody>
                        </table>
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

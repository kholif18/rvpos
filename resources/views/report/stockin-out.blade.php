{{-- master template --}}
@extends('layouts.master')

@section('title')
    Stock In / Out Report
@endsection

@section('breadcrumb')
    @parent
    <li class="active">Reports / Stock In / Out</li>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-3">
            <div class="card card-indigo">
                <div class="card-header">
                    <h3 class="card-title">Stock In / Out Report</h3>
                </div>
                <div class="card-body">
                    <p>Tentukan tanggal awal dan akhir untuk export laporan stok masuk atau keluar!</p>
                    <div class="form-group">
                        <label>Date range button:</label>
                        <div class="input-group">
                            <button type="button" class="btn btn-default float-right" id="daterange-btn">
                                <i class="far fa-calendar-alt"></i> Date range picker
                                <i class="fas fa-caret-down"></i>
                            </button>
                        </div>
                    </div>
                    <label for="">Type</label>
                    <div class="input-group">
                        <select name="type" class="form-control select2" required>
                            <option value="stockin">Stock In</option>
                            <option value="stockout">Stock Out</option>
                        </select>
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
                        <h3 class="text-center">STOCK IN/OUT REPORT</h3>
                        <h6 class="text-center">Periode :2023-02-01 s/d 2023-02-28</h6>
                        <br>
                        <table id="example2" class="table table-head-fixed text-nowrap table-striped table-sm">
                            <thead>
                                <tr>
                                    <th>Barcode</th>
                                    <th>Product Name</th>
                                    <th>Unit</th>
                                    <th>Qty</th>
                                    <th>Amount</th>
                                    <th>Type</th>
                                    <th>Date</th>
                                    <th>Detail</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>45646464564</td>
                                    <td>Print A4 HP</td>
                                    <td>Pcs</td>
                                    <td>15</td>
                                    <td>7.500</td>
                                    <td>Stock In</td>
                                    <td>28/02/2023</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>54865465478</td>
                                    <td>Print A4 Warna</td>
                                    <td>Pcs</td>
                                    <td>25</td>
                                    <td>25.000</td>
                                    <td>Stock In</td>
                                    <td>28/02/2023</td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="row">
                            <div class="col-8"></div>
                            <div class="col-4">
                                <div class="table-responsive">
                                    <table class="table-sm">
                                        <tr>
                                            <th style="width: 40%">Total Stock In</th>
                                            <td style="width: 2%">:</td>
                                            <td>Rp 32.500</td>
                                        </tr>
                                        <tr>
                                            <th>Total Stock Out</th>
                                            <td>:</td>
                                            <td>Rp 0</td>
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

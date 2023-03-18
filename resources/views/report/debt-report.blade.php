{{-- master template --}}
@extends('layouts.master')

@section('title')
    Debt Report
@endsection

@section('breadcrumb')
    @parent
    <li class="breadcrumb-item">
        <a href="#">
            Debt
        </a>
    </li>
    <li class="breadcrumb-item active">
        <a href="{{ url()->current() }}">
            Debt Report
        </a>
    </li>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-3">
            <div class="card card-indigo">
                <div class="card-header">
                    <h3 class="card-title">Debt Report</h3>
                </div>
                <div class="card-body">
                    <p>Tentukan tanggal awal dan akhir untuk export laporan piutang</p>
                    <div class="form-group">
                        <label>Date range button:</label>
                        <div class="input-group">
                            <button type="button" class="btn btn-default float-right" id="daterange-btn">
                                <i class="far fa-calendar-alt"></i> Date range picker
                                <i class="fas fa-caret-down"></i>
                            </button>
                        </div>
                    </div>
                    <label for="">Pilih Customer</label>
                    <div class="input-group">
                        <select name="jenis" class="form-control select2" required>
                            <option value="all">Semua</option>
                            <option value="id1">ID Customer 1</option>
                            <option value="id2">ID Customer 2</option>
                            <option value="id3">ID Customer 3</option>
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
                        <h3 class="text-center">DEBT REPORT</h3>
                        <h6 class="text-center">Periode :2023-02-01 s/d 2023-02-28</h6>
                        <br>
                        <table id="example2" class="table table-head-fixed text-nowrap table-striped table-sm">
                            <thead>
                                <tr>
                                    <th>Invoice</th>
                                    <th>Customers Name</th>
                                    <th>Tgl. Piutang</th>
                                    <th>Jatuh Tempo</th>
                                    <th>Jml. Piutang</th>
                                    <th>Jml. Bayar</th>
                                    <th>Sisa</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>13022023009</td>
                                    <td>Bambang</td>
                                    <td>12-02-2023 | 19:24:12</td>
                                    <td>28-02-2023</td>
                                    <td>Rp 63.000</td>
                                    <td>Rp 50.000</td>
                                    <td>Rp 13.000</td>
                                    <td><span class="badge bg-danger" style="padding: 8px; font-size: 10pt">Belum
                                            Lunas</span></td>
                                </tr>
                                <tr>
                                    <td>15022023005</td>
                                    <td>Bu Win</td>
                                    <td>31-01-2023 | 19:24:12</td>
                                    <td>15-02-2023</td>
                                    <td>Rp 300.000</td>
                                    <td>Rp 300.000</td>
                                    <td>Rp -</td>
                                    <td><span class="badge bg-success" style="padding: 8px; font-size: 10pt">Lunas</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>120120230023</td>
                                    <td>Neneng</td>
                                    <td>15-02-2023 | 19:24:12</td>
                                    <td>17-02-2023</td>
                                    <td>Rp 52000</td>
                                    <td>Rp -</td>
                                    <td>Rp 52000</td>
                                    <td><span class="badge bg-danger" style="padding: 8px; font-size: 10pt">Belum
                                            Lunas</span></td>
                                </tr>
                                <tr>
                                    <td>17022023002</td>
                                    <td>Alexandro</td>
                                    <td>12-02-2023 | 19:24:12</td>
                                    <td>27-02-2023</td>
                                    <td>Rp 205.000</td>
                                    <td>Rp -</td>
                                    <td>Rp 205.000</td>
                                    <td><span class="badge bg-danger" style="padding: 8px; font-size: 10pt">Belum
                                            Lunas</span></td>
                                </tr>
                                <tr>
                                    <td>01022023016</td>
                                    <td>Bambang</td>
                                    <td>01-02-2023 | 19:24:12</td>
                                    <td>20-02-2023</td>
                                    <td>Rp 15.0000</td>
                                    <td>Rp 15.000</td>
                                    <td>Rp -</td>
                                    <td><span class="badge bg-success" style="padding: 8px; font-size: 10pt">Lunas</span>
                                    </td>
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

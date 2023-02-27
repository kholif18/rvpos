@extends('layouts.master')

@section('title')
    Debt
@endsection

@section('breadcrumb')
    @parent
    <li class="active">Transaction / Debt</li>
@endsection

@section('content')
    {{-- Tabel Hutang Customer --}}
    <div class="card card-warning">
        <div class="card-header">
            <h3 class="card-title">Customers</h3>
            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                </button>
            </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <div class="row">
                <div class="col-12">
                    <div class="card-body table-responsive p-0" style="height: 77vh;">
                        <table id="example2" class="table table-head-fixed text-nowrap table-striped table-sm">
                            <thead>
                                <tr>
                                    <th style="width: 15px">Invoice</th>
                                    <th>Customers Name</th>
                                    <th>Tgl. Piutang</th>
                                    <th>Jatuh Tempo</th>
                                    <th>Jml. Piutang</th>
                                    <th>Jml. Bayar</th>
                                    <th>Sisa</th>
                                    <th>Status</th>
                                    <th style="width: 45px">Option</th>
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
                                    <td>
                                        <button type="button" class="btn btn-info btn-sm" data-toggle="modal"
                                            data-target="#modal-detail">
                                            <i class="fas fa-search-plus"></i>
                                            Detail</button>
                                        <a href="{{ url('/transactions/debtpay') }}" class="btn btn-success btn-sm">
                                            <i class="fas fa-paper-plane"></i> Payment
                                        </a>
                                    </td>
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
                                    <td><button type="button" class="btn btn-info btn-sm"><i
                                                class="fas fa-search-plus"></i> Detail</button></td>
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
                                    <td>
                                        <button type="button" class="btn btn-info btn-sm">
                                            <i class="fas fa-search-plus"></i>
                                            Detail</button>
                                        <a href="{{ url('/transactions/debtpay') }}" class="btn btn-success btn-sm">
                                            <i class="fas fa-paper-plane"></i> Payment
                                        </a>
                                    </td>
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
                                    <td>
                                        <button type="button" class="btn btn-info btn-sm">
                                            <i class="fas fa-search-plus"></i>
                                            Detail</button>
                                        <a href="{{ url('/transactions/debtpay') }}" class="btn btn-success btn-sm">
                                            <i class="fas fa-paper-plane"></i> Payment
                                        </a>
                                    </td>
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
                                    <td><button type="button" class="btn btn-info btn-sm"><i
                                                class="fas fa-search-plus"></i> Detail</button></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->

    {{-- Modal Detail Unpaid  --}}
    <div class="modal fade" id="modal-detail">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Shopping Detail</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="card card-primary card-outline">
                        <div class="card-header">
                            <div class="card-title">Bambang</div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <div class="card-body table-responsive p-0" style="height: 200px;">
                                        <table id="example2" class="table table-head-fixed text-nowrap table-sm">
                                            <thead>
                                                <tr>
                                                    <th style="width: 150px;">Product Code</th>
                                                    <th>Barcode</th>
                                                    <th>Products Name</th>
                                                    <th>Price</th>
                                                    <th>Qty</th>
                                                    <th>Unit</th>
                                                    <th>Disc / Item</th>
                                                    <th>Total</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>RV001</td>
                                                    <td>0845621584654</td>
                                                    <td>Kertas A4</td>
                                                    <td>Rp 48.000</td>
                                                    <td>1</td>
                                                    <td>Pkg</td>
                                                    <td>0%</td>
                                                    <td>Rp 48.000</td>
                                                </tr>
                                                <tr>
                                                    <td>RV006</td>
                                                    <td>0845621584654</td>
                                                    <td>Map Snail Biru</td>
                                                    <td>Rp 3.000</td>
                                                    <td>1</td>
                                                    <td>Pcs</td>
                                                    <td>0%</td>
                                                    <td>Rp 15.000</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="row">
                                <div class="col-md-9">
                                </div>
                                <div class="col-md-3">
                                    <div class="input-group input-group-sm">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" style="width: 40px">Rp </span>
                                        </div>
                                        <input type="text" class="form-control text-bold bg-warning" readonly
                                            value="63.000">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card card-primary card-outline">
                        <div class="card-body" style="height: 200px">
                            <div class="row">
                                <div class="col-12">
                                    <div class="card-body table-responsive p-0" style="height: 200px;">
                                        <table id="example2" class="table table-head-fixed text-nowrap table-sm">
                                            <thead>
                                                <tr>
                                                    <th>Payment Type</th>
                                                    <th>Date</th>
                                                    <th>Amount</th>
                                                    <th>Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Cash</td>
                                                    <td>20/02/2023 | 09:27</td>
                                                    <td>Rp 30.000</td>
                                                    <td class="badge bg-success">Paid</td>
                                                </tr>
                                                <tr>
                                                    <td>Cash</td>
                                                    <td>27/02/2023 | 14:42</td>
                                                    <td>Rp 20.000</td>
                                                    <td class="badge bg-success">Paid</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="row">
                                <div class="col-md-8">
                                </div>
                                <div class="col-md-4">
                                    <div class="row">
                                        <label class="col-sm-4 col-form-label col-form-label-sm text-right"
                                            readonly>Less</label>
                                        <div class="col-sm-8">
                                            <div class="input-group input-group-sm">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" style="width: 40px">Rp </span>
                                                </div>
                                                <input type="text" class="form-control text-bold bg-danger" readonly
                                                    value="13.000">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary btn-sm"><i class="fas fa-paper-plane"></i>
                        Save</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
@endsection

@push('scripts')
    <script>
        $(function() {
            $('#example2').DataTable({
                "paging": false,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": false,
                "autoWidth": true,
                "responsive": false,
            });
        });
    </script>
@endpush

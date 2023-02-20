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
                                    <td>Rp 250.000</td>
                                    <td>Rp 200.000</td>
                                    <td>Rp 50.000</td>
                                    <td><span class="badge bg-danger" style="padding: 8px; font-size: 10pt">Belum Lunas</span></td>
                                    <td><button type="button" class="btn btn-success btn-sm"><i class="fas fa-check"></i> Payment</button></td>
                                </tr>
                                <tr>
                                    <td>15022023005</td>
                                    <td>Bu Win</td>
                                    <td>31-01-2023 | 19:24:12</td>
                                    <td>15-02-2023</td>
                                    <td>Rp 300.000</td>
                                    <td>Rp 300.000</td>
                                    <td>Rp -</td>
                                    <td><span class="badge bg-success" style="padding: 8px; font-size: 10pt">Lunas</span></td>
                                    <td><button type="button" class="btn btn-info btn-sm"><i class="fas fa-search-plus"></i> Detail Pembayaran</button></td>
                                </tr>
                                <tr>
                                    <td>120120230023</td>
                                    <td>Neneng</td>
                                    <td>15-02-2023 | 19:24:12</td>
                                    <td>17-02-2023</td>
                                    <td>Rp 52000</td>
                                    <td>Rp -</td>
                                    <td>Rp 52000</td>
                                    <td><span class="badge bg-danger" style="padding: 8px; font-size: 10pt">Belum Lunas</span></td>
                                    <td><button type="button" class="btn btn-success btn-sm"><i class="fas fa-check"></i> Payment</button></td>
                                </tr>
                                <tr>
                                    <td>17022023002</td>
                                    <td>Alexandro</td>
                                    <td>12-02-2023 | 19:24:12</td>
                                    <td>27-02-2023</td>
                                    <td>Rp 205.000</td>
                                    <td>Rp -</td>
                                    <td>Rp 205.000</td>
                                    <td><span class="badge bg-danger" style="padding: 8px; font-size: 10pt">Belum Lunas</span></td>
                                    <td><button type="button" class="btn btn-success btn-sm"><i class="fas fa-check"></i> Payment</button></td>
                                </tr>
                                <tr>
                                    <td>01022023016</td>
                                    <td>Bambang</td>
                                    <td>01-02-2023 | 19:24:12</td>
                                    <td>20-02-2023</td>
                                    <td>Rp 15.0000</td>
                                    <td>Rp 15.000</td>
                                    <td>Rp -</td>
                                    <td><span class="badge bg-success" style="padding: 8px; font-size: 10pt">Lunas</span></td>
                                    <td><button type="button" class="btn btn-info btn-sm"><i class="fas fa-search-plus"></i> Detail Pembayaran</button></td>
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
@endsection

@push('scripts')
<script>
    $(function () {
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
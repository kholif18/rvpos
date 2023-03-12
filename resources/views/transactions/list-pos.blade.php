@extends('layouts.master')

@section('title')
    List POS
@endsection

@section('breadcrumb')
    @parent
    <li class="active">Transaction / List POS</li>
@endsection

@section('content')
    {{-- Tabel Hutang Customer --}}
    <div class="card card-info">
        <div class="card-header">
            <h3 class="card-title">List POS</h3>
            <div class="card-tools">
                <div class="card-tools">
                    <div class="input-group input-group-sm" style="width: 250px;">
                        <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
                        <div class="input-group-append">
                            <button type="submit" class="btn btn-default">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <div class="row">
                <div class="col-12">
                    <div class="card-body table-responsive p-0" style="height: 70vh;">
                        <table id="example2" class="table table-head-fixed text-nowrap table-striped table-sm">
                            <thead>
                                <tr>
                                    <th>Invoice</th>
                                    <th>Time</th>
                                    <th>Kasir</th>
                                    <th>Customer</th>
                                    <th>Disc.</th>
                                    <th>Payment Method</th>
                                    <th>Qty</th>
                                    <th>Status</th>
                                    <th>Total</th>
                                    <th style="width: 45px">Option</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>13022023009</td>
                                    <td>12-02-2023 | 19:24:12</td>
                                    <td>Kasir</td>
                                    <td>Bambang</td>
                                    <td>0</td>
                                    <td>Cash</td>
                                    <td>5</td>
                                    <td><span class="badge bg-success" style="padding: 8px; font-size: 10pt">Lunas</span>
                                    </td>
                                    <td>Rp 250.000</td>
                                    <td><button type="button" class="btn btn-info btn-sm" data-toggle="modal"
                                            data-target="#modal-view1"><i class="fas fa-search-plus"></i></button>
                                        <button type="button" class="btn btn-success btn-sm"><i
                                                class="fas fa-print"></i></button>
                                        <button type="button" class="btn btn-danger btn-sm delete"><i
                                                class="fas fa-trash"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>13022023009</td>
                                    <td>12-02-2023 | 19:24:12</td>
                                    <td>Kasir</td>
                                    <td>Mbak Win</td>
                                    <td>0</td>
                                    <td>Cash</td>
                                    <td>1</td>
                                    <td><span class="badge bg-success" style="padding: 8px; font-size: 10pt">Lunas</span>
                                    </td>
                                    <td>Rp 103.000</td>
                                    <td><button type="button" class="btn btn-info btn-sm" data-toggle="modal"
                                            data-target="#modal-view2"><i class="fas fa-search-plus"></i></button>
                                        <button type="button" class="btn btn-success btn-sm"><i
                                                class="fas fa-print"></i></button>
                                        <button type="button" class="btn btn-danger btn-sm delete"><i
                                                class="fas fa-trash"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>13022023009</td>
                                    <td>12-02-2023 | 19:24:12</td>
                                    <td>Kasir</td>
                                    <td>Alexandro</td>
                                    <td>0</td>
                                    <td>Credit</td>
                                    <td>5</td>
                                    <td><span class="badge bg-danger" style="padding: 8px; font-size: 10pt">Hutang</span>
                                    </td>
                                    <td>Rp 200.000</td>
                                    <td><a href="{{ url('/transactions/debtpay') }}"
                                            class="btn btn-success btn-block btn-sm">
                                            <i class="fas fa-paper-plane"></i> Payment
                                        </a></td>
                                </tr>
                                <tr>
                                    <td>13022023009</td>
                                    <td>12-02-2023 | 19:24:12</td>
                                    <td>Kasir</td>
                                    <td>Alexandro</td>
                                    <td>0</td>
                                    <td>Credit</td>
                                    <td>5</td>
                                    <td><span class="badge bg-primary" style="padding: 8px; font-size: 10pt">Disimpan</span>
                                    </td>
                                    <td>Rp 200.000</td>
                                    <td><a href="{{ url('/sales') }}" class="btn btn-success btn-block btn-sm">
                                            <i class="fas fa-paper-plane"></i> Payment
                                        </a></td>
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
    <div class="modal fade" id="modal-view1">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Bambang</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <table id="example2" class="table table-head-fixed text-nowrap table-sm">
                        <thead>
                            <tr>
                                <th style="width: 100px;">Product Code</th>
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
                                <td>5</td>
                                <td>Pcs</td>
                                <td>0%</td>
                                <td>Rp 15.000</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
    <div class="modal fade" id="modal-view2">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Mbak Win</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <table id="example2" class="table table-head-fixed text-nowrap table-sm">
                        <thead>
                            <tr>
                                <th style="width: 100px;">Product Code</th>
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
                                <td>5</td>
                                <td>Pcs</td>
                                <td>0%</td>
                                <td>Rp 15.000</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
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
        $('.delete').click(function() {
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire({
                        icon: 'success',
                        title: 'Deleted!',
                        text: "Your file has been deleted.",
                        showConfirmButton: false,
                        timer: 1500
                    })
                }
            });
        });
    </script>
@endpush

@extends('layouts.master')

@section('title')
    List Purchases
@endsection

@section('breadcrumb')
    @parent
    <li class="active">Transaction / List Purchases</li>
@endsection

@section('content')
    {{-- Tabel Hutang Customer --}}
    <div class="card card-info">
        <div class="card-header">
            <h3 class="card-title">List Purchases</h3>
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
                    <div class="card-body table-responsive p-0" style="height: 70vh;">
                        <table id="example2" class="table table-head-fixed text-nowrap table-striped table-sm">
                            <thead>
                                <tr>
                                    <th>Invoice</th>
                                    <th>Date</th>
                                    <th>Supplier</th>
                                    <th>Total</th>
                                    <th>Payment Status</th>
                                    <th>Added By</th>
                                    <th style="width: 150px">Option</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>13022023009</td>
                                    <td>19/02/2023</td>
                                    <td>Citra Stationary</td>
                                    <td>Rp 523.000</td>
                                    <td><span class="badge bg-success" style="padding: 8px; font-size: 10pt">Lunas</span>
                                    </td>
                                    <td>Admin</td>
                                    <td><button type="button" class="btn btn-info btn-sm"><i
                                                class="fas fa-eye"></i></button>
                                        <button type="button" class="btn btn-info btn-sm"><i
                                                class="fas fa-edit"></i></button>
                                        <button type="button" class="btn btn-success btn-sm"><i
                                                class="fas fa-print"></i></button>
                                        <button type="button" class="btn btn-danger btn-sm"><i
                                                class="fas fa-trash"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>4568462186521</td>
                                    <td>19/02/2023</td>
                                    <td>Karunia Photo</td>
                                    <td>Rp 56.000</td>
                                    <td><span class="badge bg-success" style="padding: 8px; font-size: 10pt">Lunas</span>
                                    </td>
                                    <td>Admin</td>
                                    <td><button type="button" class="btn btn-info btn-sm"><i
                                                class="fas fa-eye"></i></button>
                                        <button type="button" class="btn btn-info btn-sm"><i
                                                class="fas fa-edit"></i></button>
                                        <button type="button" class="btn btn-success btn-sm"><i
                                                class="fas fa-print"></i></button>
                                        <button type="button" class="btn btn-danger btn-sm"><i
                                                class="fas fa-trash"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>87655465</td>
                                    <td>19/02/2023</td>
                                    <td>Praktika</td>
                                    <td>Rp 220.000</td>
                                    <td><span class="badge bg-success" style="padding: 8px; font-size: 10pt">Lunas</span>
                                    </td>
                                    <td>Admin</td>
                                    <td><button type="button" class="btn btn-info btn-sm"><i
                                                class="fas fa-eye"></i></button>
                                        <button type="button" class="btn btn-info btn-sm"><i
                                                class="fas fa-edit"></i></button>
                                        <button type="button" class="btn btn-success btn-sm"><i
                                                class="fas fa-print"></i></button>
                                        <button type="button" class="btn btn-danger btn-sm"><i
                                                class="fas fa-trash"></i></button>
                                    </td>
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

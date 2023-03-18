@extends('layouts.master')

@section('title')
    List Purchases
@endsection

@section('breadcrumb')
    @parent
    <li class="breadcrumb-item">
        <a href="#">
            Purchases
        </a>
    </li>
    <li class="breadcrumb-item active">
        <a href="{{ url()->current() }}">
            List Purchases
        </a>
    </li>
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
                                    <th>Payment Status</th>
                                    <th>Added By</th>
                                    <th>Total</th>
                                    <th style="width: 150px">Option</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>13022023009</td>
                                    <td>19/02/2023</td>
                                    <td>Citra Stationary</td>
                                    <td><span class="badge bg-success" style="padding: 8px; font-size: 10pt">Lunas</span>
                                    </td>
                                    <td>Admin</td>
                                    <td>Rp 523.000</td>
                                    <td><button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#modal-view"><i class="fas fa-eye"></i></button>
                                        <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#modal-edit"><i class="fas fa-edit"></i></button>
                                        <button type="button" class="btn btn-success btn-sm"><i class="fas fa-print"></i></button>
                                        <button type="button" class="btn btn-danger btn-sm delete"><i class="fas fa-trash"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>4568462186521</td>
                                    <td>19/02/2023</td>
                                    <td>Karunia Photo</td>
                                    <td><span class="badge bg-success" style="padding: 8px; font-size: 10pt">Lunas</span>
                                    </td>
                                    <td>Admin</td>
                                    <td>Rp 56.000</td>
                                    <td><button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#modal-view"><i class="fas fa-eye"></i></button>
                                        <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#modal-edit"><i class="fas fa-edit"></i></button>
                                        <button type="button" class="btn btn-success btn-sm"><i class="fas fa-print"></i></button>
                                        <button type="button" class="btn btn-danger btn-sm delete"><i class="fas fa-trash"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>87655465</td>
                                    <td>19/02/2023</td>
                                    <td>Praktika</td>
                                    <td><span class="badge bg-success" style="padding: 8px; font-size: 10pt">Lunas</span>
                                    </td>
                                    <td>Admin</td>
                                    <td>Rp 63.000</td>
                                    <td><button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#modal-view"><i class="fas fa-eye"></i></button>
                                        <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#modal-edit"><i class="fas fa-edit"></i></button>
                                        <button type="button" class="btn btn-success btn-sm"><i class="fas fa-print"></i></button>
                                        <button type="button" class="btn btn-danger btn-sm delete"><i class="fas fa-trash"></i></button>
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

    <!-- Modal View -->
    @include('purchases.modal')
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

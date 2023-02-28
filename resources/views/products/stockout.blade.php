@extends('layouts.master')

@section('title')
    Stock Out
@endsection

@section('breadcrumb')
    @parent
    <li class="active">Products / Stock Out</li>
@endsection

@section('content')
    <div class="card card-primary card-outline">
        <div class="card-header">
            <h3 class="card-title">Stock out</h3>
            <div class="card-tools">
                <button type="button" class="btn btn-success  btn-sm" data-toggle="modal" data-target="#modal-add">
                    <i class="fas fa-plus-circle"></i> Add Stock Out
                </button>
            </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <div class="row">
                <div class="col-12">
                    <div class="card-body table-responsive p-0" style="height: 69vh;">
                        <table id="example2" class="table table-head-fixed text-nowrap table-striped table-sm">
                            <thead>
                                <tr>
                                    <th style="width: 160px">Product Code</th>
                                    <th>Barcode</th>
                                    <th>Products Name</th>
                                    <th>Category</th>
                                    <th>Qty</th>
                                    <th>Detail</th>
                                    <th>Date</th>
                                    <th style="width: 130px">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>RV0015</td>
                                    <td>0651454789546</td>
                                    <td>Kartas F4 70 Gsm</td>
                                    <td>ATK</td>
                                    <td>1</td>
                                    <td>Sobek</td>
                                    <td>12/02/2023</td>
                                    <td><button type="button" class="btn btn-info btn-sm" data-toggle="modal"
                                            data-target="#modal-edit"><i class="fas fa-edit"></i></button>
                                        <button style="margin-left: 20px" type="button"
                                            class="btn btn-danger btn-sm delete"><i class="fas fa-trash-alt"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>RV0015</td>
                                    <td>8754654324153</td>
                                    <td>Isolasi Hitam National </td>
                                    <td>ATK</td>
                                    <td>1</td>
                                    <td>Hilang</td>
                                    <td>12/02/2023</td>
                                    <td><button type="button" class="btn btn-info btn-sm" data-toggle="modal"
                                            data-target="#modal-edit"><i class="fas fa-edit"></i></button>
                                        <button style="margin-left: 20px" type="button"
                                            class="btn btn-danger btn-sm delete"><i class="fas fa-trash-alt"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>RV0015</td>
                                    <td>0651454789546</td>
                                    <td>Tipe-x Joyko CF-5221</td>
                                    <td>ATK</td>
                                    <td>1</td>
                                    <td>Rusak</td>
                                    <td>12/02/2023</td>
                                    <td><button type="button" class="btn btn-info btn-sm" data-toggle="modal"
                                            data-target="#modal-edit"><i class="fas fa-edit"></i></button>
                                        <button style="margin-left: 20px" type="button"
                                            class="btn btn-danger btn-sm delete"><i class="fas fa-trash-alt"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>RV0015</td>
                                    <td>546843241585</td>
                                    <td>Buku HC Folio isi 100</td>
                                    <td>ATK</td>
                                    <td>1</td>
                                    <td>Rusak</td>
                                    <td>12/02/2023</td>
                                    <td><button type="button" class="btn btn-info btn-sm" data-toggle="modal"
                                            data-target="#modal-edit"><i class="fas fa-edit"></i></button>
                                        <button style="margin-left: 20px" type="button"
                                            class="btn btn-danger btn-sm delete"><i class="fas fa-trash-alt"></i></button>
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

    {{-- modal page --}}
    @include('products.modal')
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

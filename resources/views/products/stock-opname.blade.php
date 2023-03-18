@extends('layouts.master')

@section('title')
    Stock Opname
@endsection

@section('breadcrumb')
    @parent
    <li class="breadcrumb-item">
        <a href="#">
            Products
        </a>
    </li>
    <li class="breadcrumb-item active">
        <a href="{{ url()->current() }}">
            Stock Opname
        </a>
    </li>
@endsection

@section('content')
    <div class="card card-primary card-outline">
        <div class="card-header">
            <h3 class="card-title">Stok Opname</h3>
            <div class="card-tools">
                <button type="button" class="btn btn-success  btn-sm" data-toggle="modal" data-target="#modal-add">
                    <i class="fas fa-plus-circle"></i> Add Product
                </button>
            </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <div class="row">
                <div class="col-12">
                    <div class="card-body table-responsive p-0" style="height: 69vh;">
                        <table id="example1" class="table table-head-fixed text-nowrap table-striped table-sm">
                            <thead>
                                <tr>
                                    <th>Date</th>
                                    <th>Barcode</th>
                                    <th>Products Name</th>
                                    <th>Stock</th>
                                    <th>Real Stock</th>
                                    <th>Difference</th>
                                    <th>Value Price</th>
                                    <th>Detail</th>
                                    <th style="width: 130px">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($stockopnames as $stockopname)
                                    <tr>
                                        <td>{{ $stockopname->created_at }}</td>
                                        <td>{{ $Stockopname->product->barcode }}</td>
                                        <td>{{ $stockopname->name }}</td>
                                        <td>{{ $stockopname->product->quantity }}</td>
                                        <td>{{ $stockopname->realstock }}</td>
                                        <td>{{ $stockopname->difference }}</td>
                                        <td>{{ $stockopname->value_price }}</td>
                                        <td>{{ $stockopname->detail }}</td>
                                        <td><button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#modal-edit"><i class="fas fa-edit"></i></button>
                                            <button style="margin-left: 20px" type="button" class="btn btn-danger btn-sm delete"><i class="fas fa-trash-alt"></i></button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.card-body -->

    </div>
    <!-- /.card -->

    <!-- Modal Unit -->
    @include('products._modal-stock-opname')
@endsection


@push('scripts')
    <!-- Select2 -->
    <script src="{{ asset('template/plugins/select2/js/select2.full.min.js') }}"></script>
    {{-- When the user clicks on the button,
toggle between hiding and showing the dropdown content --}}

    <script>
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
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

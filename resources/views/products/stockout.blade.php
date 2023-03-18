@extends('layouts.master')

@section('title')
    Stock Out
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
            Stock Out
        </a>
    </li>
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
                                @foreach ($stockouts as $stockout)
                                    <tr>
                                        @foreach ($products as $product)
                                            <td>{{ $product->pcode }}</td>
                                            <td>{{ $product->barcode }}</td>
                                        @endforeach
                                        <td>{{ $stockout->pname }}</td>
                                        @foreach ($categories as $category)
                                            <td>{{ $category->name }}</td>
                                        @endforeach
                                        <td>{{ $stockout->qty }}</td>
                                        <td>{{ $stockout->detail }}</td>
                                        <td>{{ $stockout->create_at }}</td>
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

@extends('layouts.master')

@section('title')
    Products
@endsection

@section('breadcrumb')
    @parent
    <li class="active">Products / Products</li>
@endsection

@section('content')
    <div class="card card-primary card-outline">
        <div class="card-header">
            <h3 class="card-title">Products</h3>
            <div class="card-tools">
                <button type="button" class="btn btn-success  btn-sm" data-toggle="modal" data-target="#modal-add-product">
                    <i class="fas fa-plus-circle"></i> Add New Product
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
                                    <th style="width: 130px">Product Code</th>
                                    <th>Barcode</th>
                                    <th>Product Name</th>
                                    <th>Category</th>
                                    <th>Unit</th>
                                    <th>Cost Price</th>
                                    <th>Selling Price</th>
                                    <th>Stock</th>
                                    <th style="width: 130px">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($products as $product)
                                    <tr>
                                        <td>{{ $product->pcode }}</td>
                                        <td>{{ $product->barcode }}</td>
                                        <td>{{ $product->pname }}</td>
                                        @foreach ($categories as $category)
                                            <td>{{ $category->name }}</td>
                                        @endforeach
                                        @foreach ($units as $unit)
                                            <td>{{ $unit->unit }}</td>
                                        @endforeach
                                        <td>{{ $product->cost }}</td>
                                        <td>{{ $product->saleprice }}</td>
                                        <td>-</td>
                                        <td><button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#modal-edit"><i class="fas fa-edit"></i></button>
                                            <form action="{{ route('product.delete', $product->id) }}" method="post" class="d-inline">
                                                @csrf
                                                @method('delete')
                                                <button style="margin-left: 20px" type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')"><i class="fas fa-trash-alt"></i></button>
                                            </form>
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

    {{-- Modal --}}
    @include('products._modal-add-product')
@endsection


@push('scripts')
    <!-- Select2 -->
    <script src="{{ asset('template/plugins/select2/js/select2.full.min.js') }}"></script>
    {{-- When the user clicks on the button,
toggle between hiding and showing the dropdown content --}}

    <script>
        $(function() {
            $("#example1").DataTable({
                "paging": false,
                "ordering": true,
                "info": false,
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
            });
        });

        // function getProducts(keyword) {
        //     const ajax = new XMLHttpRequest();
        //     ajax.onload = function () {
        //         const data = JSON.parse(ajax.responseText);
        //         displayProduct(data);
        //     }
        // }
    </script>
@endpush

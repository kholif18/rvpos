@extends('layouts.master')

@section('title')
    Products
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
            Products
        </a>
    </li>
@endsection

@section('content')
    <div class="card card-primary card-outline">
        <div class="card-header">
            <h3 class="card-title">Products</h3>
            <div class="card-tools">
                <button type="button" class="btn btn-success  btn-sm add-product" data-url="{{ route('products.products.ajax.store') }}">
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
                                        <td>{{ $product->code }}</td>
                                        <td>{{ $product->barcode }}</td>
                                        <td>{{ $product->name }}</td>
                                        <td>{{ $product->category->name }}</td>
                                        <td>{{ $product->unit->name }}</td>
                                        <td>{{ $product->purchase_price }}</td>
                                        <td>{{ $product->sale_price }}</td>
                                        <td>{{ $product->quantity }}</td>
                                        <td>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <a href="#" class="btn btn-info btn-sm btn-block edit-product" data-url="{{ route('products.products.ajax.save', ['product' => $product->id]) }}"
                                                        data-fetch-url="{{ route('products.products.ajax.detail', ['product' => $product->id]) }}">
                                                        <i class="fas fa-edit"></i>
                                                    </a>
                                                </div>
                                                <div class="col-sm-6">
                                                    <a href="#" class="btn btn-danger btn-sm btn-block delete-product" data-url="{{ route('products.products.ajax.delete', ['product' => $product->id]) }}"
                                                        data-token="{{ csrf_token() }}">
                                                        <i class="fas fa-trash-alt"></i>
                                                    </a>
                                                </div>
                                            </div>
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
    @include('products.products.form-modal')
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

        $(document).ready(function() {
            // Handle submit form (Tambah Product & Update Product)
            $(document).on('submit', '#form-product', function(event) {
                event.preventDefault();

                const httpUrl = $(this).attr('action');
                const httpMethod = $(this).attr('method');
                const formData = $(this).serialize();

                // Submit the form data using Ajax
                $.ajax({
                    type: httpMethod,
                    url: httpUrl,
                    data: formData,
                    success: function(response) {
                        // Do something with the response data
                        console.log(response);
                        if (response.status === 'success') {
                            Swal.fire({
                                title: response.message,
                                icon: 'success',
                                allowEscapeKey: true,
                                allowOutsideClick: true,
                                timer: 2000,
                                showConfirmButton: false,
                            }).then((result) => {
                                window.location.reload();
                            });
                        }
                    },
                    error: function(xhr, status, error) {
                        // Handle errors
                        console.log(xhr.responseText);
                        Swal.fire({
                            icon: 'error',
                            title: 'Maaf, terjadi kesalahan',
                            text: 'Cek log untuk info detail',
                            toast: true,
                            position: 'top-end',
                            timer: 3500,
                            timerProgressBar: true,
                            showConfirmButton: false,
                        });
                    }
                });
            });

            // Handle ketika user meng-klik tombol "Add Product"
            $(document).on('click', '.add-product', function(event) {
                event.preventDefault();

                // Set url action to add
                const httpUrl = $(this).attr('data-url');
                $(document).find('#form-product').attr('action', httpUrl);
                $(document).find('#form-product').attr('method', 'post');
                $('#modal-form-product .modal-title').text('Add Product');

                // Reset form input from previous
                $(document).find('#form-product input[name="code"]').val('');
                $(document).find('#form-product input[name="barcode"]').val('');
                $(document).find('#form-product input[name="name"]').val('');
                $(document).find('#form-product input[name="category_id"]').val('');
                $(document).find('#form-product input[name="unit_id"]').val('');
                $(document).find('#form-product input[name="purchase_price"]').val('');
                $(document).find('#form-product input[name="markup"]').val('');
                $(document).find('#form-product input[name="sale_price"]').val('');

                // Show modal form
                $('#modal-form-product').modal('show');
            });

            // Handle ketika user meng-klik tombol edit
            $(document).on('click', '.edit-product', function(event) {
                event.preventDefault();

                // Set url action to edit
                const httpUrl = $(this).attr('data-url');
                $(document).find('#form-product').attr('action', httpUrl);
                $(document).find('#form-product').attr('method', 'put');
                $('#modal-form-product .modal-title').text('Edit Product');

                // Fetch data from database
                const httpFetchUrl = $(this).attr('data-fetch-url');
                $.ajax({
                    url: httpFetchUrl,
                    success: function(response) {
                        // Do something with the response data
                        console.log(response);
                        if (response.status === 'success') {
                            const data = response.data;
                            $(document).find('#form-product input[name="code"]').val(data.code);
                            $(document).find('#form-product input[name="barcode"]').val(data.barcode);
                            $(document).find('#form-product input[name="name"]').val(data.name);
                            $(document).find('#form-product input[name="category_id"]').val(data.category_id);
                            $(document).find('#form-product input[name="unit_id"]').val(data.unit_id);
                            $(document).find('#form-product input[name="purchase_price"]').val(data.purchase_price);
                            $(document).find('#form-product input[name="markup"]').val(data.markup);
                            $(document).find('#form-product input[name="sale_price"]').val(data.sale_price);
                        }
                    }
                });

                // Show modal form
                $('#modal-form-product').modal('show');
            });

            // Handle ketika user meng-klik tombol hapus
            $(document).on('click', '.delete-product', function(event) {
                event.preventDefault();

                // Variable bantuan (Menghindari scope js)
                const _this = $(this);

                // Show confirmation
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
                        const httpUrl = _this.attr('data-url');
                        const httpMethod = 'delete';
                        const csrfToken = _this.attr('data-token');

                        // Submit the form data using Ajax
                        $.ajax({
                            type: httpMethod,
                            url: httpUrl,
                            data: {
                                "_token": csrfToken,
                            },
                            success: function(response) {
                                // Do something with the response data
                                console.log(response);
                                if (response.status === 'success') {
                                    Swal.fire({
                                        title: response.message,
                                        icon: 'success',
                                        allowEscapeKey: true,
                                        allowOutsideClick: true,
                                        timer: 2000,
                                        showConfirmButton: false,
                                    }).then((result) => {
                                        window.location.reload();
                                    });
                                }
                            },
                            error: function(xhr, status, error) {
                                // Handle errors
                                console.log(xhr.responseText);
                                Swal.fire({
                                    icon: 'error',
                                    title: 'Maaf, terjadi kesalahan',
                                    text: 'Cek log untuk info detail',
                                    toast: true,
                                    position: 'top-end',
                                    timer: 3500,
                                    timerProgressBar: true,
                                    showConfirmButton: false,
                                });
                            }
                        });
                    }
                });
            });
        });
    </script>
@endpush

@extends('layouts.master')

@section('title')
    Categories & Units
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
            Categories & Units
        </a>
    </li>
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="card card-primary card-outline">
                <div class="card-header">
                    <h3 class="card-title">Category</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-success btn-sm add-category" data-url="{{ route('products.categories.ajax.store') }}">
                            <i class="fas fa-plus-circle"></i> Add Category
                        </button>
                    </div>
                </div>

                {{-- Card Category --}}
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="card-body table-responsive p-0" style="height: 69vh;">
                                <table id="categoryTable" class="table table-head-fixed text-nowrap table-striped table-sm">
                                    <thead>
                                        <tr>
                                            <th style="width: 60px">No.</th>
                                            <th>Categories</th>
                                            <th style="width: 130px">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $no = 1;
                                        @endphp
                                        @foreach ($categories as $category)
                                            <tr>
                                                <td>
                                                    {{ $no++ }}
                                                </td>
                                                <td>
                                                    {{ $category->name }}
                                                </td>
                                                <td>
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <a href="#" class="btn btn-info btn-sm btn-block edit-category" data-url="{{ route('products.categories.ajax.save', ['category' => $category->id]) }}"
                                                                data-fetch-url="{{ route('products.categories.ajax.detail', ['category' => $category->id]) }}">
                                                                <i class="fas fa-edit"></i>
                                                            </a>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <a href="#" class="btn btn-danger btn-sm btn-block delete-category" data-url="{{ route('products.categories.ajax.delete', ['category' => $category->id]) }}"
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
            </div>
        </div>

        {{-- Card Unit --}}
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="card card-primary card-outline">
                <div class="card-header">
                    <h3 class="card-title">Units</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-success btn-sm add-unit" data-url="{{ route('products.units.ajax.store') }}">
                            <i class="fas fa-plus-circle"></i> Add Unit
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="card-body table-responsive p-0" id="read" style="height: 69vh;">
                                <table class="table table-head-fixed text-nowrap table-striped table-sm">
                                    <thead>
                                        <tr>
                                            <th style="width: 60px">No.</th>
                                            <th>Units</th>
                                            <th style="width: 130px">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $no = 1;
                                        @endphp
                                        @foreach ($units as $unit)
                                            <tr>
                                                <td>
                                                    {{ $no++ }}
                                                </td>
                                                <td>
                                                    {{ $unit->name }}
                                                </td>
                                                <td>
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <a href="#" class="btn btn-info btn-sm btn-block edit-unit" data-url="{{ route('products.units.ajax.save', ['unit' => $unit->id]) }}"
                                                                data-fetch-url="{{ route('products.units.ajax.detail', ['unit' => $unit->id]) }}">
                                                                <i class="fas fa-edit"></i>
                                                            </a>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <a href="#" class="btn btn-danger btn-sm btn-block delete-unit" data-url="{{ route('products.units.ajax.delete', ['unit' => $unit->id]) }}"
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
            </div>
        </div>
    </div>

    <!-- Modal form category-->
    @include('products.category._form-category')

    <!-- Modal form unit-->
    @include('products.category._form-unit')
@endsection

@push('scripts')
    <script>
        let Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 2000
        });

        $(document).ready(function() {
            // Handle submit form (Tambah Kategori & Update Kategori)
            $(document).on('submit', '#form-category', function(event) {
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

            // Handle ketika user meng-klik tombol "Add Category"
            $(document).on('click', '.add-category', function(event) {
                event.preventDefault();

                // Set url action to add
                const httpUrl = $(this).attr('data-url');
                $(document).find('#form-category').attr('action', httpUrl);
                $(document).find('#form-category').attr('method', 'post');
                $('#modal-form-category .modal-title').text('Add category');

                // Reset form input from previous
                $(document).find('#form-category input[name="name"]').val('');

                // Show modal form
                $('#modal-form-category').modal('show');
            });

            // Handle ketika user meng-klik tombol edit
            $(document).on('click', '.edit-category', function(event) {
                event.preventDefault();

                // Set url action to edit
                const httpUrl = $(this).attr('data-url');
                $(document).find('#form-category').attr('action', httpUrl);
                $(document).find('#form-category').attr('method', 'put');
                $('#modal-form-category .modal-title').text('Edit category');

                // Fetch data from database
                const httpFetchUrl = $(this).attr('data-fetch-url');
                $.ajax({
                    url: httpFetchUrl,
                    success: function(response) {
                        // Do something with the response data
                        console.log(response);
                        if (response.status === 'success') {
                            const data = response.data;
                            $(document).find('#form-category input[name="name"]').val(data.name);
                        }
                    }
                });

                // Show modal form
                $('#modal-form-category').modal('show');
            });

            // Handle ketika user meng-klik tombol hapus
            $(document).on('click', '.delete-category', function(event) {
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

            //----------------------------------Unit---------------------------------

            // Handle submit form (Tambah Unit & Update Unit)
            $(document).on('submit', '#form-unit', function(event) {
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

            // Handle ketika user meng-klik tombol "Add Unit"
            $(document).on('click', '.add-unit', function(event) {
                event.preventDefault();

                // Set url action to add
                const httpUrl = $(this).attr('data-url');
                $(document).find('#form-unit').attr('action', httpUrl);
                $(document).find('#form-unit').attr('method', 'post');
                $('#modal-form-unit .modal-title').text('Add Unit');

                // Reset form input from previous
                $(document).find('#form-unit input[name="name"]').val('');

                // Show modal form
                $('#modal-form-unit').modal('show');
            });

            // Handle ketika user meng-klik tombol edit
            $(document).on('click', '.edit-unit', function(event) {
                event.preventDefault();

                // Set url action to edit
                const httpUrl = $(this).attr('data-url');
                $(document).find('#form-unit').attr('action', httpUrl);
                $(document).find('#form-unit').attr('method', 'put');
                $('#modal-form-unit .modal-title').text('Edit Unit');

                // Fetch data from database
                const httpFetchUrl = $(this).attr('data-fetch-url');
                $.ajax({
                    url: httpFetchUrl,
                    success: function(response) {
                        // Do something with the response data
                        console.log(response);
                        if (response.status === 'success') {
                            const data = response.data;
                            $(document).find('#form-unit input[name="name"]').val(data.name);
                        }
                    }
                });

                // Show modal form
                $('#modal-form-unit').modal('show');
            });

            // Handle ketika user meng-klik tombol hapus
            $(document).on('click', '.delete-unit', function(event) {
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

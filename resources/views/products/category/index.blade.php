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
                        <button type="button" class="btn btn-success  btn-sm" data-toggle="modal" data-target="#modal-form-category">
                            <i class="fas fa-plus-circle"></i> Add Category
                        </button>
                    </div>
                </div>

                {{-- Card Category --}}
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="card-body table-responsive p-0" style="height: 69vh;">
                                <table class="table table-head-fixed text-nowrap table-striped table-sm">
                                    <thead>
                                        <tr>
                                            <th style="width: 60px">No.</th>
                                            <th>Categories</th>
                                            <th>Prefix</th>
                                            <th style="width: 130px">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $no = 1;
                                        @endphp
                                        @foreach ($categories as $category)
                                            <tr>
                                                <td>{{ $no++ }}</td>
                                                <td>{{ $category->name }}</td>
                                                <td>{{ $category->prefix }}</td>
                                                <td><a href="{{ route('category.edit', $category->id) }}" class="d-inline btn btn-info btn-sm"><i class="fas fa-edit"></i></a>
                                                    <form action="{{ route('category.destroy', $category->id) }}" method="post" class="d-inline">
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
            </div>
        </div>

        {{-- Card Unit --}}
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="card card-primary card-outline">
                <div class="card-header">
                    <h3 class="card-title">Units</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-success  btn-sm" data-toggle="modal" data-target="#modal-form-unit">
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
                                                    <button style="margin-left: 20px" class="btn btn-info btn-sm" onClick="showunit({{ $unit->id }})"><i class="fas fa-edit"></i></button>
                                                    {{-- <a href="{{ route('unit.edit', $unit->id) }}" class="d-inline btn btn-info btn-sm" data-toggle="modal" data-target="#unit-edit"><i class="fas fa-edit"></i></a> --}}
                                                    <form action="{{ route('unit.delete', $unit->id) }}" method="post" class="d-inline">
                                                        @csrf
                                                        @method('delete')
                                                        <button style="margin-left: 20px" type="submit" class="btn btn-danger btn-sm" onclick="confirm()"><i class="fas fa-trash-alt"></i></button>
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
        function confirm() {
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
        }

        $(document).ready(function() {
            // Handle submit form (Tambah Kategori)
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
                                icon: 'info',
                                allowEscapeKey: false,
                                allowOutsideClick: false,
                                confirmButtonText: 'OK'
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
        });
    </script>
@endpush

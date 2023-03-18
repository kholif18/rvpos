@extends('layouts.master')

@section('title')
    Categories / Units
@endsection

@section('breadcrumb')
    @parent
    <li class="active">Products / Categories & Units</li>
@endsection

@section('content')
    <div class="row">
        <div class="col-xs-12">
            <div class="card card-primary card-outline">
                <div class="card-header">
                    <h3 class="card-title">Category</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-success  btn-sm" data-toggle="modal" data-target="#add-category">
                            <i class="fas fa-plus-circle"></i> Add Category
                        </button>
                    </div>
                </div>
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
    </div>
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
    </script>
@endpush

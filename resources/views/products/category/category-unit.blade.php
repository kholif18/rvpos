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
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="card card-primary card-outline">
                <div class="card-header">
                    <h3 class="card-title">Category</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-success  btn-sm" data-toggle="modal" data-target="#add-category">
                            <i class="fas fa-plus-circle"></i> Add Category
                        </button>
                    </div>
                </div>
                <!-- /.card-header -->
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
                                        @foreach ($categories as $category)
                                            <tr>
                                                <td></td>
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
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        {{-- Card Category End --}}

        {{-- Card Unit --}}
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="card card-primary card-outline">
                <div class="card-header">
                    <h3 class="card-title">Units</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-success  btn-sm" onClick="createunit()">
                            <i class="fas fa-plus-circle"></i> Add Unit
                        </button>
                    </div>
                </div>
                <!-- /.card-header -->
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
                                        @foreach ($units as $unit)
                                            <tr>
                                                <td>{{ $unit->no }}</td>
                                                <td>{{ $unit->name }}</td>
                                                <td><button style="margin-left: 20px" class="btn btn-info btn-sm" onClick="showunit({{ $unit->id }})"><i class="fas fa-edit"></i></button>
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
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>
    {{-- Card Unit End --}}

    <!-- Modal -->
    <!-- Modal Unit -->
    <div class="modal fade" id="edit-unit">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Add Unit</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label class="col-form-label col-form-label-sm text-sm-right">Unit Name</label>
                        <div class="input-group input-group-sm">
                            <input name="addunit" type="text" class="form-control" required>
                        </div>
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-success btn-sm"><i class="fas fa-paper-plane"></i>
                        Save</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->

    <!-- Modal create category-->
    @include('products.category._form-category')
    <!-- Modal edit category-->
    @include('products.category._form-category-edit')
    <!-- Modal create unit-->
    @include('products.category._form-unit')
    <!-- Modal edit unit-->
    @include('products.category._form-unit-edit')
@endsection


@push('scripts')
    <script>
        function showunit(id) {
            $.get("{{ route('unit.show', $unit->id) }}", function(unit, status) {
                $("#edit-unit").modal('show');
            });
        }
        // });
        // function update(id) {
        //     var name = $('#name').val();
        //     var prefix = $('#prefix').val();
        //     $.ajax({
        //         type: "get",
        //         url: {{ route('category.update', $category->id) }},
        //         category: "name=" + name,
        //         category: "prefix=" + prefix,
        //         success: function(data) {
        //             $(".btn-close").click();
        //             read()
        //         }
        //     });
        // }

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

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
                        <button type="button" class="btn btn-success  btn-sm" data-toggle="modal"
                            data-target="#modal-add-category">
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
                                        <tr>
                                            <td>1</td>
                                            <td>ATK</td>
                                            <td>AT</td>
                                            <td><button type="button" class="btn btn-info btn-sm" data-toggle="modal"
                                                    data-target="#modal-atk"><i class="fas fa-edit"></i></button>
                                                <button style="margin-left: 20px" type="button"
                                                    class="btn btn-danger btn-sm delete"><i
                                                        class="fas fa-trash-alt"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Print</td>
                                            <td>PR</td>
                                            <td><button type="button" class="btn btn-info btn-sm"><i
                                                        class="fas fa-edit"></i></button>
                                                <button style="margin-left: 20px" type="button"
                                                    class="btn btn-danger btn-sm delete"><i
                                                        class="fas fa-trash-alt"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Snack</td>
                                            <td>SN</td>
                                            <td>
                                                <button type="button" class="btn btn-info btn-sm">
                                                    <i class="fas fa-edit"></i>
                                                </button>
                                                <button style="margin-left: 20px" type="button"
                                                    class="btn btn-danger btn-sm delete">
                                                    <i class="fas fa-trash-alt"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>Ice Cream</td>
                                            <td>IC</td>
                                            <td><button type="button" class="btn btn-info btn-sm"><i
                                                        class="fas fa-edit"></i></button>
                                                <button style="margin-left: 20px" type="button"
                                                    class="btn btn-danger btn-sm delete"><i
                                                        class="fas fa-trash-alt"></i></button>
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
        </div>
        {{-- Card Category End --}}
        {{-- Card Unit --}}
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="card card-primary card-outline">
                <div class="card-header">
                    <h3 class="card-title">Units</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-success  btn-sm" data-toggle="modal"
                            data-target="#modal-add-unit">
                            <i class="fas fa-plus-circle"></i> Add Unit
                        </button>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="card-body table-responsive p-0" style="height: 69vh;">
                                <table class="table table-head-fixed text-nowrap table-striped table-sm">
                                    <thead>
                                        <tr>
                                            <th style="width: 60px">No.</th>
                                            <th>Units</th>
                                            <th style="width: 130px">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Pcs</td>
                                            <td><button type="button" class="btn btn-info btn-sm" data-toggle="modal"
                                                    data-target="#modal-pcs"><i class="fas fa-edit"></i></button>
                                                <button style="margin-left: 20px" type="button"
                                                    class="btn btn-danger btn-sm delete"><i
                                                        class="fas fa-trash-alt"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Pck</td>
                                            <td><button type="button" class="btn btn-info btn-sm"><i
                                                        class="fas fa-edit"></i></button>
                                                <button style="margin-left: 20px" type="button"
                                                    class="btn btn-danger btn-sm delete"><i
                                                        class="fas fa-trash-alt"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Dus</td>
                                            <td><button type="button" class="btn btn-info btn-sm"><i
                                                        class="fas fa-edit"></i></button>
                                                <button style="margin-left: 20px" type="button"
                                                    class="btn btn-danger btn-sm delete"><i
                                                        class="fas fa-trash-alt"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>m</td>
                                            <td><button type="button" class="btn btn-info btn-sm"><i
                                                        class="fas fa-edit"></i></button>
                                                <button style="margin-left: 20px" type="button"
                                                    class="btn btn-danger btn-sm delete"><i
                                                        class="fas fa-trash-alt"></i></button>
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
        </div>
    </div>
    {{-- Card Unit End --}}

    {{-- Modal Category --}}
    <div class="modal fade" id="modal-add-category">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <form action="{{ url('/products/category') }}" class="form-horizontal" method="post">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="modal-header">
                        <h4 class="modal-title">Add Category</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label class="col-form-label col-form-label-sm text-sm-right">Category Name</label>
                            <div class="input-group input-group-sm">
                                <input name="name" type="text" class="form-control" value="Snack" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-form-label col-form-label-sm text-sm-right">Category Prefix</label>
                            <div class="input-group input-group-sm">
                                <input name="prefix" type="text" class="form-control" value="SN" required>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">
                            Close
                        </button>
                        <button type="submit" class="btn btn-primary btn-sm">
                            <i class="fas fa-paper-plane"></i>
                            Save
                        </button>
                    </div>
                </form>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->

    <!-- Modal Unit -->
    @include('products._form-unit')

    {{-- menu edit category  --}}
    <div class="modal fade" id="modal-atk">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Edit Category</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label class="col-form-label col-form-label-sm text-sm-right">Category Name</label>
                        <div class="input-group input-group-sm">
                            <input type="text" class="form-control" value="ATK">
                        </div>
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary btn-sm"><i class="fas fa-paper-plane"></i>
                        Save</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
    {{-- edit unit --}}
    <div class="modal fade" id="modal-pcs">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Edit Unit</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label class="col-form-label col-form-label-sm text-sm-right">Unit Name</label>
                        <div class="input-group input-group-sm">
                            <input type="text" class="form-control" value="Pcs">
                        </div>
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary btn-sm"><i class="fas fa-paper-plane"></i>
                        Save</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
    {{-- modal end --}}
@endsection


@push('scripts')
    <script>
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

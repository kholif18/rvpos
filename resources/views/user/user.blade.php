{{-- master layout --}}
@extends('layouts.master')

@section('title')
    Users
@endsection

@section('breadcrumb')
    @parent
    <li class="active">Users Data</li>
@endsection

<!-- Main content -->
@section('content')
        <div class="row">
            <div class="col-12">
                <div class="card card-primary card-outline">
                    <div class="card-header">
                        <h3 class="card-title">Data Users</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#modal-add">
                            <i class="fas fa-plus-circle"></i> Add User
                            </button>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                    <div class="card-body table-responsive p-0">
                        <table class="table table-head-fixed text-nowrap table-striped table-sm">
                            <thead>
                                <tr>
                                    <th style="width: 50px">No</th>
                                    <th>Name</th>
                                    <th>Username</th>
                                    <th>Level</th>
                                    <th>Address</th>
                                    <th style="width: 200px">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Administrator</td>
                                    <td>Admin</td>
                                    <td>admin</td>
                                    <td></td>
                                    <td><button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#modal-edit-admin"><i class="fas fa-edit"></i> Update</button></td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>kholif</td>
                                    <td>kholif18</td>
                                    <td>kasir</td>
                                    <td>Ngluyu, Nganjuk</td>
                                    <td><button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#modal-edit"><i class="fas fa-edit"></i> Update</button><button style="margin-left: 20px" type="button" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i> Delete</button></td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Kasir 2</td>
                                    <td>kasir2</td>
                                    <td>kasir</td>
                                    <td>Gondang, Nganjuk</td>
                                    <td><button type="button" class="btn btn-info btn-sm"><i class="fas fa-edit"></i> Update</button><button style="margin-left: 20px" type="button" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i> Delete</button></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
            <!-- /.card -->
        </div>
        <!-- /.container-fluid -->

        {{-- Modal --}}
        <div class="modal fade" id="modal-add">
            <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                <h4 class="modal-title">Add User</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label class="col-form-label col-form-label-sm text-sm-right" >No.</label>
                        <div class="input-group input-group-sm">
                            <input type="number" class="form-control" readonly value="4">
                        </div>
                        <label class="col-form-label col-form-label-sm text-sm-right">Name</label>
                        <div class="input-group input-group-sm">
                            <input type="text" class="form-control">
                        </div>
                        <label class="col-form-label col-form-label-sm text-sm-right" >Username</label>
                        <div class="input-group input-group-sm">
                            <input type="text" class="form-control">
                        </div>
                        <label class="col-form-label col-form-label-sm text-sm-right" >Level</label>
                        <div class="input-group input-group-sm">
                            <select name="jenis" class="form-control select2" required>
                                <option value="Produk" >Admin</option>
                                <option value="Servis">Kasir</option>
                            </select>
                        </div>
                        <label class="col-form-label col-form-label-sm text-sm-right" >Address</label>
                        <div class="input-group input-group-sm">
                            <input type="text" class="form-control">
                        </div>
                        <label class="col-form-label col-form-label-sm text-sm-right" >Password</label>
                        <div class="input-group input-group-sm">
                            <input type="password" class="form-control">
                        </div>
                        <label class="col-form-label col-form-label-sm text-sm-right" >Confirm Password</label>
                        <div class="input-group input-group-sm">
                            <input type="password" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary btn-sm"><i class="fas fa-paper-plane"></i> Save</button>
                </div>
            </div>
            <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
        {{-- Modal Update--}}
        <div class="modal fade" id="modal-edit">
            <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                <h4 class="modal-title">Edit User</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label class="col-form-label col-form-label-sm text-sm-right" >No.</label>
                        <div class="input-group input-group-sm">
                            <input type="number" class="form-control" readonly value="2">
                        </div>
                        <label class="col-form-label col-form-label-sm text-sm-right">Name</label>
                        <div class="input-group input-group-sm">
                            <input type="text" class="form-control" value="Kholif">
                        </div>
                        <label class="col-form-label col-form-label-sm text-sm-right" >Username</label>
                        <div class="input-group input-group-sm">
                            <input type="text" class="form-control" value="kholif18">
                        </div>
                        {{-- <label class="col-form-label col-form-label-sm text-sm-right" >Level</label>
                        <div class="input-group input-group-sm">
                            <select name="jenis" class="form-control select2" required>
                                <option value="Produk">Admin</option>
                                <option value="Servis" selected>Kasir</option>
                            </select>
                        </div> --}}
                        <label class="col-form-label col-form-label-sm text-sm-right">Address</label>
                        <div class="input-group input-group-sm">
                            <input type="text" class="form-control" value="Ngluyu, Nganjuk">
                        </div>
                        <label class="col-form-label col-form-label-sm text-sm-right" >Password</label>
                        <div class="input-group input-group-sm">
                            <input type="password" class="form-control">
                        </div>
                        <label class="col-form-label col-form-label-sm text-sm-right" >Confirm Password</label>
                        <div class="input-group input-group-sm">
                            <input type="password" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary btn-sm"><i class="fas fa-paper-plane"></i> Save</button>
                </div>
            </div>
            <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
        {{-- Modal Update--}}
        <div class="modal fade" id="modal-edit-admin">
            <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                <h4 class="modal-title">Edit User</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label class="col-form-label col-form-label-sm text-sm-right" >No.</label>
                        <div class="input-group input-group-sm">
                            <input type="number" class="form-control" readonly value="1">
                        </div>
                        <label class="col-form-label col-form-label-sm text-sm-right">Name</label>
                        <div class="input-group input-group-sm">
                            <input type="text" class="form-control" readonly value="Administrator">
                        </div>
                        <label class="col-form-label col-form-label-sm text-sm-right" >Username</label>
                        <div class="input-group input-group-sm">
                            <input type="text" class="form-control" readonly value="Admin">
                        </div>
                        <label class="col-form-label col-form-label-sm text-sm-right" >Password</label>
                        <div class="input-group input-group-sm">
                            <input type="password" class="form-control">
                        </div>
                        <label class="col-form-label col-form-label-sm text-sm-right" >Confirm Password</label>
                        <div class="input-group input-group-sm">
                            <input type="password" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary btn-sm"><i class="fas fa-paper-plane"></i> Save</button>
                </div>
            </div>
            <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
        @endsection

    {{-- <script>
    $(function () {
        $("#example1").DataTable({
        "responsive": true, "lengthChange": false, "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
        });
    });
    </script> --}}

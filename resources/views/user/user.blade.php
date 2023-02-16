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
                            <button type="button" class="btn btn-success">
                            <i class="fas fa-plus-circle"></i> Add User
                            </button>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th style="width: 15px">No</th>
                                    <th>Name</th>
                                    <th>Level</th>
                                    <th>Username</th>
                                    <th>Address</th>
                                    <th style="width: 300px">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1.</td>
                                    <td>Administrator
                                    </td>
                                    <td>Admin</td>
                                    <td>admin</td>
                                    <td>Ngluyu, Nganjuk</td>
                                    <td><button type="button" class="btn btn-info"><i class="fas fa-edit"></i> Update</button></td>
                                </tr>
                                <tr>
                                    <td>2.</td>
                                    <td>Kasir</td>
                                    <td>kasir</td>
                                    <td>kasir</td>
                                    <td>Ngluyu, Nganjuk</td>
                                    <td><button type="button" class="btn btn-info"><i class="fas fa-edit"></i> Update</button><button type="button" class="btn btn-danger"><i class="fas fa-trash-alt"></i> Delete</button></td>
                                </tr>
                                <tr>
                                    <td>3.</td>
                                    <td>Kasir 2</td>
                                    <td>kasir</td>
                                    <td>kasir2</td>
                                    <td>Gondang, Nganjuk</td>
                                    <td><button type="button" class="btn btn-info"><i class="fas fa-edit"></i> Update</button><button type="button" class="btn btn-danger"><i class="fas fa-trash-alt"></i> Delete</button></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
            <!-- /.card -->
        </div>
        <!-- /.container-fluid -->
@endsection

</div>
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
</body>
</html>
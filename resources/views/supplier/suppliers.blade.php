{{-- master template --}}
@extends('layouts.master')

@section('title')
    Suppliers
@endsection

@section('breadcrumb')
    @parent
    <li class="active">Suppliers</li>
@endsection

@section('content')
    <div class="card card-primary card-outline">
        <div class="card-header">
            <h3 class="card-title">Suppliers</h3>
            <div class="card-tools">
                <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#modal-add">
                    <i class="fas fa-plus-circle"></i> Add Supplier
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
                                    <th style="width: 100px">Code</th>
                                    <th>Supplier Name</th>
                                    <th>Telp</th>
                                    <th>email</th>
                                    <th>Bank</th>
                                    <th>No. Rek</th>
                                    <th>Address</th>
                                    <th style="width: 200px">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>CS001</td>
                                    <td>Karunia Photo</td>
                                    <td>0812-1656-9634</td>
                                    <td>karuniaphoto@gmail.com</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>Nganjuk</td>
                                    <td><button type="button" class="btn btn-info  btn-sm" data-toggle="modal"
                                            data-target="#modal-edit"><i class="fas fa-edit"></i> Update</button><button
                                            style="margin-left: 20px" type="button" class="btn btn-danger btn-sm delete"><i
                                                class="fas fa-trash-alt"></i> Delete</button></td>
                                </tr>
                                <tr>
                                    <td>CS002</td>
                                    <td>Praktika</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>Nganjuk</td>
                                    <td><button type="button" class="btn btn-info btn-sm"><i class="fas fa-edit"></i>
                                            Update</button><button style="margin-left: 20px" type="button"
                                            class="btn btn-danger btn-sm delete"><i class="fas fa-trash-alt"></i>
                                            Delete</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>CS003</td>
                                    <td>Citra Stationary</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>Nganjuk</td>
                                    <td><button type="button" class="btn btn-info btn-sm"><i class="fas fa-edit"></i>
                                            Update</button><button style="margin-left: 20px" type="button"
                                            class="btn btn-danger btn-sm delete"><i class="fas fa-trash-alt"></i>
                                            Delete</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>CS004</td>
                                    <td>Mbak Nik</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>Pasar Pahing, Ngluyu</td>
                                    <td><button type="button" class="btn btn-info btn-sm"><i class="fas fa-edit"></i>
                                            Update</button><button style="margin-left: 20px" type="button"
                                            class="btn btn-danger btn-sm delete"><i class="fas fa-trash-alt"></i>
                                            Delete</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>CS005</td>
                                    <td>Mbak Ning</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>Pasar Pahing, Ngluyu</td>
                                    <td><button type="button" class="btn btn-info btn-sm"><i class="fas fa-edit"></i>
                                            Update</button><button style="margin-left: 20px" type="button"
                                            class="btn btn-danger btn-sm delete"><i class="fas fa-trash-alt"></i>
                                            Delete</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>CS006</td>
                                    <td>Tukang Jualan keliling</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td><button type="button" class="btn btn-info btn-sm"><i class="fas fa-edit"></i>
                                            Update</button><button style="margin-left: 20px" type="button"
                                            class="btn btn-danger btn-sm delete"><i class="fas fa-trash-alt"></i>
                                            Delete</button>
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

    {{-- Modal --}}
    <div class="modal fade" id="modal-add">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Add Supplier</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="">
                        <div class="form-group row">
                            <label for="" class="col-sm-3 col-form-label col-form-label-sm text-right">Code</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control form-control-sm" readonly placeholder="CS007">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-sm-3 col-form-label col-form-label-sm text-right">Supplier
                                Name</label>
                            <div class="col-sm-9">
                                <input type="text" autofocus class="form-control form-control-sm">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label col-form-label-sm text-right">Telp</label>
                            <div class="col-sm-9">
                                <div class="input-group input-group-sm">
                                    <input type="number" class="form-control text-bold" min="0">
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-sm-3 col-form-label col-form-label-sm text-right">Email</label>
                            <div class="col-sm-9">
                                <input type="email" class="form-control form-control-sm">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for=""
                                class="col-sm-3 col-form-label col-form-label-sm text-right">Bank</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control form-control-sm">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-sm-3 col-form-label col-form-label-sm text-right">No.
                                Rek</label>
                            <div class="col-sm-9">
                                <input type="number" class="form-control form-control-sm" min="0">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for=""
                                class="col-sm-3 col-form-label col-form-label-sm text-right">Address</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control form-control-sm">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="reset" class="btn btn-danger btn-sm" data-dismiss="modal"><i
                            class="fas fa-trash"></i> Cancel</button>
                    <button type="button" class="btn btn-primary btn-sm"><i class="fas fa-paper-plane"></i>
                        Save</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
    {{-- modal update --}}
    <div class="modal fade" id="modal-edit">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Edit Supplier</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="">
                        <div class="form-group row">
                            <label for=""
                                class="col-sm-3 col-form-label col-form-label-sm text-right">Code</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control form-control-sm" readonly placeholder="CS001">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-sm-3 col-form-label col-form-label-sm text-right">Supplier
                                Name</label>
                            <div class="col-sm-9">
                                <input type="text" autofocus class="form-control form-control-sm"
                                    value="Karunia Photo">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label col-form-label-sm text-right">Telp</label>
                            <div class="col-sm-9">
                                <div class="input-group input-group-sm">
                                    <input type="number" class="form-control text-bold" min="0"
                                        value="081216569634">
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for=""
                                class="col-sm-3 col-form-label col-form-label-sm text-right">Email</label>
                            <div class="col-sm-9">
                                <input type="email" class="form-control form-control-sm"
                                    value="karuniaphoto@gmail.com">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for=""
                                class="col-sm-3 col-form-label col-form-label-sm text-right">Bank</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control form-control-sm" value="-">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-sm-3 col-form-label col-form-label-sm text-right">No.
                                Rek</label>
                            <div class="col-sm-9">
                                <input type="number" class="form-control form-control-sm" min="0"
                                    value="-">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for=""
                                class="col-sm-3 col-form-label col-form-label-sm text-right">Address</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control form-control-sm" value="Nganjuk">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="reset" class="btn btn-danger btn-sm" data-dismiss="modal"><i
                            class="fas fa-trash"></i> Cancel</button>
                    <button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-paper-plane"></i>
                        Save</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
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

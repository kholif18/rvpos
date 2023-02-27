@extends('layouts.master')

@section('title')
    Customers
@endsection

@section('breadcrumb')
    @parent
    <li class="active">Customers</li>
@endsection

<!-- Main content -->
@section('content')
    <div class="card card-primary card-outline">
        <div class="card-header">
            <h3 class="card-title">Customers</h3>
            <div class="card-tools">
                <button type="button" class="btn btn-success  btn-sm" data-toggle="modal" data-target="#modal-add">
                    <i class="fas fa-plus-circle"></i> Add Customer
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
                                    <th>Customers Name</th>
                                    <th>Telp</th>
                                    <th>email</th>
                                    <th>Address</th>
                                    <th>Status</th>
                                    <th style="width: 120px">Member Disc.</th>
                                    <th style="width: 90px">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>CS001</td>
                                    <td>Umum</td>
                                    <td>Umum</td>
                                    <td>Umum</td>
                                    <td>Umum</td>
                                    <td>Umum</td>
                                    <td>0%</td>
                                    <td><button type="button" class="btn btn-info btn-sm" data-toggle="modal"
                                            data-target="#modal-edit"><i class="fas fa-edit"></i></button></td>
                                </tr>
                                <tr>
                                    <td>CS002</td>
                                    <td>Bambang</td>
                                    <td>081122233344</td>
                                    <td>example@mail.com</td>
                                    <td>Ngluyu, Nganjuk</td>
                                    <td>Agent</td>
                                    <td>10%</td>
                                    <td><button type="button" class="btn btn-info btn-sm"><i
                                                class="fas fa-edit"></i></button><button style="margin-left: 20px"
                                            type="button" class="btn btn-danger btn-sm delete"><i
                                                class="fas fa-trash-alt"></i></button></td>
                                </tr>
                                <tr>
                                    <td>CS003</td>
                                    <td>Bu Win</td>
                                    <td>082233344556</td>
                                    <td>example@mail.com</td>
                                    <td>Gondang, Nganjuk</td>
                                    <td>Pelanggan</td>
                                    <td>5%</td>
                                    <td><button type="button" class="btn btn-info btn-sm"><i
                                                class="fas fa-edit"></i></button><button style="margin-left: 20px"
                                            type="button" class="btn btn-danger btn-sm delete"><i
                                                class="fas fa-trash-alt"></i></button></td>
                                </tr>
                                <tr>
                                    <td>CS004</td>
                                    <td>Neneng</td>
                                    <td>082233344556</td>
                                    <td>example@mail.com</td>
                                    <td>Gondang, Nganjuk</td>
                                    <td>Pelanggan</td>
                                    <td>0%</td>
                                    <td><button type="button" class="btn btn-info btn-sm"><i
                                                class="fas fa-edit"></i></button><button style="margin-left: 20px"
                                            type="button" class="btn btn-danger btn-sm delete"><i
                                                class="fas fa-trash-alt"></i></button></td>
                                </tr>
                                <tr>
                                    <td>CS005</td>
                                    <td>Alexandro</td>
                                    <td>082233344556</td>
                                    <td>example@mail.com</td>
                                    <td>Gondang, Nganjuk</td>
                                    <td>Pelanggan</td>
                                    <td>0%</td>
                                    <td><button type="button" class="btn btn-info btn-sm"><i
                                                class="fas fa-edit"></i></button><button style="margin-left: 20px"
                                            type="button" class="btn btn-danger btn-sm delete"><i
                                                class="fas fa-trash-alt"></i></button></td>
                                </tr>
                                <tr>
                                    <td>CS006</td>
                                    <td>Rudi</td>
                                    <td>082233344556</td>
                                    <td>example@mail.com</td>
                                    <td>Gondang, Nganjuk</td>
                                    <td>Pelanggan</td>
                                    <td>0%</td>
                                    <td><button type="button" class="btn btn-info btn-sm"><i
                                                class="fas fa-edit"></i></button><button style="margin-left: 20px"
                                            type="button" class="btn btn-danger btn-sm delete"><i
                                                class="fas fa-trash-alt"></i></button></td>
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
    <!-- /.container-fluid -->

    {{-- Modal --}}
    <div class="modal fade" id="modal-add">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Add Customer</h4>
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
                            <label for="" class="col-sm-3 col-form-label col-form-label-sm text-right">Customer
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
                                class="col-sm-3 col-form-label col-form-label-sm text-right">Address</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control form-control-sm">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for=""
                                class="col-sm-3 col-form-label col-form-label-sm text-right">Status</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control form-control-sm">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-sm-3 col-form-label col-form-label-sm text-right">Member
                                Discount</label>
                            <div class="col-sm-9">
                                <input type="number" class="form-control form-control-sm" min="0">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="reset" class="btn btn-danger btn-sm" data-dismiss="modal"><i
                            class="fas fa-trash"></i> Cancel</button>
                    <button type="button" class="btn btn-success btn-sm"><i class="fas fa-paper-plane"></i>
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
                    <h4 class="modal-title">Edit Customer</h4>
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
                            <label for="" class="col-sm-3 col-form-label col-form-label-sm text-right">Customer
                                Name</label>
                            <div class="col-sm-9">
                                <input type="text" autofocus class="form-control form-control-sm" value="Umum">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label col-form-label-sm text-right">Telp</label>
                            <div class="col-sm-9">
                                <div class="input-group input-group-sm">
                                    <input type="text" class="form-control text-bold" min="0" value="Umum">
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for=""
                                class="col-sm-3 col-form-label col-form-label-sm text-right">Email</label>
                            <div class="col-sm-9">
                                <input type="email" class="form-control form-control-sm" value="Umum">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for=""
                                class="col-sm-3 col-form-label col-form-label-sm text-right">Address</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control form-control-sm" value="Umum">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for=""
                                class="col-sm-3 col-form-label col-form-label-sm text-right">Status</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control form-control-sm" value="Umum">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-sm-3 col-form-label col-form-label-sm text-right">Member
                                Discount</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control form-control-sm" value="0">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="reset" class="btn btn-danger btn-sm" data-dismiss="modal"><i
                            class="fas fa-trash"></i> Cancel</button>
                    <button type="submit" class="btn btn-success btn-sm"><i class="fas fa-paper-plane"></i>
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

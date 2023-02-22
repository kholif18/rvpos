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
                <button type="button" class="btn btn-success  btn-sm">
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
                                    <th style="width: 100px">Kode</th>
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
                                    <td><button type="button" class="btn btn-info btn-sm"><i class="fas fa-edit"></i></button></td>
                                </tr>
                                <tr>
                                    <td>CS002</td>
                                    <td>Bambang</td>
                                    <td>081122233344</td>
                                    <td>example@mail.com</td>
                                    <td>Ngluyu, Nganjuk</td>
                                    <td>Agent</td>
                                    <td>10%</td>
                                    <td><button type="button" class="btn btn-info btn-sm"><i class="fas fa-edit"></i></button><button style="margin-left: 20px" type="button" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></button></td>
                                </tr>
                                <tr>
                                    <td>CS003</td>
                                    <td>Bu Win</td>
                                    <td>082233344556</td>
                                    <td>example@mail.com</td>
                                    <td>Gondang, Nganjuk</td>
                                    <td>Pelanggan</td>
                                    <td>5%</td>
                                    <td><button type="button" class="btn btn-info btn-sm"><i class="fas fa-edit"></i></button><button style="margin-left: 20px" type="button" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></button></td>
                                </tr>
                                <tr>
                                    <td>CS004</td>
                                    <td>Neneng</td>
                                    <td>082233344556</td>
                                    <td>example@mail.com</td>
                                    <td>Gondang, Nganjuk</td>
                                    <td>Pelanggan</td>
                                    <td>0%</td>
                                    <td><button type="button" class="btn btn-info btn-sm"><i class="fas fa-edit"></i></button><button style="margin-left: 20px" type="button" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></button></td>
                                </tr>
                                <tr>
                                    <td>CS005</td>
                                    <td>Alexandro</td>
                                    <td>082233344556</td>
                                    <td>example@mail.com</td>
                                    <td>Gondang, Nganjuk</td>
                                    <td>Pelanggan</td>
                                    <td>0%</td>
                                    <td><button type="button" class="btn btn-info btn-sm"><i class="fas fa-edit"></i></button><button style="margin-left: 20px" type="button" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></button></td>
                                </tr>
                                <tr>
                                    <td>CS006</td>
                                    <td>Rudi</td>
                                    <td>082233344556</td>
                                    <td>example@mail.com</td>
                                    <td>Gondang, Nganjuk</td>
                                    <td>Pelanggan</td>
                                    <td>0%</td>
                                    <td><button type="button" class="btn btn-info btn-sm"><i class="fas fa-edit"></i></button><button style="margin-left: 20px" type="button" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></button></td>
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
@endsection


@push('scripts')
<script>
    $(function () {
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
</script>
@endpush
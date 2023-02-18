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
            <button type="button" class="btn btn-success">
            <i class="fas fa-plus-circle"></i> Add Supplier
            </button>
        </div>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <div class="row">
            <div class="col-12">
                <div class="card-body table-responsive p-0" style="height: 69vh;">
                    <table class="table table-head-fixed text-nowrap">
                        <thead>
                            <tr>
                                <th style="width: 15px">Kode</th>
                                <th>Supplier Name</th>
                                <th>Telp</th>
                                <th>email</th>
                                <th>Bank</th>
                                <th>No. Rek</th>
                                <th>Address</th>
                                <th style="width: 300px">Actions</th>
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
                                <td><button type="button" class="btn btn-info"><i class="fas fa-edit"></i> Update</button><button style="margin-left: 20px" type="button" class="btn btn-danger"><i class="fas fa-trash-alt"></i> Delete</button></td>
                            </tr>
                            <tr>
                                <td>CS002</td>
                                <td>Praktika</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>Nganjuk</td>
                                <td><button type="button" class="btn btn-info"><i class="fas fa-edit"></i> Update</button><button style="margin-left: 20px" type="button" class="btn btn-danger"><i class="fas fa-trash-alt"></i> Delete</button></td>
                            </tr>
                            <tr>
                                <td>CS003</td>
                                <td>Citra Stationary</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>Nganjuk</td>
                                <td><button type="button" class="btn btn-info"><i class="fas fa-edit"></i> Update</button><button style="margin-left: 20px" type="button" class="btn btn-danger"><i class="fas fa-trash-alt"></i> Delete</button></td>
                            </tr>
                            <tr>
                                <td>CS004</td>
                                <td>Mbak Nik</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>Pasar Pahing, Ngluyu</td>
                                <td><button type="button" class="btn btn-info"><i class="fas fa-edit"></i> Update</button><button style="margin-left: 20px" type="button" class="btn btn-danger"><i class="fas fa-trash-alt"></i> Delete</button></td>
                            </tr>
                            <tr>
                                <td>CS005</td>
                                <td>Mbak Ning</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>Pasar Pahing, Ngluyu</td>
                                <td><button type="button" class="btn btn-info"><i class="fas fa-edit"></i> Update</button><button style="margin-left: 20px" type="button" class="btn btn-danger"><i class="fas fa-trash-alt"></i> Delete</button></td>
                            </tr>
                            <tr>
                                <td>CS006</td>
                                <td>Tukang Jualan keliling</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td><button type="button" class="btn btn-info"><i class="fas fa-edit"></i> Update</button><button style="margin-left: 20px" type="button" class="btn btn-danger"><i class="fas fa-trash-alt"></i> Delete</button></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- /.card-body -->
    </div>
@endsection
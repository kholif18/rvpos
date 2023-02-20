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
                    <button type="button" class="btn btn-success  btn-sm">
                    <i class="fas fa-plus-circle"></i> Add Category
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
                                        <th>Categories</th>
                                        <th style="width: 130px">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>ATK</td>
                                        <td><button type="button" class="btn btn-info btn-sm"><i class="fas fa-edit"></i></button>
                                            <button style="margin-left: 20px" type="button" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Print</td>
                                        <td><button type="button" class="btn btn-info btn-sm"><i class="fas fa-edit"></i></button>
                                            <button style="margin-left: 20px" type="button" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Jajan</td>
                                        <td><button type="button" class="btn btn-info btn-sm"><i class="fas fa-edit"></i></button>
                                            <button style="margin-left: 20px" type="button" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Ice Cream</td>
                                        <td><button type="button" class="btn btn-info btn-sm"><i class="fas fa-edit"></i></button>
                                            <button style="margin-left: 20px" type="button" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></button>
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
    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
        <div class="card card-primary card-outline">
            <div class="card-header">
                <h3 class="card-title">Units</h3>
                <div class="card-tools">
                    <button type="button" class="btn btn-success  btn-sm">
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
                                        <td><button type="button" class="btn btn-info btn-sm"><i class="fas fa-edit"></i></button>
                                            <button style="margin-left: 20px" type="button" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Pck</td>
                                        <td><button type="button" class="btn btn-info btn-sm"><i class="fas fa-edit"></i></button>
                                            <button style="margin-left: 20px" type="button" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Dus</td>
                                        <td><button type="button" class="btn btn-info btn-sm"><i class="fas fa-edit"></i></button>
                                            <button style="margin-left: 20px" type="button" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>m</td>
                                        <td><button type="button" class="btn btn-info btn-sm"><i class="fas fa-edit"></i></button>
                                            <button style="margin-left: 20px" type="button" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></button>
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
@endsection
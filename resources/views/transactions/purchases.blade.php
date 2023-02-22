{{-- master template --}}
@extends('layouts.master')

@section('title')
    Purchases
@endsection

@section('breadcrumb')
    @parent
    <li class="active">Transactions / Purchases</li>
@endsection

@section('content')
    <div class="card card-primary card-outline">
        <div class="card-body">
            <div class="from-horizontal">
                <div class="form-group-sm row">
                    <div class="col-sm-4">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label col-form-label-sm" >Supplier*</label>
                            <div class="col-sm-9">
                                <div class="input-group input-group-sm">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                                    </div>
                                    <input type="text" required class="form-control" value="Citra Stationary">
                                    <span class="input-group-append">
                                        <button type="button" class="btn btn-info btn-flat"><i class="fas fa-plus-circle"></i></button>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group form-group-sm">
                            <h6>Address</h6>
                            <p>Ganung, Kab. Nganjuk<br>
                                0822-3337-7661 <br>
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label col-form-label-sm" >Invoice</label>
                            <div class="col-sm-9">
                                <div class="input-group input-group-sm">
                                    <input type="text" autofocus class="form-control form-control-sm">
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label col-form-label-sm" >Purchase Date</label>
                            <div class="col-sm-9">
                                <div class="input-group input-group-sm">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-calendar"></i></span>
                                    </div>
                                    <input type="date" class="form-control form-control-sm">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label col-form-label-sm text-sm-right">Operator</label>
                            <div class="col-sm-9">
                                <div class="input-group input-group-sm">
                                    <input type="text" readonly class="form-control" placeholder="Administrator">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card card-primary card-outline">
        <div class="card-header row">
            <div class="col-sm-3">
            </div>
            <div class="col-sm-6">
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label col-form-label-sm text-sm-right" >Product Code</label>
                    <div class="col-sm-9">
                        <div class="input-group input-group-sm">
                            <input type="text" class="form-control">
                            <span class="input-group-append">
                                <button type="button" class="btn btn-info btn-flat"><i class="fas fa-search"></i></button>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="form-group row">
                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12"></div>
                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12">
                        <button type="submit" class="btn btn-block btn-success btn-sm"><i class="fas fa-plus-circle"></i> Add New Product</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-body">
        <div class="row">
            <div class="col-12">
                <div class="card-body table-responsive p-0" style="height: 40vh;">
                    <table id="example2" class="table table-head-fixed text-nowrap table-sm">
                        <thead>
                            <tr>
                                <th style="width: 130px">Product Code</th>
                                <th>Barcode</th>
                                <th>Product Name</th>
                                <th>Qty</th>
                                <th>Cost Price</th>
                                <th>Markup %</th>
                                <th>Sele Price</th>
                                <th>Total</th>
                                <th style="width: 130px">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>RV0015</td>
                                <td>0651454789546</td>
                                <td>Kartas F4 70 Gsm</td>
                                <td><div class="input-group input-group-sm" style="width: 60px">
                                    <input type="number" class="form-control" min="1" value="20">
                                </div></td>
                                <td><div class="input-group input-group-sm" style="width: 120px">
                                    <input type="number" class="form-control" min="1" value="52.000">
                                </div></td>
                                <td><div class="input-group input-group-sm" style="width: 60px">
                                    <input type="number" class="form-control" min="1" value="7.7">
                                </div></td>
                                <td><div class="input-group input-group-sm" style="width: 120px">
                                    <input type="number" class="form-control" min="1" value="56.000">
                                </div></td>
                                <td>Rp 1.120.000</td>
                                <td><button type="button" class="btn btn-info btn-sm"><i class="fas fa-edit"></i></button>
                                    <button style="margin-left: 20px" type="button" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>RV0015</td>
                                <td>8754654324153</td>
                                <td>Isolasi Hitam National </td>
                                <td><div class="input-group input-group-sm" style="width: 60px">
                                    <input type="number" class="form-control" min="1" value="50">
                                </div></td>
                                <td><div class="input-group input-group-sm" style="width: 120px">
                                    <input type="number" class="form-control" min="1" value="5.800">
                                </div></td>
                                <td><div class="input-group input-group-sm" style="width: 60px">
                                    <input type="number" class="form-control" min="1" value="30">
                                </div></td>
                                <td><div class="input-group input-group-sm" style="width: 120px">
                                    <input type="number" class="form-control" min="1" value="7.500">
                                </div></td>
                                <td>Rp 375.000</td>
                                <td><button type="button" class="btn btn-info btn-sm"><i class="fas fa-edit"></i></button>
                                    <button style="margin-left: 20px" type="button" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>RV0015</td>
                                <td>0651454789546</td>
                                <td>Tipe-x Joyko CF-5221</td>
                                <td><div class="input-group input-group-sm" style="width: 60px">
                                    <input type="number" class="form-control" min="1" value="6">
                                </div></td>
                                <td><div class="input-group input-group-sm" style="width: 120px">
                                    <input type="number" class="form-control" min="1" value="3.500">
                                </div></td>
                                <td><div class="input-group input-group-sm" style="width: 60px">
                                    <input type="number" class="form-control" min="1" value="15">
                                </div></td>
                                <td><div class="input-group input-group-sm" style="width: 120px">
                                    <input type="number" class="form-control" min="1" value="4.000">
                                </div></td>
                                <td>Rp 24.000</td>
                                <td><button type="button" class="btn btn-info btn-sm"><i class="fas fa-edit"></i></button>
                                    <button style="margin-left: 20px" type="button" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>RV0015</td>
                                <td>546843241585</td>
                                <td>Buku HC Folio isi 100</td>
                                <td><div class="input-group input-group-sm" style="width: 60px">
                                    <input type="number" class="form-control" min="1" value="7">
                                </div></td>
                                <td><div class="input-group input-group-sm" style="width: 120px">
                                    <input type="number" class="form-control" min="1" value="20.000">
                                </div></td>
                                <td><div class="input-group input-group-sm" style="width: 60px">
                                    <input type="number" class="form-control" min="1" value="15">
                                </div></td>
                                <td><div class="input-group input-group-sm" style="width: 120px">
                                    <input type="number" class="form-control" min="1" value="23.000">
                                </div></td>
                                <td>Rp 161.000</td>
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
    </div>
    <div class="row">
        <div class="col-md-6 col-sm-12 col-xs-12">
            <div class="card card-warning bg-warning">
                <div class="card-body card-warning">
                    <div class="row">
                        <div class="col-md-5 col-sm-12 col-xs-12">
                            <h1 class="text-bold">Total (Rp)</h1>
                        </div>
                        <div class="col-md-7 col-sm-12 col-xs-12">
                            <h1 style="text-align: right;" class="text-bold"> 63,000</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-sm-12 col-xs-12">
            <div class="card card-primary card-outline">
                <div class="card-body">
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label col-form-label-sm" >Discount</label>
                        <div class="col-sm-9">
                            <div class="input-group input-group-sm">
                                <input type="text" required autofocus class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-xl-8 col-lg-8 col-md-4 col-sm-12 col-xs-12"></div>
                        <div class="col-xl-2 col-lg-2 col-md-4 col-sm-12 col-xs-12">
                            <button type="submit" class="btn btn-block btn-success btn-sm"><i class="fas fa-paper-plane"></i> Save</button>
                        </div>
                        <div class="col-xl-2 col-lg-2 col-md-4 col-sm-12 col-xs-12">
                            <button type="submit" class="btn btn-block btn-danger btn-sm"><i class="fas fa-trash"></i> Cancel</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


@push('scripts')
<script>
    $(function () {
        bsCustomFileInput.init();
    });

    $('.select2').select2()

    $('#example2').DataTable({
        "paging": false,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": false,
        "autoWidth": true,
        "responsive": false,

    });
    </script>
@endpush
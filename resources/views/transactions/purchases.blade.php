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
                                    <input type="text" required autofocus class="form-control">
                                    <span class="input-group-append">
                                        <button type="button" class="btn btn-info btn-flat"><i class="fas fa-plus-circle"></i></button>
                                    </span>
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
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label col-form-label-sm" >Invoice</label>
                            <div class="col-sm-9">
                                <div class="input-group input-group-sm">
                                    <input type="text" class="form-control form-control-sm">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label col-form-label-sm text-sm-right" >Code Item</label>
                            <div class="col-sm-9">
                                <div class="input-group input-group-sm">
                                    <input type="text" class="form-control">
                                    <span class="input-group-append">
                                        <button type="button" class="btn btn-info btn-flat"><i class="fas fa-search"></i></button>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label col-form-label-sm text-sm-right" >Product Name</label>
                            <div class="col-sm-9">
                                <div class="input-group input-group-sm">
                                    <input type="text" readonly class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label col-form-label-sm text-sm-right" >Qty</label>
                            <div class="col-sm-9">
                                <div class="input-group input-group-sm">
                                    <input type="number" min="1" class="form-control" value="1">
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
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label col-form-label-sm text-sm-right" >Cost Price</label>
                            <div class="col-sm-9">
                                <div class="input-group input-group-sm">
                                    <input type="text" class="form-control" placeholder="Rp 0">
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label col-form-label-sm text-sm-right" >Selling Price</label>
                            <div class="col-sm-9">
                                <div class="input-group input-group-sm">
                                    <input type="text" class="form-control" placeholder="Rp 0">
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-xl-8 col-lg-6 col-md-12 col-sm-12 col-xs-12"></div>
                            <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                <button type="submit" class="btn btn-block btn-success btn-sm"><i class="fas fa-shopping-cart"></i>  Add To Cart</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card card-primary card-outline">
        <div class="card-body">
        <div class="row">
            <div class="col-12">
                <div class="card-body table-responsive p-0" style="height: 40vh;">
                    <table id="example2" class="table table-head-fixed text-nowrap table-sm">
                        <thead>
                            <tr>
                                <th style="width: 130px">Code Items</th>
                                <th>Barcode</th>
                                <th>Name Items</th>
                                <th>Category</th>
                                <th>Qty</th>
                                <th>Cost Price</th>
                                <th>Selling Price</th>
                                <th>Total</th>
                                <th style="width: 130px">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>RV0015</td>
                                <td>0651454789546</td>
                                <td>Kartas F4 70 Gsm</td>
                                <td>ATK</td>
                                <td>20</td>
                                <td>Rp 52.000</td>
                                <td>Rp 56.000</td>
                                <td>Rp 1040000</td>
                                <td><button type="button" class="btn btn-info btn-sm"><i class="fas fa-edit"></i></button>
                                    <button style="margin-left: 20px" type="button" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>RV0015</td>
                                <td>8754654324153</td>
                                <td>Isolasi Hitam National </td>
                                <td>ATK</td>
                                <td>50</td>
                                <td>Rp 5.800</td>
                                <td>Rp 7.500</td>
                                <td>Rp 425.000</td>
                                <td><button type="button" class="btn btn-info btn-sm"><i class="fas fa-edit"></i></button>
                                    <button style="margin-left: 20px" type="button" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>RV0015</td>
                                <td>0651454789546</td>
                                <td>Tipe-x Joyko CF-5221</td>
                                <td>ATK</td>
                                <td>6</td>
                                <td>Rp 3.500</td>
                                <td>Rp 4.000</td>
                                <td>Rp 21.000</td>
                                <td><button type="button" class="btn btn-info btn-sm"><i class="fas fa-edit"></i></button>
                                    <button style="margin-left: 20px" type="button" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>RV0015</td>
                                <td>546843241585</td>
                                <td>Buku HC Folio isi 100</td>
                                <td>ATK</td>
                                <td>7</td>
                                <td>Rp 20.000</td>
                                <td>Rp 23.000</td>
                                <td>Rp 140.000</td>
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
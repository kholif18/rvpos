@extends('layouts.master')

@section('title')
    POS
@endsection

@section('breadcrumb')
    @parent
    <li class="active">POS</li>
@endsection

@section('content')
<div class="row">
    <div class="col-md-3 col-sm-12 col-xs-12">
        <div class="card card-primary card-outline">
            <form class="form-horizontal">
                <div class="card-body">
                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label col-form-label-sm" readonly>Kasir</label>
                            <div class="col-sm-8">
                                <div class="input-group input-group-sm">
                                    <input type="text" class="form-control" readonly placeholder="Administrator">
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label col-form-label-sm" readonly>Tanggal</label>
                            <div class="col-sm-8">
                                <div class="input-group input-group-sm">
                                    <input type="date" class="form-control" >
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-4 col-form-label col-form-label-sm">Customer</label>
                            <div class="col-sm-8">
                                <div class="input-group input-group-sm">
                                    <select name="customer" class="form-control select2" required>
                                        <option value="Produk">Umum</option>
                                        <option value="Servis">Id Customer</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                </div>
                <!-- /.card-body -->
            </form>
        </div>
    </div>
    <div class="col-md-9 col-sm-12 col-xs-12">
        <div class="card card-warning bg-warning">
            <div class="card-header">
                <h3 style="text-align: right">Invoice <b id="invoice">170220230001</b></h3>
            </div>
            <div class="card-body card-warning">
                <div class="row">
                    <div class="col-md-5 col-sm-12 col-xs-12">
                        <h1 class="text-bold">Total (Rp)</h1>
                    </div>
                    <div class="col-md-7 col-sm-12 col-xs-12">
                        <h1 style="text-align: right; font-size: 3.6em" class="text-bold"> 500,000</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-4 col-sm-12 col-xs-12">
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label col-form-label-sm">Kode Item</label>
            <div class="col-sm-10">
                <div class="input-group input-group-sm">
                    <input type="text" class="form-control">
                    <span class="input-group-append">
                        <button type="button" class="btn btn-info btn-flat"><i class="fas fa-search"></i></button>
                    </span>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-1 col-sm-12 col-xs-12">
        <div class="form-group row">
            <label for="inputPassword3" class="col-sm-4 col-form-label col-form-label-sm">Qty</label>
            <div class="col-sm-8">
                <div class="input-group input-group-sm">
                    <input type="number" class="form-control" placeholder="1">
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-3 col-sm-12 col-xs-12">
        <div class="form-group row">
            <label for="inputPassword3" class="col-sm-2 col-form-label col-form-label-sm">Layanan</label>
            <div class="col-sm-10">
                <div class="input-group input-group-sm">
                    <select name="jenis" class="form-control select2" required>
                        <option value="Produk">Produk</option>
                        <option value="Servis">Servis</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4 col-sm-12 col-xs-12">
    </div>
</div>
<div class="card card-primary card-outline">
    <div class="card-body">
        <div class="row">
            <div class="col-12">
                <div class="card-body table-responsive p-0" style="height: 200px;">
                    <table class="table table-head-fixed text-nowrap table-sm">
                        <thead>
                            <tr>
                                <th style="width: 50px;">Kode Items</th>
                                <th>Barcode</th>
                                <th>Name Items</th>
                                <th>Harga</th>
                                <th>Qty</th>
                                <th>Unit</th>
                                <th>Disc / Item</th>
                                <th>Total</th>
                                <th style="width: 90px">Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>RV001</td>
                                <td>0845621584654</td>
                                <td>Kertas A4</td>
                                <td>Rp 48.000</td>
                                <td>1</td>
                                <td>Pkg</td>
                                <td>0%</td>
                                <td>Rp 48.000</td>
                                <td><button type="button" class="btn btn-info btn-sm"><i class="fas fa-edit"></i></button><button style="margin-left: 20px" type="button" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></button></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-8 col-sm-12 col-xs-12">
        <div style="background-color: aqua"></div>
    </div>
    <div class="col-md-4 col-sm-12 col-xs-12">
        <div class="card card-primary card-outline">
            <div class="card-body">
                <div class="form-group row">
                    <label class="col-sm-4 col-form-label col-form-label-sm" readonly>Total</label>
                    <div class="col-sm-8">
                        <div class="input-group input-group-sm">
                            <input type="number" class="form-control" readonly placeholder="Rp 0">
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-4 col-form-label col-form-label-sm" readonly>Discount</label>
                    <div class="col-sm-8">
                        <div class="input-group input-group-sm">
                            <input type="number" class="form-control" placeholder="0%">
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-4 col-form-label" readonly>Bayar</label>
                    <div class="col-sm-8">
                        <div class="input-group">
                            <input type="number" class="form-control bg-primary text-bold" placeholder="Rp 0">
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-4 col-form-label col-form-label-sm" readonly>Kembali</label>
                    <div class="col-sm-8">
                        <div class="input-group input-group-sm">
                            <input type="number" class="form-control bg-teal text-bold" readonly placeholder="Rp 0">
                        </div>
                    </div>
                </div>
                <table class="table text-center">
                    <tbody>
                        <tr>
                            <td><button type="button" class="btn btn-block btn-success btn-sm"><i class="fas fa-paper-plane"></i> Cash</button></td>
                            <td><button type="button" class="btn btn-block btn-info btn-sm"><i class="fas fa-credit-card"></i> Credit</button></td>
                            <td><button type="button" class="btn btn-block btn-danger btn-sm"><i class="fas fa-trash-alt"></i> Cancel</button></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
        {{-- <div class="card-body card-warning">
            <form action="" class="form-horizontal">
                <div class="row">
                    <div class="col-md-4 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label class="col-md-3 col-sm-3 col-xs-12 margin-bottom">Operator</label>
                            <div class="col-md-9 col-sm-9 col-xs-12 float-right">
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Customer</label>
                            <div class="col-md-9 col-sm-9 col-xs-12 float-right">
                                <select name="customer" class="form-control select2" required>
                                    <option value="Produk">Umum</option>
                                    <option value="Servis">Id Customer</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Layanan</label>
                            <div class="col-md-9 col-sm-9 col-xs-12 float-right">
                                <select name="jenis" class="form-control select2" required>
                                    <option value="Produk">Produk</option>
                                    <option value="Servis">Servis</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 col-xs-12">
                        <h1> 0,00</h1>
                    </div>
                    <div class="col-md-4 col-sm-12 col-xs-12">
                        <h1> 0,00</h1>
                    </div>
                </div>
            </form>
        </div> --}}

@endsection
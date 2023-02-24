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
                        <h1 style="text-align: right; font-size: 3.6em" class="text-bold"> 63,000</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-3 col-sm-12 col-xs-12">
        <div class="form-group row">
            <label for="inputPassword3" class="col-sm-4 col-form-label col-form-label-sm">Layanan</label>
            <div class="col-sm-8">
                <div class="input-group input-group-sm">
                    <select name="jenis" class="form-control select2" required>
                        <option value="Produk" >Produk</option>
                        <option value="Servis">Servis</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4 col-sm-12 col-xs-12">
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-3 col-form-label col-form-label-sm">Kode Item</label>
            <div class="col-sm-9">
                <div class="input-group input-group-sm">
                    <input type="text" autofocus class="form-control">
                    <span class="input-group-append">
                        <button type="button" class="btn btn-info btn-flat"><i class="fas fa-search"></i></button>
                    </span>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-2 col-sm-12 col-xs-12">
        <div class="form-group row">
            <label for="inputPassword3" class="col-sm-4 col-form-label col-form-label-sm">Qty</label>
            <div class="col-sm-8">
                <div class="input-group input-group-sm">
                    <input type="number" class="form-control" min="1" value="1">
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-2 col-sm-12 col-xs-12">
        <button type="submit" class="btn btn-block btn-success btn-sm"><i class="fas fa-shopping-cart"></i>  Add To Cart</button>
    </div>
    <div class="col-md-1 col-sm-12 col-xs-12">
    </div>
</div>
<div class="card card-primary card-outline">
    <div class="card-body">
        <div class="row">
            <div class="col-12">
                <div class="card-body table-responsive p-0" style="height: 200px;">
                    <table id="example2" class="table table-head-fixed text-nowrap table-sm">
                        <thead>
                            <tr>
                                <th style="width: 100px;">Product Code</th>
                                <th>Barcode</th>
                                <th>Products Name</th>
                                <th>Price</th>
                                <th>Qty</th>
                                <th>Unit</th>
                                <th>Disc / Item</th>
                                <th>Total</th>
                                <th style="width: 90px">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>RV001</td>
                                <td>0845621584654</td>
                                <td>Kertas A4</td>
                                <td>Rp 48.000</td>
                                <td><div class="input-group input-group-sm" style="width: 50px">
                                    <input type="number" class="form-control" min="1" value="1">
                                </div></td>
                                <td>Pkg</td>
                                <td>0%</td>
                                <td>Rp 48.000</td>
                                <td><button type="button" class="btn btn-info btn-sm"><i class="fas fa-edit"></i></button><button style="margin-left: 20px" type="button" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></button></td>
                            </tr>
                            <tr>
                                <td>RV006</td>
                                <td>0845621584654</td>
                                <td>Map Snail Biru</td>
                                <td>Rp 3.000</td>
                                <td><div class="input-group input-group-sm" style="width: 50px">
                                    <input type="number" class="form-control" min="1"  value="5">
                                </div></td>
                                <td>Pcs</td>
                                <td>0%</td>
                                <td>Rp 15.000</td>
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
    <div class="col-md-7 col-sm-12 col-xs-12">
        <div></div>
    </div>
    <div class="col-md-5 col-sm-12 col-xs-12">
        <div class="card card-primary card-outline">
            <div class="card-body">
                <div class="form-group row">
                    <label class="col-sm-4 col-form-label col-form-label-sm" readonly>Sub Total</label>
                    <div class="col-sm-8">
                        <div class="input-group input-group-sm">
                            <div class="input-group-prepend">
                                <span class="input-group-text" style="width: 40px">Rp </span>
                            </div>
                            <input type="number" class="form-control text-bold bg-warning" readonly value="63.000">
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-4 col-form-label col-form-label-sm" readonly>Discount</label>
                    <div class="col-sm-8">
                        <div class="input-group input-group-sm">
                            <input type="number" class="form-control text-bold" min="0" value="0">
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-4 col-form-label" readonly>Pay</label>
                    <div class="col-sm-8">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" style="width: 40px">Rp </span>
                            </div>
                            <input type="number" class="form-control bg-primary text-bold" min="0" placeholder="Rp 0">
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-4 col-form-label col-form-label-sm" readonly>Change</label>
                    <div class="col-sm-8">
                        <div class="input-group input-group-sm">
                            <div class="input-group-prepend">
                                <span class="input-group-text" style="width: 40px">Rp </span>
                            </div>
                            <input type="number" class="form-control bg-teal text-bold" readonly placeholder="Rp 0">
                        </div>
                    </div>
                </div>
                <table class="table text-center">
                    <tbody>
                        <tr>
                            <td><button type="button" class="btn btn-block btn-primary btn-sm"><i class="fas fa-save"></i> Save</button></td>
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

@push('scripts')
<script>
    $(function () {
        $('#example2').DataTable({
        "paging": false,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": false,
        "autoWidth": false,
        "responsive": true,
        });
    });
</script>
@endpush
{{-- master template --}}
@extends('layouts.master')

@section('title')
    Purchase
@endsection

@section('breadcrumb')
    @parent
    <li class="active">Purchase</li>
@endsection

@section('content')
    <div class="card card-primary card-outline">
        <div class="card-body">
            <div class="from-horizontal">
                <div class="form-group-sm row">
                    <div class="col-sm-4">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label col-form-label-sm">Supplier*</label>
                            <div class="col-sm-9">
                                <div class="input-group input-group-sm">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                                    </div>
                                    <input type="text" required class="form-control" value="Citra Stationary">
                                    <span class="input-group-append">
                                        <button type="button" class="btn btn-info btn-flat" data-toggle="modal"
                                            data-target="#modal-add-supplier"><i class="fas fa-plus-circle"></i></button>
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
                            <label class="col-sm-3 col-form-label col-form-label-sm">Invoice</label>
                            <div class="col-sm-9">
                                <div class="input-group input-group-sm">
                                    <input type="text" autofocus class="form-control form-control-sm">
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label col-form-label-sm">Purchase Date</label>
                            <div class="col-sm-9">
                                <div class="input-group input-group-sm">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-calendar"></i></span>
                                    </div>
                                    {{-- <input type="date" class="form-control form-control-sm" id="dt"> --}}
                                    <input type="date" id="tgl" name="tgl"
                                        class="form-control form-control-sm">
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
            <div class="col-sm-2">
            </div>
            <div class="col-sm-6">
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label col-form-label-sm text-sm-right">Product</label>
                    <div class="col-sm-9">
                        <div class="input-group input-group-sm">
                            <input type="text" class="form-control"
                                placeholder="Enter Product Name / SKU / Scan Barcode">
                            <span class="input-group-append">
                                <button type="button" class="btn btn-info btn-flat"><i class="fas fa-search"></i></button>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group row">
                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12"></div>
                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12">
                        <button type="submit" class="btn btn-block btn-success btn-sm" data-toggle="modal"
                            data-target="#modal-add-product"><i class="fas fa-plus-circle"></i> Add New Product</button>
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
                                    <th>Sale Price</th>
                                    <th>Total</th>
                                    <th style="width: 50px">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>RV0015</td>
                                    <td>0651454789546</td>
                                    <td>Kartas F4 70 Gsm</td>
                                    <td>
                                        <div class="input-group input-group-sm" style="width: 60px">
                                            <input type="number" class="form-control" min="1" value="20">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="input-group input-group-sm" style="width: 120px">
                                            <input type="number" class="form-control" min="1" value="52.000">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="input-group input-group-sm" style="width: 60px">
                                            <input type="number" class="form-control" min="1" value="7.7">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="input-group input-group-sm" style="width: 120px">
                                            <input type="number" class="form-control" min="1" value="56.000">
                                        </div>
                                    </td>
                                    <td>Rp 1.120.000</td>
                                    <td>
                                        <button style="margin-left: 20px" type="button" class="btn btn-danger btn-sm"><i
                                                class="fas fa-trash-alt"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>RV0015</td>
                                    <td>8754654324153</td>
                                    <td>Isolasi Hitam National </td>
                                    <td>
                                        <div class="input-group input-group-sm" style="width: 60px">
                                            <input type="number" class="form-control" min="1" value="50">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="input-group input-group-sm" style="width: 120px">
                                            <input type="number" class="form-control" min="1" value="5.800">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="input-group input-group-sm" style="width: 60px">
                                            <input type="number" class="form-control" min="1" value="30">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="input-group input-group-sm" style="width: 120px">
                                            <input type="number" class="form-control" min="1" value="7.500">
                                        </div>
                                    </td>
                                    <td>Rp 375.000</td>
                                    <td>
                                        <button style="margin-left: 20px" type="button" class="btn btn-danger btn-sm"><i
                                                class="fas fa-trash-alt"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>RV0015</td>
                                    <td>0651454789546</td>
                                    <td>Tipe-x Joyko CF-5221</td>
                                    <td>
                                        <div class="input-group input-group-sm" style="width: 60px">
                                            <input type="number" class="form-control" min="1" value="6">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="input-group input-group-sm" style="width: 120px">
                                            <input type="number" class="form-control" min="1" value="3.500">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="input-group input-group-sm" style="width: 60px">
                                            <input type="number" class="form-control" min="1" value="15">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="input-group input-group-sm" style="width: 120px">
                                            <input type="number" class="form-control" min="1" value="4.000">
                                        </div>
                                    </td>
                                    <td>Rp 24.000</td>
                                    <td>
                                        <button style="margin-left: 20px" type="button" class="btn btn-danger btn-sm"><i
                                                class="fas fa-trash-alt"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>RV0015</td>
                                    <td>546843241585</td>
                                    <td>Buku HC Folio isi 100</td>
                                    <td>
                                        <div class="input-group input-group-sm" style="width: 60px">
                                            <input type="number" class="form-control" min="1" value="7">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="input-group input-group-sm" style="width: 120px">
                                            <input type="number" class="form-control" min="1" value="20.000">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="input-group input-group-sm" style="width: 60px">
                                            <input type="number" class="form-control" min="1" value="15">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="input-group input-group-sm" style="width: 120px">
                                            <input type="number" class="form-control" min="1" value="23.000">
                                        </div>
                                    </td>
                                    <td>Rp 161.000</td>
                                    <td>
                                        <button style="margin-left: 20px" type="button" class="btn btn-danger btn-sm"><i
                                                class="fas fa-trash-alt"></i></button>
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
                        <label class="col-sm-3 col-form-label col-form-label-sm">Discount</label>
                        <div class="col-sm-9">
                            <div class="input-group input-group-sm">
                                <input type="text" required autofocus class="form-control">
                            </div>
                        </div>
                    </div>
                    <table class="table text-center">
                        <tbody>
                            <tr>
                                <td></td>
                                <td><button type="submit" class="btn btn-block btn-success btn-sm"><i
                                            class="fas fa-paper-plane"></i> Save</button></td>
                                <td><button type="submit" class="btn btn-block btn-danger btn-sm"><i
                                            class="fas fa-trash"></i> Cancel</button></td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    {{-- Modal --}}
    <div class="modal fade" id="modal-add-supplier">
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
                            <label for=""
                                class="col-sm-3 col-form-label col-form-label-sm text-right">Code</label>
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
                            <label for=""
                                class="col-sm-3 col-form-label col-form-label-sm text-right">Email</label>
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

    {{-- Modal add product --}}
    <div class="modal fade" id="modal-add-product">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Add New Product</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="">
                        <div class="form-group row">
                            <label for="" class="col-sm-3 col-form-label col-form-label-sm text-right">Product
                                Code</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control form-control-sm" placeholder="RV098">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for=""
                                class="col-sm-3 col-form-label col-form-label-sm text-right">Barcode</label>
                            <div class="col-sm-9">
                                <input type="text" autofocus class="form-control form-control-sm">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label col-form-label-sm text-right">Product Name</label>
                            <div class="col-sm-9">
                                <div class="input-group input-group-sm">
                                    <input type="text" class="form-control text-bold">
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for=""
                                class="col-sm-3 col-form-label col-form-label-sm text-right">Category</label>
                            <div class="col-sm-9">
                                <div class="input-group input-group-sm">
                                    <select name="jenis" class="form-control select2" required>
                                        <option value="atk">ATK</option>
                                        <option value="jasa">Jasa</option>
                                        <option value="print">Print</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for=""
                                class="col-sm-3 col-form-label col-form-label-sm text-right">Unit</label>
                            <div class="col-sm-9">
                                <div class="input-group input-group-sm">
                                    <select name="jenis" class="form-control select2" required>
                                        <option value="pcs">Pcs</option>
                                        <option value="pkg">Pkg</option>
                                        <option value="rim">Rim</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-sm-3 col-form-label col-form-label-sm text-right">Cost
                                Price</label>
                            <div class="col-sm-9">
                                <div class="input-group input-group-sm">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Rp </span>
                                    </div>
                                    <input type="text" class="form-control form-control-sm">
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for=""
                                class="col-sm-3 col-form-label col-form-label-sm text-right">Markup</label>
                            <div class="col-sm-9">
                                <div class="input-group input-group-sm">
                                    <input type="number" class="form-control form-control-sm" min="0">
                                    <div class="input-group-append">
                                        <span class="input-group-text">%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-sm-3 col-form-label col-form-label-sm text-right">Sale
                                Price</label>
                            <div class="col-sm-9">
                                <div class="input-group input-group-sm">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Rp </span>
                                    </div>
                                    <input type="text" class="form-control form-control-sm">
                                </div>
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
@endsection


{{-- @push('scripts')
<script>
    $(function () {
        bsCustomFileInput.init();
    });

    $('.select2').select2();

    document.getElementById('tgl').value = (new Date()).format("m/dd/yy");

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
@endpush --}}

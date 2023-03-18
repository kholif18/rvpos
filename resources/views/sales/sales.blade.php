@extends('layouts.master')

@section('title')
    POS
@endsection

@section('breadcrumb')
    @parent
    <li class="breadcrumb-item active">
        <a href="{{ url()->current() }}">
            POS
        </a>
    </li>
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
                                    <input type="date" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-4 col-form-label col-form-label-sm">Customer</label>
                            <div class="col-sm-8">
                                <div class="input-group input-group-sm">
                                    <select name="customer" class="form-control select2" required>
                                        @foreach ($customers as $customer)
                                            <option value="{{ $customer->id }}">{{ $customer->name }}</option>
                                        @endforeach
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
        <div class="col-md-2 col-sm-12 col-xs-12">
        </div>
        <div class="col-md-6 col-sm-12 col-xs-12">
            <div class="form-group row">
                <label for="inputitem" class="col-sm-2 col-form-label col-form-label-sm text-right">Kode Item</label>
                <div class="col-sm-10">
                    <div class="input-group input-group-sm">
                        <input type="text" autofocus class="form-control" placeholder="Enter Product Name / SKU / Scan Barcode">
                        <span class="input-group-append">
                            <button type="button" class="btn btn-info btn-flat"><i class="fas fa-search"></i></button>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-2 col-sm-12 col-xs-12">
            <button type="submit" class="btn btn-block btn-success btn-sm"><i class="fas fa-shopping-cart"></i> Add To
                Cart</button>
        </div>
        <div class="col-md-2 col-sm-12 col-xs-12">
        </div>
    </div>
    {{-- cart --}}
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
                                    <td>
                                        <div class="input-group input-group-sm" style="width: 100px">
                                            <input type="number" class="form-control" min="1" value="48000">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="input-group input-group-sm" style="width: 50px">
                                            <input type="number" class="form-control" min="1" value="1">
                                        </div>
                                    </td>
                                    <td>Pkg</td>
                                    <td>
                                        <div class="input-group input-group-sm" style="width: 50px">
                                            <input type="number" class="form-control" min="1" value="0">
                                        </div>
                                    </td>
                                    <td>Rp 48.000</td>
                                    <td><button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#modal-edit"><i class="fas fa-edit"></i></button><button style="margin-left: 20px" type="button"
                                            class="btn btn-danger btn-sm delete"><i class="fas fa-trash-alt"></i></button></td>
                                </tr>
                                <tr>
                                    <td>RV006</td>
                                    <td>0845621584654</td>
                                    <td>Map Snail Biru</td>
                                    <td>
                                        <div class="input-group input-group-sm" style="width: 100px">
                                            <input type="number" class="form-control" min="1" value="3000">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="input-group input-group-sm" style="width: 50px">
                                            <input type="number" class="form-control" min="1" value="5">
                                        </div>
                                    </td>
                                    <td>Pcs</td>
                                    <td>
                                        <div class="input-group input-group-sm" style="width: 50px">
                                            <input type="number" class="form-control" min="1" value="0">
                                        </div>
                                    </td>
                                    <td>Rp 15.000</td>
                                    <td><button type="button" class="btn btn-info btn-sm"><i class="fas fa-edit"></i></button><button style="margin-left: 20px" type="button" class="btn btn-danger btn-sm delete"><i
                                                class="fas fa-trash-alt"></i>
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- end cart --}}
    <div class="row">
        <div class="col-md-4 col-sm-12 col-xs-12">
            <div class="card card-primary">
                <div class="card-body">
                    <div class="mailbox-read-info">
                        <h4>Bambang</h4>
                        {{-- @foreach ($customers as $customer)
                            <h4>{{ $customer->name }}</h4>
                        @endforeach --}}
                    </div>
                    <div class="mailbox-read-message">
                        {{-- @foreach ($customers as $customer)
                            <textarea cols="25" rows="3" style="border: none; resize: none; background: none" disabled>{{ $customer->note }}</textarea>
                        @endforeach --}}
                        <p>Sebagai Agent Undangan, memiliki diskon product undangan sebesar 10%</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-12 col-xs-12">
            <div class="card card-primary">
                <div class="card-body">
                    <label for="">Notes</label>
                    <textarea id="inputDescription" class="form-control" rows="4"></textarea>
                </div>
            </div>
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
                                <input type="text" class="form-control text-bold bg-warning" readonly value="63.000">
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label col-form-label-sm" readonly>Discount</label>
                        <div class="col-sm-8">
                            <div class="input-group input-group-sm">
                                <input type="text" class="form-control text-bold" min="0" value="0">
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
                                <input type="text" class="form-control bg-primary text-bold" min="0" placeholder="Rp 0">
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
                                <input type="text" class="form-control bg-teal text-bold" readonly placeholder="Rp 0">
                            </div>
                        </div>
                    </div>
                    <table class="table text-center">
                        <tbody>
                            <tr>
                                <td><button type="button" class="btn btn-block btn-primary btn-sm"><i class="fas fa-save"></i> Save</button></td>
                                <td><button type="button" class="btn btn-block btn-success btn-sm"><i class="fas fa-paper-plane"></i> Cash</button></td>
                                <td><button type="button" class="btn btn-block btn-info btn-sm"><i class="fas fa-credit-card"></i> Credit</button></td>
                                <td><button type="button" class="btn btn-block btn-danger btn-sm cancel"><i class="fas fa-trash-alt"></i> Cancel</button></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    {{-- menu edit category  --}}
    <div class="modal fade" id="modal-edit">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Add Note for Item</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <div class="input-group input-group-sm">
                            <input type="text" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-success btn-sm"><i class="fas fa-paper-plane"></i>
                        Save</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
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
        $(function() {
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
        $('.delete').click(function() {
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            });
        });
        $('.cancel').click(function() {
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, cancel it!'
            });
        });
        // error
        //----------------------------
        //         Swal.fire({
        //   icon: 'error',
        //   title: 'Oops...',
        //   text: 'Something went wrong!',
        //   footer: '<a href="">Why do I have this issue?</a>'
        // })
    </script>
@endpush

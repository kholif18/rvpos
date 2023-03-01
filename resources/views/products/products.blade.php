@extends('layouts.master')

@section('title')
    Products
@endsection

@section('breadcrumb')
    @parent
    <li class="active">Products / Products</li>
@endsection

@section('content')
    <div class="card card-primary card-outline">
        <div class="card-header">
            <h3 class="card-title">Products</h3>
            {{-- <div class="dropdown">
            <button onclick="myFunction()" class="dt-btn-split-drop">Dropdown</button>
            <div id="myDropdown" class="dropdown-content">
                <input type="text" placeholder="Search.." id="myInput" onkeyup="filterFunction()">
                <a href="#atk">ATK</a>
                <a href="#print">Print</a>
            </div>
            </div> --}}
            <div class="card-tools">
                <button type="button" class="btn btn-success  btn-sm" data-toggle="modal" data-target="#modal-add">
                    <i class="fas fa-plus-circle"></i> Add New Product
                </button>
            </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            {{-- <form action="enhanced-results.html">
                <div class="form-group">
                <label>Filter by Category:</label>
                <select class="select2" multiple="multiple" data-placeholder="All" style="width: 400px;">
                    <option value="all">All</option>
                    <option value="atk">ATK</option>
                    <option value="print">Print</option>
                    <option value="jasa">Jasa</option>
                </select>
                <button type="button" class="btn btn-success"><i class="fas fa-print"></i></button>
            </div>
            </form> --}}
            <div class="row">
                <div class="col-12">
                    <div class="card-body table-responsive p-0" style="height: 69vh;">
                        <table id="example1" class="table table-head-fixed text-nowrap table-striped table-sm">
                            <thead>
                                <tr>
                                    <th style="width: 130px">Product Code</th>
                                    <th>Barcode</th>
                                    <th>Product Name</th>
                                    <th>Category</th>
                                    <th>Unit</th>
                                    <th>Cost Price</th>
                                    <th>Selling Price</th>
                                    <th>Stock</th>
                                    <th style="width: 130px">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>RV0015</td>
                                    <td>0651454789546</td>
                                    <td>Kartas F4 70 Gsm</td>
                                    <td>ATK</td>
                                    <td>Pkg</td>
                                    <td>Rp 52.000</td>
                                    <td>Rp 56.000</td>
                                    <td>12</td>
                                    <td><button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#modal-edit"><i class="fas fa-edit"></i></button>
                                        <button style="margin-left: 20px" type="button" class="btn btn-danger btn-sm delete"><i class="fas fa-trash-alt"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>RV0015</td>
                                    <td>8754654324153</td>
                                    <td>Isolasi Hitam National </td>
                                    <td>ATK</td>
                                    <td>Pcs</td>
                                    <td>Rp 5.800</td>
                                    <td>Rp 7.500</td>
                                    <td>8</td>
                                    <td><button type="button" class="btn btn-info btn-sm"><i class="fas fa-edit"></i></button>
                                        <button style="margin-left: 20px" type="button" class="btn btn-danger btn-sm delete"><i class="fas fa-trash-alt"></i></button>
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

    {{-- Modal --}}
    <div class="modal fade" id="modal-add">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <form action="{{ url('/products/add-product') }}" class="form-horizontal" method="post">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
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
                                    <input type="text" name="pcode" class="form-control form-control-sm" required value="RV098">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-sm-3 col-form-label col-form-label-sm text-right">Barcode</label>
                                <div class="col-sm-9">
                                    <input type="text" name="barcode" autofocus class="form-control form-control-sm">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label col-form-label-sm text-right">Product Name</label>
                                <div class="col-sm-9">
                                    <div class="input-group input-group-sm">
                                        <input type="text" name="pname" class="form-control text-bold" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-sm-3 col-form-label col-form-label-sm text-right">Category</label>
                                <div class="col-sm-9">
                                    <div class="input-group input-group-sm">
                                        <select name="category" class="form-control select2" required>
                                            <option value="atk">ATK</option>
                                            <option value="jasa">Jasa</option>
                                            <option value="print">Print</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-sm-3 col-form-label col-form-label-sm text-right">Unit</label>
                                <div class="col-sm-9">
                                    <div class="input-group input-group-sm">
                                        <select name="unit" class="form-control select2" required>
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
                                        <input type="text" name="cost" class="form-control form-control-sm" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-sm-3 col-form-label col-form-label-sm text-right">Markup</label>
                                <div class="col-sm-9">
                                    <div class="input-group input-group-sm">
                                        <input type="text" name="markup" class="form-control form-control-sm" required>
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
                                        <input type="text" name="saleprice" class="form-control form-control-sm" required>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="reset" class="btn btn-danger btn-sm" data-dismiss="modal"><i class="fas fa-trash"></i> Cancel</button>
                        <button type="submit" class="btn btn-success btn-sm"><i class="fas fa-paper-plane"></i>
                            Save</button>
                    </div>
                </form>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
    {{-- modal edit --}}
    <div class="modal fade" id="modal-edit">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Edit Product</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="">
                        <div class="form-group row">
                            <label for="" class="col-sm-3 col-form-label col-form-label-sm text-right">Barcode</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control form-control-sm" value="0651454789546">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-sm-3 col-form-label col-form-label-sm text-right">Product
                                Name</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control form-control-sm" value="Kartas F4 70 Gsm">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-sm-3 col-form-label col-form-label-sm text-right">Category</label>
                            <div class="col-sm-9">
                                <div class="input-group input-group-sm">
                                    <select name="jenis" class="form-control select2">
                                        <option value="atk">ATK</option>
                                        <option value="jasa">Jasa</option>
                                        <option value="print">Print</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-sm-3 col-form-label col-form-label-sm text-right">Unit</label>
                            <div class="col-sm-9">
                                <div class="input-group input-group-sm">
                                    <select name="jenis" class="form-control select2">
                                        <option value="pkg">Pkg</option>
                                        <option value="pcs">Pcs</option>
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
                                    <input type="text" class="form-control form-control-sm" value="52.000">
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-sm-3 col-form-label col-form-label-sm text-right">Selling
                                Price</label>
                            <div class="col-sm-9">
                                <div class="input-group input-group-sm">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Rp </span>
                                    </div>
                                    <input type="text" class="form-control form-control-sm" value="56.000">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="reset" class="btn btn-danger btn-sm" data-dismiss="modal"><i class="fas fa-trash"></i> Cancel</button>
                    <button type="submit" class="btn btn-success btn-sm"><i class="fas fa-paper-plane"></i>
                        Save</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
@endsection


@push('scripts')
    <!-- Select2 -->
    <script src="{{ asset('template/plugins/select2/js/select2.full.min.js') }}"></script>
    {{-- When the user clicks on the button,
toggle between hiding and showing the dropdown content --}}

    <script>
        $(function() {
            $("#example1").DataTable({
                "paging": false,
                "ordering": true,
                "info": false,
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
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
    </script>
@endpush

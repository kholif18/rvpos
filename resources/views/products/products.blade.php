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
            <button type="button" class="btn btn-success  btn-sm">
            <i class="fas fa-plus-circle"></i> Add New Product
            </button>
        </div>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <form action="enhanced-results.html">
            {{-- <div class="form-group">
                <label>Filter by Category:</label>
                <select class="select2" multiple="multiple" data-placeholder="All" style="width: 400px;">
                    <option value="all">All</option>
                    <option value="atk">ATK</option>
                    <option value="print">Print</option>
                    <option value="jasa">Jasa</option>
                </select>
                <button type="button" class="btn btn-success"><i class="fas fa-print"></i></button>
            </div> --}}
        </form>
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
                                <td><button type="button" class="btn btn-info btn-sm"><i class="fas fa-edit"></i></button>
                                    <button style="margin-left: 20px" type="button" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></button>
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
                                    <button style="margin-left: 20px" type="button" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>RV0015</td>
                                <td>0651454789546</td>
                                <td>Tipe-x Joyko CF-5221</td>
                                <td>ATK</td>
                                <td>Pcs</td>
                                <td>Rp 3.500</td>
                                <td>Rp 4.000</td>
                                <td>18</td>
                                <td><button type="button" class="btn btn-info btn-sm"><i class="fas fa-edit"></i></button>
                                    <button style="margin-left: 20px" type="button" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>RV0015</td>
                                <td>546843241585</td>
                                <td>Buku HC Folio isi 100</td>
                                <td>ATK</td>
                                <td>Pcs</td>
                                <td>Rp 20.000</td>
                                <td>Rp 23.000</td>
                                <td>12</td>
                                <td><button type="button" class="btn btn-info btn-sm"><i class="fas fa-edit"></i></button>
                                    <button style="margin-left: 20px" type="button" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>RV0015</td>
                                <td>546843241585</td>
                                <td>Buku HC Folio isi 100</td>
                                <td>ATK</td>
                                <td>Pcs</td>
                                <td>Rp 20.000</td>
                                <td>Rp 23.000</td>
                                <td>12</td>
                                <td><button type="button" class="btn btn-info btn-sm"><i class="fas fa-edit"></i></button>
                                    <button style="margin-left: 20px" type="button" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>RV0015</td>
                                <td>546843241585</td>
                                <td>Buku HC Folio isi 100</td>
                                <td>ATK</td>
                                <td>Pcs</td>
                                <td>Rp 20.000</td>
                                <td>Rp 23.000</td>
                                <td>12</td>
                                <td><button type="button" class="btn btn-info btn-sm"><i class="fas fa-edit"></i></button>
                                    <button style="margin-left: 20px" type="button" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>RV0015</td>
                                <td>546843241585</td>
                                <td>Buku HC Folio isi 100</td>
                                <td>ATK</td>
                                <td>Pcs</td>
                                <td>Rp 20.000</td>
                                <td>Rp 23.000</td>
                                <td>12</td>
                                <td><button type="button" class="btn btn-info btn-sm"><i class="fas fa-edit"></i></button>
                                    <button style="margin-left: 20px" type="button" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>RV0015</td>
                                <td>546843241585</td>
                                <td>Buku HC Folio isi 100</td>
                                <td>ATK</td>
                                <td>Pcs</td>
                                <td>Rp 20.000</td>
                                <td>Rp 23.000</td>
                                <td>12</td>
                                <td><button type="button" class="btn btn-info btn-sm"><i class="fas fa-edit"></i></button>
                                    <button style="margin-left: 20px" type="button" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>RV0015</td>
                                <td>546843241585</td>
                                <td>Buku HC Folio isi 100</td>
                                <td>ATK</td>
                                <td>Pcs</td>
                                <td>Rp 20.000</td>
                                <td>Rp 23.000</td>
                                <td>12</td>
                                <td><button type="button" class="btn btn-info btn-sm"><i class="fas fa-edit"></i></button>
                                    <button style="margin-left: 20px" type="button" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>RV0015</td>
                                <td>546843241585</td>
                                <td>Buku HC Folio isi 100</td>
                                <td>ATK</td>
                                <td>Pcs</td>
                                <td>Rp 20.000</td>
                                <td>Rp 23.000</td>
                                <td>12</td>
                                <td><button type="button" class="btn btn-info btn-sm"><i class="fas fa-edit"></i></button>
                                    <button style="margin-left: 20px" type="button" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>RV0015</td>
                                <td>546843241585</td>
                                <td>Buku HC Folio isi 100</td>
                                <td>ATK</td>
                                <td>Pcs</td>
                                <td>Rp 20.000</td>
                                <td>Rp 23.000</td>
                                <td>12</td>
                                <td><button type="button" class="btn btn-info btn-sm"><i class="fas fa-edit"></i></button>
                                    <button style="margin-left: 20px" type="button" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>RV0015</td>
                                <td>546843241585</td>
                                <td>Buku HC Folio isi 100</td>
                                <td>ATK</td>
                                <td>Pcs</td>
                                <td>Rp 20.000</td>
                                <td>Rp 23.000</td>
                                <td>12</td>
                                <td><button type="button" class="btn btn-info btn-sm"><i class="fas fa-edit"></i></button>
                                    <button style="margin-left: 20px" type="button" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>RV0015</td>
                                <td>546843241585</td>
                                <td>Buku HC Folio isi 100</td>
                                <td>Print</td>
                                <td>Pcs</td>
                                <td>Rp 20.000</td>
                                <td>Rp 23.000</td>
                                <td>12</td>
                                <td><button type="button" class="btn btn-info btn-sm"><i class="fas fa-edit"></i></button>
                                    <button style="margin-left: 20px" type="button" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>RV0015</td>
                                <td>546843241585</td>
                                <td>Buku HC Folio isi 100</td>
                                <td>ATK</td>
                                <td>Pcs</td>
                                <td>Rp 20.000</td>
                                <td>Rp 23.000</td>
                                <td>12</td>
                                <td><button type="button" class="btn btn-info btn-sm"><i class="fas fa-edit"></i></button>
                                    <button style="margin-left: 20px" type="button" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>RV0015</td>
                                <td>546843241585</td>
                                <td>Buku HC Folio isi 100</td>
                                <td>Print</td>
                                <td>Pcs</td>
                                <td>Rp 20.000</td>
                                <td>Rp 23.000</td>
                                <td>12</td>
                                <td><button type="button" class="btn btn-info btn-sm"><i class="fas fa-edit"></i></button>
                                    <button style="margin-left: 20px" type="button" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>RV0015</td>
                                <td>546843241585</td>
                                <td>Buku HC Folio isi 100</td>
                                <td>ATK</td>
                                <td>Pcs</td>
                                <td>Rp 20.000</td>
                                <td>Rp 23.000</td>
                                <td>12</td>
                                <td><button type="button" class="btn btn-info btn-sm"><i class="fas fa-edit"></i></button>
                                    <button style="margin-left: 20px" type="button" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>RV0015</td>
                                <td>546843241585</td>
                                <td>Buku HC Folio isi 100</td>
                                <td>Print</td>
                                <td>Pcs</td>
                                <td>Rp 20.000</td>
                                <td>Rp 23.000</td>
                                <td>12</td>
                                <td><button type="button" class="btn btn-info btn-sm"><i class="fas fa-edit"></i></button>
                                    <button style="margin-left: 20px" type="button" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>RV0015</td>
                                <td>546843241585</td>
                                <td>Buku HC Folio isi 100</td>
                                <td>ATK</td>
                                <td>Pcs</td>
                                <td>Rp 20.000</td>
                                <td>Rp 23.000</td>
                                <td>12</td>
                                <td><button type="button" class="btn btn-info btn-sm"><i class="fas fa-edit"></i></button>
                                    <button style="margin-left: 20px" type="button" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>RV0015</td>
                                <td>546843241585</td>
                                <td>Buku HC Folio isi 100</td>
                                <td>Print</td>
                                <td>Pcs</td>
                                <td>Rp 20.000</td>
                                <td>Rp 23.000</td>
                                <td>12</td>
                                <td><button type="button" class="btn btn-info btn-sm"><i class="fas fa-edit"></i></button>
                                    <button style="margin-left: 20px" type="button" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>RV0015</td>
                                <td>546843241585</td>
                                <td>Buku HC Folio isi 100</td>
                                <td>Print</td>
                                <td>Pcs</td>
                                <td>Rp 20.000</td>
                                <td>Rp 23.000</td>
                                <td>12</td>
                                <td><button type="button" class="btn btn-info btn-sm"><i class="fas fa-edit"></i></button>
                                    <button style="margin-left: 20px" type="button" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>RV0015</td>
                                <td>546843241585</td>
                                <td>Buku HC Folio isi 100</td>
                                <td>Ice Cream</td>
                                <td>Pcs</td>
                                <td>Rp 20.000</td>
                                <td>Rp 23.000</td>
                                <td>12</td>
                                <td><button type="button" class="btn btn-info btn-sm"><i class="fas fa-edit"></i></button>
                                    <button style="margin-left: 20px" type="button" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>RV0015</td>
                                <td>546843241585</td>
                                <td>Buku HC Folio isi 100</td>
                                <td>Ice Cream</td>
                                <td>Pcs</td>
                                <td>Rp 20.000</td>
                                <td>Rp 23.000</td>
                                <td>12</td>
                                <td><button type="button" class="btn btn-info btn-sm"><i class="fas fa-edit"></i></button>
                                    <button style="margin-left: 20px" type="button" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>RV0015</td>
                                <td>546843241585</td>
                                <td>Buku HC Folio isi 100</td>
                                <td>Ice Cream</td>
                                <td>Pcs</td>
                                <td>Rp 20.000</td>
                                <td>Rp 23.000</td>
                                <td>12</td>
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
@endsection


@push('scripts')
	<!-- Select2 -->
	<script src="{{ asset('template/plugins/select2/js/select2.full.min.js') }}"></script>
{{-- When the user clicks on the button,
toggle between hiding and showing the dropdown content --}}

<script>
    $(function () {
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
</script>
@endpush

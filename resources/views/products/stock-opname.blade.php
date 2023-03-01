@extends('layouts.master')

@section('title')
    Stock Opname
@endsection

@section('breadcrumb')
    @parent
    <li class="active">Products / Stock Opname</li>
@endsection

@section('content')
    <div class="card card-primary card-outline">
        <div class="card-header">
            <h3 class="card-title">Stok Opname</h3>
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
                    <i class="fas fa-plus-circle"></i> Add Product
                </button>
            </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <div class="row">
                <div class="col-12">
                    <div class="card-body table-responsive p-0" style="height: 69vh;">
                        <table id="example1" class="table table-head-fixed text-nowrap table-striped table-sm">
                            <thead>
                                <tr>
                                    <th>Date</th>
                                    <th>Barcode</th>
                                    <th>Products Name</th>
                                    <th>Stock</th>
                                    <th>Real Stock</th>
                                    <th>Difference</th>
                                    <th>Value Price</th>
                                    <th>Detail</th>
                                    <th style="width: 130px">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>20/02/2023</td>
                                    <td>0651454789546</td>
                                    <td>Kartas F4 70 Gsm</td>
                                    <td>12</td>
                                    <td>10</td>
                                    <td>2</td>
                                    <td>Rp 560.000</td>
                                    <td>Rusak</td>
                                    <td><button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#modal-edit"><i class="fas fa-edit"></i></button>
                                        <button style="margin-left: 20px" type="button" class="btn btn-danger btn-sm delete"><i class="fas fa-trash-alt"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>19/02/2023</td>
                                    <td>8754654324153</td>
                                    <td>Isolasi Hitam National </td>
                                    <td>7</td>
                                    <td>8</td>
                                    <td>1</td>
                                    <td>Rp 60.000</td>
                                    <td>Ketlisut</td>
                                    <td><button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#modal-edit"><i class="fas fa-edit"></i></button>
                                        <button style="margin-left: 20px" type="button" class="btn btn-danger btn-sm delete"><i class="fas fa-trash-alt"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>15/02/2023</td>
                                    <td>0651454789546</td>
                                    <td>Tipe-x Joyko CF-5221</td>
                                    <td>8</td>
                                    <td>7</td>
                                    <td>1</td>
                                    <td>Rp 28.000</td>
                                    <td>Tidak di masukkan kasir</td>
                                    <td><button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#modal-edit"><i class="fas fa-edit"></i></button>
                                        <button style="margin-left: 20px" type="button" class="btn btn-danger btn-sm delete"><i class="fas fa-trash-alt"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>12/01/2023</td>
                                    <td>546843241585</td>
                                    <td>Buku HC Folio isi 100</td>
                                    <td>5</td>
                                    <td>3</td>
                                    <td>2</td>
                                    <td>Rp 69.000</td>
                                    <td>Dibuat sendiri</td>
                                    <td><button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#modal-edit"><i class="fas fa-edit"></i></button>
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

    <!-- Modal Unit -->
    @include('products._modal-stock-opname')
@endsection


@push('scripts')
    <!-- Select2 -->
    <script src="{{ asset('template/plugins/select2/js/select2.full.min.js') }}"></script>
    {{-- When the user clicks on the button,
toggle between hiding and showing the dropdown content --}}

    <script>
        $(function() {
            $("#example1").DataTable({
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
            }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire({
                        icon: 'success',
                        title: 'Deleted!',
                        text: "Your file has been deleted.",
                        showConfirmButton: false,
                        timer: 1500
                    })
                }
            });
        });
    </script>
@endpush

{{-- master template --}}
@extends('layouts.master')

@section('title')
    Suppliers
@endsection

@section('breadcrumb')
    @parent
    <li class="active">Suppliers</li>
@endsection

@section('content')
    <div class="card card-primary card-outline">
        <div class="card-header">
            <h3 class="card-title">Suppliers</h3>
            <div class="card-tools">
                <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#add-supplier">
                    <i class="fas fa-plus-circle"></i> Add Supplier
                </button>
            </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <div class="row">
                <div class="col-12">
                    <div class="card-body table-responsive p-0" style="height: 69vh;">
                        <table id="example2" class="table table-head-fixed text-nowrap table-striped table-sm">
                            <thead>
                                <tr>
                                    <th style="width: 100px">Code</th>
                                    <th>Supplier Name</th>
                                    <th>Telp</th>
                                    <th>email</th>
                                    <th>Bank</th>
                                    <th>No. Rek</th>
                                    <th>Address</th>
                                    <th style="width: 200px">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($suppliers as $supplier)
                                    <tr>
                                        <td>{{ $supplier->code }}</td>
                                        <td>{{ $supplier->name }}</td>
                                        <td>{{ $supplier->no_telp }}</td>
                                        <td>{{ $supplier->email }}</td>
                                        <td>{{ $supplier->bank }}</td>
                                        <td>{{ $supplier->no_rek }}</td>
                                        <td>{{ $supplier->address }}</td>
                                        <td><button type="button" onclick="editForm({{ route('supplier.update', $supplier->id) }})" class="btn btn-info  btn-sm" data-toggle="modal" data-target="#supplier-edit"><i
                                                    class="fas fa-edit"></i> Update</button>
                                            <form action="{{ route('supplier.destroy', $supplier->id) }}" method="post" class="d-inline">
                                                @csrf
                                                @method('delete')
                                                <button style="margin-left: 20px" type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')"><i class="fas fa-trash-alt"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.card-body -->
    </div>

    {{-- modal Add Supplier --}}
    @include('supplier.addsupplierform')
    @include('supplier.form')
@endsection

@push('scripts')
    <script>
        $(document).ready(function() {
            $(function() {
                $('#example2').DataTable({
                    "paging": false,
                    "lengthChange": false,
                    "searching": false,
                    "ordering": true,
                    "info": false,
                    "autoWidth": true,
                    "responsive": false,
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
                }).then((result) => {
                    if (result.isConfirmed) {
                        Swal.fire({
                            icon: 'success',
                            title: 'Deleted!',
                            text: "Your file has been deleted.",
                            showConfirmButton: false,
                            timer: 1500
                        });
                    }
                });
            });

            //ajax store supplier
            $(document).on('submit', '#formSupplier', function(e) {
                e.preventDefault();
                let dataForm = this;

                $.ajax({
                    type: $('#formSupplier').attr('method'),
                    url: $('#formSupplier').attr('action'),
                    data: new FormData(dataForm),
                    dataType: "json",
                    processData: false,
                    contentType: false,

                    success: function(response) {
                        Swal.fire({
                            icon: 'success',
                            title: 'Success!',
                            text: response.success,
                            showConfirmButton: false,
                            timer: 1500
                        });
                        $('#add-supplier').modal('hide');
                        $('#example2').DataTable().ajax.reload(null, false);
                        $('#formSupplier')[0].reset();
                    }
                });
            });

            function editForm(url) {

                $('#supplier-edit form')[0].reset();
                $('#supplier-edit form').attr('action', url);
                $('#supplier-edit [name=_method]').val('put');

                $.get(url)
                    .done((response) => {
                        $('#supplier-edit [name=code]').val(response.code);
                        $('#supplier-edit [name=name]').val(response.name);
                        $('#supplier-edit [name=telp]').val(response.telp);
                        $('#supplier-edit [name=email]').val(response.email);
                        $('#supplier-edit [name=bank]').val(response.bank);
                        $('#supplier-edit [name=norek]').val(response.norek);
                        $('#supplier-edit [name=address]').val(response.address);
                    })
                    .fail((errors) => {
                        alert('Tidak dapat menampilkan data');
                        return;
                    });
            }
        });
    </script>
@endpush

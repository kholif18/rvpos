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
                <button onclick="addSupplier('{{ route('supplier.store') }}')" class="btn btn-success btn-sm">
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
                                        <td>{{ $supplier->phone }}</td>
                                        <td>{{ $supplier->email }}</td>
                                        <td>{{ $supplier->bank }}</td>
                                        <td>{{ $supplier->norek }}</td>
                                        <td>{{ $supplier->address }}</td>
                                        <td><button onclick="editForm('{{ route('supplier.update', $supplier->id) }}')" class="btn btn-info  btn-sm"><i class="fas fa-edit"></i> Update</button>
                                            <button onclick="deleteData('{{ route('supplier.destroy', $supplier->id) }}')" class="btn btn-danger  btn-sm"><i class="fas fa-trash-alt"></i> Delete</button>

                                            {{-- <form action="{{ route('supplier.destroy', $supplier->id) }}" method="post" class="d-inline">
                                                @csrf
                                                @method('delete')
                                                <button style="margin-left: 20px" type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')"><i class="fas fa-trash-alt"></i> Delete</button>
                                            </form> --}}
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
    {{-- @include('supplier.form') --}}
@endsection

@push('scripts')
    <script>
        @if (Session::has('success'))
            toastr.success("{{ Session::get('success') }}");
        @endif

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
        });

        function addSupplier(url) {
            $('#supplierModal').modal('show');
            $('#supplierModal .modal-title').text('Add Supplier');

            $('#supplierModal form')[0].reset();
            $('#supplierModal form').attr('action', url);
            $('#supplierModal [name=_method]').val('post');
            $('#supplierModal [name=name]').focus();
            document.getElementById('code').readOnly = false;
            $.ajax({
                beforeSend: function() {
                    $('.formSupplier').find('span.error-text').text('');
                },
                success: function(response) {
                    if (response.status == 400) {
                        $.each(response.error, function(prefix, val) {
                            $('.formSupplier').find('span.' + prefix + '_error').text(val[0]);
                        });
                    } else {
                        Swal.fire({
                            icon: 'success',
                            title: 'Kategori Baru Berhasil Di Tambahkan',
                            showConfirmButton: false,
                            timer: 1900
                        });
                        $('#modalAddKategori').modal('hide');
                        $('#table_kategori').DataTable().ajax.reload(null, false);
                        $('.formSupplier')[0].reset();
                    }
                }
            });
        }

        function editForm(url) {
            $('#supplierModal').modal('show');
            $('#supplierModal .modal-title').text('Edit Supplier');

            $('#supplierModal form')[0].reset();
            $('#supplierModal form').attr('action', url);
            $('#supplierModal [name=_method]').val('put');
            $('#supplierModal [name=name]').focus();
            toastr.error('Stock Kertas A4 tinggal 5');

            $.get(url)
                .done((response) => {
                    document.getElementById('code').readOnly = true;
                    $('#supplierModal [name=code]').val(response.code);
                    $('#supplierModal [name=name]').val(response.name);
                    $('#supplierModal [name=phone]').val(response.phone);
                    $('#supplierModal [name=email]').val(response.email);
                    $('#supplierModal [name=bank]').val(response.bank);
                    $('#supplierModal [name=norek]').val(response.norek);
                    $('#supplierModal [name=address]').val(response.address);
                })
                .fail((errors) => {
                    alert('Tidak dapat menampilkan data');
                    return;
                });
        }

        function deleteData(url) {
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
        };
    </script>
@endpush

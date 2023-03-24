@extends('layouts.master')

@section('title')
    Customers
@endsection

@section('breadcrumb')
    @parent
    <li class="breadcrumb-item active">
        <a href="{{ url()->current() }}">
            Customers
        </a>
    </li>
@endsection

<!-- Main content -->
@section('content')
    <div class="card card-primary card-outline">
        <div class="card-header">
            <h3 class="card-title">Customers</h3>
            <div class="card-tools">
                <button class="btn btn-success btn-sm add-customer" data-url="{{ route('customer.store') }}">
                    <i class="fas fa-plus-circle"></i> Add Customer
                </button>
            </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <div class="row">
                <div class="col-12">
                    <div class="card-body table-responsive p-0" style="height: 69vh;">
                        <table id="customerTable" class="table table-head-fixed text-nowrap table-striped table-sm">
                            <thead>
                                <tr>
                                    <th style="width: 100px">Code</th>
                                    <th>Customers Name</th>
                                    <th>Telp</th>
                                    <th>email</th>
                                    <th>Address</th>
                                    <th>Status</th>
                                    <th style="width: 120px">Disc.</th>
                                    <th style="width: 250px">Note</th>
                                    <th style="width: 100px">Actions</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.card-body -->

    </div>
    <!-- /.card -->
    <!-- /.container-fluid -->

    {{-- Modal Form --}}
    @include('customers._form-customer')
@endsection


@push('scripts')
    <script>
        //---------------------------------------script reload tabel-------------------------------------------
        $(document).ready(function() {
            $('#customerTable').DataTable({
                "paging": true,
                "ordering": true,
                "info": true,
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "searching": false,
                processing: true,
                serverSide: true,
                ajax: "{{ route('customer.loadDataTable') }}",
                columns: [{
                        data: 'code',
                        name: 'code'
                    },
                    {
                        data: 'name',
                        name: 'name'
                    },
                    {
                        data: 'telp',
                        name: 'telp'
                    },
                    {
                        data: 'email',
                        name: 'email'
                    },
                    {
                        data: 'address',
                        name: 'address'
                    },
                    {
                        data: 'status',
                        name: 'status'
                    },
                    {
                        data: 'member_discount',
                        name: 'member_discount'
                    },
                    {
                        data: 'note',
                        name: 'note',
                        render: function(data, type, row) {
                            if (data === null) {
                                return '';
                            } else {
                                return '<textarea jquery-autogrow style="border: none; resize: none; background: none" disabled>' + data + '</textarea>';
                            }
                        }
                    },
                    {
                        data: 'action',
                        name: 'action',
                        orderable: false,
                        searchable: false
                    }
                ]
            });

            //------------------------------------------jquery validation---------------------------------

            $('#form-customer').validate({
                rules: {
                    name: {
                        required: true,
                        minlength: 2,
                    },
                    telp: {
                        required: true,
                        minlength: 6,
                    },
                    address: {
                        required: true,
                        minlength: 2
                    },
                    status: {
                        required: true
                    },
                },
                messages: {
                    name: {
                        required: "Nama haru diisi",
                        minlength: "minimal 2 Karakter"
                    },
                    telp: {
                        required: "Nomor telepon haru diisi",
                        minlength: "Nomor telepon minimal 6 angka"
                    },
                    address: {
                        required: "Alamat haru diisi",
                        minlength: "Alamat minimal 2 karakter"
                    },
                    status: "Status haru diisi"
                },
                errorElement: 'span',
                errorPlacement: function(error, element) {
                    error.addClass('invalid-feedback');
                    element.next('.error-text').append(error);
                },
                highlight: function(element, errorClass, validClass) {
                    $(element).addClass('is-invalid');
                },
                unhighlight: function(element, errorClass, validClass) {
                    $(element).removeClass('is-invalid');
                }
            });

            //------------------------------------------pengelolaan tabel (add, edit dan delete)---------------------------------

            // Handle submit form (Tambah Customer & Update Customer)
            $(document).on('submit', '#form-customer', function(event) {
                event.preventDefault();

                const httpUrl = $(this).attr('action');
                const httpMethod = $(this).attr('method');
                const formData = $(this).serialize();

                // Submit the form data using Ajax
                $.ajax({
                    type: httpMethod,
                    url: httpUrl,
                    data: formData,
                    beforSend: function() {
                        $('#form-customer').find('span.error-text').text('');
                    },
                    success: function(response) {
                        // Do something with the response data
                        console.log(response);
                        if (response.status === 'success') {
                            $('#customerModal').modal('hide');
                            $('#customerTable').DataTable().ajax.reload(null, false).draw();
                            $('#form-customer')[0].reset();
                            toastr.success(response.message);
                        }
                    },
                    error: function(xhr, status, error, prefix, val) {
                        // Handle errors
                        console.log(xhr.responseText);
                        Swal.fire({
                            icon: 'error',
                            title: 'Maaf, terjadi kesalahan',
                            text: 'Cek log untuk info detail',
                            toast: true,
                            position: 'top-end',
                            timer: 3500,
                            timerProgressBar: true,
                            showConfirmButton: false,
                        });
                    }
                });
            });

            // Handle ketika user meng-klik tombol "Add Customer"
            $(document).on('click', '.add-customer', function(event) {
                event.preventDefault();

                // Set url action to add
                const httpUrl = $(this).attr('data-url');
                $(document).find('#form-customer').attr('action', httpUrl);
                $(document).find('#form-customer').attr('method', 'post');
                $('#customerModal .modal-title').text('Add customer');

                // Reset form input from previous
                $.ajax({
                    url: "{{ route('customer.code') }}",
                    type: 'GET',
                    success: function(response) {
                        $('#code').val(response.noCode); // Perbarui nilai input field pada form modal
                    }
                });
                $(document).find('#form-customer input[name="name"]').val('').focus();
                $(document).find('#form-customer input[name="telp"]').val('');
                $(document).find('#form-customer input[name="email"]').val('');
                $(document).find('#form-customer input[name="address"]').val('');
                $(document).find('#form-customer input[name="status"]').val('');
                $(document).find('#form-customer input[name="memdisc"]').val('0');
                $(document).find('#form-customer input[name="note"]').val('');

                // Show modal form
                $('#customerModal').modal('show');
            });

            // Handle ketika user meng-klik tombol edit
            $(document).on('click', '.edit-customer', function(event) {
                event.preventDefault();

                // Set url action to edit
                const httpUrl = $(this).attr('data-url');
                $(document).find('#form-customer').attr('action', httpUrl);
                $(document).find('#form-customer').attr('method', 'put');
                $('#customerModal .modal-title').text('Edit customer');

                // Fetch data from database
                const httpFetchUrl = $(this).attr('data-fetch-url');
                $.ajax({
                    url: httpFetchUrl,
                    success: function(response) {
                        // Do something with the response data
                        console.log(response);
                        if (response.status === 'success') {
                            const data = response.data;
                            $(document).find('#form-customer input[name="code"]').val(data.code);
                            $(document).find('#form-customer input[name="name"]').val(data.name);
                            $(document).find('#form-customer input[name="telp"]').val(data.telp);
                            $(document).find('#form-customer input[name="email"]').val(data.email);
                            $(document).find('#form-customer input[name="address"]').val(data.address);
                            $(document).find('#form-customer input[name="status"]').val(data.status);
                            $(document).find('#form-customer input[name="memdisc"]').val(data.member_discount);
                            $(document).find('#form-customer textarea[name="note"]').val(data.note);
                        }
                    }
                });

                // Show modal form
                $('#customerModal').modal('show');
            });

            // Handle ketika user meng-klik tombol hapus
            $(document).on('click', '.delete-customer', function(event) {
                event.preventDefault();

                // Variable bantuan (Menghindari scope js)
                const _this = $(this);

                // Show confirmation
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
                        const httpUrl = _this.attr('data-url');
                        const httpMethod = 'delete';
                        const csrfToken = _this.attr('data-token');

                        // Submit the form data using Ajax
                        $.ajax({
                            type: httpMethod,
                            url: httpUrl,
                            data: {
                                "_token": csrfToken,
                            },
                            success: function(response) {
                                // Do something with the response data
                                console.log(response);
                                if (response.status === 'success') {
                                    $('#customerTable').DataTable().ajax.reload(null, false).draw();
                                    Swal.fire({
                                        title: response.message,
                                        icon: 'success',
                                        allowEscapeKey: true,
                                        allowOutsideClick: true,
                                        timer: 2000,
                                        showConfirmButton: false,
                                    });
                                }
                            },
                            error: function(xhr, status, error) {
                                // Handle errors
                                console.log(xhr.responseText);
                                Swal.fire({
                                    icon: 'error',
                                    title: 'Maaf, terjadi kesalahan',
                                    text: 'Cek log untuk info detail',
                                    toast: true,
                                    position: 'top-end',
                                    timer: 3500,
                                    timerProgressBar: true,
                                    showConfirmButton: false,
                                });
                            }
                        });
                    }
                });
            });
        });
    </script>
@endpush

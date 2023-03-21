{{-- master template --}}
@extends('layouts.master')

@section('title')
    Suppliers
@endsection

@section('breadcrumb')
    @parent
    <li class="breadcrumb-item active">
        <a href="{{ url()->current() }}">
            Suppliers
        </a>
    </li>
@endsection

@section('content')
    <div class="card card-primary card-outline">
        <div class="card-header">
            <h3 class="card-title">Suppliers</h3>
            <div class="card-tools">
                <button class="btn btn-success btn-sm add-supplier" data-url="{{ route('supplier.store') }}">
                    <i class="fas fa-plus-circle"></i> Add Supplier
                </button>
            </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <div class="row">
                <div class="col-12">
                    <div class="card-body table-responsive p-0" style="height: 69vh;">
                        <table id="supplierTable" class="table table-head-fixed text-nowrap table-striped table-sm">
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
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.card-body -->
    </div>

    {{-- modal Add Supplier --}}
    @include('supplier.form')
@endsection

@push('scripts')
    <script>
        let Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 2000
        });

        //---------------------------------------script reload tabel-------------------------------------------
        $(document).ready(function() {
            $('#supplierTable').DataTable({
                "paging": true,
                "ordering": true,
                "info": true,
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "searching": false,
                processing: true,
                serverSide: true,
                ajax: "{{ route('supplier.loadDataTable') }}",
                columns: [{
                        data: 'code',
                        name: 'code'
                    },
                    {
                        data: 'name',
                        name: 'name'
                    },
                    {
                        data: 'phone',
                        name: 'phone'
                    },
                    {
                        data: 'email',
                        name: 'email'
                    },
                    {
                        data: 'bank',
                        name: 'bank'
                    },
                    {
                        data: 'norek',
                        name: 'norek'
                    },
                    {
                        data: 'address',
                        name: 'address'
                    },
                    {
                        data: 'action',
                        name: 'action',
                        orderable: false,
                        searchable: false
                    }
                ]
            });

            //--------------------------------------------membuat prefix input code otomatis--------------------------------
            let lastCode = ''; // variable untuk menyimpan nomor urut terakhir

            // melakukan request ke database untuk mendapatkan data terakhir
            // contoh menggunakan jQuery Ajax
            $.ajax({
                url: "{{ route('supplier.getlastcode') }}",
                type: 'GET',
                success: function(response) {
                    lastCode = response.lastCode; // menyimpan nomor urut terakhir dari response
                },
                error: function() {
                    console.log('Error: tidak dapat mengambil data terakhir dari database.');
                }
            });

            console.log(lastCode);
            let prefix = "SP"; // ganti dengan prefix yang diinginkan
            let lastNumber = parseInt(lastCode.substr(2));
            let newNumber = lastNumber + 1;
            let count = 0;

            function generateCode() {
                let codeNumber = newNumber.toString().padStart(3, '0');
                let code = prefix + codeNumber;
                count++;
                return code;
            }

            //------------------------------------------pengelolaan tabel (add, edit dan delete)---------------------------------
            // Temukan input yang akan dipvalidasi
            const inputName = document.querySelector('input[name="name"]');
            const inputCode = document.querySelector('input[name="code"]');

            // Handle submit form (Tambah Supplier & Update Supplier)
            $(document).on('submit', '#form-supplier', function(event) {
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
                        $('#form-supplier').find('span.error-text').text('');
                    },
                    success: function(response) {
                        // Do something with the response data
                        console.log(response);
                        if (response.status == 400) {
                            $.each(response.error, function(prefix, val) {
                                $('#form-supplier').find('span.' + prefix + '_error').text(val[0]);
                            });
                        } else {
                            $('#supplierModal').modal('hide');
                            $('#supplierTable').DataTable().ajax.reload(null, false).draw();
                            $('#form-supplier')[0].reset();
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

            // Handle ketika user meng-klik tombol "Add Supplier"
            $(document).on('click', '.add-supplier', function(event) {
                event.preventDefault();

                // Set url action to add
                const httpUrl = $(this).attr('data-url');
                $(document).find('#form-supplier').attr('action', httpUrl);
                $(document).find('#form-supplier').attr('method', 'post');
                $('#supplierModal .modal-title').text('Add supplier');

                // Reset form input from previous
                $(document).find('#form-supplier input[name="code"]').val('');
                //document.getElementById('code').value = code;
                $(document).find('#form-supplier input[name="name"]').val('');
                $(document).find('#form-supplier input[name="phone"]').val('');
                $(document).find('#form-supplier input[name="email"]').val('');
                $(document).find('#form-supplier input[name="bank"]').val('');
                $(document).find('#form-supplier input[name="norek"]').val('');
                $(document).find('#form-supplier input[name="address"]').val('');

                document.querySelectorAll('.code_error, .name_error').forEach(function(el) {
                    el.innerHTML = '';
                });

                inputName.addEventListener('input', function() {
                    if (this.value.trim() !== '') {
                        // Jika nilai input sudah valid, hapus pesan kesalahan
                        document.querySelector('.name_error').innerHTML = '';
                    }
                });

                inputCode.addEventListener('input', function() {
                    if (this.value.trim() !== '') {
                        // Jika nilai input sudah valid, hapus pesan kesalahan
                        document.querySelector('.code_error').innerHTML = '';
                    }
                });

                // Show modal form
                $('#supplierModal').modal('show');
            });

            // Handle ketika user meng-klik tombol edit
            $(document).on('click', '.edit-supplier', function(event) {
                event.preventDefault();
                document.querySelectorAll('.code_error, .name_error').forEach(function(el) {
                    el.innerHTML = '';
                });

                inputName.addEventListener('input', function() {
                    if (this.value.trim() !== '') {
                        // Jika nilai input sudah valid, hapus pesan kesalahan
                        document.querySelector('.name_error').innerHTML = '';
                    }
                });

                inputCode.addEventListener('input', function() {
                    if (this.value.trim() !== '') {
                        // Jika nilai input sudah valid, hapus pesan kesalahan
                        document.querySelector('.code_error').innerHTML = '';
                    }
                });

                // Set url action to edit
                const httpUrl = $(this).attr('data-url');
                $(document).find('#form-supplier').attr('action', httpUrl);
                $(document).find('#form-supplier').attr('method', 'put');
                $('#supplierModal .modal-title').text('Edit supplier');

                // Fetch data from database
                const httpFetchUrl = $(this).attr('data-fetch-url');
                $.ajax({
                    url: httpFetchUrl,
                    success: function(response) {
                        // Do something with the response data
                        console.log(response);
                        if (response.status === 'success') {
                            const data = response.data;
                            $(document).find('#form-supplier input[name="code"]').val(data.code);
                            $(document).find('#form-supplier input[name="name"]').val(data.name);
                            $(document).find('#form-supplier input[name="phone"]').val(data.phone);
                            $(document).find('#form-supplier input[name="email"]').val(data.email);
                            $(document).find('#form-supplier input[name="bank"]').val(data.bank);
                            $(document).find('#form-supplier input[name="norek"]').val(data.norek);
                            $(document).find('#form-supplier input[name="address"]').val(data.address);
                        }
                    }
                });

                // Show modal form
                $('#supplierModal').modal('show');
            });

            // Handle ketika user meng-klik tombol hapus
            $(document).on('click', '.delete-supplier', function(event) {
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
                                    $('#supplierTable').DataTable().ajax.reload(null, false).draw();
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

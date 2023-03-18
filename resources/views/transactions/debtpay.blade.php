@extends('layouts.master')

@section('title')
    Debt Pay
@endsection

@section('breadcrumb')
    @parent
    <li class="breadcrumb-item">
        <a href="#">
            Transaction
        </a>
    </li>
    <li class="breadcrumb-item">
        <a href="{{ route('debt') }}">
            Debt
        </a>
    </li>
    <li class="breadcrumb-item active">
        <a href="{{ url()->current() }}">
            Debt Pay
        </a>
    </li>
@endsection

@section('content')
    <div class="card card-primary card-outline">
        <div class="card-header">
            <div class="card-title">Bambang</div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-12">
                    <div class="card-body table-responsive p-0" style="height: 200px;">
                        <table id="example2" class="table table-head-fixed text-nowrap table-sm">
                            <thead>
                                <tr>
                                    <th style="width: 150px;">Product Code</th>
                                    <th>Barcode</th>
                                    <th>Products Name</th>
                                    <th>Price</th>
                                    <th>Qty</th>
                                    <th>Unit</th>
                                    <th>Disc / Item</th>
                                    <th>Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>RV001</td>
                                    <td>0845621584654</td>
                                    <td>Kertas A4</td>
                                    <td>Rp 48.000</td>
                                    <td>1</td>
                                    <td>Pkg</td>
                                    <td>0%</td>
                                    <td>Rp 48.000</td>
                                </tr>
                                <tr>
                                    <td>RV006</td>
                                    <td>0845621584654</td>
                                    <td>Map Snail Biru</td>
                                    <td>Rp 3.000</td>
                                    <td>1</td>
                                    <td>Pcs</td>
                                    <td>0%</td>
                                    <td>Rp 15.000</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card card-primary card-outline">
        <div class="card-header">
            <div class="card-title">Payment History</div>
        </div>
        <div class="card-body" style="height: 200px">
            <div class="row">
                <div class="col-12">
                    <div class="card-body table-responsive p-0" style="height: 200px;">
                        <table id="example2" class="table table-head-fixed text-nowrap table-sm">
                            <thead>
                                <tr>
                                    <th>Payment Type</th>
                                    <th>Date</th>
                                    <th>Amount</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Cash</td>
                                    <td>20/02/2023 | 09:27</td>
                                    <td>Rp 30.000</td>
                                    <td class="badge bg-success">Paid</td>
                                </tr>
                                <tr>
                                    <td>Cash</td>
                                    <td>27/02/2023 | 14:42</td>
                                    <td>Rp 20.000</td>
                                    <td class="badge bg-success">Paid</td>
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
            <div class="card card-info">
                <div class="card-body">
                    <div class="mailbox-read-message">
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Perferendis, illo facere. Error unde
                            vero quisquam qui maiores voluptates dolore animi, quo nesciunt nobis vitae, eligendi aliquid,
                            blanditiis commodi ipsum harum?</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-5 col-sm-12 col-xs-12">
            <div class="card card-primary card-outline">
                <div class="card-body">
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label col-form-label-sm" readonly>Shopping Total</label>
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
                        <label class="col-sm-4 col-form-label col-form-label-sm" readonly>Amount</label>
                        <div class="col-sm-8">
                            <div class="input-group input-group-sm">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" style="width: 40px">Rp </span>
                                </div>
                                <input type="text" class="form-control text-bold" readonly value="50.000">
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label col-form-label-sm" readonly>Less</label>
                        <div class="col-sm-8">
                            <div class="input-group input-group-sm">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" style="width: 40px">Rp </span>
                                </div>
                                <input type="text" class="form-control text-bold" readonly value="13.000">
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label col-form-label-sm" readonly>Payment</label>
                        <div class="col-sm-8">
                            <div class="input-group input-group-sm">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" style="width: 40px">Rp </span>
                                </div>
                                <input type="text" class="form-control text-bold" placeholder="0">
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label col-form-label-sm" readonly>Residual</label>
                        <div class="col-sm-8">
                            <div class="input-group input-group-sm">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" style="width: 40px">Rp </span>
                                </div>
                                <input type="number" class="form-control bg-teal text-bold" readonly placeholder="0">
                            </div>
                        </div>
                    </div>
                    <table class="table text-center">
                        <tbody>
                            <tr>
                                <td><button type="button" class="btn btn-block btn-success btn-sm"><i class="fas fa-paper-plane"></i> Pay</button></td>
                                <td><button type="button" class="btn btn-block btn-danger btn-sm cancel"><i class="fas fa-trash-alt"></i> Cancel</button></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
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
                "autoWidth": true,
                "responsive": false,
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
    </script>
@endpush

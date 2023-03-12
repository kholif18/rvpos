@extends('layouts.master')

@section('title')
    Kas
@endsection

@section('breadcrumb')
    @parent
    <li class="active">Kas</li>
@endsection

@section('content')
    <div class="card card-primary card-outline">
        <div class="card-header">
            <h3 class="card-title">Kas</h3>
            <div class="card-tools">
                <button type="button" class="btn btn-success  btn-sm" data-toggle="modal" data-target="#modal-add-kas">
                    <i class="fas fa-plus-circle"></i> Add Kas
                </button>
            </div>
        </div>
        <!-- /.card-header -->
        {{-- Card Category --}}
        <div class="card-body">
            <div class="row">
                <div class="col-12">
                    <div class="card-body table-responsive p-0" style="height: 69vh;">
                        <table id="example2" class="table table-head-fixed text-nowrap table-striped table-sm">
                            <thead>
                                <tr>
                                    <th style="width: 100px">Code</th>
                                    <th>Date</th>
                                    <th>Type</th>
                                    <th>Amount</th>
                                    <th>Detail</th>
                                    <th>User</th>
                                    <th style="width: 130px">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>KS0001</td>
                                    <td>21/02/2023 | 07:12</td>
                                    <td class="badge badge-success" style="padding: 8px; font-size: 10pt">Kas Masuk</td>
                                    <td>Rp. 100.000</td>
                                    <td>Modal Kasir</td>
                                    <td>kholif18</td>
                                    <td>
                                        <button style="margin-left: 20px" type="button"
                                            class="btn btn-danger btn-sm delete"><i class="fas fa-trash-alt"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>KS0002</td>
                                    <td>21/02/2023 | 10:32</td>
                                    <td class="badge badge-danger" style="padding: 8px; font-size: 10pt">Kas Keluar</td>
                                    <td>Rp. 20.000</td>
                                    <td>Beli Galon</td>
                                    <td>kholif18</td>
                                    <td>
                                        <button style="margin-left: 20px" type="button"
                                            class="btn btn-danger btn-sm delete"><i class="fas fa-trash-alt"></i></button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Kas -->
    @include('kas.form-kas')
@endsection

@push('scripts')
    @include('kas.script')
@endpush

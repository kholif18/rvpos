@extends('layouts.master')

@section('title')
    Debt
@endsection

@section('breadcrumb')
    @parent
    <li class="active">Debt</li>
@endsection

@section('content')
    {{-- Tabel Hutang Customer --}}
    <div class="card card-warning">
        <div class="card-header">
            <h3 class="card-title">Customers</h3>
            <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
                </button>
            </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <div class="row">
                <div class="col-12">
                    <div class="card-body table-responsive p-0" style="height: 77vh;">
                        <table class="table table-head-fixed text-nowrap">
                            <thead>
                                <tr>
                                    <th style="width: 15px">Invoice</th>
                                    <th>Customers Name</th>
                                    <th>Tgl Piutang</th>
                                    <th>Jatuh Tempo</th>
                                    <th>Jml. Piutang</th>
                                    <th>Jml. Bayar</th>
                                    <th>sisa</th>
                                    <th>status</th>
                                    <th style="width: 300px">Option</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>2009293</td>
                                    <td>Bambang</td>
                                    <td>12-02-2023</td>
                                    <td>28-02-2023</td>
                                    <td>Rp 250.000</td>
                                    <td>Rp 200.000</td>
                                    <td>Rp 50.000</td>
                                    <td>Hutang</td>
                                    <td class="bg-danger text-bold">Rp 50.000</td>
                                </tr>
                                <tr>
                                    <td>CS003</td>
                                    <td>Bu Win</td>
                                    <td>082233344556</td>
                                    <td>example@mail.com</td>
                                    <td>Gondang, Nganjuk</td>
                                    <td>Pelanggan</td>
                                    <td class="bg-danger text-bold">Rp 100.000</td>
                                </tr>
                                <tr>
                                    <td>CS004</td>
                                    <td>Neneng</td>
                                    <td>082233344556</td>
                                    <td>example@mail.com</td>
                                    <td>Gondang, Nganjuk</td>
                                    <td>Pelanggan</td>
                                    <td class="bg-danger text-bold">Rp 100.000</td>
                                </tr>
                                <tr>
                                    <td>CS005</td>
                                    <td>Alexandro</td>
                                    <td>082233344556</td>
                                    <td>example@mail.com</td>
                                    <td>Gondang, Nganjuk</td>
                                    <td>Pelanggan</td>
                                    <td class="bg-danger text-bold">Rp 100.000</td>
                                </tr>
                                <tr>
                                    <td>CS001</td>
                                    <td>Bambang</td>
                                    <td>082233344556</td>
                                    <td>example@mail.com</td>
                                    <td>Gondang, Nganjuk</td>
                                    <td>Pelanggan</td>
                                    <td class="bg-danger text-bold">Rp 100.000</td>
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
@extends('layouts.master')

@section('title')
    POS
@endsection

@section('breadcrumb')
    @parent
    <li class="active">POS</li>
@endsection

@section('content')
    <div class="card card-warning bg-warning">
        <div class="card-header">
            <h3 style="text-align: right">Invoice <b id="invoice">170220230001</b></h3>
        </div>
        <div class="card-body card-warning">
            <div class="row">
                <div class="col-md-9 col-sm-12 col-xs-12">
                    <h1 class="text-bold">Total (Rp)</h1>
                </div>
                <div class="col-md-3 col-sm-12 col-xs-12">
                    <h1 style="text-align: right" class="text-bold"> 0,00</h1>
                </div>
            </div>
        </div>
    </div>
@endsection
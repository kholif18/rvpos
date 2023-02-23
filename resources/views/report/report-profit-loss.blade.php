{{-- master template --}}
@extends('layouts.master')

@section('title')
    Profit & Loss Report
@endsection

@section('breadcrumb')
    @parent
    <li class="active">Reports / Profit & Loss</li>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-6">
            <div class="card card-indigo">
                <div class="card-header">
                    <h3 class="card-title">Profit & Loss Report</h3>
                </div>
                <div class="row">
                    <div class="card-body">
                        <p>Tentukan tanggal awal dan akhir untuk export laporan Laba dan rugi!</p>
                        <div class="form-group">
                            <label>Date range button:</label>
                            <div class="input-group">
                                <button type="button" class="btn btn-default float-right" id="daterange-btn">
                                    <i class="far fa-calendar-alt"></i> Date range picker
                                    <i class="fas fa-caret-down"></i>
                                </button>
                            </div>
                        </div>
                        <button class="btn btn-info"><i class="fas fa-file-pdf"></i> Export pdf</button>
                        <button class="btn btn-success"><i class="fas fa-print"></i> Print</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6"></div>
    </div>
@endsection


@push('scripts')
<script>
    $(function () {
        $('.select2').select2()

        //Initialize Select2 Elements
        $('.select2bs4').select2({
        theme: 'bootstrap4'
        })

        $('#daterange-btn').daterangepicker(
        {
            ranges   : {
            'Today'       : [moment(), moment()],
            'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
            'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
            'Last 30 Days': [moment().subtract(29, 'days'), moment()],
            'This Month'  : [moment().startOf('month'), moment().endOf('month')],
            'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
            },
            startDate: moment().subtract(29, 'days'),
            endDate  : moment()
        },
        function (start, end) {
            $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
        }
    )
})
</script>
@endpush
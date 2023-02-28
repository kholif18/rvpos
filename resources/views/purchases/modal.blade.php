{{-- modal view --}}

<div class="modal fade" id="modal-view">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Praktika</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <table id="example2" class="table table-head-fixed text-nowrap table-sm">
                    <thead>
                        <tr>
                            <th style="width: 100px;">Product Code</th>
                            <th>Barcode</th>
                            <th>Products Name</th>
                            <th>Cost Price</th>
                            <th>Qty</th>
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
                            <td>Rp 48.000</td>
                        </tr>
                        <tr>
                            <td>RV006</td>
                            <td>0845621584654</td>
                            <td>Map Snail Biru</td>
                            <td>Rp 3.000</td>
                            <td>5</td>
                            <td>Rp 15.000</td>
                        </tr>
                    </tbody>
                </table>
                <div class="row">
                    <div class="col-8"></div>
                    <div class="col-4">
                        <div class="table-responsive">
                            <table class="table table-head-fixed text-nowrap table-sm">
                                <tr>
                                    <th style="width:60%">Payment Method</th>
                                    <td>Cash</td>
                                </tr>
                                <tr>
                                    <th>Total</th>
                                    <td>Rp 63.000</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->


{{-- modal edit --}}
<div class="modal fade" id="modal-edit">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Praktika</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <table id="example2" class="table table-head-fixed text-nowrap table-sm">
                    <thead>
                        <tr>
                            <th style="width: 100px;">Product Code</th>
                            <th>Barcode</th>
                            <th>Products Name</th>
                            <th>Cost Price</th>
                            <th>Qty</th>
                            <th>Total</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>RV001</td>
                            <td>0845621584654</td>
                            <td>Kertas A4</td>
                            <td>Rp 48.000</td>
                            <td>1</td>
                            <td>Rp 48.000</td>
                            <td><button type="button" class="btn btn-danger btn-sm delete"><i
                                        class="fas fa-trash"></i></button></td>
                        </tr>
                        <tr>
                            <td>RV006</td>
                            <td>0845621584654</td>
                            <td>Map Snail Biru</td>
                            <td>Rp 3.000</td>
                            <td>5</td>
                            <td>Rp 15.000</td>
                            <td><button type="button" class="btn btn-danger btn-sm delete"><i
                                        class="fas fa-trash"></i></button></td>
                        </tr>
                    </tbody>
                </table>
                <div class="row">
                    <div class="col-8"></div>
                    <div class="col-4">
                        <div class="table-responsive">
                            <table class="table table-head-fixed text-nowrap table-sm">
                                <tr>
                                    <th style="width:60%">Payment Method</th>
                                    <td>Cash</td>
                                </tr>
                                <tr>
                                    <th>Total</th>
                                    <td>Rp 63.000</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

{{-- modal view --}}

<div class="modal fade" id="modal-add">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add Stock Out</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label class="col-form-label col-form-label-sm text-sm-right">Product Name</label>
                    <div class="input-group input-group-sm">
                        <input name="productname" type="text" class="form-control" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-form-label col-form-label-sm text-sm-right">Qty</label>
                    <div class="input-group input-group-sm">
                        <input name="qty" type="text" class="form-control" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-form-label col-form-label-sm text-sm-right">Detail</label>
                    <div class="input-group input-group-sm">
                        <input name="detail" type="text" class="form-control" required>
                    </div>
                </div>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-success btn-sm"><i class="fas fa-paper-plane"></i>
                    Save</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->


{{-- modal edit --}}
<div class="modal fade" id="modal-edit">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Edit Stock Out</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label class="col-form-label col-form-label-sm text-sm-right">Product Name</label>
                    <div class="input-group input-group-sm">
                        <input name="productname" type="text" class="form-control" value="Kertas A4 70 Gsm" readonly>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-form-label col-form-label-sm text-sm-right">Qty</label>
                    <div class="input-group input-group-sm">
                        <input name="qty" type="text" class="form-control" value="1" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-form-label col-form-label-sm text-sm-right">Detail</label>
                    <div class="input-group input-group-sm">
                        <input name="detail" type="text" class="form-control" value="Sobek" required>
                    </div>
                </div>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-success btn-sm"><i class="fas fa-paper-plane"></i>
                    Save</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

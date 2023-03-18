<!-- Modal Unit -->
<div class="modal fade" id="modal-form-unit">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <form id="form-unit" action="#" class="form-horizontal" method="post">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="modal-header">
                    <h4 id="form-unit-title" class="modal-title">Add Unit</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label class="col-form-label col-form-label-sm text-sm-right">Unit Name</label>
                        <div class="input-group input-group-sm">
                            <input name="name" type="text" class="form-control" required>
                        </div>
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">
                        Close
                    </button>
                    <button type="submit" class="btn btn-success btn-sm">
                        <i class="fas fa-paper-plane"></i>
                        Save
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

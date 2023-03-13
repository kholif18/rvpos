{{-- Modal Category --}}
<div class="modal fade" id="modal-add-kas">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <form action="{{ url('/kas/add') }}" class="form-horizontal" method="post">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="modal-header">
                    <h4 class="modal-title">Add Kas</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label class="col-form-label col-form-label-sm text-sm-right">Code</label>
                        <div class="input-group input-group-sm">
                            <input name="code" type="text" class="form-control" value="KS0003" readonly>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-form-label col-form-label-sm text-sm-right">Type</label>
                        <div class="input-group input-group-sm">
                            <select name="type" class="form-control select2" required>
                                <option value="KasIn">Kas In</option>
                                <option value="KasOut">Kas out</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-form-label col-form-label-sm text-sm-right">Amount</label>
                        <div class="input-group input-group-sm">
                            <input name="amount" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-form-label col-form-label-sm text-sm-right">Detail</label>
                        <div class="input-group input-group-sm">
                            <input name="detail" type="text" class="form-control">
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
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

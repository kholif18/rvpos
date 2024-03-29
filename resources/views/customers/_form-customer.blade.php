    {{-- Modal --}}
    <div class="modal fade" id="customerModal">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <form id="form-customer" action="{{ route('customer.store') }}" class="form-horizontal" method="post">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="modal-header">
                        <h4 class="modal-title"></h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group row">
                            <label for="" class="col-sm-3 col-form-label col-form-label-sm text-right">Code</label>
                            <div class="col-sm-9">
                                <input type="text" id="code" name="code" class="form-control form-control-sm">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-sm-3 col-form-label col-form-label-sm text-right">Customer
                                Name *</label>
                            <div class="col-sm-9">
                                <input type="text" id="name" name="name" class="form-control form-control-sm" value="{{ old('name') }}" placeholder="Nama Customer" autofocus>
                                <span class="text-danger text-sm error-text"></span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label col-form-label-sm text-right">Telp *</label>
                            <div class="col-sm-9">
                                <input type="text" id="telp" name="telp" class="form-control form-control-sm" value="{{ old('telp') }}" placeholder="081234567899">
                                <span class="text-danger text-sm error-text"></span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-sm-3 col-form-label col-form-label-sm text-right">Email</label>
                            <div class="col-sm-9">
                                <input type="text" name="email" class="form-control form-control-sm" placeholder="email@mail.com">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-sm-3 col-form-label col-form-label-sm text-right">Address *</label>
                            <div class="col-sm-9">
                                <input type="text" id="address" name="address" class="form-control form-control-sm" placeholder="Ngluyu, Nganjuk">
                                <span class="text-danger text-sm error-text"></span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-sm-3 col-form-label col-form-label-sm text-right">Status *</label>
                            <div class="col-sm-9">
                                <input type="text" name="status" class="form-control form-control-sm">
                                <span class="text-danger text-sm error-text"></span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-sm-3 col-form-label col-form-label-sm text-right">Member
                                Discount *</label>
                            <div class="col-sm-9">
                                <input type="text" name="memdisc" class="form-control form-control-sm">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-sm-3 col-form-label col-form-label-sm text-right">Note</label>
                            <div class="col-sm-9">
                                <textarea class="form-control form-control-sm" name="note" rows="3"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="reset" class="btn btn-danger btn-sm" data-dismiss="modal"><i class="fas fa-trash"></i> Cancel</button>
                        <button type="submit" class="btn btn-success btn-sm"><i class="fas fa-paper-plane"></i>
                            Save</button>
                    </div>
                </form>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->

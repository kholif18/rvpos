    {{-- Modal --}}
    <div class="modal fade" id="modal-add">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <form action="{{ url('/products/add-customer') }}" class="form-horizontal" method="post">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="modal-header">
                        <h4 class="modal-title">Add Customer</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group row">
                            <label for="" class="col-sm-3 col-form-label col-form-label-sm text-right">Code</label>
                            <div class="col-sm-9">
                                <input type="text" name="code" class="form-control form-control-sm" readonly value="CS007">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-sm-3 col-form-label col-form-label-sm text-right">Customer
                                Name</label>
                            <div class="col-sm-9">
                                <input type="text" name="name" autofocus class="form-control form-control-sm">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label col-form-label-sm text-right">Telp</label>
                            <div class="col-sm-9">
                                <div class="input-group input-group-sm">
                                    <input type="text" name="telp" class="form-control text-bold">
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-sm-3 col-form-label col-form-label-sm text-right">Email</label>
                            <div class="col-sm-9">
                                <input type="email" name="email" class="form-control form-control-sm">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-sm-3 col-form-label col-form-label-sm text-right">Address</label>
                            <div class="col-sm-9">
                                <input type="text" name="address" class="form-control form-control-sm">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-sm-3 col-form-label col-form-label-sm text-right">Status</label>
                            <div class="col-sm-9">
                                <input type="text" name="status" class="form-control form-control-sm">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-sm-3 col-form-label col-form-label-sm text-right">Member
                                Discount</label>
                            <div class="col-sm-9">
                                <input type="text" name="memdisc" class="form-control form-control-sm">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-sm-3 col-form-label col-form-label-sm text-right">Note</label>
                            <div class="col-sm-9">
                                <textarea class="form-control form-control-sm" name="note" rows="3"></textarea>
                                {{-- <input type="text" name="note" class="form-control form-control-sm"> --}}
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
    {{-- modal update --}}
    <div class="modal fade" id="modal-edit">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Edit Customer</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label col-form-label-sm text-right">Code</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control form-control-sm" readonly placeholder="CS001">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label col-form-label-sm text-right">Customer
                            Name</label>
                        <div class="col-sm-9">
                            <input type="text" autofocus class="form-control form-control-sm" value="Umum">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label col-form-label-sm text-right">Telp</label>
                        <div class="col-sm-9">
                            <div class="input-group input-group-sm">
                                <input type="text" class="form-control text-bold" min="0" value="Umum">
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label col-form-label-sm text-right">Email</label>
                        <div class="col-sm-9">
                            <input type="email" class="form-control form-control-sm" value="Umum">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label col-form-label-sm text-right">Address</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control form-control-sm" value="Umum">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label col-form-label-sm text-right">Status</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control form-control-sm" value="Umum">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label col-form-label-sm text-right">Member
                            Discount</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control form-control-sm" value="0">
                        </div>
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="reset" class="btn btn-danger btn-sm" data-dismiss="modal"><i class="fas fa-trash"></i> Cancel</button>
                    <button type="submit" class="btn btn-success btn-sm"><i class="fas fa-paper-plane"></i>
                        Save</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->

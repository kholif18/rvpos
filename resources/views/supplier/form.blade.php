    {{-- modal update --}}
    <div class="modal fade" id="supplierModal">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <form id="form-supplier" action="{{ route('supplier.store') }}" class="form-horizontal" method="post">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="modal-header">
                        <h4 class="modal-title"></h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group row">
                            <label for="code" class="col-sm-3 col-form-label col-form-label-sm text-right">Code</label>
                            <div class="col-sm-9">
                                <input type="text" name="code" class="form-control form-control-sm " placeholder="SP001" value="{{ old('code') }}" autofocus>
                                <span class="text-danger text-sm error-text code_error"></span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-sm-3 col-form-label col-form-label-sm text-right">Supplier
                                Name</label>
                            <div class="col-sm-9">
                                <input type="text" name="name" class="form-control form-control-sm" value="{{ old('name') }}"placeholder="Nama Supplier">
                                <span class="text-danger text-sm error-text name_error"></span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="telp" class="col-sm-3 col-form-label col-form-label-sm text-right">Telp</label>
                            <div class="col-sm-9">
                                <div class="input-group input-group-sm">
                                    <input type="text" name="phone" class="form-control text-bold" placeholder="081234567899">
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-sm-3 col-form-label col-form-label-sm text-right">Email</label>
                            <div class="col-sm-9">
                                <input type="email" name="email" class="form-control form-control-sm" placeholder="email@mail.com">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-sm-3 col-form-label col-form-label-sm text-right">Bank</label>
                            <div class="col-sm-9">
                                <input type="text" name="bank" class="form-control form-control-sm" placeholder="BRI">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-sm-3 col-form-label col-form-label-sm text-right">No.
                                Rek</label>
                            <div class="col-sm-9">
                                <input type="text" name="norek" class="form-control form-control-sm" placeholder="0111xxxxxxxxxxx">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-sm-3 col-form-label col-form-label-sm text-right">Address</label>
                            <div class="col-sm-9">
                                <input type="text" name="address" class="form-control form-control-sm" placeholder="Ngluyu, Nganjuk">
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

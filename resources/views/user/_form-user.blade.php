{{-- Modal --}}
<div class="modal fade" id="modal-add">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <form action="{{ url('/user/add-user') }}" class="form-horizontal" method="post">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="modal-header">
                    <h4 class="modal-title">Add User</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label class="col-form-label col-form-label-sm text-sm-right">Username</label>
                        <div class="input-group input-group-sm">
                            <input type="text" name="username" class="form-control">
                        </div>
                        <label class="col-form-label col-form-label-sm text-sm-right">Name</label>
                        <div class="input-group input-group-sm">
                            <input type="text" name="name" class="form-control">
                        </div>
                        <label class="col-form-label col-form-label-sm text-sm-right">Email</label>
                        <div class="input-group input-group-sm">
                            <input type="email" name="email" class="form-control">
                        </div>
                        <label class="col-form-label col-form-label-sm text-sm-right">Level</label>
                        <div class="input-group input-group-sm">
                            <select name="level" class="form-control select2" required>
                                <option value="admin">Admin</option>
                                <option value="kasir">Kasir</option>
                            </select>
                        </div>
                        <label class="col-form-label col-form-label-sm text-sm-right">No. Telp</label>
                        <div class="input-group input-group-sm">
                            <input type="text" name="telp" class="form-control">
                        </div>
                        <label class="col-form-label col-form-label-sm text-sm-right">Password</label>
                        <div class="input-group input-group-sm">
                            <input type="password" name="pass" class="form-control">
                        </div>
                        <label class="col-form-label col-form-label-sm text-sm-right">Confirm Password</label>
                        <div class="input-group input-group-sm">
                            <input type="password" name="confpass" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="reset" class="btn btn-default btn-sm" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-success btn-sm"><i class="fas fa-paper-plane"></i> Save</button>
                </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
{{-- Modal Update --}}
<div class="modal fade" id="modal-edit">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Edit User</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label class="col-form-label col-form-label-sm text-sm-right">Username</label>
                    <div class="input-group input-group-sm">
                        <input type="text" class="form-control" readonly value="kholif18">
                    </div>
                    <label class="col-form-label col-form-label-sm text-sm-right">Name</label>
                    <div class="input-group input-group-sm">
                        <input type="text" class="form-control" value="Kholif">
                    </div>
                    <label class="col-form-label col-form-label-sm text-sm-right">Email</label>
                    <div class="input-group input-group-sm">
                        <input type="text" class="form-control" value="rahmadnur.kholifatur@gmail.com">
                    </div>
                    <label class="col-form-label col-form-label-sm text-sm-right">Level</label>
                    <div class="input-group input-group-sm">
                        <select name="jenis" class="form-control select2" required>
                            <option value="Produk">Admin</option>
                            <option value="Servis" selected>Kasir</option>
                        </select>
                    </div>
                    <label class="col-form-label col-form-label-sm text-sm-right">No. Telp</label>
                    <div class="input-group input-group-sm">
                        <input type="text" class="form-control" value="0822-3337-7661">
                    </div>
                    <label class="col-form-label col-form-label-sm text-sm-right">New Password</label>
                    <div class="input-group input-group-sm">
                        <input type="password" class="form-control">
                    </div>
                    <label class="col-form-label col-form-label-sm text-sm-right">Confirm New Password</label>
                    <div class="input-group input-group-sm">
                        <input type="password" class="form-control">
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
{{-- Modal Update --}}
<div class="modal fade" id="modal-edit-admin">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Edit User</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label class="col-form-label col-form-label-sm text-sm-right">Username</label>
                    <div class="input-group input-group-sm">
                        <input type="text" class="form-control" readonly value="admin">
                    </div>
                    <label class="col-form-label col-form-label-sm text-sm-right">Name</label>
                    <div class="input-group input-group-sm">
                        <input type="text" class="form-control" readonly value="Administrator">
                    </div>
                    <label class="col-form-label col-form-label-sm text-sm-right">Email</label>
                    <div class="input-group input-group-sm">
                        <input type="email" class="form-control" readonly value="admin@gmail.com">
                    </div>
                    <label class="col-form-label col-form-label-sm text-sm-right">New Password</label>
                    <div class="input-group input-group-sm">
                        <input type="password" class="form-control">
                    </div>
                    <label class="col-form-label col-form-label-sm text-sm-right">Confirm New Password</label>
                    <div class="input-group input-group-sm">
                        <input type="password" class="form-control">
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

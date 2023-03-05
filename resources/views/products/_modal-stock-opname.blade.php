{{-- modal edit --}}
<div class="modal fade" id="modal-add">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <form action="{{ route('stockopname.add') }}" class="form-horizontal" method="post">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="modal-header">
                    <h4 class="modal-title">Add Product</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label class="col-form-label col-form-label-sm text-sm-right">Product Name</label>
                        <div class="input-group input-group-sm">
                            <select name="name" class="form-control select2" required>
                                @foreach ($products as $product)
                                    <option value="{{ $product->id }}">{{ $product->name }}</option>
                                @endforeach
                            </select>
                            {{-- <input name="name" type="text" class="form-control"> --}}
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-form-label col-form-label-sm text-sm-right">Stock</label>
                        <div class="input-group input-group-sm">
                            {{-- <select name="quantity" class="form-control select2" required> --}}
                            <input name="quantity" type="text" class="form-control" value="{{ $product->quantity }}" readonly>
                            {{-- @foreach ($products as $product)
                                    <option value="{{ $product->id }}">{{ $product->quantity }}</option>
                                    @endforeach --}}
                            {{-- </select> --}}
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-form-label col-form-label-sm text-sm-right">Real Stock</label>
                        <div class="input-group input-group-sm">
                            <input name="real_stock" type="text" class="form-control" required>
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
                    <button type="reset" class="btn btn-default btn-sm" data-dismiss="modal">Close</button>
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
{{-- modal edit --}}
<div class="modal fade" id="modal-edit">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Edit Product</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label class="col-form-label col-form-label-sm text-sm-right">Product Name</label>
                    <div class="input-group input-group-sm">
                        <input name="pname" type="text" class="form-control" value="Buku HC Folio isi 100" readonly>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-form-label col-form-label-sm text-sm-right">Stock</label>
                    <div class="input-group input-group-sm">
                        <input name="qty" type="text" class="form-control" value="5" readonly>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-form-label col-form-label-sm text-sm-right">Real Stock</label>
                    <div class="input-group input-group-sm">
                        <input name="detail" type="text" class="form-control" value="3" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-form-label col-form-label-sm text-sm-right">Detail</label>
                    <div class="input-group input-group-sm">
                        <input name="detail" type="text" class="form-control" value="Dibuat sendiri">
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

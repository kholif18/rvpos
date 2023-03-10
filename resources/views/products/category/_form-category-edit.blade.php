{{-- menu edit category  --}}
<div class="modal fade" id="category-edit">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <form action="{{ route('category.edit', $category->id) }}" class="form-horizontal" method="post">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="modal-header">
                    <h4 class="modal-title">Edit Category</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label class="col-form-label col-form-label-sm text-sm-right">Category Name</label>
                        <div class="input-group input-group-sm">
                            <input type="text" name="categoryadd" class="form-control" value="{{ $category->name }}">
                        </div>
                        <label class="col-form-label col-form-label-sm text-sm-right">Prefix</label>
                        <div class="input-group input-group-sm">
                            <input type="text" name="prefix" class="form-control" value="{{ $category->prefix }}">
                        </div>
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="reset" class="btn btn-default btn-sm" data-dismiss="modal">Close</button>
                    <button class="btn btn-success btn-sm" onclick="update({{ $category->id }})"><i class="fas fa-paper-plane"></i>
                        Save</button>
                </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

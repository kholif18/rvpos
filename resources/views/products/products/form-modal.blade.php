<div class="modal fade" id="modal-form-product">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form id="form-product" action="{{ route('products.products.ajax.store') }}" class="form-horizontal" method="post">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="modal-header">
                    <h4 class="modal-title"></h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label col-form-label-sm text-right">Product
                            Code</label>
                        <div class="col-sm-9">
                            <input type="text" id="code" name="code" class="form-control form-control-sm" value="{{ old('code') ?? $product->number }}">
                            {{-- <input type="text" class="form-control" id="number" name="number" value="{{ old('number') ?? $product->number }}" readonly> --}}
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label col-form-label-sm text-right">Barcode</label>
                        <div class="col-sm-9">
                            <input type="text" name="barcode" autofocus class="form-control form-control-sm">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label col-form-label-sm text-right">Product Name</label>
                        <div class="col-sm-9">
                            <div class="input-group input-group-sm">
                                <input type="text" name="name" class="form-control text-bold" value="{{ old('name') }}">
                                <span class="text-danger text-sm error-text name_error"></span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label col-form-label-sm text-right">Category</label>
                        <div class="col-sm-9">
                            <div class="input-group input-group-sm">
                                <select name="category_id" class="form-control" required>
                                    @foreach ($categories as $category)
                                        @if (old('category_id') == $category->id)
                                            <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                                        @else
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label col-form-label-sm text-right">Unit</label>
                        <div class="col-sm-9">
                            <div class="input-group input-group-sm">
                                <select name="unit_id" class="form-control" required>
                                    @foreach ($units as $unit)
                                        @if (old('unit_id') == $unit->id)
                                            <option value="{{ $unit->id }}" selected>{{ $unit->name }}</option>
                                        @else
                                            <option value="{{ $unit->id }}">{{ $unit->name }}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label col-form-label-sm text-right">Cost
                            Price</label>
                        <div class="col-sm-9">
                            <div class="input-group input-group-sm">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Rp </span>
                                </div>
                                <input type="text" name="purchase_price" class="form-control form-control-sm" value="{{ old('purchase_price') }}">
                            </div>
                            <span class="text-danger text-sm error-text purchase_price_error"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label col-form-label-sm text-right">Markup</label>
                        <div class="col-sm-9">
                            <div class="input-group input-group-sm">
                                <input type="text" name="markup" class="form-control form-control-sm" value="{{ old('markup') }}">
                                <div class="input-group-append">
                                    <span class="input-group-text">%</span>
                                </div>
                            </div>
                            <span class="text-danger text-sm error-text markup_error"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label col-form-label-sm text-right">Sale
                            Price</label>
                        <div class="col-sm-9">
                            <div class="input-group input-group-sm">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Rp </span>
                                </div>
                                <input type="text" name="sale_price" class="form-control form-control-sm" value="{{ old('sale_price') }}">
                            </div>
                            <span class="text-danger text-sm error-text sale_price_error"></span>
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

<div class="row">
    <div class="col-sm-6">
        <a href="#" class="btn btn-info btn-sm btn-block edit-supplier" data-url="{{ route('supplier.save', ['supplier' => $supplier->id]) }}"
            data-fetch-url="{{ route('supplier.detail', ['supplier' => $supplier->id]) }}">
            <i class="fas fa-edit"></i> Edit
        </a>
    </div>
    <div class="col-sm-6">
        <a href="#" class="btn btn-danger btn-sm btn-block delete-supplier" data-url="{{ route('supplier.delete', ['supplier' => $supplier->id]) }}" data-token="{{ csrf_token() }}">
            <i class="fas fa-trash-alt"></i> Delete
        </a>
    </div>
</div>

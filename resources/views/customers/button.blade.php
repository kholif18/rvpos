<div class="row">
    <div class="col-sm-6">
        <a href="#" class="btn btn-info btn-sm btn-block edit-customer" data-url="{{ route('customer.save', ['customer' => $customers->id]) }}"
            data-fetch-url="{{ route('customer.detail', ['customer' => $customers->id]) }}">
            <i class="fas fa-edit"></i>
        </a>
    </div>
    <div class="col-sm-6">
        <a href="#" class="btn btn-danger btn-sm btn-block delete-customer" data-url="{{ route('customer.delete', ['customer' => $customers->id]) }}" data-token="{{ csrf_token() }}">
            <i class="fas fa-trash-alt"></i>
        </a>
    </div>
</div>

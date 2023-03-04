<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class StockOpname extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'stock_opnames';

    protected $fillable = [
        'name',
        'quantity',
        'real_stock',
        'difference',
        'value_price',
        'detail',
    ];

    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class, 'barcode', 'quantity', 'sale_price');
    }
}

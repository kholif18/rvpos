<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Product class
 * 
 * @property int $id
 * @property int $unit_id
 * @property int $category_id
 * @property string $name
 * @property string $code
 * @property string $barcode
 * @property string $quantity
 * @property float $purchase_price
 * @property float $sale_price
 * @property float $markup
 * 
 * @property Category $category
 * @property Unit $unit
 */
class Product extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'products';

    protected $fillable = [
        'category_id',
        'unit_id',
        'name',
        'code',
        'barcode',
        'quantity',
        'purchase_price',
        'sale_price',
        'markup',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function unit()
    {
        return $this->belongsTo(Unit::class);
    }
}

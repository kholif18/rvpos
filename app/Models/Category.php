<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Category class
 * 
 * @property int $id
 * @property string $name
 * @property string $prefix
 */
class Category extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'categories';

    protected $fillable = [
        'name',
        'prefix',
    ];

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}

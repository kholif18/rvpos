<?php

namespace App\Http\Controllers\Products\Products;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\Unit;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index()
    {
        return view('products/products', [
            'products' => Product::with(['category', 'unit'])->get(),
        ]);
    }
}

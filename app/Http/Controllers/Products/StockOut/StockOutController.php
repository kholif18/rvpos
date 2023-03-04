<?php

namespace App\Http\Controllers\Products\StockOut;

use App\Models\Unit;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\StockOut;

class StockOutController extends Controller
{
    public function index()
    {
        return view('products/stockout', [
            'stockouts' => StockOut::get(),
            'categories' => Category::get(),
            'units' => Unit::get(),
            'products' => Product::get(),
        ]);
    }
}

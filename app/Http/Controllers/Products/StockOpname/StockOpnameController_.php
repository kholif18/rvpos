<?php

namespace App\Http\Controllers\Products\StockOpname;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\StockOpname;
use Illuminate\Http\Request;

class StockOpnameController extends Controller
{
    public function index()
    {
        return view('products/stock-opname', [
            'stockopnames' => StockOpname::get(),
            'products' => Product::get(),
        ]);
    }
}

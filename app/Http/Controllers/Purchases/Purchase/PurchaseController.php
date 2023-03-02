<?php

namespace App\Http\Controllers\Purchases\Purchase;

use App\Models\Unit;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PurchaseController extends Controller
{
    public function index()
    {
        return view('purchases/purchase', [
            'products' => Product::get(),
            'categories' => Category::get(),
            'units' => Unit::get(),
        ]);
    }
}

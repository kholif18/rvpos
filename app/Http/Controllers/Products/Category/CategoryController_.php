<?php

namespace App\Http\Controllers\Products\Category;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Unit;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        return view('products.category-unit', [
            'categories' => Category::get(),
            'units' => Unit::get(),
        ]);
    }
}

<?php

namespace App\Http\Controllers\Products\Category;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        return view('products/category-unit');
    }
}

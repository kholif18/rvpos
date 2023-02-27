<?php

namespace App\Http\Controllers\Products\Products;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index()
    {
        return view('products/products');
    }
}

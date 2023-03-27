<?php

namespace App\Http\Controllers\Products\Products;

use App\Models\Unit;
use App\Models\Product;
use App\Models\Category;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    /**
     * Menampilkan daftar customer
     *
     * @return View
     */
    public function index(): View
    {
        $data = [
            'products' => Product::with('category', 'unit')->get(),
            'categories' => Category::get(),
            'units' => Unit::get()
        ];

        return view('products.products.products', $data);
    }
}

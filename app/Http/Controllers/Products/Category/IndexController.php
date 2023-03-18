<?php

namespace App\Http\Controllers\Products\Category;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\View\View;

class IndexController extends Controller
{
    /**
     * Menampilkan list kategori produk
     *
     * @param Request $request
     *
     * @return View
     */
    public function get(Request $request): View
    {
        $categories = Category::get();

        return view('products.category.index', [
            'categories' => $categories,
        ]);
    }
}

<?php

namespace App\Http\Controllers\Products\Category;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Unit;
use Illuminate\View\View;

class IndexController extends Controller
{
    /**
     * Menampilkan daftar kategori dan unit produk
     *
     * @return View
     */
    public function index(): View
    {
        $data = [
            'categories' => Category::get(),
            'units' => Unit::get(),
        ];

        return view('products.category.index', $data);
    }
}

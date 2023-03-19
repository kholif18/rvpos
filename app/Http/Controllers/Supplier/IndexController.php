<?php

namespace App\Http\Controllers\Supplier;

use App\Http\Controllers\Controller;
use App\Models\Supplier;
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
            'suppliers' => Supplier::get(),
        ];

        return view('supplier.suppliers', $data);
    }
}

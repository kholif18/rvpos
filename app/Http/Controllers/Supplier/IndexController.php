<?php

namespace App\Http\Controllers\Supplier;

use App\Models\Supplier;
use Illuminate\View\View;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;

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

    public function loadDataTable()
    {
        $suppliers = Supplier::query();

        return DataTables::of($suppliers)
            ->addColumn('action', function ($supplier) {
                return view('supplier.button')->with('supplier', $supplier);
            })
            ->make(true);
    }
}

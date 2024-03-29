<?php

namespace App\Http\Controllers\Supplier;

use App\Models\Supplier;
use Illuminate\View\View;
use Illuminate\Support\Facades\DB;
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

    public function supplierCode()
    {

        $check = DB::table('suppliers')->count();
        if ($check == 0) {
            $number = 1;
        } else {
            $lastNumber = Supplier::all()->last();
            $number = (int)substr($lastNumber->code, -3) + 1;
        }
        $noCode = 'SP' . sprintf('%03d', $number);

        return response()->json(['noCode' => $noCode]);
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

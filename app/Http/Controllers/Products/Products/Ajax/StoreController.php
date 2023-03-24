<?php

namespace App\Http\Controllers\Products\Products\Ajax;

use App\Models\Unit;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;

class StoreController extends Controller
{
    public function create()
    {
        // ambil semua kategori untuk menampilkan pada form
        $categories = Category::all();
        // ambil semua unit untuk menampilkan pada form
        $categories = Unit::all();
        // buat objek product baru dengan nilai default
        $product = new Product;
        // kirim objek product dan kategori ke view
        return view('products.create', compact('product', 'categories'));
    }

    public function store(Request $request): JsonResponse
    {

        $code = $request->input('code');
        $barcode = $request->input('barcode');
        $name = $request->input('name');
        $category_id = $request->input('category_id');
        $unit_id = $request->input('unit_id');
        $purchase_price = $request->input('purchase_price');
        $markup = $request->input('markup');
        $sale_price = $request->input('sale_price');

        $product = new Product;
        $product->code = $code;
        $product->barcode = $barcode;
        $product->name = $name;
        $product->category_id = $category_id;
        $product->unit_id = $unit_id;
        $product->purchase_price = $purchase_price;
        $product->markup = $markup;
        $product->sale_price = $sale_price;

        // panggil method generateNumber() pada objek product
        $product->generateNumber();

        $product->save();

        return response()->json([
            'status'    => 'success',
            'message'   => 'Data Product Berhasil Disimpan',
        ]);
    }
}

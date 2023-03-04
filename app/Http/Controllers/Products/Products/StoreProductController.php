<?php

namespace App\Http\Controllers\Products\Products;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class StoreProductController extends Controller
{
    public function store(Request $request)
    {
        $product = new Product();

        $product->code = $request->input('code');
        $product->barcode = $request->input('barcode');
        $product->name = $request->input('name');
        $product->category_id = $request->input('category_id');
        $product->unit_id = $request->input('unit_id');
        $product->purchase_price = $request->input('purchase_price');
        $product->markup = $request->input('markup');
        $product->sale_price = $request->input('sale_price');

        $product->save();

        return redirect()->back();
    }
}

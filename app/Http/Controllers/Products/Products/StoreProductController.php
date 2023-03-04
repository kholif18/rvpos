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

        $product->pcode = $request->input('pcode');
        $product->barcode = $request->input('barcode');
        $product->pname = $request->input('pname');
        $product->category = $request->input('category');
        $product->unit = $request->input('unit');
        $product->cost = $request->input('cost');
        $product->markup = $request->input('markup');
        $product->saleprice = $request->input('saleprice');

        $product->save();

        return redirect()->back();
    }
}

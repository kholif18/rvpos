<?php

namespace App\Http\Controllers\Products\StockOpname;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\StockOpname;
use Illuminate\Http\Request;

class CreateStockOpnameController extends Controller
{
    public function addstockopname(Request $request)
    {
        $stockopname = new StockOpname();
        $product = Product::get();

        $stockopname->barcode = $product('barcode');
        $stockopname->name = $request->input('name');
        $stockopname->quantity = $request->product('quantity');
        $stockopname->realstock = $request->input('realstock');
        $stockopname->difference = $product('quantity') - $stockopname->realstock;
        $stockopname->value_price = $stockopname->difference * $product('sale_price');
        $stockopname->detail = $request->input('detail');

        $stockopname->save();

        return redirect()->back();
    }
}

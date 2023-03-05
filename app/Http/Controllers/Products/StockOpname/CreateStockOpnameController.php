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

        $stockopname->name = $request->input('name');
        $stockopname->real_stock = $request->input('real_stock');
        // $stockopname->difference = $product('quantity');
        // $stockopname->value_price = $stockopname;
        $stockopname->detail = $request->input('detail');

        $stockopname->save();

        return redirect()->back();
    }
}

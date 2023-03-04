<?php

namespace App\Http\Controllers\Products\StockOpname;

use App\Http\Controllers\Controller;
use App\Models\StockOpname;
use Illuminate\Http\Request;

class CreateStockOpnameController extends Controller
{
    public function addstockopname(Request $request)
    {
        $stockopname = new StockOpname();

        $stockopname->name = $request->input('name');
        $stockopname->qty = $request->input('qty');
        $stockopname->realstock = $request->input('realstock');
        $stockopname->detail = $request->input('detail');

        return response();
    }
}

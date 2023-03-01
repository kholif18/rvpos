<?php

namespace App\Http\Controllers\Products\StockOpname;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AddStockOpnameController extends Controller
{
    public function addstockopname(Request $request)
    {
        $name = $request->input('productname');
        $qty = $request->input('qty');
        $realstock = $request->input('realstock');
        $detail = $request->input('detail');

        return response()->json([
            'productname' => $name,
            'qty' => $qty,
            'realstock' => $realstock,
            'detail' => $detail,
        ]);
    }
}

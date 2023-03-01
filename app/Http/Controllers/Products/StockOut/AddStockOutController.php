<?php

namespace App\Http\Controllers\Products\StockOut;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AddStockOutController extends Controller
{
    public function addstockout(Request $request)
    {
        $productname = $request->input('productname');
        $qty = $request->input('qty');
        $detail = $request->input('detail');

        return response()->json([
            'productname' => $productname,
            'qty' => $qty,
            'detail' => $detail
        ]);
    }
}

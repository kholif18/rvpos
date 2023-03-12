<?php

namespace App\Http\Controllers\Products\StockOut;

use App\Http\Controllers\Controller;
use App\Models\StockOut;
use Illuminate\Http\Request;

class AddStockOutController extends Controller
{
    public function addstockout(Request $request)
    {
        $stockout = new StockOut();

        $stockout->pname = $request->input('pname');
        $stockout->qty = $request->input('qty');
        $stockout->detail = $request->input('detail');

        $stockout->save();

        return redirect()->back();
    }
}

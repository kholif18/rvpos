<?php

namespace App\Http\Controllers\Products\StockOut;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StockOutController extends Controller
{
    public function index()
    {
        return view('products/stockout');
    }
}

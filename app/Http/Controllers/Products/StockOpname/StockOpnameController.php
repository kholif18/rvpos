<?php

namespace App\Http\Controllers\Products\StockOpname;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StockOpnameController extends Controller
{
    public function index()
    {
        return view('products/stock-opname');
    }
}

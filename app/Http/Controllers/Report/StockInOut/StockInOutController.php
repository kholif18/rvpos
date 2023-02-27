<?php

namespace App\Http\Controllers\Report\StockInOut;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StockInOutController extends Controller
{
    public function index()
    {
        return view('report/stockin-out');
    }
}

<?php

namespace App\Http\Controllers\Report\SalesReport;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SalesReportController extends Controller
{
    public function index()
    {
        return view('report/sales-report');
    }
}

<?php

namespace App\Http\Controllers\Report\DebtReport;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DebtReportController extends Controller
{
    public function index()
    {
        return view('report/debt-report');
    }
}

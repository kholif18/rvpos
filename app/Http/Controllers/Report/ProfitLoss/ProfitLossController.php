<?php

namespace App\Http\Controllers\Report\ProfitLoss;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfitLossController extends Controller
{
    public function index()
    {
        return view('report/report-profit-loss');
    }
}

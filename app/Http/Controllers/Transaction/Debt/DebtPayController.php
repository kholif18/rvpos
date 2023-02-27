<?php

namespace App\Http\Controllers\Transaction\Debt;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DebtPayController extends Controller
{
    public function index()
    {
        return view('transactions/debtpay');
    }
}

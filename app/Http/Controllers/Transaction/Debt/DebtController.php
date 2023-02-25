<?php

namespace App\Http\Controllers\Transaction\Debt;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DebtController extends Controller
{
    public function index()
    {
        return view('transactions/debt');
    }
}

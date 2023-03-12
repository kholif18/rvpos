<?php

namespace App\Http\Controllers\Purchases\ListPurchases;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ListPurchasesController extends Controller
{
    public function index()
    {
        return view('purchases/list-purchases');
    }
}

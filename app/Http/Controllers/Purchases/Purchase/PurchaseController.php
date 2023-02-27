<?php

namespace App\Http\Controllers\Purchases\Purchase;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PurchaseController extends Controller
{
    public function index()
    {
        return view('purchases/purchase');
    }
}

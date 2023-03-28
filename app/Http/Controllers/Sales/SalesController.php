<?php

namespace App\Http\Controllers\Sales;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use Illuminate\Http\Request;

class SalesController extends Controller
{
    public function index()
    {
        return view('sales/sales', [
            'customers' => Customer::get(),
        ]);
    }

    public function getNote(Request $request)
    {
        $customer = Customer::find($request->input('customer_id'));

        return response()->json($customer->note);
    }
}

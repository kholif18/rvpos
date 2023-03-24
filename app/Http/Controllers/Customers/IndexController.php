<?php

namespace App\Http\Controllers\Customers;

use Illuminate\View\View;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\Customer;
use Yajra\DataTables\Facades\DataTables;

class IndexController extends Controller
{
    /**
     * Menampilkan daftar customer
     *
     * @return View
     */
    public function index(): View
    {
        $data = [
            'customers' => Customer::get(),
        ];

        return view('customers.customers', $data);
    }

    public function customerCode()
    {

        $check = DB::table('customers')->count();
        if ($check == 0) {
            $number = 1;
        } else {
            $lastNumber = Customer::all()->last();
            $number = (int)substr($lastNumber->code, -3) + 1;
        }
        $noCode = 'CS' . sprintf('%03d', $number);

        return response()->json(['noCode' => $noCode]);
    }

    public function loadDataTable()
    {
        $customer = Customer::query();

        return DataTables::of($customer)
            ->addColumn('action', function ($customer) {
                return view('customers.button')->with('customers', $customer);
            })
            ->make(true);
    }
}

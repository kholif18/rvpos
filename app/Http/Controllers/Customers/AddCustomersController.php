<?php

namespace App\Http\Controllers\Customers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AddCustomersController extends Controller
{
    public function addcustomer(Request $request)
    {
        $code = $request->input('code');
        $name = $request->input('name');
        $telp = $request->input('telp');
        $email = $request->input('email');
        $address = $request->input('address');
        $status = $request->input('status');
        $memdisc = $request->input('memdisc');
        $note = $request->input('note');

        return response()->json([
            'code' => $code,
            'name' => $name,
            'telp' => $telp,
            'email' => $email,
            'address' => $address,
            'status' => $status,
            'memdisc' => $memdisc,
            'note' => $note
        ]);
    }
}

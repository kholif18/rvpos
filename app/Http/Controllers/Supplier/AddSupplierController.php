<?php

namespace App\Http\Controllers\Supplier;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AddSupplierController extends Controller
{
    public function addsupplier(Request $request)
    {
        $code = $request->input('code');
        $name = $request->input('name');
        $telp = $request->input('telp');
        $email = $request->input('email');
        $bank = $request->input('bank');
        $norek = $request->input('norek');
        $address = $request->input('address');

        return response()->json([
            'code' => $code,
            'name' => $name,
            'telp,' => $telp,
            'email,' => $email,
            'bank,' => $bank,
            'norek,' => $norek,
            'address,' => $address
        ]);
    }
}

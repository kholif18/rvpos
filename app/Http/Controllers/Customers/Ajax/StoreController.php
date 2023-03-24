<?php

namespace App\Http\Controllers\Customers\Ajax;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use App\Models\Customer;
use Illuminate\Support\Facades\Validator;

class StoreController extends Controller
{
    /**
     * Menambahkan data Customer kedalam database
     *
     * @param Request $request
     *
     * @return JsonResponse
     */
    public function store(Request $request): JsonResponse
    {
        $code = $request->input('code');
        $name = $request->input('name');
        $telp = $request->input('telp');
        $email = $request->input('email');
        $address = $request->input('address');
        $status = $request->input('status');
        $member_discount = $request->input('memdisc');
        $note = $request->input('note');

        $customer = new Customer();
        $customer->code = $code;
        $customer->name = $name;
        $customer->telp = $telp;
        $customer->email = $email;
        $customer->address = $address;
        $customer->status = $status;
        $customer->member_discount = $member_discount;
        $customer->note = $note;

        $customer->save();

        return response()->json([
            'status'    => 'success',
            'message'   => 'Data Customer Berhasil Disimpan!',
        ]);
    }
}

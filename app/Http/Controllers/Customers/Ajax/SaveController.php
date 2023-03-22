<?php

namespace App\Http\Controllers\Customers\Ajax;

use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class SaveController extends Controller
{
    /**
     * Memperbarui data kategori kedalam database
     *
     * @param Customers $customers
     * @param Request $request
     *
     * @return JsonResponse
     */
    public function save(Customer $customer, Request $request): JsonResponse
    {

        $code = $request->input('code');
        $name = $request->input('name');
        $telp = $request->input('telp');
        $email = $request->input('email');
        $address = $request->input('address');
        $status = $request->input('status');
        $member_discount = $request->input('memdisc');
        $note = $request->input('note');

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
        // }
    }
}

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
     * Menambahkan data kategori kedalam database
     *
     * @param Request $request
     *
     * @return JsonResponse
     */
    public function store(Request $request): JsonResponse
    {
        $rules = [
            'name' => 'required',
        ];

        $messages = [
            'name.required' => 'Kolom nama harus diisi',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return response()->json([
                'status'    =>  400,
                'error'     =>  $validator->errors()->toArray(),
            ]);
        }

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

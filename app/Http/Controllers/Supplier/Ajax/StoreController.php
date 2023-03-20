<?php

namespace App\Http\Controllers\Supplier\Ajax;

use App\Models\Supplier;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
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
            'code' => 'required|unique:suppliers',
            'name' => 'required',
        ];

        $messages = [
            'code.required' => 'Code sudah digunakan',
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
        $phone = $request->input('phone');
        $email = $request->input('email');
        $bank = $request->input('bank');
        $norek = $request->input('norek');
        $address = $request->input('address');

        $supplier = new Supplier();
        $supplier->code = $code;
        $supplier->name = $name;
        $supplier->phone = $phone;
        $supplier->email = $email;
        $supplier->bank = $bank;
        $supplier->norek = $norek;
        $supplier->address = $address;

        $supplier->save();

        return response()->json([
            'status'    => 'success',
            'message'   => 'Data Supplier Berhasil Disimpan!',
        ]);
    }
}

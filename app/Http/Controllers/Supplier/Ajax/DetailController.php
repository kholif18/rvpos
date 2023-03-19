<?php

namespace App\Http\Controllers\Supplier\Ajax;

use App\Http\Controllers\Controller;
use App\Models\Supplier;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class DetailController extends Controller
{
    /**
     * Menampilkan data kategori dari database
     *
     * @param Supplier $supplier
     * @param Request $request
     *
     * @return JsonResponse
     */
    public function get(Supplier $supplier, Request $request): JsonResponse
    {
        $id = $supplier->id;
        $code = $supplier->code;
        $name = $supplier->name;
        $phone = $supplier->phone;
        $email = $supplier->email;
        $bank = $supplier->bank;
        $norek = $supplier->norek;
        $address = $supplier->address;

        return response()->json([
            'status' => 'success',
            'data' => [
                'id' => $id,
                'code' => $code,
                'name' => $name,
                'phone' => $phone,
                'email' => $email,
                'bank' => $bank,
                'norek' => $norek,
                'address' => $address,
            ]
        ]);
    }
}

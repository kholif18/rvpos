<?php

namespace App\Http\Controllers\Customers\Ajax;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class DetailController extends Controller
{
    /**
     * Menampilkan data kategori dari database
     *
     * @param Customer $customer
     * @param Request $request
     *
     * @return JsonResponse
     */
    public function get(Customer $customer, Request $request): JsonResponse
    {
        $id = $customer->id;
        $code = $customer->code;
        $name = $customer->name;
        $telp = $customer->telp;
        $email = $customer->email;
        $address = $customer->address;
        $status = $customer->status;
        $member_discount = $customer->member_discount;
        $note = $customer->note;

        return response()->json([
            'status' => 'success',
            'data' => [
                'id' => $id,
                'code' => $code,
                'name' => $name,
                'telp' => $telp,
                'email' => $email,
                'address' => $address,
                'status' => $status,
                'member_discount' => $member_discount,
                'note' => $note,
            ]
        ]);
    }
}

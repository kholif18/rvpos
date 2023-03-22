<?php

namespace App\Http\Controllers\Customers\Ajax;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class DeleteController extends Controller
{
    /**
     * Menghapus data kategori dari database
     *
     * @param Customer $customer
     * @param Request $request
     *
     * @return JsonResponse
     */
    public function delete(Customer $customer, Request $request): JsonResponse
    {
        $customer->delete();

        return response()->json([
            'status' => 'success',
            'message' => 'Data customer berhasil dihapus.'
        ]);
    }
}

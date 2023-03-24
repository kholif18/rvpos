<?php

namespace App\Http\Controllers\Products\Products\Ajax;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;

class DeleteController extends Controller
{
    /**
     * Menghapus data product dari database
     *
     * @param Product $product
     * @param Request $request
     *
     * @return JsonResponse
     */
    public function delete(Product $product, Request $request): JsonResponse
    {
        $product->delete();

        return response()->json([
            'status' => 'success',
            'message' => 'Data product berhasil dihapus.'
        ]);
    }
}

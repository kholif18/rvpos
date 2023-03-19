<?php

namespace App\Http\Controllers\Supplier\Ajax;

use App\Http\Controllers\Controller;
use App\Models\Supplier;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class DeleteController extends Controller
{
    /**
     * Menghapus data kategori dari database
     *
     * @param Supplier $supplier
     * @param Request $request
     *
     * @return JsonResponse
     */
    public function delete(Supplier $supplier, Request $request): JsonResponse
    {
        $supplier->delete();

        return response()->json([
            'status' => 'success',
            'message' => 'Data kategori berhasil dihapus.'
        ]);
    }
}

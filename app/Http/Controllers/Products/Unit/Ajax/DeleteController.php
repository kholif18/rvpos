<?php

namespace App\Http\Controllers\Products\Unit\Ajax;

use App\Http\Controllers\Controller;
use App\Models\Unit;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class DeleteController extends Controller
{
    /**
     * Menghapus data kategori dari database
     *
     * @param Unit $unit
     * @param Request $request
     *
     * @return JsonResponse
     */
    public function delete(Unit $unit, Request $request): JsonResponse
    {
        $unit->delete();

        return response()->json([
            'status' => 'success',
            'message' => 'Data unit berhasil dihapus.'
        ]);
    }
}

<?php

namespace App\Http\Controllers\Products\Unit\Ajax;

use App\Http\Controllers\Controller;
use App\Models\Unit;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class SaveController extends Controller
{
    /**
     * Memperbarui data kategori kedalam database
     *
     * @param Unit $unit
     * @param Request $request
     *
     * @return JsonResponse
     */
    public function save(Unit $unit, Request $request): JsonResponse
    {
        $name = $request->input('name');

        $unit->name = $name;
        $unit->save();

        return response()->json([
            'status' => 'success',
            'message' => 'Data unit berhasil diperbarui.'
        ]);
    }
}

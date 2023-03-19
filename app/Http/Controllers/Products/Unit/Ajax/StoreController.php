<?php

namespace App\Http\Controllers\Products\Unit\Ajax;

use App\Http\Controllers\Controller;
use App\Models\Unit;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

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
        $name = $request->input('name');

        $unit = new Unit();
        $unit->name = $name;
        $unit->save();

        return response()->json([
            'status' => 'success',
            'message' => 'Data Unit berhasil disimpan.'
        ]);
    }
}

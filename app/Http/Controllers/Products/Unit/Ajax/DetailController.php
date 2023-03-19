<?php

namespace App\Http\Controllers\Products\Unit\Ajax;

use App\Http\Controllers\Controller;
use App\Models\Unit;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class DetailController extends Controller
{
    /**
     * Menampilkan data kategori dari database
     *
     * @param Unit $unit
     * @param Request $request
     *
     * @return JsonResponse
     */
    public function get(Unit $unit, Request $request): JsonResponse
    {
        $id = $unit->id;
        $name = $unit->name;

        return response()->json([
            'status' => 'success',
            'data' => [
                'id' => $id,
                'name' => $name,
            ]
        ]);
    }
}

<?php

namespace App\Http\Controllers\Products\Category\Ajax;

use App\Http\Controllers\Controller;
use App\Models\Category;
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

        $category = new Category();
        $category->name = $name;
        $category->save();

        return response()->json([
            'status' => 'success',
            'message' => 'Data kategori berhasil disimpan.'
        ]);
    }
}

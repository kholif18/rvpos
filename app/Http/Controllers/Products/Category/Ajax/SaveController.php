<?php

namespace App\Http\Controllers\Products\Category\Ajax;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class SaveController extends Controller
{
    /**
     * Memperbarui data kategori kedalam database
     *
     * @param Category $category
     * @param Request $request
     *
     * @return JsonResponse
     */
    public function save(Category $category, Request $request): JsonResponse
    {
        $name = $request->input('name');
        $prefix = $request->input('prefix');

        $category->name = $name;
        $category->prefix = $prefix;
        $category->save();

        return response()->json([
            'status' => 'success',
            'message' => 'Data kategori berhasil diperbarui.'
        ]);
    }
}

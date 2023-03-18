<?php

namespace App\Http\Controllers\Products\Category\Ajax;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class DeleteController extends Controller
{
    /**
     * Menghapus data kategori dari database
     *
     * @param Category $category
     * @param Request $request
     *
     * @return JsonResponse
     */
    public function delete(Category $category, Request $request): JsonResponse
    {
        $category->delete();

        return response()->json([
            'status' => 'success',
            'message' => 'Data kategori berhasil dihapus.'
        ]);
    }
}

<?php

namespace App\Http\Controllers\Products\Category\Ajax;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class DetailController extends Controller
{
    /**
     * Menampilkan data kategori dari database
     *
     * @param Category $category
     * @param Request $request
     *
     * @return JsonResponse
     */
    public function get(Category $category, Request $request): JsonResponse
    {
        $id = $category->id;
        $name = $category->name;
        $prefix = $category->prefix;

        return response()->json([
            'status' => 'success',
            'data' => [
                'id' => $id,
                'name' => $name,
                'prefix' => $prefix,
            ]
        ]);
    }
}

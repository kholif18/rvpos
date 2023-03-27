<?php

namespace App\Http\Controllers\Products\Products\Ajax;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use App\Models\Unit;

class DetailController extends Controller
{
    /**
     * Menampilkan data product dari database
     *
     * @param Product $product
     * @param Request $request
     *
     * @return JsonResponse
     */
    // public function get($id)
    public function get(Product $product, Request $request): JsonResponse
    {

        $id = $product->id;
        $code = $product->code;
        $barcode = $product->barcode;
        $name = $product->name;
        $category_id = $product->category_id;
        $unit_id = $product->unit_id;
        $purchase_price = $product->purchase_price;
        $markup = $product->markup;
        $sale_price = $product->sale_price;

        return response()->json([
            'status' => 'success',
            'data' => [
                'id' => $id,
                'code' => $code,
                'name' => $name,
                'barcode' => $barcode,
                'category_id' => $category_id,
                'unit_id' => $unit_id,
                'purchase_price' => $purchase_price,
                'markup' => $markup,
                'sale_price' => $sale_price,
            ]
        ]);
    }
}

<?php

namespace App\Http\Controllers\Products\Products\Ajax;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;

class SaveController extends Controller
{
    /**
     * Memperbarui data product kedalam database
     *
     * @param Product $products
     * @param Request $request
     *
     * @return JsonResponse
     */
    public function save(Product $product, Request $request): JsonResponse
    {

        $code = $request->input('code');
        $barcode = $request->input('barcode');
        $name = $request->input('name');
        $category_id = $request->input('category_id');
        $unit_id = $request->input('unit_id');
        $purchase_price = $request->input('purchase_price');
        $markup = $request->input('markup');
        $sale_price = $request->input('sale_price');

        $product->code = $code;
        $product->barcode = $barcode;
        $product->name = $name;
        $product->category_id = $category_id;
        $product->unit_id = $unit_id;
        $product->purchase_price = $purchase_price;
        $product->markup = $markup;
        $product->sale_price = $sale_price;

        $product->save();

        return response()->json([
            'status'    => 'success',
            'message'   => 'Data Product Berhasil Disimpan',
        ]);
    }
}

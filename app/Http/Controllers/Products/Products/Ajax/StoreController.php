<?php

namespace App\Http\Controllers\Products\Products\Ajax;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class StoreController extends Controller
{
    public function store(Request $request): JsonResponse
    {
        $rules = [
            'code' => 'required|unique:products',
            'name' => 'required|unique:products',
            'purchase_price' => 'required|numeric',
            'markup' => 'required|numeric',
            'sale_price' => 'required|numeric',
        ];

        $messages = [
            'code.required' => 'Code Product harus diisi',
            'code.unique' => 'Code Product telah digunakan',
            'name.required' => 'Nama Product harus diisi',
            'name.unique' => 'Nama Product telah digunakan',
            'purchase_price.required' => 'Cost harus diisi',
            'purchase_price.numeric' => 'Cost harus berupa nomor',
            'markup.required' => 'Markup harus diisi',
            'markup.numeric' => 'Markup harus berupa nomor',
            'sale_price.required' => 'Sale Price harus diisi',
            'sale_price.numeric' => 'Sale Price harus berupa nomor',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return response()->json([
                'status'    =>  400,
                'error'     =>  $validator->errors()->toArray(),
            ]);
        }

        $code = $request->input('code');
        $barcode = $request->input('barcode');
        $name = $request->input('name');
        $category_id = $request->input('category_id');
        $unit_id = $request->input('unit_id');
        $purchase_price = $request->input('purchase_price');
        $markup = $request->input('markup');
        $sale_price = $request->input('sale_price');

        $product = new Product;
        $product->code = $code;
        $product->barcode = $barcode;
        $product->name = $name;
        $product->category_id = $category_id;
        $product->unit_id = $unit_id;
        $product->purchase_price = $purchase_price;
        $product->markup = $markup;
        $product->sale_price = $sale_price;

        // panggil method generateNumber() pada objek product
        // $productNumber = $product->generateNumber();

        $product->save();

        return response()->json([
            'status'    => 'success',
            'message'   => 'Data Product Berhasil Disimpan',
            // 'code'      => $productNumber
        ]);
    }

    public function checkName(Request $request)
    {
        $name = $request->input('name');
        $productId = $request->input('id');

        $query = Product::where('name', $name);
        if ($productId) {
            $query->where('id', '<>', $productId);
        }
        $product = $query->first();

        if ($product) {
            return response()->json(false);
        } else {
            return response()->json(true);
        }
    }
}

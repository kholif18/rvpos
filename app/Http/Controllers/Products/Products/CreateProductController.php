<?php

namespace App\Http\Controllers\Products\Products;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CreateProductController extends Controller
{
    public function addproduct(Request $request)
    {
        $name = $request->input('pcode');
        $barcode = $request->input('barcode');
        $pname = $request->input('pname');
        $category = $request->input('category');
        $unit = $request->input('unit');
        $cost = $request->input('cost');
        $markup = $request->input('markup');
        $saleprice = $request->input('saleprice');

        return response()->json([
            'pcode' => $name,
            'barcode' => $barcode,
            'pname' => $pname,
            'category' => $category,
            'unit' => $unit,
            'cost' => $cost,
            'markup' => $markup,
            'saleprice' => $saleprice
        ]);
    }
}

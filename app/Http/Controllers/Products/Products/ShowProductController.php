<?php

namespace App\Http\Controllers\Products\Products;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ShowProductController extends Controller
{
    public function show($id)
    {
        $data = Product::findOrFail($id);
        return view('edit')->with([
            'data' => $data
        ]);
    }
}

<?php

namespace App\Http\Controllers\Products\Products;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class DeleteController extends Controller
{
    public function productdestroy($id)
    {

        $product = Product::find($id);

        $product->delete();

        return redirect()->back();
    }
}

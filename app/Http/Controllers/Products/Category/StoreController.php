<?php

namespace App\Http\Controllers\Products\Category;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function addcategory(Request $request)
    {
        $name = $request->input('categoryadd');
        $prefix = $request->input('prefix');

        return response()->json([
            'categoryadd' => $name,
            'prefix' => $prefix
        ]);
    }

    public function addunit(Request $request)
    {
        $addunit = $request->input('addunit');

        return response()->json([
            'addunit' => $addunit
        ]);
    }
}

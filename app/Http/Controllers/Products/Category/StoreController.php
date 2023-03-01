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
            'status' => 'success', 'categoryadd' => $name, 'input' => $request->input($name),
            'prefix' => $prefix, 'input' => $request->input($prefix)
        ]);
    }

    public function addunit(Request $request)
    {
        $addunit = $request->input('addunit');

        return response()->json([
            'status' => 'success', 'addunit' => $addunit, 'input' => $request->input($addunit)
        ]);
    }
}

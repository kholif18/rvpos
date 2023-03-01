<?php

namespace App\Http\Controllers\Products\Category;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function index(Request $request)
    {
        $name = $request->input('name');
        $prefix = $request->input('prefix');

        return response()->json(['status' => 'success', 'name' => $name, 'input' => $request->input($name)]);
        return response()->json(['status' => 'success', 'prefix' => $prefix, 'input' => $request->input($prefix)]);
    }
}

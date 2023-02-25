<?php

namespace App\Http\Controllers\Product\Category;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function index(Request $request)
    {
        $name = $request->input('name');

        return response()->json(['status' => 'success', 'name' => $name, 'input' => $request->input()]);
    }
}

<?php

namespace App\Http\Controllers\Products\Category;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Unit;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function addcategory(Request $request)
    {
        $category = new Category();

        $category->category = $request->input('categoryadd');
        $category->prefix = $request->input('prefix');

        $category->save();

        return redirect()->back();
    }

    public function addunit(Request $request)
    {
        $unit = new Unit();

        // $unit->no = $request->no;
        $unit->unit = $request->input('addunit');

        $unit->save();

        return redirect()->back();
    }
}

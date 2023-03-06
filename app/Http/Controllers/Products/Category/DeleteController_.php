<?php

namespace App\Http\Controllers\Products\Category;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Unit;
use Illuminate\Http\Request;

class DeleteController extends Controller
{
    public function categorydestroy($id)
    {

        $category = Category::find($id);

        $category->delete();

        return redirect()->back();
    }

    public function unitdestroy($id)
    {

        $unit = Unit::find($id);

        $unit->delete();

        return redirect()->back();
    }
}

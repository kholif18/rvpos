<?php

namespace App\Http\Controllers\Products\Category;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class DeleteController extends Controller
{
    public function destroy($id)
    {

        $category = Category::find($id);

        $category->delete();

        return redirect()->back();
    }
}

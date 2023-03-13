<?php

namespace App\Http\Controllers\Products\Category;

use App\Models\Unit;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('products.category.category-unit', [
            'categories' => Category::get(),
            'units' => Unit::get(),
        ]);
    }

    public function read()
    {
        $unit = Unit::all();
        return view('products.category.unit-table')->with([
            'unit' => $unit
        ]);
    }

    // public function read()
    // {
    //     $category = Category::all();

    //     return view('read')->with([
    //         'category' => $category
    //     ]);
    // }
    /**
     * Show the form for creating a new resource.
     */
    public function createunit()
    {
        return view('products.category.form-unit');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function storecategory(Request $request)
    {
        $category = new Category();

        $category->name = $request->input('categoryadd');
        $category->prefix = $request->input('prefix');

        $category->save();

        return redirect()->back();
    }

    public function storeunit(Request $request)
    {
        $unit = new Unit();

        // $unit->no = $request->no;
        $unit->name = $request->input('addunit');

        $unit->save();

        return redirect()->back();
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $unit = Unit::findOrFail($id);
        return view('products.category.edit-unit')->with([
            'unit' => $unit,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function categoryedit(string $id)
    {
        $category = Category::find($id);

        return view('products.category._form-category-edit', [
            'category' => $category
        ]);
    }

    public function unitedit(string $id)
    {
        $unit = Unit::find($id);

        return view('products.category._form-unit-edit', [
            'unit' => $unit
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function categoryupdate(Request $request, string $id)
    {
        $category = Category::find($id);

        $category->name = $request->name;
        $category->prefix = $request->prefix;

        $category->save();
    }

    /**
     * Remove the specified resource from storage.
     */
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

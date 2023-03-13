<?php

namespace App\Http\Controllers\Products\Products;

use App\Models\Unit;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('products.products.products', [
            'products' => Product::get(),
            'categories' => Category::get(),
            'units' => Unit::get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $product = new Product();

        $product->code = $request->input('code');
        $product->barcode = $request->input('barcode');
        $product->name = $request->input('name');
        $product->category_id = $request->input('category_id');
        $product->unit_id = $request->input('unit_id');
        $product->purchase_price = $request->input('purchase_price');
        $product->markup = $request->input('markup');
        $product->sale_price = $request->input('sale_price');

        $product->save();

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = Product::findOrFail($id);
        return view('edit')->with([
            'data' => $data
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Product::find($id);

        $product->delete();

        return redirect()->back();
    }
}

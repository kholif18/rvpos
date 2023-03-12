<?php

namespace App\Http\Controllers\Products\StockOpname;

use App\Models\Product;
use App\Models\StockOpname;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StockOpnameController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('products/stock-opname', [
            'stockopnames' => StockOpname::get(),
            'products' => Product::get(),
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
        $stockopname = new StockOpname();
        $quantity = Product::where('quantity', $request->quantity)->get();

        $stockopname->name = $request->input('name');
        $stockopname->quantity = $request->quantity;
        $stockopname->real_stock = $request->input('real_stock');
        $stockopname->difference = $quantity;
        $stockopname->value_price = $quantity;
        $stockopname->detail = $request->input('detail');

        $stockopname->save();

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
        //
    }
}

<?php

namespace App\Http\Controllers\Supplier;

use App\Models\Supplier;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class SuppliersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('supplier/suppliers', [
            'suppliers' => Supplier::get()
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
        $supplier = new Supplier();

        $supplier->code = $request->input('code');
        $supplier->name = $request->input('name');
        $supplier->no_telp = $request->input('telp');
        $supplier->email = $request->input('email');
        $supplier->bank = $request->input('bank');
        $supplier->no_rek = $request->input('norek');
        $supplier->address = $request->input('address');

        $supplier->save();

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Supplier $supplier)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Supplier $supplier)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $supplier = Supplier::find($id)->update($request->all());

        return response()->json('Data berhasil disimpan', 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id,)
    {
        $supplier = Supplier::find($id);

        $supplier->delete();

        return redirect()->back();
    }
}

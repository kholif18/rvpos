<?php

namespace App\Http\Controllers\Supplier;

use App\Models\Supplier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

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
        $validator = Validator::make($request->all(), [
            'code' => 'required|unique:suppliers',
            'name' => 'required',
        ], [
            'code.required' => 'Code telah digunakan!',
            'name.required' => 'Nama supplier wajib diisi!',

        ]);
        if ($validator->fails()) {
            return response()->json([
                'status'    =>  400,
                'error'     =>  $validator->errors()->toArray(),
            ]);
        } else {

            $supplier = new Supplier();

            $supplier->code = $request->input('code');
            $supplier->name = $request->input('name');
            $supplier->phone = $request->input('phone');
            $supplier->email = $request->input('email');
            $supplier->bank = $request->input('bank');
            $supplier->norek = $request->input('norek');
            $supplier->address = $request->input('address');

            $supplier->save();

            return response()->json([
                'status'    => 200,
                'message'   => 'Data Supplier Berhasil Disimpan!',
            ]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $supplier = Supplier::find($id);

        return response()->json($supplier);
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

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id,)
    {
        $supplier = Supplier::find($id)->delete();

        return response(null, 204);
    }
}

<?php

namespace App\Http\Controllers\Kas;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AddKasController extends Controller
{
    public function addkas(Request $request)
    {
        $code = $request->input('code');
        $type = $request->input('type');
        $amount = $request->input('amount');
        $detail = $request->input('detail');

        return response()->json([
            'code' => $code,
            'type' => $type,
            'amount' => $amount,
            'detail' => $detail,
        ]);
    }
}

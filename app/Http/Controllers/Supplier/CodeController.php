<?php

namespace App\Http\Controllers\Supplier;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class CodeController extends Controller
{
    public function getLastCode()
    {
        $lastCode = DB::table('suppliers')
            ->select('code')
            ->orderByDesc('id')
            ->first();

        return response()->json(['lastCode' => $lastCode->code]);
    }
}

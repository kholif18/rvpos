<?php

namespace App\Http\Controllers\Setting;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AddSettingController extends Controller
{
    public function addsetting(Request $request)
    {
        $name = $request->input('name');
        $address = $request->input('address');
        $telp = $request->input('telp');
        $logo = $request->input('logo');
        $email = $request->input('name');
        $web = $request->input('web');

        return response()->json([
            'name' => $name,
            'address' => $address,
            'telp' => $telp,
            'logo' => $logo,
            'email' => $email,
            'web' => $web
        ]);
    }
}

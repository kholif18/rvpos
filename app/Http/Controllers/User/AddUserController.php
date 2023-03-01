<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AddUserController extends Controller
{
    public function adduser(Request $request)
    {
        $username = $request->input('username');
        $name = $request->input('name');
        $email = $request->input('email');
        $level = $request->input('level');
        $telp = $request->input('telp');
        $pass = $request->input('pass');
        $confpass = $request->input('confpass');

        return response()->json([
            'username' => $username,
            'name' => $name,
            'email' => $email,
            'level' => $level,
            'telp' => $telp,
            'pass' => $pass,
            'confpass' => $confpass
        ]);
    }
}

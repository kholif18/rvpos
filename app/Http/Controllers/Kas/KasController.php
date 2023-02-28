<?php

namespace App\Http\Controllers\Kas;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class KasController extends Controller
{
    public function index()
    {
        return view('kas/kas');
    }
}

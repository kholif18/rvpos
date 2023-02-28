<?php

namespace App\Http\Controllers\Kas\KasOut;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class KasOutController extends Controller
{
    public function index()
    {
        return view('kas/kas-out');
    }
}

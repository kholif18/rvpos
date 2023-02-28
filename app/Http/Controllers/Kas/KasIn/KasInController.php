<?php

namespace App\Http\Controllers\Kas\KasIn;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class KasInController extends Controller
{
    public function index()
    {
        return view('kas/kas-in');
    }
}

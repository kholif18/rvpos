<?php

namespace App\Http\Controllers\Transaction\ListPost;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ListPostController extends Controller
{
    public function index()
    {
        return view('transactions/list-pos');
    }
}

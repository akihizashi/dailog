<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainlogController extends Controller
{
    public function index()
    {
        return view('mainlog.index');
    }
}

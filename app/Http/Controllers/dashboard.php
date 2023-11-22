<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dashboard extends Controller
{
    public function index()
    {
        return view('layouts.admin.dashboard');
    }

    public function status()
    {
        return view('layouts.admin.status');
    }
    public function map()
    {
        return view('layouts.admin.map');
    }
}
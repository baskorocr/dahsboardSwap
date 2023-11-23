<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dashboard extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }

    public function status()
    {
        return view('admin.status');
    }
    public function map()
    {
        return view('admin.map');
    }
}
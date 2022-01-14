<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CctvmaController extends Controller
{
    public function index()
    {
        return view('cctv_ma.index');
    }
    public function add(Request $date)
    {
        $date = $date;
        return view('cctv_ma.add', compact('date'));
    }
}

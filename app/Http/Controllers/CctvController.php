<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class CctvController extends Controller
{
    public function index()
    {
        return view('cctv.index');
    }
    public function add()
    {

        return view('cctv.add');
    }
}

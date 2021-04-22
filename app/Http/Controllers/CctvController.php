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
        $province_list = DB::table('provinces')->get();
        return view('cctv.add')->with('province_list', $province_list);
    }

}

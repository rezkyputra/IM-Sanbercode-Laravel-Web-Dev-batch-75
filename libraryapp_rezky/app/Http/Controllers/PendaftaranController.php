<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PendaftaranController extends Controller
{
    public function daftar(){
        return view('daftar');
    }

    public function welcome(Request $request)
    {
        $biodata = $request->input('bio');
        $fname = $request->input('fullname');

        return view('home', ["biodata" => $biodata, "fname" => $fname]);
    }
}

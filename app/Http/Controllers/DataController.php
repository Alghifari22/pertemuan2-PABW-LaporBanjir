<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataController extends Controller
{
    public function proses(Request $request){
        $name = $request->input('nama');
        $lokasi = $request->input('lokasi');
        $tinggi = $request->input('tinggi');

        return view('hasil', compact('name', 'lokasi', 'tinggi'));
    }
}

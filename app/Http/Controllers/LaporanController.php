<?php

namespace App\Http\Controllers;

use App\Models\Laporan;
use Illuminate\Http\Request;

class LaporanController extends Controller
{
    public function form()
    {
        return view('form');
    }

    public function store(Request $request)
    {   
        $laporan = Laporan::create([
            'nama_pelapor' => $request->input('nama_pelapor'),
            'lokasi' => $request->input('lokasi'),
            'tinggi_genangan' => $request->input('tinggi_genangan'),
            'tanggal_kejadian' => $request->input('tanggal_kejadian'),
        ]);

        return view('konfirmasi', [
            'name' => $laporan['nama_pelapor'],
            'lokasi' => $laporan['lokasi'],
            'tinggi' => $laporan['tinggi_genangan'],
            'tanggal_kejadian' => $laporan['tanggal_kejadian']
        ]);
    }

    public function konfirmasi()
    {
        return view('konfirmasi');
    }

    public function index()
    {
        $laporan = Laporan::all();
        
        return view('laporan', compact('laporan'));
    }
}

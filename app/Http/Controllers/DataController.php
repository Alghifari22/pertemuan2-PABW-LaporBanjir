<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataController extends Controller
{
    public function form()
    {
        return view('form');
    }

    public function store(Request $request)
    {
        $data = [
            'nama' => $request->input('nama'),
            'lokasi' => $request->input('lokasi'),
            'tinggi' => $request->input('tinggi')
        ];
        
        return view('konfirmasi', [
            'name' => $data['nama'],
            'lokasi' => $data['lokasi'],
            'tinggi' => $data['tinggi']
        ]);
    }

    public function konfirmasi()
    {
        return view('konfirmasi');
    }

    public function index()
    {
        $laporan = [
            [
                'nama' => 'Andi',
                'lokasi' => 'Jl. Merdeka',
                'tinggi' => 20
            ],
            [
                'nama' => 'Budi',
                'lokasi' => 'Jl. Sudirman',
                'tinggi' => 50
            ],
            [
                'nama' => 'Citra',
                'lokasi' => 'Jl. Asia Afrika',
                'tinggi' => 85
            ]
        ];
        return view('laporan', compact('laporan'));
    }
}
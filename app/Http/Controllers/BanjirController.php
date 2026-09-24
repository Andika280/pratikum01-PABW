<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BanjirController extends Controller
{
    public function index() {
        return view('lapor_banjir');
    }

    public function proses(Request $request) {
        $nama = $request->input('nama_pelapor');
        $lokasi = $request->input('lokasi');
        $tinggi = $request->input('tinggi_air');

        return view('konfirmasi_banjir', compact('nama', 'lokasi', 'tinggi'));
    }
}
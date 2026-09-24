<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LayananController extends Controller
{
    public function form() {
        return view('layanan_form');
    }

    public function proses(Request $request) {
        $nama_layanan = $request->input('nama_layanan');
        $kategori = $request->input('kategori');
        $deskripsi = $request->input('deskripsi');

        return view('layanan_hasil', compact('nama_layanan', 'kategori', 'deskripsi'));
    }
}
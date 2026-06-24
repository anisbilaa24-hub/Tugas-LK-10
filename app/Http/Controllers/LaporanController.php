<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Laporan;

class LaporanController extends Controller
{
    public function index()
    {
        $laporan = Laporan::latest()->get();

        return view('laporan.index', compact('laporan'));
    }

    public function create()
    {
        return view('laporan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_pelapor' => 'required|max:100',
            'jenis_sampah' => 'required|max:100',
            'deskripsi' => 'required|min:10',
            'lokasi' => 'required|max:255'
        ]);

        Laporan::create([
            'nama_pelapor' => $request->nama_pelapor,
            'jenis_sampah' => $request->jenis_sampah,
            'deskripsi' => $request->deskripsi,
            'lokasi' => $request->lokasi
        ]);

        return redirect('/laporan')
            ->with('success', 'Laporan berhasil ditambahkan');
    }
}
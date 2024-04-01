<?php

namespace App\Http\Controllers;

use App\Models\PartamianganModel;
use Illuminate\Http\Request;
use Carbon\Carbon; // Import Carbon dari namespace global

class PartamianganController extends Controller
{
    //
    public function listPartamiangan() {
        $view = PartamianganModel::all();
        return view('admin.acara.partamiangan.list_acara', compact('view'));    }

    public function addPartamiangan() {
        return view ('admin.acara.partamiangan.tambah_acara');
    }

    public function storePartamiangan(Request $request) {
        // Validasi data yang diterima dari formulir
        $request->validate([
            'kegiatan' => 'required|string',
            'petugas' => 'required|string',
            'tempat' => 'required|string',
            'tanggal_waktu' => 'required|date',
            'deskripsi_singkat' => 'nullable|string',
        ]);

        // Konversi format tanggal dan waktu
        $tanggal_waktu = Carbon::createFromFormat('d F Y h:i A', $request->tanggal_waktu)->format('Y-m-d H:i:s');

        // Simpan data ke database menggunakan model
        PartamianganModel::create([
            'kegiatan' => $request->kegiatan,
            'petugas' => $request->petugas,
            'tempat' => $request->tempat,
            'tanggal_waktu' => $tanggal_waktu,
            'deskripsi_singkat' => $request->deskripsi_singkat,
        ]);

        // Redirect ke halaman yang sesuai, atau tampilkan pesan sukses
        return redirect()->route('admin.acara.partamiangan.list_acara')->with('success', 'Data Partamiangan berhasil ditambahkan.');
    }

    public function partamianganview()
{
    $view = PartamianganModel::all();
    return view('acara.partamiangan', compact('view'));


}

}

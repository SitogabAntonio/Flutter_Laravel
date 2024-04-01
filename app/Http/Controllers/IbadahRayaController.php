<?php

namespace App\Http\Controllers;

use App\Models\IbadahRaya;
use App\Models\IbadahRayaModel;
use Illuminate\Http\Request;

class IbadahRayaController extends Controller
{
    public function listAcara()
    {
        return view('admin.acara.ibadah_raya.list_acara');
    }

    public function tambahAcara()
    {
        return view('admin.acara.ibadah_raya.tambah_acara');
    }

    public function insertIbadah(Request $request)
    {
        // Validasi input jika diperlukan
        $request->validate([
            'judul' => 'required|string',
            'deskripsi' => 'required|string',
            'tanggal_waktu' => 'required|date_format:Y-m-d H:i:s',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // sesuaikan dengan jenis dan ukuran file yang diizinkan
            'detail_kegiatan' => 'required|string',
        ]);

        // Menyimpan data yang diterima dari form ke dalam database
        $ibadahRaya = new IbadahRayaModel();
        $ibadahRaya->judul = $request->judul;
        $ibadahRaya->deskripsi = $request->deskripsi;
        // Ubah format tanggal dan waktu
        $ibadahRaya->tanggal_waktu = $request->tanggal_waktu;

        // Jika ada file gambar yang diunggah, simpan dan ambil path-nya
        if ($request->hasFile('gambar')) {
            $gambarPath = $request->file('gambar')->store('gambar_ibadah', 'public');
            $ibadahRaya->gambar = $gambarPath;
        }

        $ibadahRaya->detail_kegiatan = $request->detail_kegiatan;
        $ibadahRaya->save();

        // Redirect atau response sesuai kebutuhan
        return redirect('acara/ibadah_raya/list_acara')->with('success', 'Data ibadah raya berhasil disimpan.');
    }
}

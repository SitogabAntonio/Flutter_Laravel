<?php

namespace App\Http\Controllers;

use App\Models\PendetaModel;
use Illuminate\Http\Request;
use App\Models\GerejaModel;
use Illuminate\Support\Facades\Storage;


class GerejaController extends Controller
{
    public function add() {
        return view ('admin.gereja.sejarah.add');
    }

    public function add_bph() {
        return view ('admin.gereja.bph.add');
    }

    public function add_pendeta() {
        return view ('admin.gereja.pendeta.add');
    }

    public function list_bph() {
        return view ('admin.gereja.bph.list');
    }

    public function list_pendeta() {
        return view ('admin.gereja.pendeta.list');
    }

    public function overview_bph() {
        return view ('gereja.bph');
    }



    public function post_bph(Request $request) {
        $validatedData = $request->validate([
            'nama' => 'required|string',
            'jabatan' => 'required|string',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'deskripsi_singkat' => 'nullable|string',
        ]);

        $bph = new GerejaModel();
        $bph->nama = $validatedData['nama'];
        $bph->jabatan = $validatedData['jabatan'];
        $bph->deskripsi_singkat = $validatedData['deskripsi_singkat'];

        // Upload gambar jika ada
        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar');
            $gambarPath = $gambar->store('public/images'); // Simpan gambar ke storage

            // Simpan path gambar ke dalam database
            $bph->gambar = Storage::url($gambarPath);
        }

        $bph->save();

        // Redirect ke halaman yang sesuai setelah data disimpan
        return redirect()->route('gereja/bph/list');
    }

    public function view_bph() {

        $data_pendeta = PendetaModel::all();
        $data_bph = GerejaModel::all();

        return view('gereja.bph', compact('data_pendeta', 'data_bph')); // Kirimkan data BPH ke view
    }


    public function store_pendeta(Request $request)
    {
        $validatedData = $request->validate([
            'nama_pendeta' => 'required|string',
            'jabatan' => 'required|string',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'deskripsi_singkat' => 'nullable|string',
        ]);





        $pendeta = new PendetaModel();
        $pendeta->nama_pendeta = $validatedData['nama_pendeta'];
        $pendeta->jabatan = $validatedData['jabatan'];
        $pendeta->gambar = $validatedData['gambar'] ?? null;
        $pendeta->deskripsi_singkat = $validatedData['deskripsi_singkat'] ?? null;

        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar');
            $gambarPath = $gambar->store('public/images'); // Simpan gambar ke storage

            $pendeta->gambar = Storage::url($gambarPath);
        }

        $pendeta->save();

        return redirect()->route('gereja/bph/list')->with('success', 'Pendeta berhasil ditambahkan.');
    }



}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AcaraModel;
use App\Models\CategoryModel;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class AcaraController extends Controller
{

    public function upcoming() {
        $sejarah = AcaraModel::all();
    return view('acara.upcoming', compact('upcoming'));
    }

    public function view_upcoming() {

        $upcoming = AcaraModel::all();

        return view('acara.upcoming', compact('upcoming')); // Kirimkan data BPH ke view


    }

    public function upcoming_single($id) {
        $single = AcaraModel::find($id);

        if (!$single) {
            // Handle ketika data tidak ditemukan, misalnya dengan menampilkan halaman 404
            abort(404);
        }

        return view('acara.upcoming_single', compact('single'));
    }





    //untuk view up coming mengembalikan variabel acara
    public function _upcoming() {
        $acara = AcaraModel::all();
        return $acara;
    }

    public function upcoming_view(){
        $acara = AcaraModel::all();
        return view('admin.acara.upcoming.list_acara', compact('acara'));
    }

    //untuk view tambah upcoming
    public function tambah_upcoming() {
        return view ('admin.acara.upcoming.tambah_acara');
    }

    //masukkan data ke database
    public function insert_upcoming(Request $request) {
        // Validasi data yang diterima dari form
        $request->validate([
            'judul' => 'required',
            'deskripsi' => 'required',
            'tanggal_waktu' => 'required|date_format:d F Y h:i a', // Sesuaikan format sesuai dengan format yang diterima dari formulir
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'detail_kegiatan' => 'required',
        ]);

        // Simpan gambar ke dalam penyimpanan (storage)
    $path = $request->file('gambar')->store('public/images');

    // Ambil nama file gambar untuk disimpan ke dalam database
    $nama_gambar = basename($path);

        // Buat data acara baru
        $acara = new AcaraModel([
            'judul' => $request->input('judul'),
            'deskripsi' => $request->input('deskripsi'),
            'tanggal_waktu' => Carbon::createFromFormat('d F Y h:i a', $request->input('tanggal_waktu'))->format('Y-m-d H:i:s'), // Gunakan format datetime yang sudah dikonversi
            'gambar' => $nama_gambar,
            'detail_kegiatan' => $request->input('detail_kegiatan'),
        ]);

        // Simpan data acara ke database
        $acara->save();

        // Redirect dengan pesan sukses
        return redirect()->back()->with('success', 'Acara berhasil ditambahkan!');

    }


    public function edit_upcoming($id){
        $acara = AcaraModel::findOrFail($id);

        return view('admin.acara.ibadah_raya.edit_acara', compact('acara'));
    }

    public function update_upcoming(Request $request, $id){
        // Validasi data yang diterima dari form
        $request->validate([
            'judul' => 'required',
            'deskripsi' => 'required',
            'tanggal_waktu' => 'required|date_format:Y-m-d\TH:i',
            'gambar' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'detail_kegiatan' => 'required',
        ]);

        // Mengambil data acara berdasarkan ID
        $acara = AcaraModel::findOrFail($id);

        // Mengupdate data acara dengan data yang diterima dari form
        $acara->judul = $request->judul;
        $acara->deskripsi = $request->deskripsi;
        $acara->tanggal_waktu = $request->tanggal_waktu;
        $acara->detail_kegiatan = $request->detail_kegiatan;

        // Jika ada file gambar yang diunggah, simpan gambar baru
        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar');
            $nama_gambar = time().'.'.$gambar->getClientOriginalExtension();
            $gambar->move(public_path('images'), $nama_gambar);
            $acara->gambar = $nama_gambar;
        }

        // Simpan perubahan ke dalam database
        $acara->save();

        // Redirect dengan pesan sukses
        return redirect()->route('acara.upcoming.list_acara')->with('success', 'Acara berhasil diperbarui!');
    }

    public function destroy_upcoming($id)
    {
        // Cari data acara berdasarkan ID
        $acara = AcaraModel::findOrFail($id);

        // Hapus gambar terkait dari penyimpanan jika ada
        if (file_exists(public_path('images/' . $acara->gambar))) {
            unlink(public_path('images/' . $acara->gambar));
        }

        // Hapus data acara dari database
        $acara->delete();

        // Redirect dengan pesan sukses
        return redirect()->route('acara.upcoming.list_acara')->with('success', 'Acara berhasil dihapus!');
    }

    public function _ibadah_raya() {
        return view ('admin.acara.ibadah_raya.list_acara');
    }

    public function _partamiangan() {
        return view ('admin.acara.partamiangan.list_acara');
    }

    public function tambah_ibadah() {
        return view ('admin.acara.ibadah_raya.tambah_acara');
    }

    public function tambah_partamiangan() {
        return view ('admin.acara.partamiangan.tambah_acara');
    }




}


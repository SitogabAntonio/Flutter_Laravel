<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KasModel;
use Illuminate\Support\Facades\Storage;

class KasController extends Controller
{
    public function kas() {
        $arus_kas = KasModel::all();

        return view ('admin.keuangan.kas.list_kas', compact('arus_kas'));
    }

    public function edit_kas($id) {
        $aruskas = KasModel::findOrFail($id);

        return view ('admin.keuangan.kas.edit_kas', compact('aruskas'));
    }

    public function tambah_kas() {
        return view ('admin.keuangan.kas.tambah_kas');
    }

    public function laporan_kas() {
        $data = KasModel::all();

        return view ('laporan.kas', compact('data'));
    }

    public function kasview($id) {
        $single = KasModel::find($id);
        if (!$single) {
            // Handle ketika data tidak ditemukan, misalnya dengan menampilkan halaman 404
            abort(404);
        }
        return view ('laporan.kas_single', compact('single'));
    }

    public function kas_detail() {

        $detail = KasModel::all();

        return view('laporan.kas_single', compact('detail'));

    }



    public function insert_kas(Request $request){
        // Validasi request
        $validatedData = $request->validate([
            'judul' => 'required|string|max:255',
            'periode' => 'required|string|max:255',
            'tanggal_mulai' => 'required|date',
            'tanggal_akhir' => 'required|date',
            'total' => 'required|string|max:50',
            'image_file' => 'nullable|image|max:2048', // Optionally add image validation rules
            'detail_kas' => 'nullable|string',
        ]);


            // Simpan data ke dalam database
            $kas = new KasModel();
            $kas->judul = $validatedData['judul'];
            $kas->periode = $validatedData['periode'];
            $kas->created_at = $validatedData['tanggal_mulai'];
            $kas->updated_at = $validatedData['tanggal_akhir'];
            $kas->total = $validatedData['total'];
            $kas->detail_kas = $validatedData['detail_kas'];

            // Handle file upload jika ada
            if ($request->hasFile('image_file')) {
                $image_file = $request->file('image_file');
                $gambarPath = $image_file->store('public/images'); // Simpan gambar ke storage
                $kas->image_file = Storage::url($gambarPath);
            }

        $kas->save();

        // Redirect ke halaman yang sesuai atau tampilkan pesan sukses
        return redirect('keuangan/kas/list_kas')->with('success', 'Data berhasil disimpan.');
    }

    public function update_kas(Request $request, $id){
    // Validasi request
    $validatedData = $request->validate([
        'judul' => 'required|string|max:255',
        'periode' => 'required|string|max:255',
        'tanggal_mulai' => 'required|date',
        'tanggal_akhir' => 'required|date',
        'total' => 'required|string|max:50',
        'image_file' => 'nullable|image|max:2048', // Optionally add image validation rules
        'detail_kas' => 'nullable|string',
    ]);

    // Temukan data arus kas yang akan diperbarui
    $kas = KasModel::findOrFail($id);

    // Update data arus kas dengan data baru
    $kas->judul = $validatedData['judul'];
    $kas->periode = $validatedData['periode'];
    $kas->created_at = $validatedData['tanggal_mulai'];
    $kas->updated_at = $validatedData['tanggal_akhir'];
    $kas->total = $validatedData['total'];
    $kas->detail_kas = $validatedData['detail_kas'];

    // Handle file upload jika ada
    if ($request->hasFile('image_file')) {
        // Hapus gambar lama jika ada
        if ($kas->image_file) {
            // Hapus gambar lama dengan menggunakan fungsi unlink
            unlink(public_path($kas->image_file));
        }
        // Upload gambar baru
        $image = $request->file('image_file');
        $imageName = time().'.'.$image->extension();
        $image->move(public_path('uploads/kas'), $imageName);
        $kas->image_file = 'uploads/kas/'.$imageName;
    }

    // Simpan perubahan
    $kas->save();

    // Redirect ke halaman yang sesuai atau tampilkan pesan sukses
    return redirect('keuangan/kas/list_kas')->with('success', 'Data berhasil diperbarui.');
    }

    public function destroy_kas($id){
        // Temukan data arus kas yang akan dihapus
        $kas = KasModel::findOrFail($id);

        // Hapus gambar terkait jika ada
        if ($kas->image_file) {
            Storage::delete($kas->image_file);
        }

        // Hapus data arus kas
        $kas->delete();

        // Redirect ke halaman yang sesuai atau tampilkan pesan sukses
        return redirect('keuangan/kas/list_kas')->with('success', 'Data berhasil dihapus.');
    }
}

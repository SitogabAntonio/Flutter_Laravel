<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SejarahModel;
use App\Models\User;

class SejarahController extends Controller
{
    public function view()
    {
        return view('admin.gereja.sejarah.view');
    }

    public function sejarah1()
    {
        return view('admin.gereja.sejarah.add');
    }

    public function store(Request $request)
    {
        // Validasi data yang diterima dari form
        $validatedData = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'gambar_1' => 'nullable|image|max:2048',
            'gambar_2' => 'nullable|image|max:2048',
            'gambar_3' => 'nullable|image|max:2048',
        ]);

        // Proses penyimpanan data ke database
        $sejarah = new SejarahModel();
        $sejarah->judul = $validatedData['title'];
        $sejarah->detail_sejarah = $validatedData['description'];

        // Penanganan upload gambar
        if ($request->hasFile('gambar_1')) {
            $gambar_1 = $request->file('gambar_1')->store('uploads/sejarah');
            $sejarah->gambar_1 = $gambar_1;
        }

        if ($request->hasFile('gambar_2')) {
            $gambar_2 = $request->file('gambar_2')->store('uploads/sejarah');
            $sejarah->gambar_2 = $gambar_2;
        }

        if ($request->hasFile('gambar_3')) {
            $gambar_3 = $request->file('gambar_3')->store('uploads/sejarah');
            $sejarah->gambar_3 = $gambar_3;
        }

        $sejarah->save();

        // Redirect ke halaman lain atau kembali ke halaman sebelumnya
        return redirect()->back()->with('success', 'Data sejarah berhasil disimpan.');
    }

    public function overview()
{
    $sejarah = SejarahModel::all();
    return view('gereja.sejarah', compact('sejarah'));


}
}

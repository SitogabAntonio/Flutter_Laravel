<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AyatController extends Controller
{


    public function ayat() {
        return view ('admin.ayat_harian.list_ayat');
    }

    public function tambah_ayat() {
        return view ('admin.ayat_harian.tambah_ayat');
    }



}

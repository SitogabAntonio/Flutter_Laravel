<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BeritaController extends Controller
{
    public function list_berita() {
        return view ('admin.berita.dukacita.list_berita');
    }
}

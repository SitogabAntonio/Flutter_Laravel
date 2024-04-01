<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WartaController extends Controller
{
    public function warta() {
        return view ('admin.warta.list_warta');
    }

    public function tambah_warta() {
        return view ('admin.warta.tambah_warta');
    }
}

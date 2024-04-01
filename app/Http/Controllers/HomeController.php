<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PendetaModel;
use App\Models\GerejaModel;

class HomeController extends Controller
{
    public function view_home() {

        $data_pendeta = PendetaModel::all();
        $data_bph = GerejaModel::all();

        return view('home.home', compact('data_pendeta', 'data_bph')); // Kirimkan data BPH ke view
    }


}

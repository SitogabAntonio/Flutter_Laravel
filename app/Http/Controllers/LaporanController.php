<?php

namespace App\Http\Controllers;

use App\Models\LaporanModel;
use Illuminate\Http\Request;

class LaporanController extends Controller
{
    public function laporan()
    {
        $data['getRecord'] = LaporanModel::getRecord();
        return view ('laporan/persembahan', $data);
    }
}

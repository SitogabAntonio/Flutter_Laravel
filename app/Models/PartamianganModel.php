<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Request;

class PartamianganModel extends Model
{
    use HasFactory;

    protected $table = 'partamiangan';

    protected $fillable = ['kegiatan', 'petugas', 'tempat', 'tanggal_waktu', 'deskripsi_singkat'];

    static public function getRecord()
    {
        $return = self::select('kegiatan', 'petugas', 'tempat', 'tanggal_waktu')
                ->orderBy('id', 'desc')
                ->get();

        if(!empty(Request::get('id')))
        {
            $return = $return->where('id', '=', Request::get('id'));
        }

        if(!empty(Request::get('kegiatan')))
        {
            $return = $return->where('kegiatan', '=', Request::get('kegiatan'));
        }

        if(!empty(Request::get('petugas')))
        {
            $return = $return->where('petugas', '=', Request::get('petugas'));
        }

        if(!empty(Request::get('tempat')))
        {
            $return = $return->where('tempat', '=', Request::get('tempat'));
        }

        if(!empty(Request::get('tanggal_waktu')))
        {
            $return = $return->where('tanggal_waktu', '=', Request::get('tanggal_waktu'));
        }


        return $return;
    }

}

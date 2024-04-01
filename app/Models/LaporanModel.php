<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LaporanModel extends Model
{
    use HasFactory;

    protected $table = 'keuangan';

    static public function getRecord()
    {
        return self::select('judul', 'minggu', 'created_at as tanggal', 'total')
                ->orderBy('id', 'desc')
                ->get();

        if(!empty(Request::get('minggu')))
        {
            $return = $return->where('minggu', '=', Request::get('minggu'));
        }

        if(!empty(Request::get('created_at')))
        {
            $return = $return->where('created_at', '=', Request::get('created_at'));
        }

        if(!empty(Request::get('total')))
        {
            $return = $return->where('total', '=', Request::get('total'));
        }
    }
}

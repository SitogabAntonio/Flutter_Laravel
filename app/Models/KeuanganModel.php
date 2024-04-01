<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Request;

class KeuanganModel extends Model
{
    use HasFactory;

    protected $table = 'keuangan';

    static public function getRecord()
    {
        $return = self::select('judul', 'minggu', 'created_at as tanggal', 'total', 'detail_persembahan')
                ->orderBy('id', 'desc')
                ->get();

        if(!empty(Request::get('id')))
        {
            $return = $return->where('id', '=', Request::get('id'));
        }

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

        return $return;
    }

    static function getSingle($id)
    {
        return self::find($id);
    }

    public function getImage()
    {
        if(!empty($this->image_file) && file_exists('keuangan_pic/'.$this->image_file))
        {
            return url('keuangan_pic/'.$this->image_file);
        }
        else
        {
            return "";
        }
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Request;
use Auth;

class AcaraModel extends Model
{
    use HasFactory;

    protected $table = 'acara';
    protected $primaryKey = 'id';


    protected $fillable = [
        'judul',
        'deskripsi',
        'tanggal_waktu',
        'gambar',
        'detail_kegiatan',
    ];
}

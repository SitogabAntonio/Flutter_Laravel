<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AyatHarianModel extends Model
{
    // Nama tabel dalam database yang terkait dengan model
    protected $table = 'ayat_harians';

    // Kolom-kolom yang dapat diisi (fillable)
    protected $fillable = [
        'ayat', 'keterangan', // Sesuaikan dengan kolom yang ada di tabel ayat_harians
    ];


    protected $hidden = [
        'created_at', 'updated_at',
    ];
}

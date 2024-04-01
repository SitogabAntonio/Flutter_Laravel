<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PendetaModel extends Model
{
    use HasFactory;

    protected $table = "pendeta";

    protected $fillable = [
        'nama_pendeta',
        'jabatan',
        'gambar',
        'deskripsi_singkat',
    ];

}

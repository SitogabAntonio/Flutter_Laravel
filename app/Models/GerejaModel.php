<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GerejaModel extends Model
{
    use HasFactory;

    protected $table = 'bph_formulirs';

    protected $fillable = [
        'nama',
        'jabatan',
        'image_file',
        'deskripsi_singkat',
    ];
}

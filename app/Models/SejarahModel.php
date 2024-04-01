<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SejarahModel extends Model
{
    use HasFactory;

    protected $table = '_sejarah_';

    protected $fillable = [
        'judul',
        'detail_sejarah',
        'gambar_1',
        'gambar_2',
        'gambar_3'
    ];

    
}

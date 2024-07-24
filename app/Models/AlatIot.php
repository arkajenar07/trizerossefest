<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AlatIot extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_alat',
        'harga',
        'gambar',
        'atribut',
    ];
}

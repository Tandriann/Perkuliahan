<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class buku extends Model
{
    protected $connection = 'mysql';
    protected $fillable = [
        'judul', 'pengarang', 'penerbit', 'tahun_terbit', 'created_at', 'updated_at'
    ];
}

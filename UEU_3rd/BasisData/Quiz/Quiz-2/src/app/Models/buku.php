<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class buku extends Model
{
    protected $connection = 'mysql';
    protected $fillable = [
        'id_buku', 'id_kategori', 'judul', 'pengarang', 'tahun_terbit', 'created_at', 'updated_at', 'deleted_at'
    ];
}

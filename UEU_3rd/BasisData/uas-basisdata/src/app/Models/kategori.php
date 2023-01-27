<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class kategori extends Model
{
    protected $connection = 'mysql';
    protected $fillable = [
        'nama_kategori', 'created_at', 'updated_at'
    ];
}

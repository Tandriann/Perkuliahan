<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class peminjaman extends Model
{
    protected $connection = 'mysql';
    protected $fillable = [
        'tanggal_peminjaman', 'tanggal_pengmbalian', 'status', 'created_at', 'updated_at'
    ];
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use \Carbon\Carbon;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $timestamp = \Carbon\Carbon::now()->toDateTimeString();
        DB::table("kategori")->insert([
            "nama_kategori" => "Eboox",
            "created_at" => $timestamp,
            "updated_at" => $timestamp
        ]);
    }
}

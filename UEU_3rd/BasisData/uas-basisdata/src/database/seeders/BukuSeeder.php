<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use \Carbon\Carbon;
use Illuminate\Support\Str;

class BukuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $timestamp = \Carbon\Carbon::now()->toDateTimeString();
        DB::table("buku")->insert([
            "judul" => "Dilan1990",
            "pengarang" => "Pidi Baiq",
            "penerbit" => "Mizan Digital Publishing (MDP)",
            "tahun_terbit" => "2014",
            "created_at" => $timestamp,
            "updated_at" => $timestamp
        ]);
    }
}

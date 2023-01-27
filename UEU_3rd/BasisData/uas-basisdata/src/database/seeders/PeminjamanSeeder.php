<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Provider\DateTime;
use Faker\Factory as Faker;

class PeminjamanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $faker = Faker::create();

        $timestamp = \Carbon\Carbon::now()->toDateTimeString();
        DB::table("peminjaman")->insert([
            "tanggal_peminjaman" => $faker->datetime,
            "tanggal_pengembalian" => $faker->datetime,
            "status" => "peminjaman",
            "created_at" => $timestamp,
            "updated_at" => $timestamp
        ]);
    }
}

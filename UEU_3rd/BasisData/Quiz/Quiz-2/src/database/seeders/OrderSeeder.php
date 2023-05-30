<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
use Illuminate\Support\Str;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        for ($i = 0; $i < 100; $i++) {

            $timestamp = \Carbon\Carbon::now()->toDateTimeString();
            DB::table('orders')->insert([
                'user' => $faker->name,
                'product' => 'baju',
                'total' => $faker->randomDigit,
                'status' => 'pending',
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ]);
        }
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class TesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        $waktu =  $faker->dateTimeThisMonth('+12 days');

        for ($i = 0; $i < 10; $i++) {
            DB::table('tes')->insert(
                [
                    'nama' => $faker->words(2, true),
                    'kategoriId' => $faker->numberBetween(1, 10),
                    'kelasId' => $faker->numberBetween(1, 4),
                    'waktuMulai' => $waktu,
                    'waktuSelesai' => $faker->dateTimeBetween($waktu, '+2 hours'),
                ]
            );
        }
    }
}

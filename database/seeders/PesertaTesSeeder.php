<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class PesertaTesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');

        DB::table('peserta_tes')->insert(
            [
                'userId' => 2,
                'testId' => 1,
            ]
        );

        for ($i = 0; $i < 10; $i++) {
            DB::table('peserta_tes')->insert(
                [
                    'userId' => $faker->numberBetween(1, 52),
                    'testId' => $faker->numberBetween(1, 10),
                ]
            );
        }
    }
}

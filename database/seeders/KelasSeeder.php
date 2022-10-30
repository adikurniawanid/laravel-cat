<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        DB::table('kelas')->insert(
            [
                [
                    'nama' => "REG",
                    'kelompok' => "L1",
                ],
                [
                    'nama' => "BIL",
                    'kelompok' => "L1",
                ], [
                    'nama' => "REG",
                    'kelompok' => "L2",
                ], [
                    'nama' => "BIL",
                    'kelompok' => "L2",
                ]
            ]
        );
    }
}

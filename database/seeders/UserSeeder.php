<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user')->insert([
            'nama' => "admin",
            'email' => "admin@mail.com",
            'password' =>
            Hash::make('admin'),
            'kelasId' => 0,
            'roleId' => 0,
            'username' => "admin"
        ]);
        DB::table('user')->insert([
            'nama' => "akdev",
            'email' => "akdev@mail.com",
            'password' =>
            Hash::make('akdev'),
            'kelasId' => 1,
            'username' => "akdev"
        ]);
    }
}

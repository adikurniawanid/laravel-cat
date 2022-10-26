<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {

        return view('user/tes-tersedia', [
            "title" => "Tes Yang Tersedia",
        ]);
    }

    public function jadwal()
    {
        return view('user/jadwal-tes', [
            "title" => "Jadwal Tes Pengguna",
            // "kategori" => Kategori::all(),
            // "kelas" => Kelas::all(),
            // "tes" =>
            // DB::table('jadwal_tes_view')->get(),
        ]);
    }
}

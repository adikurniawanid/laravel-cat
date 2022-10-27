<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Kategori;
use App\Models\Kelas;

class UserController extends Controller
{
    public function index()
    {
        $this->authorize('user');

        return view('user/tes-tersedia', [
            "title" => "Tes Yang Tersedia",
            "tes" =>
            DB::table('jadwal_tes_view')->get(),
        ]);
    }

    public function jadwal()
    {
        $this->authorize('user');

        return view('user/jadwal-tes', [
            "title" => "Jadwal Tes Pengguna",
            "tes" =>
            DB::table('jadwal_tes_view')->get(),
        ]);
    }
}

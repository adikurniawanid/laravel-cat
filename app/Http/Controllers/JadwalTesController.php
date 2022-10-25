<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Kategori;
use App\Models\Kelas;

class JadwalTesController extends Controller
{
    public function index()
    {

        return view('admin/jadwal-tes', [
            "title" => "Jadwal Tes",
            "kategori" => Kategori::all(),
            "kelas" => Kelas::all(),
            "tes" =>
            DB::table('jadwal_tes_view')->get(),
        ]);
    }
}

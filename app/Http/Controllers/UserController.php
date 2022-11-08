<?php

namespace App\Http\Controllers;


use App\Models\Kelas;
use App\Models\Kategori;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index()
    {
        $this->authorize('user');

        return view('user/tes-tersedia', [
            "title" => "Tes Yang Tersedia",
            // "tes" =>
            // // DB::table('jadwal_tes_view')->get(),
            // DB::table('jadwal_tes_view')
            //     ->join('peserta_tes', 'peserta_tes.testId', '=', 'jadwal_tes_view.id')
            //     ->join('user', 'user.id', '=', 'peserta_tes.userId')
            //     ->where('user.id', '=', auth()->user()->id)
            //     ->whereNot(function ($query) {
            //         $query->table()->where('user.id', "=", auth()->user()->id);
            //     })
            //     ->select('jadwal_tes_view.id', 'jadwal_tes_view.nama', 'jadwal_tes_view.pukul', 'jadwal_tes_view.tanggal', 'jadwal_tes_view.kelas')
            //     ->get(),
        ]);
    }

    public function jadwal()
    {
        $this->authorize('user');

        return view('user/jadwal-tes', [
            "title" => "Jadwal Tes Pengguna",
            "tes" =>
            DB::table('jadwal_tes_view')
                ->join('peserta_tes', 'peserta_tes.testId', '=', 'jadwal_tes_view.id')
                ->join('user', 'user.id', '=', 'peserta_tes.userId')
                ->where('user.id', '=', auth()->user()->id)
                ->select('jadwal_tes_view.id', 'jadwal_tes_view.nama', 'jadwal_tes_view.pukul', 'jadwal_tes_view.tanggal', 'jadwal_tes_view.kelas')
                ->get(),
        ]);
    }
}

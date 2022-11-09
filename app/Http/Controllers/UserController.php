<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Kelas;
use App\Models\Kategori;
use App\Models\PesertaTes;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index()
    {
        $this->authorize('user');

        return view('user/tes-tersedia', [
            "title" => "Tes Yang Tersedia",
            "tes" =>
            DB::table('jadwal_tes_view')
                ->whereNotIn('id', DB::table('peserta_tes')->select('testId')->where('userId', '=', auth()->user()->id))
                ->get()
        ]);
    }

    public function jadwal()
    {
        $this->authorize('user');

        return view('user/jadwal-tes', [
            "title" => "Jadwal Tes Pengguna",
            "tes" =>
            DB::table('jadwal_tes_view')->distinct()
                ->join('peserta_tes', 'peserta_tes.testId', '=', 'jadwal_tes_view.id')
                ->join('user', 'user.id', '=', 'peserta_tes.userId')
                ->where('user.id', '=', auth()->user()->id)
                ->select('jadwal_tes_view.id', 'jadwal_tes_view.nama', 'jadwal_tes_view.pukul', 'jadwal_tes_view.tanggal', 'jadwal_tes_view.kelas')
                ->get(),
        ]);
    }

    public function add(Request $request)
    {
        $this->authorize('user');

        $validatedData = $request->validate([
            'testId' => 'required',
        ]);

        $validatedData['userId'] = auth()->user()->id;

        $pesertaTes = PesertaTes::create($validatedData);

        if ($pesertaTes) {
            return redirect()->back()->with('success', 'Tes Berhasil ditambahkan');
        } else {
            return redirect()->back()->with('failed', 'Tes Gagal ditambahkan');
        }
    }
}

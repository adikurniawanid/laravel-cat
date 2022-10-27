<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Tes;
use App\Models\Kategori;
use App\Models\Kelas;

class JadwalController extends Controller
{

    public function index()
    {
        $this->authorize('admin');

        return view('admin/jadwal-tes', [
            "title" => "Jadwal Tes",
            "kategori" => Kategori::all(),
            "kelas" => Kelas::all(),
            "tes" =>
            DB::table('jadwal_tes_view')->get(),
        ]);
    }

    public function add(Request $request)
    {
        $this->authorize('admin');

        $validatedData = $request->validate([
            'nama' => 'required|max:255',
            'kategoriId' => 'required',
            'kelasId' => 'required',
            'waktuMulai' => 'required|date',
            'durasi' => 'required|min:0',
        ]);

        $validatedData["waktuSelesai"] = date("Y-m-d H:i:s", strtotime($validatedData["waktuMulai"]) + $validatedData["durasi"] * 60);

        $tes = Tes::create($validatedData);

        if ($tes) {
            return redirect('/admin/jadwal')->with('success', 'Jadwal Berhasil ditambahkan');
        } else {
            return redirect('/admin')->with('failed', 'Jadwal Gagal ditambahkan');
        }
    }
}

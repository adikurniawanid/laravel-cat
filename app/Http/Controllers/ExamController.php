<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Tes;


class ExamController extends Controller
{
    public function index(Request $request, Tes $tes)
    {
        $this->authorize('user');

        if ($tes->waktuMulai < now() && $tes->waktuSelesai < now()) {
            return redirect('/user/jadwal')->with('notice', 'Tes Telah Selesai');
        } else if ($tes->waktuMulai > now() && $tes->waktuSelesai > now()) {
            return redirect()->back()->with('failed', 'Tes Belum dimulai');
        } else if ($tes->waktuMulai < now() && $tes->waktuSelesai > now()) {
            return view('exam/index', [
                "title" => "Exam",
                "soal" =>
                DB::table('soal')
                    ->join('tes', 'tes.kategoriId', '=', 'soal.kategoriId')
                    ->where('tes.id', '=', $tes->id)
                    ->select('soal.id', 'soal.soal', 'soal.jawaban', 'soal.pilihan1', 'soal.pilihan2', 'soal.pilihan3')
                    ->get(),
                "tes" => $tes
            ]);
        }
    }
}

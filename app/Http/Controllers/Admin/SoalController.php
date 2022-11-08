<?php

namespace App\Http\Controllers\Admin;

use App\Models\Kelas;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Imports\SoalImport;
use App\Models\Kategori;
use Maatwebsite\Excel\Facades\Excel;

class SoalController extends Controller
{

    public function index()
    {
        $this->authorize('admin');

        return view('admin/bank-soal', [
            "title" => "Bank Soal",
            "kelas" => Kelas::all(),
            "soal" =>
            DB::table('bank_soal_view')->get(),
        ]);
    }

    public function add(Request $request)
    {
        $this->authorize('admin');

        $kategoriData = $request->validate([
            'nama' => 'required',
        ]);


        $id = Kategori::create($kategoriData)->id;

        Excel::import(new SoalImport($id), $request->file('file'));
        return redirect()->back();
    }
}

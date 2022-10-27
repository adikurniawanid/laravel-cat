<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;


use App\Models\Kelas;

class SoalController extends Controller
{

    public function index()
    {
        $this->authorize('admin');

        return view('admin/bank-soal', [
            "title" => "Bank Soal",
            "kelas" => Kelas::all(),
        ]);
    }
}

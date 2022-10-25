<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kelas;

class BankSoalController extends Controller
{

    public function index()
    {

        return view('admin/bank-soal', [
            "title" => "Bank Soal",
            "kelas" => Kelas::all(),
        ]);
    }
}

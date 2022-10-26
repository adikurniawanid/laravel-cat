<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Kelas;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth/register', [
            "title" => "Daftarkan Akun",
            "kelas" => Kelas::all()
        ]);
    }
}

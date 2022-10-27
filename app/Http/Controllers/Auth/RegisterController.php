<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Kelas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth/register', [
            "title" => "Daftarkan Akun",
            "kelas" => Kelas::all()
        ]);
    }

    public function add(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required|max:255',
            'username' => ['required', 'min:3', 'max:255', 'unique:user'],
            'email' => 'required|email:dns|unique:user',
            'password' => 'required|min:5|max:255',
            'kelasId' => 'required'
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);

        $user = User::create($validatedData);

        if ($user) {
            return redirect('/auth/login')->with('success', 'Akun Berhasil didaftarkan, Silahkan untuk login');
        }
    }
}

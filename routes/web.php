<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BankSoalController;
use App\Http\Controllers\JadwalTesController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/auth/login/admin', function () {
    return view('auth/login-admin', [
        "title" => "Login Admin"
    ]);
});

Route::get('/auth/login', function () {
    return view('auth/login', [
        "title" => "Login"
    ]);
});

Route::get('/admin', function () {
    return view('admin/bank-soal', [
        "title" => "Bank Soal"
    ]);
});

Route::get('/admin/bank-soal', [BankSoalController::class, 'index']);

Route::get('/admin/jadwal-tes', [JadwalTesController::class, 'index']);

Route::get('/', function () {
    return view('welcome');
});

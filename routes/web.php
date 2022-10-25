<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/auth/login', function () {
    return view('auth/login');
});

Route::get('/admin', function () {
    return view('admin/bank-soal', [
        "title" => "Bank Soal"
    ]);
});

Route::get('/admin/bank-soal', function () {
    return view('admin/bank-soal', [
        "title" => "Bank Soal"
    ]);
});

Route::get('/admin/jadwal-tes', function () {
    return view('admin/jadwal-tes', [
        "title" => "Jadwal Tes"
    ]);
});

Route::get('/', function () {
    return view('welcome');
});

<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BankSoalController;
use App\Http\Controllers\JadwalTesController;
use App\Http\Controllers\UserController;

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

Route::get('/admin', [AdminController::class, 'index']);

Route::get('/admin/jadwal', [AdminController::class, 'jadwal']);

Route::get('/user', [UserController::class, 'index']);
Route::get('/user/jadwal', [UserController::class, 'jadwal']);

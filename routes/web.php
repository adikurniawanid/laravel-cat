<?php

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Admin\JadwalController;
use App\Http\Controllers\Admin\SoalController;
use Illuminate\Support\Facades\Route;
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

// Auth
Route::get('/auth/login', [LoginController::class, 'index'])->middleware('guest')->name('login');
Route::post('/auth/login', [LoginController::class, 'authenticate'])->middleware('guest');
Route::get('/auth/login/admin', [LoginController::class, 'indexAdmin'])->middleware('guest');
Route::get('/auth/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/auth/register', [RegisterController::class, 'add'])->middleware('guest');
Route::post('/auth/logout', [LoginController::class, 'logout'])->middleware('auth');

// Admin
Route::get('/', [SoalController::class, 'index'])->middleware('auth');
Route::get('/admin', [SoalController::class, 'index'])->middleware('auth');
Route::get('/admin/jadwal', [JadwalController::class, 'index'])->middleware('auth');
Route::post('/admin/jadwal', [JadwalController::class, 'add'])->middleware('auth');
// Route::delete('/admin/jadwal', [AdminController::class, 'deleteJadwal']);

// User
Route::get('/user', [UserController::class, 'index'])->middleware('auth');
Route::get('/user/jadwal', [UserController::class, 'jadwal'])->middleware('auth');

Route::get('/exam', function () {
    return view('exam/index', [
        "title" => "Exam",
    ]);
});

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
Route::get('/auth/login', [LoginController::class, 'index']);
Route::get('/auth/login/admin', [LoginController::class, 'indexAdmin']);
Route::get('/auth/register', [RegisterController::class, 'index']);

// Admin
Route::get('/admin', [SoalController::class, 'index']);
Route::get('/admin/jadwal', [JadwalController::class, 'index']);
Route::post('/admin/jadwal', [JadwalController::class, 'add']);
// Route::delete('/admin/jadwal', [AdminController::class, 'deleteJadwal']);

// User
Route::get('/user', [UserController::class, 'index']);
Route::get('/user/jadwal', [UserController::class, 'jadwal']);

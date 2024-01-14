<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DaftarController;
use App\Http\Controllers\KajianController;
use App\Http\Controllers\KegiatanController;
use App\Http\Controllers\StructureController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\RecruitmentController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/kajians', [KajianController::class, 'index']);
Route::get('/kajians/create', [KajianController::class, 'create'])->middleware('auth');
Route::post('/kajians/create', [KajianController::class, 'store'])->middleware('auth');
Route::post('/kajians/delete/{id}', [KajianController::class, 'destroy'])->middleware('auth');
Route::get('/kajians/edit/{id}', [KajianController::class, 'edit'])->middleware('auth');
Route::post('/kajians/edit/{id}', [KajianController::class, 'update'])->middleware('auth');

Route::get('/recruitment', [RecruitmentController::class, 'index']);
Route::post('/recruitment', [RecruitmentController::class, 'store'])->middleware('guest');
Route::post('/recruitment/{id}', [RecruitmentController::class, 'update'])->middleware('isAdmin');

Route::get('/struktur', [StructureController::class, 'index']);

Route::resource('/kegiatan', KegiatanController::class);

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate'])->name('login')->middleware('guest');

Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/home', [HomeController::class, 'index'])->name('home');

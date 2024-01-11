<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KajianController;

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
    return redirect(route('home'));
});

Route::get('/kajian', [KajianController::class,'index']);
Route::get('/kajian/create', [KajianController::class,'create'])->middleware('auth');
Route::post('/kajian/create', [KajianController::class,'store'])->middleware('auth');
Route::post('/kajian/delete/{id}', [KajianController::class,'destroy'])->middleware('auth');
Route::get('/kajian/edit/{id}', [KajianController::class,'edit'])->middleware('auth');
Route::post('/kajian/edit/{id}', [KajianController::class,'update'])->middleware('auth');

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate'])->name('login')->middleware('guest');

Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/home', [HomeController::class, 'index'])->name('home');


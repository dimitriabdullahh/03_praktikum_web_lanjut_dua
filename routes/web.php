<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\KuliahController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MatkulController;
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

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('dashboard');
Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
Route::get('/kuliah', [KuliahController::class, 'index'])->name('kuliah');
Route::get('/matkul', [MatkulController::class,'index'])->name('matkul');
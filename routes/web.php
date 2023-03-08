<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Profile1Controller;
use App\Http\Controllers\Kuliah1Controller;
use App\Http\Controllers\Dashboard1Controller;
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
    return view('welcome');
});

// Auth::routes();

Route::get('/home', [Home1Controller::class, 'index'])->name('dashboard');
Route::get('/dashboard', [Dashboard1Controller::class, 'index'])->name('dashboard');
Route::get('/profile', [Profile1Controller::class, 'index'])->name('profile');
Route::get('/kuliah', [Kuliah1Controller::class, 'index'])->name('kuliah');

<?php

use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\TentangController;
use App\Http\Controllers\WelcomeController;

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
Route::get('/', [WelcomeController::class, 'welcome'], function () {
    return view('welcome');
});
Route::get('/tentang', [WelcomeController::class, 'tentang'])->name('tentang');
Route::get('/jurusan', [WelcomeController::class, 'jurusan'])->name('jurusan');
Route::get('/kontak', [WelcomeController::class, 'kontak'])->name('kontak');

Auth::routes();

Route::get('/admin/home', [App\Http\Controllers\HomeController::class, 'admin'])->name('admin/home');
Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'dashboard'])->name('dashboard');

Route::prefix('admin')->group(function () {
    Route::put('update-user/{id}', [HomeController::class, 'update_user'])->name('update-user');
    Route::resource('jurusans', JurusanController::class);
    Route::resource('gurus', GuruController::class);
    Route::resource('tentangs', TentangController::class);
    Route::resource('profils', ProfilController::class);
    Route::resource('kontaks', KontakController::class);
});
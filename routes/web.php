<?php

use App\Http\Controllers\BerandaControllerNurFikaDewi;
use App\Http\Controllers\PaketControllerNurFikaDewi;
use App\Http\Controllers\PelangganControllerNurFikaDewi;
use Illuminate\Support\Facades\Route;

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
Route::get('/', [BerandaControllerNurFikaDewi::class, 'index'])->name('beranda');


Route::get('/pelanggan', [PelangganControllerNurFikaDewi::class, 'index'])->name('pelanggan');
Route::get('/tambah_pelanggan', [PelangganControllerNurFikaDewi::class, 'create'])->name('tambah_pelanggan');
Route::PUT('/simpan_pelanggan', [PelangganControllerNurFikaDewi::class, 'store'])->name('simpan_pelanggan');
Route::get('/edit_pelanggan/{pelanggan}', [PelangganControllerNurFikaDewi::class, 'edit'])->name('edit_pelanggan');
Route::PATCH('/update_pelanggan', [PelangganControllerNurFikaDewi::class, 'update'])->name('update_pelanggan');
Route::get('/delete_pelanggan/{pelanggan}', [PelangganControllerNurFikaDewi::class, 'destroy'])->name('delete_pelanggan');




Route::get('/paket', [PaketControllerNurFikaDewi::class, 'index'])->name('paket');
Route::get('/tambah_paket', [PaketControllerNurFikaDewi::class, 'create'])->name('tambah_paket');
Route::PUT('/simpan_paket', [PaketControllerNurFikaDewi::class, 'store'])->name('simpan_paket');
Route::get('/edit_paket/{paket}', [PaketControllerNurFikaDewi::class, 'edit'])->name('edit_paket');
Route::PATCH('/update_paket', [PaketControllerNurFikaDewi::class, 'update'])->name('update_paket');
Route::get('/delete_paket/{paket}', [PaketControllerNurFikaDewi::class, 'destroy'])->name('delete_paket');
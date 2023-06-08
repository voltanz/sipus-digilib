<?php

use App\Http\Controllers\User\BookController;
use App\Http\Controllers\HomeController as DefaultsHomeController;
use App\Http\Controllers\user\TransaksiController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;


Route::get('/book/collection',[BookController::class,'index'])->name('bookCollection');

Route::get('/',[DefaultsHomeController::class,'landingPage'])->name('homepage');

Route::get('/book/{book}',[BookController::class,'show'])->name('book.show');

Route::post('/book/borrow',[BookController::class,'borrow'])->name('book.borrow')->middleware('auth');

Auth::routes(['verify' => true]); //  menghasilkan beberapa rute, termasuk rute untuk mengirimkan email verifikasi, verifikasi email dan menampilkan pesan setelah verifikasi sukses.


Route::get('/home/profile', [HomeController::class,'profile'])->name('home.profile')->middleware('verified');

Route::get('/home/{user}/edit', [HomeController::class,'edit'])->name('profile.edit')->middleware('verified');

// route pinjam
Route::get('/pinjam', [BookController::class,'pinjam'])->name('pinjam.index')->middleware('verified');

Route::delete('/destroy',[BookController::class,'destroy'])->name('delete');

// route profile
Route::prefix('/profile')->group(function () {
    Route::get('/sejarah', [ProfileController::class, 'profile'])->name('sejarah');
    Route::get('/staff', [ProfileController::class, 'staff'])->name('staff');
    Route::get('/vimis', [ProfileController::class, 'vimis'])->name('visiMisi');
    Route::get('/jam', [ProfileController::class, 'jam'])->name('jamPelayanan');
    Route::get('/kontak', [ProfileController::class, 'kontak'])->name('kontak');
});

//route transaksi
Route::get('/transaksi',[TransaksiController::class,'index'])->name('transaksi.index');
Route::post('/transaksi',[TransaksiController::class,'store'])->name('transaksi.store');
Route::get('/detail/{id}',[TransaksiController::class,'detail_pinjam'])->name('detail_pinjam');

// route peraturan
Route::prefix('/peraturan')->group(function () {
    Route::get('/tataTertib', [UserController::class, 'peraturan'])->name('tataTertib');
    Route::get('/peminjaman', [UserController::class, 'peminjaman'])->name('peminjaman');
    Route::get('/pengembalian', [UserController::class, 'pengembalian'])->name('pengembalian');
    Route::get('/denda', [UserController::class, 'denda'])->name('denda');
    Route::get('/keangotaan', [UserController::class, 'keanggotaan'])->name('keanggotaan');
});

Auth::routes();


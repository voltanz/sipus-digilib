<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\UserController;

Route::get('/book/collection', 'User\BookController@index')->name('bookCollection');
Route::get('/', 'HomeController@landingPage')->name('homepage');
Route::get('/book/{book}', 'User\BookController@show')->name('book.show');
Route::post('/book/borrow', 'User\BookController@borrow')->name('book.borrow')->middleware('auth');

Route::get('/user', function () {
    return view('/admin/user/index');
});

Auth::routes(['verify' => true]); //  menghasilkan beberapa rute, termasuk rute untuk mengirimkan email verifikasi, verifikasi email dan menampilkan pesan setelah verifikasi sukses.

Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');
Route::get('/home/profile', 'HomeController@profile')->name('home.profile')->middleware('verified');
Route::get('/home/{user}/edit', 'HomeController@edit')->name('profile.edit')->middleware('verified');

// route pinjam
Route::get('/pinjam', 'user\BookController@pinjam')->name('pinjam.index')->middleware('verified');
Route::delete('/destroy', 'user\BookController@destroy')->name('delete');

//route transaksi
Route::get('/transaksi', 'User\TransaksiController@index')->name('transaksi.index');
Route::post('/transaksi', 'User\TransaksiController@store')->name('transaksi.store');
Route::get('/detail/{id}', 'User\TransaksiController@detail_pinjam')->name('detail_pinjam');


// route peraturan

Route::prefix('/peraturan')->group(function () {
    Route::get('/tataTertib', [UserController::class, 'peraturan'])->name('tataTertib');
    Route::get('/peminjaman', [UserController::class, 'peminjaman'])->name('peminjaman');
    Route::get('/pengembalian', [UserController::class, 'pengembalian'])->name('pengembalian');
    Route::get('/denda', [UserController::class, 'denda'])->name('denda');
});

Route::prefix('admin')->group(function () {
    Route::get('/users', function () {
        // Matches The "/admin/users" URL
    });
});

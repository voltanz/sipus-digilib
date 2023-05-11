<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


Route::get('/', 'User\BookController@index')->name('homepage');
Route::get('/book/{book}', 'User\BookController@show')->name('book.show');
Route::post('/book/borrow', 'User\BookController@borrow')->name('book.borrow')->middleware('auth');



Route::get('/user', function () {
    return view('/admin/user/index');
});

Auth::routes(['verify' => true]);

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

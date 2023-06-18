<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DataController;
use App\Http\Controllers\Admin\HomeController;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\DB;

// halaman admin
Route::get('/', [HomeController::class, 'index'])->name('dashboard');

// rute book admin/book/data
# sumber data
Route::get('/book/data', [DataController::class, 'books'])->name('book.data');
// rute
Route::resource('book', '\App\Http\Controllers\Admin\BookController')->names([
    'index' => 'book.index',
    'create' => 'book.create',
    'store' => 'book.store',
    'update' => 'book.update',
    'edit' => 'book.edit',
    'destroy' => 'book.destroy'
]);

// rute peminjaman admin/borrow/data
# sumber data
Route::get('/borrow/data', [DataController::class, 'borrows'])->name('borrow.data');
# rute peminjaman (borrow)
Route::get('/borrow', [HomeController::class, 'borrows'])->name('borrow.index');
Route::get('/borrow/detail/{id}', [HomeController::class, 'detail'])->name('borrow.detail');
Route::post('/update', 'HomeController@update')->name('borrow.update');

// rute history peminjaman admin/transaksi
# sumber data menggunakan dataTable
Route::get('transaksi', function () {
    $model = DB::table('transaksi')
        ->join('users', 'users.id', '=', 'transaksi.user_id')
        ->join('detail_transaksi', 'detail_transaksi.transaksi_id', '=', 'transaksi.id')
        ->join('books', 'books.id', '=', 'detail_transaksi.book_id')
        ->select('transaksi.user_id', 'transaksi.kode_pinjam',  'users.name', 'books.title', 'books.cover', 'detail_transaksi.*')
        ->orderBy('detail_transaksi.status', 'ASC')
        ->get();

    // dd($model);
    return DataTables::of($model)
        ->addIndexColumn()
        ->addColumn('user', function ($model) {
            return $model->name;
        })
        ->editcolumn('cover', function ($model) {
            return '<img src="' . $model->cover . '" style="width:50px;">';
        })
        ->addColumn('title', function ($model) {
            return $model->title;
        })
        ->addColumn('name', function ($model) {
            return $model->name;
        })
        ->addColumn('tgl_pengembalian', function ($model) {
            if ($model->status == 1) {
                return date('d-m-Y', strtotime($model->tgl_pengembalian));
            } else {
                return '<span class="badge bg-warning">Belum Kembali</span>';
            }
        })
        ->rawColumns(['cover', 'tgl_pengembalian'])
        ->toJson();
})->name('transaksi.history');

Route::get('/transaksi/history', [HomeController::class, 'history'])->name('history');

#menu dashboard
Route::get('/buku/data-dipinjam', [DataController::class, 'masih_dipinjam'])->name('buku.data.pinjam');
Route::get('/buku-dipinjam', [HomeController::class, 'masih_dipinjam'])->name('buku.masih_dipinjam');

# Author
// sumber data
Route::get('/author/data', [DataController::class, 'authors'])->name('author.data');
// routes
Route::resource('author', '\App\Http\Controllers\Admin\AuthorController')->names([
    'index' => 'author.index',
    'create' => 'author.create',
    'store' => 'author.store',
    'edit' => 'author.edit',
    'update' => 'author.update',
    'destroy' => 'author.delete'
]);

# user
// sumber data
Route::get('/user/data', [DataController::class, 'users'])->name('user.data');

Route::resource('user','\App\Http\Controllers\Admin\UserController')->names([
    'index'=>'user.index',
    'edit'=>'user.edit',
    'destroy'=>'user.delete',
    'create'=>'user.create',
    'show'=>'user.show',
    'store'=>'user.store'
]);

Route::get('/cetak-peminjam', [HomeController::class, 'cetak_pdf'])->name('cetak_pdf');

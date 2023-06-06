<?php

use App\Book;
use App\Borrow;
use Illuminate\Support\Facades\Route;
use App\Detail_transaksi;
use App\Http\Controllers\Admin\AuthorController;
use App\Http\Controllers\Admin\DataController;
use App\Http\Controllers\Admin\HomeController;
use App\Transaksi;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\DB;
use App\User;

// author routes
Route::get('/', [HomeController::class,'index'])->name('dashboard');

# Author
// sumber data
Route::get('/author/data', [DataController::class,'authors'])->name('author.data');

// simple author routes
Route::resource('author', AuthorController::class);
Route::get('/author', [AuthorController::class, 'index'])->name('author.index');
Route::get('/author/create', [AuthorController::class,'create'])->name('author.create');
Route::post('/author', [AuthorController::class,'store'])->name('author.store');
Route::get('/author/{id}/edit', [AuthorController::class,'edit'])->name('author.edit');
Route::patch('/author/{author}', [AuthorController::class,'update'])->name('author.update');
Route::delete('/author/{id}', [AuthorController::class,'destroy'])->name('author.delete');

// book routes
Route::get('/book/data', [DataController::class,'books'])->name('book.data');
// simple book routes
Route::resource('book', BookController::class);
Route::get('/book', [BookController::class,'index'])->name('book.index');
Route::get('/book/create', [BookController::class,'create'])->name('book.create');
Route::post('/book', [BookController::class,'store'])->name('book.store');
Route::patch('/book/{book}', [BookController::class,'update'])->name('book.update');
Route::get('/book/{id}/edit', [BookController::class,'edit'])->name('book.edit');
Route::delete('/book/{id}', [BookController::class,'destroy'])->name('book.destroy');



// borrow route
Route::get('/borrow/data', 'DataController@borrows')->name('borrow.data');
Route::get('/borrow', 'HomeController@borrows')->name('borrow.index');
Route::get('/borrow/detail/{id}', 'HomeController@detail')->name('borrow.detail');
Route::post('/update', 'HomeController@update')->name('borrow.update');

// history route
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
        // ->addColumn('admin', function ($model) {
        //     return $model->admin_id;
        // })
        ->rawColumns(['cover', 'tgl_pengembalian'])
        ->toJson();
})->name('transaksi.history');

Route::get('/transaksi/history', 'HomeController@history')->name('history');

#menu dashboard
Route::get('/buku/data-dipinjam', [DataController::class,'masih_dipinjam'])->name('buku.data.pinjam');
    Route::get('/buku-dipinjam',[HomeController::class,'masih_dipinjam'])->name('buku.masih_dipinjam');

    // user routes
Route::get('/user/data', 'DataController@users')->name('user.data');
Route::get('/user', 'UserController@index')->name('user.index');


#sidebar
// author

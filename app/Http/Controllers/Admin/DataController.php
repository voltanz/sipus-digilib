<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Author;
use App\Book;
use App\User;
use App\Transaksi;
use Yajra\DataTables\Facades\DataTables;
use Spatie\Permission\Models\Role;

class DataController extends Controller {
    public function authors()

    {
        $author = Author::query();
        return DataTables()
            ->of($author)
            // ->editColumn('name', 'Hi {{$name}}!')
            ->addIndexColumn()
            ->addColumn('action', "admin.action")
            // ->addColumn('hai', "hai")
            ->rawColumns(['action'])
            ->toJson();
            # views/admin/index.blade.php
    }

    public function Books()

    {
        $book = Book::orderBy('title', 'ASC')->get();

        $book->load('author');

        return DataTables()->of($book)
            ->addIndexColumn()
            ->editcolumn('cover', function (Book $model) {
                return '<img src="' . $model->getCover() . '" style="width:50px;">';
            })
            ->addColumn('author', function (Book $model) {
                return $model->author->name;
            })
            ->addColumn('action', "admin.book.action")
            ->rawColumns(['action', 'cover'])
            ->toJson();
    }

    public function borrows()

    {
        $transaksi = Transaksi::orderBy('transaksi.id', 'DESC')->get();
        $transaksi->load('user');

        return DataTables()->of($transaksi)
            ->addIndexColumn()
            ->addColumn('user', function (Transaksi $model) {
                return $model->user->name;
            })
            ->addColumn('kode_pinjam', function (Transaksi $model) {
                return $model->kode_pinjam;
            })
            ->addColumn('action', "admin.borrow.action")
            ->rawColumns(['action'])
            ->toJson();
    }
    public function masih_dipinjam () {
        $masih_dipinjam =  Transaksi::join('detail_transaksi','transaksi.id','=','detail_transaksi.transaksi_id')->join('books','detail_transaksi.book_id','=','books.id')->select('books.title','transaksi.kode_pinjam')->where('detail_transaksi.status' , '=', 0)->get();
        return DataTables()->of($masih_dipinjam)
        ->addIndexColumn()
        ->toJson();
    }
    public function users()
    
    {
        $users =Role::find(2)->users();
        return DataTables()->of($users)
            ->addIndexColumn()
            ->addColumn('action', "admin.user.action")
            ->rawColumns(['action'])
            ->toJson();
    }
}
<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Author;
use App\Book;
use App\User;
use App\Borrow;
use App\Detail_transaksi;
use App\Transaksi;
use Yajra\DataTables\Facades\DataTables;

class DataController extends Controller
{
    public function Authors()
    {
        $author = Author::orderBy('name', 'ASC');
        return DataTables()
            ->of($author)
            ->addIndexColumn()
            ->addColumn('action', "admin.action")
            ->rawColumns(['action'])
            ->toJson();
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

    public function users()
    {
        $users = User::orderBy('name', 'ASC');

        return DataTables()->of($users)
            ->addIndexColumn()
            ->addColumn('action', "admin.user.action")
            ->rawColumns(['action'])
            ->toJson();
    }
}

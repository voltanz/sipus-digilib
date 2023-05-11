<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Book;
use App\Borrow;
use App\Detail_transaksi;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{
    public function index()
    {

        $books = Book::paginate(10);
        return view('frontend.book.index', [
            'books' => $books
        ]);
    }

    public function show(Book $book)
    {
        $books = Book::where('author_id', $book->author_id)->take(4)->get();
        return view('frontend.book.show', [
            'book' => $book,
            'books' => $books
        ]);
    }

    public function borrow(Request $request)
    {
        $book = Book::where('id', $request->book_id)->first();
        $user = auth()->user();
        $dtransaksi = DB::table('transaksi')
            ->join('detail_transaksi', 'transaksi.id', '=', 'detail_transaksi.transaksi_id')
            ->select('transaksi.user_id', 'detail_transaksi.book_id')
            ->where([
                'transaksi.user_id'         => $user->id,
                'detail_transaksi.book_id'  => $book->id,
                'detail_transaksi.status'   => null
            ])->count();

        if ($dtransaksi > 0) {
            return redirect('/')->with('alert', 'Buku dengan judul: ' . ucwords($request->title) .  ',Masih Anda Pinjam');
        }

        $ub = Borrow::where([
            'user_id' => $user->id,
            'book_id' => $request->book_id
        ])->count();
        if ($ub > 0) {
            return redirect('/')->with('alert', 'Buku dengan judul: ' . ucwords($request->title) .  ',sudah didalam list peminjaman anda');
        }

        $borrow = Borrow::create([
            'user_id' => $user->id,
            'book_id' => $request->book_id,
        ]);
        $borrow->save();

        $book->decrement('qty');


        return redirect('/')->with('success', 'Buku' . ucwords($request->title) . 'Berhasil Ditambahkan ke List Peminjaman');
    }

    public function pinjam()
    {
        $user = Auth()->user();
        $books = Borrow::where('user_id', $user->id)->orderByDesc('id')->get();
        return view('frontend.pinjam.index', [
            'books' => $books
        ]);
    }
    public function destroy(Request $request)
    {

        Borrow::where('id', $request->id)->delete();
        $book = Book::where('id', $request->book_id)->first();

        $book->increment('qty');

        return redirect('pinjam')->with('success', 'Data Berhasil Dihapus');
    }
}

<?php

namespace App\Http\Controllers\User;

use App\Book;
use App\User;
use App\Borrow;
use App\Detail_transaksi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Contracts\Foundation\Application;

use Spatie\Permission\Traits\HasRoles;
use Illuminate\Foundation\Auth\User as Authenticatable;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::paginate(8);
        $coba2 = app(User::class);
        $coba3 = $coba2->cobaaja();
        // $coba1 = Auth::user();
        // $coba1 = Auth::check();
        // $coba1 = Auth()->user();
        // $role = $coba1->guarded;
        // $coba1 = $this->app->make('User');
        $user = User::paginate();
        return view('frontend.book.index', [
            'books' => $books,
            // 'user' => $user,
            // 'coba1' => $coba1,
            // 'role' => $role
            'coba3' =>$coba3
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

    public function app () {
        echo "hai";
    }
}

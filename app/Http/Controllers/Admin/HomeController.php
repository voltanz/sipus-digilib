<?php

namespace App\Http\Controllers\Admin;

use App\Book;
use App\Detail_transaksi;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;
use App\Category;

class HomeController extends Controller
{
    public function index()
    {
        $categories = Category::all();


        $grafik = DB::table('detail_transaksi')
            ->join('books', 'detail_transaksi.book_id', '=', 'books.id')
            ->join('categories', 'books.category_id', '=', 'categories.id')
            ->select('detail_transaksi.*', 'books.*', 'categories.*')
            ->get();


        $buku = Book::all()->count();
        $user = User::all()->count();
        $kembali = Detail_transaksi::where(['status' => 1])->count();
        $dipinjam  = Detail_transaksi::where(['status' => 0])->count();
        return view('admin/home', compact('dipinjam', 'kembali', 'user', 'buku', 'categories', 'grafik'));
    }

    public function borrows()
    {
        return view('admin.borrow.index');
    }

    public function detail($id)
    {
        $detail = DB::table('transaksi')
            ->join('users', 'users.id', '=', 'transaksi.user_id')
            ->join('detail_transaksi', 'detail_transaksi.transaksi_id', '=', 'transaksi.id')
            ->join('books', 'books.id', '=', 'detail_transaksi.book_id')
            ->select('transaksi.user_id', 'transaksi.kode_pinjam',  'users.name', 'books.title', 'books.cover', 'detail_transaksi.*')
            ->where('transaksi.id', $id)->get();

        return view('admin.borrow.detail', compact('detail'));
    }

    public function update(Request $request)
    {
        $tgl_kembali = strtotime($request->tgl_kembali);
        $tgl_pinjam = strtotime($request->tgl_pinjam);
        $tgl_pengembalian = strtotime($request->tgl_pengembalian);
        if ($tgl_pengembalian < $tgl_pinjam) {
            return redirect()->back()->with('alert', 'Tanggal Pengembalian Tidak Boleh Kurang dari Tanggal Peminjaman');
        }
        if ($tgl_pengembalian < $tgl_kembali) {
            $denda = 0;
        } else {

            $denda = ($tgl_pengembalian - $tgl_kembali) / (60 * 60 * 24);
        }

        Detail_transaksi::where('id', $request->id)
            ->update([
                'denda' => 1000 * $denda,
                'status' => 1,
                'admin_id'  => Auth()->user()->name,
                'tgl_pengembalian' => $request->tgl_pengembalian
            ]);

        $book = Book::where('id', $request->book_id);

        $book->increment('qty');

        return redirect()->back()->with('success', 'Data Berhasil Simpan');
    }

    public function history()
    {
        return view('admin.borrow.history');
    }
}

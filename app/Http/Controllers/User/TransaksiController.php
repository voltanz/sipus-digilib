<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Transaksi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Borrow;
use App\Detail_transaksi;

class TransaksiController extends Controller
{
    public function index()
    {
        $borrow = Transaksi::where('user_id', Auth()->user()->id)->orderByDesc('id')->get();

        return view('frontend.pinjam.transaksi', compact('borrow'));
    }

    public function store(Request $request)
    {
        $id = $request->id;

        $transaksi = Transaksi::create([
            'user_id' => $id,
            'kode_pinjam' => 'KDB' . $id . time()
        ]);

        $borrow = Borrow::where('user_id', $id)->get();

        foreach ($borrow as $borrow) {
            $borrow->id = $transaksi;
            unset($borrow->created_at, $borrow->updated_at);

            Detail_transaksi::create([
                'transaksi_id' => $transaksi->id,
                'book_id'      => $borrow->book_id,
                'tgl_pinjam'   => date('Y-m-d'),
                'tgl_kembali'  => date('Y-m-d', strtotime('+7days')),
                'status'       => 0
            ]);
        }
        $borrow = Borrow::where('user_id', $id);
        $borrow->delete();

        return redirect()->back()->with('success', 'Buku berhasil disimpan, Tunjukan Kode Pinjam Ke admin saat Pengembalian Buku');
    }

    public function detail_pinjam($id)
    {
        $detail = Detail_transaksi::where('transaksi_id', $id)->get();

        return view('frontend.pinjam.detail', compact('detail'));
    }
}

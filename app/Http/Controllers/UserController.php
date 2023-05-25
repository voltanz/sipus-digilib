<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function peraturan(){
        return view('frontend.peraturan.tataTertib');
    }

    public function peminjaman() {
        return view('frontend.peraturan.peminjaman');
    }

    public function pengembalian() {
        return view('frontend.peraturan.pengembalian');
    }

    public function denda() {
        return view('frontend.peraturan.denda');
    }
}

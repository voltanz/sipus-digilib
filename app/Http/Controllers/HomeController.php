<?php

namespace App\Http\Controllers;

use App\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\User;

class HomeController extends Controller
{

    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function landingPage()
    {
        $buku = Book::all()->count();
        $user = User::all()->count();
        return view('index', compact('user', 'buku'));
    }
    public function index()
    {
        $books = Auth()->user()->borrow;
        return view('home', compact('books'));
    }

    public function profile()
    {
        $user = Auth()->user();
        return view('frontend.user.index', compact('user'));
    }

    public function edit(User $user)
    {
        return view('frontend.user.edit', [
            'user' => $user
        ]);
    }
}

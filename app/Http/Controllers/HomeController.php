<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
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

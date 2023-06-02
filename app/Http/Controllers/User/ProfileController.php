<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function sejarah(){
        return view('frontend.profile.sejarah');
    }

    public function staff() {
        return view('frontend.profile.staff');
    }

    public function vimis() {
        return view('frontend.profile.vimis');
    }
}
<?php

use App\Borrow;

if ($user = auth()->user()) {

    $count = Borrow::where('user_id', $user->id)->count();
}
?>

<div class="navbar-fixed">
    <nav class="teal lighten-2">
        <div class="container">
            <div class="nav-wrapper">
                <a href="#!" class="brand-logo"><img src="{{asset('assets/logo/logo.png')}}" style="width: 60px;"></a>
                <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                <ul class="right hide-on-med-and-down">
                    <li><a href="{{ route('homepage') }}">Koleksi Buku</a></li>
                    <li><a href="badges.html">Layanan</a></li>
                    <li><a href="collapsible.html">Syarat & Ketentuan</a></li>
                    @guest
                    <li><a href="{{ route('login') }}">Login</a></li>
                    @if (Route::has('register'))
                    <li><a href="{{ route('register') }}">Register</a></li>
                    @endif
                    @else
                    <li>
                        <a href="{{ route('pinjam.index') }}"><i class="material-icons">shopping_basket</i> ( {{ $count }} )</a>
                    </li>
                    <ul id="dropdown2" class="dropdown-content">
                        <li><a href="{{ route('home.profile') }}">Profil</a></li>
                        <li><a href="{{ route('transaksi.index') }}">Peminjaman</a></li>
                        <li class="divider"></li>
                        <li><a href="#!" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                Logout</a></li>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </ul>
                    <li><a class="dropdown-trigger" href="#" data-target="dropdown2"> {{ ucwords(Auth()->user()->name) }}<i class="material-icons right">arrow_drop_down</i></a></li>
                    @endguest
                </ul>

            </div>
        </div>
    </nav>
</div>
<ul class="sidenav" id="mobile-demo">
    <li><a href="{{ route('homepage') }}">Koleksi Buku</a></li>
    <li><a href="badges.html">Layanan</a></li>
    <li><a href="collapsible.html">Syarat & Ketentuan</a></li>
    @guest
    <li><a href="{{ route('login') }}">Login</a></li>
    @if (Route::has('register'))
    <li><a href="{{ route('register') }}">Register</a></li>
    @endif
    @else
    <li><a class="dropdown-trigger" href="#!" data-target="dropdown1">{{ ucwords(Auth()->user()->name) }}<i class="material-icons right">arrow_drop_down</i></a></li>
    <ul id="dropdown1" class="dropdown-content">
        <li><a href="#!">Profil</a></li>
        <li><a href="#!">Peminjaman</a></li>
        <li class="divider"></li>
        <li><a href="#!" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Logout</a></li>
    </ul>
    @endguest
</ul>
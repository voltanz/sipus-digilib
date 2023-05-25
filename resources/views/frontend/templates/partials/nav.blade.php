<?php

use App\Borrow;

if ($user = auth()->user()) {
    $count = Borrow::where('user_id', $user->id)->count();
}
?>

{{-- <div class="navbar-fixed">
    <nav class="teal lighten-2">
        <div class="container">
            <div class="nav-wrapper">
                <a href="#!" class="brand-logo"><img src="{{ asset('assets/logo/sipus.png') }}"
                        style="width: 60px;"></a>
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
                            <a href="{{ route('pinjam.index') }}"><i class="material-icons">shopping_basket</i> (
                                {{ $count }} )</a>
                        </li>
                        <ul id="dropdown2" class="dropdown-content">
                            <li><a href="{{ route('home.profile') }}">Profil</a></li>
                            <li><a href="{{ route('transaksi.index') }}">Peminjaman</a></li>
                            <li class="divider"></li>
                            <li><a href="#!"
                                    onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    Logout</a></li>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </ul>
                        <li><a class="dropdown-trigger" href="#" data-target="dropdown2">
                                {{ ucwords(Auth()->user()->name) }}<i class="material-icons right">arrow_drop_down</i></a>
                        </li>
                    @endguest
                </ul>

            </div>
        </div>
    </nav>
</div> --}}

<nav class="navbar navbar-expand-lg bg-dark d-flex flex-column w-full">
    <ul class="d-flex justify-content-start w-100  border-1 border-bottom border-white h-25" style="font-size: 12px">
        <li class="pe-4">
            <a href="" class="text-light text-decoration-none d-flex">
                <p class="me-2"><i class="bi bi-geo-alt-fill"></i></p>
                <p>Kedong, Rosep, Kec. Blega, Kabupaten Bangkalan, Jawa Timur, 69174, ID</p>
            </a>
        </li>
        <li class="pe-4">
            <a href="" class="text-light text-decoration-none d-flex">
                <p class="me-2">
                    <i class="bi bi-phone"></i>
                </p>
                <p>
                    (021) 56958721 ext.
                </p>
                1000
            </a>
        </li>
        <li class="pe-4">
            <a href="" class="text-light text-decoration-none d-flex">
                <p class="me-2">
                    <i class="bi bi-envelope-at"></i>
                </p>
                <p>
                    sipus.smansaga.sch.id
                </p>
            </a>
        </li>
    </ul>
    <div class="container-fluid d-flex justify-content-center flex-column my-2">
        <div class="d-flex">
            <a href="#!" class="brand-logo">
                <img src="{{ asset('assets/logo/sipus.png') }}" style="width: 350px;"></a>
        </div>
        <div class="w-full">
            <ul class="navbar-nav me-auto mb-lg-0 text-uppercase" style="font-size: 11px">
                <li class="nav-item">
                    <a class="nav-link text-light " aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="#">profile</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link text-light dropdown-toggle" data-bs-toggle="dropdown" role="button" aria-expanded="false">Peraturan</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('tataTertib') }}">Tata Tertib</a></li>
                        <li><a class="dropdown-item" href="{{ route('peminjaman') }}">Peminjaman</a></li>
                        <li><a class="dropdown-item" href="{{ route('pengembalian') }}">Pengembalian</a></li>
                        <li><a class="dropdown-item" href="{{ route('denda') }}">Denda</a></li>
                        <li><a class="dropdown-item" href="#">Keanggotaan</a></li>
                      </ul>
                </li>
                <li class="nav-item">
                    <a href="{{ route('homepage') }}" class="nav-link text-light">Koleksi Buku</a>
                </li>
                @guest
                    <li><a href="{{ route('login') }}" class="nav-link text-light">Login</a></li>
                    @if (Route::has('register'))
                        <li><a href="{{ route('register') }}" class="nav-link text-light">Register</a></li>
                    @endif
                @else
                    <li>
                        <a href="{{ route('pinjam.index') }}" class="nav-link text-light"><i
                                class="material-icons">shopping_basket</i>
                            (
                            {{ $count }} )</a>
                    </li>
                    <ul id="dropdown2" class="dropdown-content">
                        <li><a href="{{ route('home.profile') }}" class="nav-link text-light">Profil</a></li>
                        <li><a href="{{ route('transaksi.index') }}" class="nav-link text-light">Peminjaman</a></li>
                        <li class="divider"></li>
                        <li><a href="#!" class="nav-link text-light"
                                onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                Logout</a></li>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </ul>
                    <li><a class="dropdown-trigger" href="#" data-target="dropdown2">
                            {{ ucwords(Auth()->user()->name) }}<i class="material-icons right">arrow_drop_down</i></a>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>

{{-- <ul class="sidenav" id="mobile-demo">
    <li><a href="{{ route('homepage') }}">Koleksi Buku</a></li>
    <li><a href="badges.html">Layanan</a></li>
    <li><a href="collapsible.html">Syarat & Ketentuan</a></li>
    @guest
        <li><a href="{{ route('login') }}">Login</a></li>
        @if (Route::has('register'))
            <li><a href="{{ route('register') }}">Register</a></li>
        @endif
    @else
        <li><a class="dropdown-trigger" href="#!" data-target="dropdown1">{{ ucwords(Auth()->user()->name) }}<i
                    class="material-icons right">arrow_drop_down</i></a></li>
        <ul id="dropdown1" class="dropdown-content">
            <li><a href="#!">Profil</a></li>
            <li><a href="#!">Peminjaman</a></li>
            <li class="divider"></li>
            <li><a href="#!"
                    onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Logout</a>
            </li>
        </ul>
    @endguest
</ul> --}}

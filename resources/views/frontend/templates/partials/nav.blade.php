<?php

use App\Borrow;

if ($user = auth()->user()) {
    $count = Borrow::where('user_id', $user->id)->count();
}
?>

<nav class="navbar navbar-expand-lg bg-dark d-flex flex-column w-full">
    <ul class="d-flex justify-content-start w-100  border-1 border-bottom border-white h-25" style="font-size: 12px">
        <li class="pe-4">
            <a href="https://www.google.com/maps/dir//sman+1+blega/@-7.129874,112.9792957,12z/data=!3m1!4b1!4m9!4m8!1m1!4e2!1m5!1m1!1s0x2dd82102e9471ff5:0xb654904772599bb6!2m2!1d113.0493363!2d-7.1298793?entry=ttu"
                class="text-light text-decoration-none d-flex">
                <p class="me-2"><i class="bi bi-geo-alt-fill"></i></p>
                <p>Kedong, Rosep, Kec. Blega, Kabupaten Bangkalan, Jawa Timur, 69174, ID</p>
            </a>
        </li>
        <li class="pe-4">
            <a href="https://www.sman1blega.sch.id/" class="text-light text-decoration-none d-flex">
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
            <a href="https://www.sman1blega.sch.id/" class="text-light text-decoration-none d-flex">
                <p class="me-2">
                    <i class="bi bi-envelope-at"></i>
                </p>
                <p>
                    sipus.smansaga.sch.id
                </p>
            </a>
        </li>
    </ul>
    <div class="container-fluid justify-content-center flex-column my-2  >
        <div class="d-flex">
        <a href="#!" class="brand-logo">
            <img class="mt-3 mb-3" src="{{ asset('assets/logo/sipus.png') }}" style="width: 350px;"></a>
    </div>
    
    <nav class="navbar navbar-expand-lg bg-body-tertiary w-full fw-bold">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02"
            aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 m-0 text-uppercase" style="font-size: 12px">
                <li class="nav-item">
                    <a class="nav-link text-light" aria-current="page" href="{{ route('homepage') }}"
                        style="text-decoration:none">Home </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link text-light dropdown-toggle" data-bs-toggle="dropdown" href="#"
                        role="button" aria-expanded="false" style="text-decoration:none">Profile</a>
                    <ul class="dropdown-menu dropdown-menu-dark" style="font-size: 12px">
                        <li><a class="dropdown-item" href="{{ route('sejarah') }}" style="text-decoration:none">Sejarah SMA Negeri 1 BLEGA</a></li>
                        <li><a class="dropdown-item" href="{{ route('staff') }}" style="text-decoration:none">Staff Perpustakaan</a></li>
                        <li><a class="dropdown-item" href="{{ route('visiMisi') }}" style="text-decoration:none">Visi Misi SMA Negeri 1 BLEGA</a></li>
                        <li><a class="dropdown-item" href="{{ route('jamPelayanan') }}" style="text-decoration:none">Jam Pelayanan</a></li>
                        <li><a class="dropdown-item" href="{{ route('kontak') }}" style="text-decoration:none">Kontak</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link text-light dropdown-toggle" data-bs-toggle="dropdown" href="#"
                        role="button" aria-expanded="false" style="text-decoration:none">Peraturan</a>
                    <ul class="dropdown-menu dropdown-menu-dark fade-down m-0" style="font-size: 12px">
                        <li><a class="dropdown-item" href="{{ route('tataTertib') }}">Tata Tertib</a></li>
                        <li><a class="dropdown-item" href="{{ route('peminjaman') }}">Peminjaman</a></li>
                        <li><a class="dropdown-item" href="{{ route('pengembalian') }}">Pengembalian</a></li>
                        <li><a class="dropdown-item" href="{{ route('denda') }}">Denda</a></li>
                        <li><a class="dropdown-item" href="{{ route('keanggotaan') }}">Keanggotaan</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link text-light dropdown-toggle" data-bs-toggle="dropdown" href="#"
                        role="button" aria-expanded="false" style="text-decoration:none">Publikasi</a>
                    <ul class="dropdown-menu dropdown-menu-dark fade-down m-0" style="font-size: 12px">
                        <li><a class="dropdown-item" href="https://jurnaldikbud.kemdikbud.go.id/">Jurnal Kemendikbud</a></li>
                        <li><a class="dropdown-item" href="https://repositori.kemdikbud.go.id/">Repository Kemendikbud</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="{{ route('bookCollection') }}" class="nav-link text-light"
                        style="text-decoration:none">Koleksi Buku</a>
                </li>
                 <li class="nav-item">
                    <a href="https://www.sman1blega.sch.id/" class="nav-link text-light"
                        style="text-decoration:none">| Situs Utama | </a>
                </li>
                </li>
                @guest
                    <li><a href="{{ route('login') }}" class="nav-link text-light" style="text-decoration:none">Login</a>
                    </li>
                    @if (Route::has('register'))
                        <li><a href="{{ route('register') }}" class="nav-link text-light"
                                style="text-decoration:none">Register</a></li>
                    @endif
                @else
                    {{-- <li>
                        <a href="{{ route('pinjam.index') }}" class="nav-link text-light"><i
                                class="material-icons">shopping_basket</i>
                            (
                            {{ $count }} )</a>
                    </li> --}}

                    <li class="nav-item dropdown">
                        <a class="nav-link text-light dropdown-toggle" data-bs-toggle="dropdown" href="#"
                            role="button" aria-expanded="false"
                            style="text-decoration:none">{{ ucwords(Auth()->user()->name) }}</a>
                        <ul class="dropdown-menu dropdown-menu-dark fade-down m-0" style="font-size: 12px">
                            @role('admin')
                                <li><a href="/admin" class="nav-link text-light" style="text-decoration:none">Dashboard</a>
                                </li>
                                <li class="divider"></li>
                            @endrole
                            @role('!admin')
                                <li><a href="{{ route('transaksi.index') }}" class="nav-link text-light"
                                        style="text-decoration:none">Peminjaman</a></li>
                                <li class="divider"></li>
                                <li><a href="{{ route('pinjam.index') }}" class="nav-link text-light"
                                        style="text-decoration:none">Favorite</a></li>
                                <li class="divider"></li>
                            @endrole
                            <li><a href="#!" class="nav-link text-light"
                                    onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    Logout</a></li>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none"
                                style="text-decoration:none">
                                @csrf
                            </form>

                        </ul>
                    </li>
                @endguest
            </ul>
        </div>
    </nav>
    </div>
</nav>

<?php

use App\Borrow;

if ($user = auth()->user()) {
    $count = Borrow::where('user_id', $user->id)->count();
}
?>
@php
    // $currentRoute = Route::current();
    // $percobaan1 = $currentRoute->getName();
    // // $percobaan2 = $currentRoute->getPath();
    // $percobaan3 = $currentRoute->getAction();
    // $percobaan4 = $currentRoute->parameters();
    
    // var_dump($percobaan1);
    // // var_dump($percobaan2);
    // var_dump($percobaan3);
    // var_dump($percobaan4);
    
    // $currentRoute = Route::currentRouteName();
    // var_dump($currentRoute);
    
    // $currentRoute = Route::parameters();
    // var_dump($currentRoute);
@endphp
{{-- <p>{{ $percobaan1 }}</p> --}}
{{-- <p>{{ $percobaan2 }}</p> --}}
{{-- <p>
    @foreach ($percobaan3 as $p3)
        <span>{{$p3}}</span>
    @endforeach --}}
{{-- <p>{{ $percobaan4 }}</p> --}}
<nav class="navbar navbar-expand-lg bg-dark d-flex flex-column w-full">

    <ul class="d-flex justify-content-start w-100  border-1 border-bottom border-white h-25" style="font-size: 12px">
        <li class="pe-4">
            <a href="" class="text-light text-decoration-none d-flex">
                <p class="me-2"><i class="bi bi-geo-alt-fill"></i></p>
                <p>Jl. Raya Blega, Blega-Bangkalan, 69174, ID</p>
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
                <li class="nav-item">
                    <a class="nav-link text-light" href="#">peraturan</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('homepage') }}" class="nav-link text-light">Koleksi Buku</a>
                </li>
                @guest
                    {{-- tampil saat sebelum login --}}
                    <li><a href="{{ route('login') }}" class="nav-link text-light">Login</a></li>
                    @if (Route::has('register'))
                        <li><a href="{{ route('register') }}" class="nav-link text-light">Register</a></li>
                    @endif
                @else
                    {{-- tampil saat user sudah login --}}
                    <li>
                        <a href="{{ route('pinjam.index') }}" class="nav-link text-light"><i
                                class="material-icons">shopping_basket</i>
                            ({{ $count }})
                        </a>
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
                    <li><a class="dropdown-trigger text-decoration-none text-light" href="#" data-target="dropdown2">
                            {{ ucwords(Auth()->user()->name) }}<i class="material-icons right">arrow_drop_down</i></a>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>

@extends('frontend.default')
@section('title', 'Pengembalian')

@section('content')
    <div class="containe-fluid py-5 d-flex flex-column align-items-center">
        <h2 class="text-center text-capitalize">Pengembalian</h2>
    </div>
    <div class="container">
        <div class="row">
            <div class="col d-flex">
                <div class="me-2">
                    <i class="bi bi-book-half"></i>
                </div>
                <div class="me-1">
                <h4>1. BAWA BUKU</h4>
                <p>Setiap anggota menyerahkan buku yang akan dikembalikan kepada 
                    petugas bagian loket pengembalian buku.</p>
                </div>
            </div>
            <div class="col d-flex">
                <div class="me-2">
                    <i class="bi bi-file-earmark-check-fill"></i>
                </div>
                <div class="me-1">
                <h4>2. CEK BUKU</h4>
                <p>Petugas mengecek data transaksi peminjaman: tanggal pengembalian buku,
                     apabila masa peminjaman telah melewati batas peminjaman, maka akan dikenakan denda peminjaman.</p>
                </div>
            </div>
            <div class="col d-flex">
                <div class="me-2">
                    <i class="bi bi-person-vcard-fill"></i>
                </div>
                <div>
                <h4>3. KARTU ANGGOTA</h4>
                <p>Petugas menyerahkan Kartu Pelajar kepada peminjam dan menaruh buku di troli
                     sebelum buku dikembalikan ke rak buku.</p>
                </div>
            </div>
        </div>
        <div class="row pt-5 pb-5">
            <div class="col-4 d-flex">
                <div class="me-2">
                    <i class="bi bi-hand-thumbs-up-fill"></i>
                </div>
                <div>
                <h4>3. MENAATI PERATURAN</h4>
                <p>Mentaati Peraturan dan Tata Tertib Perpustakaan.</p>
                </div>
            </div>
            <div class="col d-flex">
                <div class="me-2">
                    <i class="bi bi-pencil-square"></i>
                </div>
                <div class="me-1">
                <h4>5. LAIN - LAIN</h4>
                <p>Hal-hal lain yang belum diatur di dalam Tata
                    Tertib ini akan ditetapkan dan diumumkan
                    kemudian.</p>
                    <div style="padding-bottom:10rem">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
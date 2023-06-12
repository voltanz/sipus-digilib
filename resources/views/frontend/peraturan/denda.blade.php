@extends('frontend.default')
@section('title', 'Denda')

@section('content')
    <div class="container-fluid py-5 d-flex flex-column align-items-center">
        <h2 class="text-center text-capitalize py-3">::Denda::</h2>
    </div>
    <center>
    <img src="{{ asset('assets/logo/smansaga.png') }}" style="width: 200px;"></a>
    </center>
    <div class="container-fluid py-5 d-flex flex-column align-items-center"></div>
    <div class="container">
        <div class="row pt-5 pb-5">
            <div class="col-6">
                <section class="bg-image"
    style="background-image: url('{{ asset('assets/cover/red.jpg') }}');
        height: 40vh">
        <div class="container">
            <div class="row pt-5 pb-5">
                <div class="col-12 text-light">
                    <center>
                        <h4>1. Perpustakaan</h4>
                        <p style="font-size:4.5rem">Rp 1.000,-</p>
                        <h5>Per Buku</h3>
                        <p>Sanksi atas keterlambatan dari jangka waktu peminjaman atau pengembalian buku
                            dikenakan denda sebesar Rp 1.000,00 setiap buku untuk setiap
                            sehari keterlambatan.</p>
                    </center>
                </div>
            </div>
        </div>
    </section>
            </div>
            <div class="col-6">
                <section class="bg-image"
    style="
        background-image: url('{{ asset('assets/cover/red.jpg') }}');
        height: 40vh">
        <div class="container" style="padding-bottom: 10rem">
            <div class="row pt-5 pb-5">
                <div class="col-12 text-light">
                    <center>
                        <h4>2. Perpustakaan Pasca Sarjana</h4>
                        <p style="font-size:4.5rem">Rp 2.500,-</p>
                        <h5>Per Buku</h3>
                        <p>Sanksi atas keterlambatan dari jangka waktu peminjaman atau pengembalian buku
                            Perpustakaan Pascasarjana dikenakan denda sebesar Rp 2,500,00 setiap buku untuk setiap hari keterlambatan.</p>
                    </center>
                </div>
            </div>
        </div>
    </section>
            </div>
        </div>
    </div>
    <div class="container" style="padding-bottom: 8rem">
        <div class="row pt-5 pb-5">
            <div class="col-4">
                <center>
                <h2 style="font-size:3.5rem">3</h2>
                </center>
                <p><br>Pengembalian pinjaman buku dalam keadaan
                    rusak, sobek, kotor atau hilang sebagian halaman dikenakan
                    sanksi perbaikan. Biaya perbaikan ditanggung peminjam.</p>
            </div>
            <div class="col-4">
                <center>
                <h2 style="font-size:3.5rem">4</h2>
                </center>
                <p><br>Peminjam wajib melaporkan secara tertulis kepada
                    Perpustakaan atas kehilangan buku yang dipinjam dan
                    dikenakan sanksi berupa penggantian buku dengan
                    judul, edisi dan pengarang yang sama. Apabila buku yang
                    hilang ternyata tidak lagi tersedia di toko buku atau
                    sumber lain, maka kepada peminjam dikenakan sanksi
                    denda uang senilai harga buku yang disetarakan.</p>
            </div>
            <div class="col-4">
                <center>
                <h2 style="font-size:3.5rem">5</h2>
                </center>
                <p><br>Hal-hal lain yang belum termasuk di dalam pemberian
                    sanksi ini akan ditetapkan dan diumumkan kemudian.</p>
            </div>
        </div>
    </div>
    
@endsection
@extends('frontend.default')
@section('title', 'Peminjaman')

@section('content')
    <div class="containe-fluid py-5 d-flex flex-column align-items-center">
        <h2 class="text-center text-capitalize py-3">::Peminjaman::</h2>
    </div>
    <center>
    <img src="{{ asset('assets/logo/smansaga.png') }}" style="width: 200px;"></a>
    </center>
    <div class="container-fluid py-5 d-flex flex-column align-items-center"></div>
    <div class="container" style="padding-bottom: 8rem">
        <div class="row">
            <div class="col d-flex">
                <div style="padding-right: 15px">
                    <i class="bi bi-person-vcard-fill"></i>
                </div>
                <div class="me-1">
                <h4>1. KARTU ANGGOTA</h4>
                <p>Memiliki Kartu Anggota Perpustakaan SMA Negeri 1 Blega.</p>
                </div>
            </div>
            <div class="col d-flex">
                <div style="padding-right: 15px">
                    <i class="bi bi-file-text-fill" style="font-size: 1.2rem;"></i>
                </div>
                <div class="me-1">
                <h4>2. SURAT PENGANTAR</h4>
                <p>Bagi siswa atau masyarakat umum dari luar SMA Negeri 1 Blega hanya diperbolehkan membaca di perpustakaan dengan menunjukkan surat pengantar atau keterangan dari institusi pendidikan tinggi lain, instansi dan identitas resmi.</p>
                </div>
            </div>
            <div class="col d-flex">
                <div style="padding-right: 15px">
                    <i class="bi bi-hand-thumbs-up-fill" style="font-size: 1.2rem;"></i>
                </div>
                <div>
                <h4>3. MENAATI PERATURAN</h4>
                <p>Mentaati Peraturan dan Tata Tertib Perpustakaan.</p>
                </div>
            </div>
        </div>
        <div class="row pt-5">
            <div class="col d-flex">
                <div style="padding-right: 15px">
                    <i class="bi bi-book-half" style="font-size: 1.2rem;"></i>
                </div>
                <div class="me-1">
                <h4>4. 2 BUKU CUKUP</h4>
                <p>Setiap Anggota hanya berhak meminjam paling banyak dua (2) judul buku berbeda.</p>
                </div>
            </div>
            <div class="col d-flex">
                <div style="padding-right: 15px">
                    <i class="bi bi-calendar2-event" style="font-size: 1.2rem;"></i>
                </div>
                <div class="me-1">
                <h4>5. LAMA PEMINJAMAN</h4>
                <p>Jangka waktu peminjaman selama satu (1) minggu.</p>
                </div>
            </div>
            <div class="col d-flex">
                <div style="padding-right: 15px">
                    <i class="bi bi-calendar2-week-fill" style="font-size: 1.2rem;"></i>
                </div>
                <div>
                <h4>6. PERPANJANGAN PINJAMAN</h4>
                <p>Peminjaman buku dapat diperpanjang satu (1) minggu berikutnya.</p>
                </div>
            </div>
        </div>
        <div class="row pt-5 pb-5">
            <div class="col-4 d-flex">
                <div style="padding-right: 15px">
                    <i class="bi bi-file-earmark-break-fill" style="font-size: 1.2rem;"></i>
                </div>
                <div class="me-1">
                <h4>7. JAMINAN PEMINJAMAN</h4>
                <p>Peminjaman buku untuk keperluan pembuatan foto copy sebagian materi/isi buku wajib 
                    menyerahkan jaminan berupa Kartu Anggota dan Kartu Tanda Penduduk,Kartu Identitas lain. 
                    Jangka waktu peminjaman paling lama dua (2) jam dan harus dikembalikan pada hari dan tanggal yang sama. 
                    Keterlambatan pengembalian akan dikenakan sanksi denda sebesar Rp 2.500,00 (dua ribu lima ratus rupiah) 
                    setiap keterlambatan satu (1) jam.</p>
                </div>
            </div>
            <div class="col d-flex">
                <div style="padding-right: 15px">
                    <i class="bi bi-pencil-square" style="font-size: 1.2rem;"></i>
                </div>
                <div class="me-1">
                <h4>8. LAIN - LAIN</h4>
                <p>Hal-hal lain yang belum diatur di dalam Tata
                    Tertib ini akan ditetapkan dan diumumkan
                    kemudian.</p>
                </div>
            </div>
        </div>
    </div>
@endsection
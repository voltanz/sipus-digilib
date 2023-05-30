@extends('frontend.default')
@section('title', 'Peminjaman')

@section('content')
    <div class="containe-fluid py-5 d-flex flex-column align-items-center">
        <h2 class="text-center text-capitalize">Peminjaman</h2>
    </div>
    <div class="container">
        <div class="row">
            <div class="col d-flex">
                <div class="me-2">
                    <i class="bi bi-person-vcard-fill"></i>
                </div>
                <div class="me-1">
                <h4>1. KARTU ANGGOTA</h4>
                <p>Setiap pengunjung perpustakaan diwajibkan
                    mentaati semua peraturan dan prosedur yang
                    berlaku.</p>
                </div>
            </div>
            <div class="col d-flex">
                <div class="me-2">
                    <i class="bi bi-file-text-fill"></i>
                </div>
                <div class="me-1">
                <h4>2. SURAT PENGANTAR</h4>
                <p>Setiap pengunjung perpustakaan wajib bersama - sama menjaga ketertiban,ketenangan dan keamanan ruang perpustakaan.</p>
                </div>
            </div>
            <div class="col d-flex">
                <div class="me-2">
                    <i class="bi bi-hand-thumbs-up-fill"></i>
                </div>
                <div>
                <h4>3. MENAATI PERATURAN</h4>
                <p>Setiap pengunjung diwajibkan menjaga
                    kebersihan demi kenyamanan bersama.</p>
                </div>
            </div>
        </div>
        <div class="row pt-5">
            <div class="col d-flex">
                <div class="me-2">
                    <i class="bi bi-book-half"></i>
                </div>
                <div class="me-1">
                <h4>4. 2 BUKU CUKUP</h4>
                <p>Setiap pengunjung diwajibkan membuang
                    sampah di tempat sampah yang telah disediakan.</p>
                </div>
            </div>
            <div class="col d-flex">
                <div class="me-2">
                    <i class="bi bi-calendar2-event"></i>
                </div>
                <div class="me-1">
                <h4>5. LAMA PEMINJAMAN</h4>
                <p>Setiap pengunjung wajib mengenakan pakaian yang sopan,rapi dan sepatutnya sesuai dengan
                    ketentuan yang berlaku di 
                    SMAN 1 Blega.</p>
                </div>
            </div>
            <div class="col d-flex">
                <div class="me-2">
                    <i class="bi bi-calendar2-week-fill"></i>
                </div>
                <div>
                <h4>6. PERPANJANGAN PINJAMAN</h4>
                <p>Setiap pengunjung hanya diperbolehkan
                    membawa catatan atau lembar kertas catatan di
                    ruang baca.</p>
                </div>
            </div>
        </div>
        <div class="row pt-5 pb-5">
            <div class="col-4 d-flex">
                <div class="me-2">
                    <i class="bi bi-file-earmark-break-fill"></i>
                </div>
                <div class="me-1">
                <h4>7. JAMINAN PEMINJAMAN</h4>
                <p>Setiap pengunjung dilarang membawa segala
                    jenis dan bentuk tas dan/atau kantong ke raung
                    baca.</p>
                </div>
            </div>
            <div class="col d-flex">
                <div class="me-2">
                    <i class="bi bi-pencil-square"></i>
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
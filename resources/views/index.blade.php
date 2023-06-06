@extends('frontend.default')

@section('content')
    <div class="main-container" style="">
        <!-- Background image -->
        <section class="bg-image"
            style="
                background-image: url('{{ asset('assets/logo/perpus.png') }}');
                height: 85vh">
            <div class="text-left" style="padding-left:1000px; padding-top:200px; padding-right:200px; ">
                <div class="overlay-content align-items-end text-white text-light fw-bold">
                    <h1 style="font-weight:bold">Situs Perpustakaan</h1>
                    <i class="fa-solid fa-cloud-arrow-up"></i>
                    <h2 class="uppercase bold">SMA Negeri 1 Blega</h2>
                    <p class="lead mb48 mb-xs-32">Situs ini ditujukan untuk seluruh Civitas Akademika SMA Negeri 1 Blega
                        maupun masyarakat pengguna internet pada umumnya.
                        <br>
                        Melalui situs ini diharapkan perpustakaan SMA Negeri 1 Blega dapat meningkatkan layanan dan
                        mempermudah civitas akademika mencari literatur dalam proses belajar mengajar.
                        &nbsp;<br>
                    </p>
                    <p class="lead mb48 mb-xs-32"><b>
                            Selamat bergabung!
                        </b></p>
                </div>
            </div>
        </section>
        <!-- Facts Start -->
        <section class="container-fluid facts my-3 py-3">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-sm-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.1s">
                        <i class="fa fa-solid fa-address-card fa-3x text-dark mb-3"></i>
                        <h1 class="display-4 text-dark" data-toggle="counter-up"
                            style="font-family: 'Raleway', sans-serif;">{{ $user }}</h1>
                        <span class="fs-3 text-dark fw-bold">Anggota</span>
                        <hr class="bg-white w-25 mx-auto mb-0">
                    </div>
                    <div class="col-sm-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.3s">
                        <i class="fa fa-duotone fa-users fa-3x text-dark mb-3"></i>
                        <h1 class="display-4 text-dark" data-toggle="counter-up"
                            style="font-family: 'Raleway', sans-serif;">63</h1>
                        <span class="fs-3 text-dark fw-bold">Guru</span>
                        <hr class="bg-white w-25 mx-auto mb-0">
                    </div>
                    <div class="col-sm-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.5s">
                        <i class="fa fa-users-cog fa-3x text-dark mb-3"></i>
                        <h1 class="display-4 text-dark" data-toggle="counter-up"
                            style="font-family: 'Raleway', sans-serif;">8</h1>
                        <span class="fs-3 text-dark fw-bold">Staf</span>
                        <hr class="bg-white w-25 mx-auto mb-0">
                    </div>
                    <div class="col-sm-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.7s">
                        <i class="fa fa-solid fa-book fa-3x text-dark mb-3"></i>
                        <h1 class="display-4 text-dark" data-toggle="counter-up"
                            style="font-family: 'Raleway', sans-serif;">{{ $buku }}</h1>
                        <span class="fs-3 text-dark fw-bold">Buku</span>
                        <hr class="bg-white w-25 mx-auto mb-0">
                    </div>
                </div>
            </div>
        </section>

        <style>
            a:hover {
                text-decoration: underline;
            }
        </style>
        <section class="bg-dark">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 mb-xs-24 col-md-6 text-light p-5">
                        <i class="bi bi-journal-arrow-up fa-5x mb-3"></i>
                        <h6 class="uppercase">KOLEKSI BUKU TERBARU</h6>
                        <ul>
                            <li>1. <a style='color:#ffffff;' href='detailbuku.aspx?id=995000165784'>Biology : a Global
                                    Approach. 12th ed.2021</a><br><span
                                    style='color:#dddddd;'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pemilik : Kedokteran - Update
                                    : 11/04/2023</span></li>
                            <li>2. <a style='color:#ffffff;' href='detailbuku.aspx?id=995000165785'>Krauses and Mahans :
                                    Food and the Nutrition Care Process. 15...</a><br><span
                                    style='color:#dddddd;'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pemilik : Kedokteran - Update
                                    : 11/04/2023</span></li>
                            <li>3. <a style='color:#ffffff;' href='detailbuku.aspx?id=995000165783'>Voets principles of
                                    biochemistry. Global edition. Book 2. 20...</a><br><span
                                    style='color:#dddddd;'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pemilik : Kedokteran - Update
                                    : 11/04/2023</span></li>
                            <li>4. <a style='color:#ffffff;' href='detailbuku.aspx?id=995000165767'>50 years of dedication
                                    for Indonesia</a><br><span
                                    style='color:#dddddd;'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pemilik : Umum - Update :
                                    10/04/2023</span></li>
                            <li>5. <a style='color:#ffffff;' href='detailbuku.aspx?id=995000165767'>50 years of dedication
                                    for Indonesia</a><br><span
                                    style='color:#dddddd;'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pemilik : Umum - Update :
                                    10/04/2023</span></li>
                            <li>6. <a style='color:#ffffff;' href='detailbuku.aspx?id=995000165779'>52 inspirasi desain
                                    kitchen set untuk ruang terbatas</a><br><span
                                    style='color:#dddddd;'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pemilik : Desain Interior -
                                    Update : 10/04/2023</span></li>
                            <li>7. <a style='color:#ffffff;' href='detailbuku.aspx?id=995000165780'>Anjing</a><br><span
                                    style='color:#dddddd;'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pemilik : Umum - Update :
                                    10/04/2023</span></li>
                            <li>8. <a style='color:#ffffff;' href='detailbuku.aspx?id=995000165780'>Anjing</a><br><span
                                    style='color:#dddddd;'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pemilik : Umum - Update :
                                    10/04/2023</span></li>
                            <li>9. <a style='color:#ffffff;' href='detailbuku.aspx?id=995000165769'>Buku panduan praktik
                                    teknologi kultur jaringan di laboratori...</a><br><span
                                    style='color:#dddddd;'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pemilik : Umum - Update :
                                    10/04/2023</span></li>
                            <li>10. <a style='color:#ffffff;' href='detailbuku.aspx?id=995000165769'>Buku panduan praktik
                                    teknologi kultur jaringan di laboratori...</a><br><span
                                    style='color:#dddddd;'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pemilik : Umum - Update :
                                    10/04/2023</span></li>
                        </ul>
                    </div>
                    <div class="col-sm-6 mb-xs-24 col-md-6 text-light p-5">
                        <i class="bi bi-book fa-5x mb-3 "></i>
                        <h6 class="uppercase">TOP 10 BUKU YANG SERING DIPINJAM</h6>
                        <ul>
                            <li>1. <a style='color:#ffffff;' href='detailbuku.aspx?id=995000117780'>Etika bisnis dan
                                    profesi
                                    : tantangan membangun manusia seutu...</a> [5398] </li>
                            <li>2. <a style='color:#ffffff;' href='detailbuku.aspx?id=995000124521'>Etika bisnis dan
                                    profesi
                                    : tantangan membangun manusia seutu...</a> [5274] </li>
                            <li>3. <a style='color:#ffffff;' href='detailbuku.aspx?id=200000003660'>Auditing [pemeriksaan
                                    akuntan] oleh kantor akuntan publik. J...</a> [4853] </li>
                            <li>4. <a style='color:#ffffff;' href='detailbuku.aspx?id=995000111084'>Accounting information
                                    systems. 5th edition / James A. Hall
                                    ...</a> [4487] </li>
                            <li>5. <a style='color:#ffffff;' href='detailbuku.aspx?id=995000107453'>Makroekonomi :
                                    pengantar
                                    teori. Edisi 3 / Sadono Sukirno</a> [4104] </li>
                            <li>6. <a style='color:#ffffff;' href='detailbuku.aspx?id=200000003100'>Manajemen lembaga
                                    keuangan. Edisi 2 / Dahlan Siamat</a> [3825] </li>
                            <li>7. <a style='color:#ffffff;' href='detailbuku.aspx?id=200000003376'>Teori akuntansi. Buku
                                    1.
                                    Edisi 4 / Ahmed Riahi-Belkaoui; ali...</a> [3726] </li>
                            <li>8. <a style='color:#ffffff;' href='detailbuku.aspx?id=995000124514'>Komunikasi bisnis.
                                    Edisi
                                    ke-4 / Djoko Purwanto</a> [3611] </li>
                            <li>9. <a style='color:#ffffff;' href='detailbuku.aspx?id=995000121860'>Advanced accounting.
                                    4th
                                    edition / Debra C. Jeter; Paul K. C...</a> [3249] </li>
                            <li>10. <a style='color:#ffffff;' href='detailbuku.aspx?id=995000117964'>Perilaku organisasi.
                                    Buku 1. Edisi ke-12 / Stephens P. Robbi...</a> [3206] </li>
                        </ul>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
    @endsection

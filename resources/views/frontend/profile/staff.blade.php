@extends('frontend.default')
@section('title', 'Staff')

@section('content')
<div class="containe-fluid py-5 d-flex flex-column align-items-center">
    <h2 class="text-center text-capitalize">Staff Perpustakaan</h2>
</div>
<div class="container">
    <div class="row">
        <div class="col d-flex">
            <div class="me-2">
                <img class="public" src="assets/dist/img/bima.jpeg"><br><br>
            </div>
            <div class="me-1">
                <h4>1. Ahmad Bima Tristan I.</h4>
                <p>Merupakan seorang petugas perpustakaan</p>
            </div>
        </div>
        <div class="col d-flex">
            <div class="me-2">
                <img class="public" src="img/ibnu.jpeg"><br><br>
            </div>
            <div class="me-1">
                <h4>2. Ibnu Hajar Askholani</h4>
                <p>Merupakan seorang petugas perpustakaan.</p>
            </div>
        </div>
        <div class="col d-flex">
            <div class="me-2">
                <img class="public" src="img/didin.jpeg"><br><br>
            </div>
            <div class="me-1">
                <h4>3. Iemaduddin</h4>
                <p>Merupakan seorang petugas perpustakaan.</p>
            </div>
        </div>
        <div class="row pt-5">
            <div class="col d-flex">
                <div class="me-2">
                    <img class="public" src="img/wildan.jpeg"><br><br>
                </div>
                <div class="me-1">
                    <h4>4. Wildan Hafidz Mauludin</h4>
                    <p>Merupakan seorang petugas perpustakaan.</p>
                </div>
            </div>
            <div class="col d-flex">
                <div class="me-2">
                    <img class="public" src="img/rahma.jpeg"><br><br>
                </div>
                <div class="me-1">
                    <h4>5. Yuliyana Rahmawati</h4>
                    <p>Merupakan seorang petugas perpustakaan.</p>
                </div>
            </div>
        </div>
    </div>
    @endsection
@extends('frontend.default')
@section('title', 'Staff')

@section('content')
<div class="containe-fluid py-5 d-flex flex-column align-items-center">
    <h2 class="text-center text-capitalize">Staff Perpustakaan</h2>
</div>
<div class="container">
    <div class="row">
        <div class="col-4">
            <center>
            <div class="me-2">
            <img src="{{ asset('assets/dist/img/wildan.png') }}" style="width: 200px;"></a>
            </div>
            <div class="me-1">
                <h4>1. Wildan Hafidz Mauludin.</h4>
                <p>Merupakan seorang Kepala Perpustakaan</p>
            </div>
            </center>
        </div>
        <div class="col-4">
            <center>
            <div class="me-2">
            <img src="{{ asset('assets/dist/img/ibnu.png') }}" style="width: 200px;"></a>
            </div>
            <div class="me-1">
                <h4>2. Ibnu Hajar Askholani</h4>
                <p>Merupakan seorang Asisten Kepala Perpustakaan.</p>
            </div>
            </center>
        </div>
        <div class="col-4">
            <center>
            <div class="me-2">
            <img src="{{ asset('assets/dist/img/didin.png') }}" style="width: 200px;"></a>
            </div>
            <div class="me-1">
                <h4>3. Iemaduddin</h4>
                <p>Merupakan seorang Asisten Kepala Perpustakaan.</p>
            </div>
            </center>
        </div>
    </div>
        <div class="row pt-5">
            <div class="col-6">
                <center>
                <div class="me-2">
                <img src="{{ asset('assets/dist/img/bima.png') }}" style="width: 200px;"></a>
                </div>
                <div class="me-1">
                    <h4>4. Ahmad Bima Tristan I.</h4>
                    <p>Merupakan seorang petugas Teknisi Perpustakaan.</p>
                </div>
                </center>
            </div>
            <div class="col-6">
                <center>
                <div class="me-2">
                <img src="{{ asset('assets/dist/img/ylrahma.png') }}" style="width: 200px;"></a>
                </div>
                <div class="me-1">
                    <h4>5. Yuliyana Rahmawati</h4>
                    <p>Merupakan seorang petugas Administrasi Perpustakaan.</p>
                </div>
                </center>
            </div>
        </div>
</div>
    @endsection
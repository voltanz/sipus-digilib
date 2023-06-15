@extends('frontend.default')
@section('title', 'Staff')

@section('content')
<div class="containe-fluid py-5 d-flex flex-column align-items-center">
    <h2 class="text-center text-capitalize">Staff Perpustakaan</h2>
</div>
<center>
    <img src="{{ asset('assets/logo/smansaga.png') }}" style="width: 200px;"></a>
    </center>
    <div class="containe-fluid py-5 d-flex flex-column align-items-center"></div>
<div class="container">
    <div class="row">
        <div class="col-4">
            <center>
            <div class="me-2">
            <img src="{{ asset('assets/dist/img/wildan.png') }}" style="width: 200px;"></a>
            </div>
            <div class="me-1">
                <h4>Wildan Hafidz Mauludin</h4>
                <p>Kepala Perpustakaan</p>
            </div>
            </center>
        </div>
        <div class="col-4">
            <center>
            <div class="me-2">
            <img src="{{ asset('assets/dist/img/ibnu.png') }}" style="width: 200px;"></a>
            </div>
            <div class="me-1">
                <h4>Ibnu Hajar Askholani</h4>
                <p>Asisten Kepala Perpustakaan</p>
            </div>
            </center>
        </div>
        <div class="col-4">
            <center>
            <div class="me-2">
            <img src="{{ asset('assets/dist/img/didin.png') }}" style="width: 200px;"></a>
            </div>
            <div class="me-1">
                <h4>Iemaduddin</h4>
                <p>Asisten Kepala Perpustakaan</p>
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
                    <h4>Ahmad Bima Tristan I</h4>
                    <p>Teknisi Perpustakaan</p>
                </div>
                </center>
            </div>
            <div class="col-6">
                <center>
                <div class="me-2">
                <img src="{{ asset('assets/dist/img/ylrahma.png') }}" style="width: 200px;"></a>
                </div>
                <div class="me-1">
                    <h4>Yuliyana Rahmawati</h4>
                    <p>Administrasi Perpustakaan</p>
                </div>
                </center>
            </div>
        </div>
        <div class="containe-fluid py-5 d-flex flex-column align-items-center"></div>
    </div>
    @endsection
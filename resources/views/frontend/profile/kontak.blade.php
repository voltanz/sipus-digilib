@extends('frontend.default')
@section('title', 'Kontak')

@section('content')
    <div class="containe-fluid py-5 d-flex flex-column align-items-center">
        <h2 class="text-center text-capitalize"><b>Kontak Perpustakaan</b></h2>
    </div>
    <!-- <center>
    <img src="{{ asset('assets/logo/perpus.png') }}" style="width: 900px;"></a>
    </center><br><br> -->
    <div class="container"><br>
        <div class="row">
            <div class="col-6">
                <div class="me-2">
                <h3><b>DIGILIB SIPUS</b></h3><br>
                <p class="text-left" style="font-size: 18px;">Digital Library of SMA Negeri 1 Blega</p>
                <h4><b></b></h4>
                <p class="text-left" style="font-size: 18px;">Kedong, Rosep, Kec. Blega, Kabupaten Bangkalan, Jawa Timur, 69174, ID</p>
                <h4><b></b></h4>
                <p class="text-left" style="font-size: 18px;">E: perpus@sman1blega.ac.id</p>
                <p class="text-left" style="font-size: 18px;">P: (021) 56958721 ext. 1000</p>
                <p class="text-left" style="font-size: 18px;">P: (021) 56958721</p>
                <h4><b></b></h4>
                <br><br>
              </div>
            </div>
            <div class="col-6">
            <img src="{{ asset('assets/logo/perpus.png') }}" style="width: 800px;">
            <br><br><br>
            </div>
        </div>
    </div>
</div>
@endsection
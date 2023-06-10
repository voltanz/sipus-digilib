@extends('frontend.default')
@section('title', 'Jam')

@section('content')
    <div class="containe-fluid py-5 d-flex flex-column align-items-center">
        <h2 class="text-center text-capitalize"><b>Jam Pelayanan Perpustakaan</b></h2>
    </div>
    <!-- <center>
    <img src="{{ asset('assets/logo/perpus.png') }}" style="width: 900px;"></a>
    </center><br><br> -->
    <div class="container"><br>
        <div class="row">
            <div class="col-6">
                <div class="me-2" style="padding: 30px;">
                <h3><b>Jam Pelayanan Perpustakaan SMA Negeri 1 BLEGA :</b></h3><br>
                <h4 style="color:blue"><b>SENIN - KAMIS</b></h4>
                <p style="font-size:1.5rem">07.00 - 14.00 WIB</p>
                <br><rb>
                <h4 style="color:orange"><b>JUM'AT</b></h4>
                <p style="font-size:1.5rem">07.00 - 10.30 WIB</p>
                <br><br>
                <h4 style="color:red"><b>SABTU - MINGGU TUTUP</b></h4>
                <h4><b>------------------------------------------------------</b></h4>
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
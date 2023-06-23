@extends('frontend.default')
@section('title', 'Jam')

@section('content')
    <div class="containe-fluid py-5 d-flex flex-column align-items-center">
        <h2 class="text-center text-capitalize">::Jam Pelayanan Perpustakaan::</h2>
    </div>
    <div class="container"><br>
        <div class="row">
            <div class="col-6">
                <div class="me-2 wow fadeInUp" data-wow-delay="0.3s" style="padding: 30px;">
                    <h3 style="color: orange;"><b>Jam Layanan</b></h3><br>
                    <h4 style="color:orange"><b>Senin - Kamis</b></h4>
                    <p style="font-size:1.5rem">07.00 - 14.00 WIB</p><br>
                    <h4 style="color:orange"><b>Jum'at</b></h4>
                    <p style="font-size:1.5rem">07.00 - 10.30 WIB</p><br>
                    <h4 style="color:orange"><b>Sabtu - Minggu Libur</b></h4><br>
                    <h5 style="color:black"><b>Keterangan</b></h5>
                    <p class="text-left" style="font-size: 15px;">Proses pelayanan perpustakaan dilakukan dengan tetap
                        mematuhi protokol kesehatan</p>
                    <br><br>
                </div>
            </div>
            <div class="col-6">
                <img class=" wow fadeInUp" data-wow-delay="0.3s" src="{{ asset('assets/logo/perpus.png') }}"
                    style="width: 700px;" height="400px; left">
                <br><br><br>
            </div>
        </div>
    </div>
    </div>
@endsection

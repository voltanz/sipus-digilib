@extends('frontend.default')
@section('title', 'Staff')

@section('content')
    <div class="containe-fluid py-5 d-flex flex-column align-items-center">
        <h2 class="text-center text-capitalize">::Staff Perpustakaan::</h2>
    </div>

    <!-- Team Start -->
    <div class="container-xxl py-5" id="team">
        <div class="container">
            <div class="row g-4 justify-content-center">
                <div class="col-lg-3 col-md-4 ">
                    <div class="team-item bg-light">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="{{ asset('assets/dist/img/didin.jpg') }}" alt="" />
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -23px">
                            <div class="bg-light d-flex justify-content-center pt-2 px-1 rounded">
                                <a class="btn btn-sm-square btn-primary mx-1"
                                    href="https://api.whatsapp.com/send/?phone=6282333903430&text&app_absent=0"><img
                                        src="{{ asset('assets/dist/img/waa.png') }}" alt=""
                                        style="width: 20px" /></a>
                                <a class="btn btn-sm-square btn-primary mx-1"
                                    href="https://www.instagram.com/andhito_gnc/"><img
                                        src="{{ asset('assets/dist/img/1ig.png') }}" alt=""
                                        style="width: 20px" /></a>
                                <a class="btn btn-sm-square btn-primary mx-1" href="https://github.com/Andhito"><img
                                        src="{{ asset('assets/dist/img/github.png') }}" alt=""
                                        style="width: 20px" /></a>
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0 fw-bold">Wildan Hafidz Mauludin</h5>
                            <small>Kepala Perpustakaan</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 ">
                    <div class="team-item bg-light">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="{{ asset('assets/dist/img/didin.jpg') }}" alt="" />
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -23px">
                            <div class="bg-light d-flex justify-content-center pt-2 px-1 rounded">
                                <a class="btn btn-sm-square btn-primary mx-1"
                                    href="https://api.whatsapp.com/send/?phone=6282333903430&text&app_absent=0"><img
                                        src="{{ asset('assets/dist/img/waa.png') }}" alt=""
                                        style="width: 20px" /></a>
                                <a class="btn btn-sm-square btn-primary mx-1"
                                    href="https://www.instagram.com/andhito_gnc/"><img
                                        src="{{ asset('assets/dist/img/1ig.png') }}" alt=""
                                        style="width: 20px" /></a>
                                <a class="btn btn-sm-square btn-primary mx-1" href="https://github.com/Andhito"><img
                                        src="{{ asset('assets/dist/img/github.png') }}" alt=""
                                        style="width: 20px" /></a>
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0 fw-bold">Ibnu Hajar Askolani</h5>
                            <small>Asisten Kepala Perpustakaan</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 ">
                    <div class="team-item bg-light">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="{{ asset('assets/dist/img/didin.jpg') }}" alt="" />
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -23px">
                            <div class="bg-light d-flex justify-content-center pt-2 px-1 rounded">
                                <a class="btn btn-sm-square btn-primary mx-1"
                                    href="https://api.whatsapp.com/send/?phone=6282333903430&text&app_absent=0"><img
                                        src="{{ asset('assets/dist/img/waa.png') }}" alt=""
                                        style="width: 20px" /></a>
                                <a class="btn btn-sm-square btn-primary mx-1"
                                    href="https://www.instagram.com/andhito_gnc/"><img
                                        src="{{ asset('assets/dist/img/1ig.png') }}" alt=""
                                        style="width: 20px" /></a>
                                <a class="btn btn-sm-square btn-primary mx-1" href="https://github.com/Andhito"><img
                                        src="{{ asset('assets/dist/img/github.png') }}" alt=""
                                        style="width: 20px" /></a>
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0 fw-bold">Iemaduddin</h5>
                            <small>Asisten Kepala Perpustakaan</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-lg-3 col-md-6 ">
                    <div class="team-item bg-light">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="{{ asset('assets/dist/img/didin.jpg') }}" alt="" />
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -23px">
                            <div class="bg-light d-flex justify-content-center pt-2 px-1 rounded">
                                <a class="btn btn-sm-square btn-primary mx-1"
                                    href="https://api.whatsapp.com/send/?phone=6282333903430&text&app_absent=0"><img
                                        src="{{ asset('assets/dist/img/waa.png') }}" alt=""
                                        style="width: 20px" /></a>
                                <a class="btn btn-sm-square btn-primary mx-1"
                                    href="https://www.instagram.com/andhito_gnc/"><img
                                        src="{{ asset('assets/dist/img/1ig.png') }}" alt=""
                                        style="width: 20px" /></a>
                                <a class="btn btn-sm-square btn-primary mx-1" href="https://github.com/Andhito"><img
                                        src="{{ asset('assets/dist/img/github.png') }}" alt=""
                                        style="width: 20px" /></a>
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0 fw-bold">Ahmad Bima Tristan Ibrahim</h5>
                            <small>Teknisi Perpustakaan</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 ">
                    <div class="team-item bg-light">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="{{ asset('assets/dist/img/didin.jpg') }}" alt="" />
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -23px">
                            <div class="bg-light d-flex justify-content-center pt-2 px-1 rounded">
                                <a class="btn btn-sm-square btn-primary mx-1"
                                    href="https://api.whatsapp.com/send/?phone=6282333903430&text&app_absent=0"><img
                                        src="{{ asset('assets/dist/img/waa.png') }}" alt=""
                                        style="width: 20px" /></a>
                                <a class="btn btn-sm-square btn-primary mx-1"
                                    href="https://www.instagram.com/andhito_gnc/"><img
                                        src="{{ asset('assets/dist/img/1ig.png') }}" alt=""
                                        style="width: 20px" /></a>
                                <a class="btn btn-sm-square btn-primary mx-1" href="https://github.com/Andhito"><img
                                        src="{{ asset('assets/dist/img/github.png') }}" alt=""
                                        style="width: 20px" /></a>
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0 fw-bold">Yuliyana Rahmawati</h5>
                            <small>Admin Perpustakaan</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->
@endsection

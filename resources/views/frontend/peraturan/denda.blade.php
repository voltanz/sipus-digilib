@extends('frontend.default')
@section('title', 'Login')

@section('content')
    <div class="containe-fluid py-5 d-flex flex-column align-items-center">
        <h2 class="text-center text-capitalize">Denda Pengembaian Buku</h2>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-4">
                <section class="bg-image"
    style="
        background-image: url('{{ asset('assets/cover/red.jpg') }}');
        height: 85vh">
    </section>
            </div>
            <div class="col-4">
                <section class="bg-image"
    style="
        background-image: url('{{ asset('assets/cover/red.jpg') }}');
        height: 85vh">
    </section>
            </div>
        </div>
    </div>
    
@endsection
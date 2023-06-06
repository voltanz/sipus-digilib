@extends('frontend.default')
@section('title', 'Koleksi Buku')
@section('content')
    <div class="container-fluid py-5 d-flex flex-column align-items-center">

        <h2 class="text-center text-capitalize">Koleksi buku</h2>
        <div class="row row-cols-4 justify-content-center w-75">
            @foreach ($books as $book)
                @include('frontend/templates/partials/component-card', $book)
            @endforeach()
        </div>
        {{ $books->links('vendor.pagination.materialize') }}
    </div>
@endsection
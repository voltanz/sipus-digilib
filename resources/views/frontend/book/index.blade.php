@extends('frontend.default')
@section('title', 'Homepage')
@section('content')
    <div class="containe-fluid py-5 d-flex flex-column align-items-center">
        <h2 class="text-center text-capitalize">Koleksi buku</h2>
        @php
            // var_dump($user[0]->name);
            // var_dump($coba1);
            // var_dump($role);
            var_dump($coba3);
        @endphp
        <div class="row row-cols-4 justify-content-center w-75">
            @foreach ($books as $book)
                @include('frontend/templates/partials/component-card', $book)
            @endforeach()
        </div>
        {{ $books->links('vendor.pagination.materialize') }}
    </div>
@endsection

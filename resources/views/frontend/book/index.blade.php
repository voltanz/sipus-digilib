@extends('frontend.default')
@section('title', 'Homepage')
@section('content')
    <div class="container py-5">
        <h2 class="text-center text-capitalize">Koleksi buku</h2>
        <div class="row">
            @foreach ($books as $book)
                @include('frontend/templates/partials/component-card', $book)
            @endforeach()
        </div>
        {{ $books->links('vendor.pagination.materialize') }}
    </div>
@endsection
